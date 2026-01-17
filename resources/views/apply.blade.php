@extends('layouts.master')
@section('title', 'Apply - Careers')
@section('content')

    <body data-spy="scroll" data-target=".site-navbar-target1" data-offset="300">

        @include('includes.header')
        <section class="ftco-section1 img" style="background:#692c91;">
            <div class="overlay"></div>
            <div class="container">
                <div class="to-hide row d-flex align-items-center justify-content-end flex-column  pb-3">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Join Our Team</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Career Opportunities</h2>
                        <p>We're always looking for talented individuals to join our growing team at Goodlife Health and Beauty.</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-11 col-lg-10">
                        <div class="card shadow-lg border-0" style="border-radius: 15px; overflow: hidden;">
                            <div class="card-body p-4 p-md-5">
                                <div class="row align-items-center">
                                    <div class="col-md-5 text-center mb-4 mb-md-0">
                                        <div class="mb-3">
                                            <i class="icon-paper-plane" style="font-size: 70px; color: #692c91;"></i>
                                        </div>
                                        <h3 class="mb-3" style="color: #692c91; font-size: 1.5rem;">Send Us Your Resume</h3>
                                        <p style="font-size: 0.95rem; line-height: 1.6;">We'd love to hear from you! Send your resume and cover letter to our recruitment team.</p>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="bg-light p-4 p-md-5 rounded" style="border-left: 4px solid #692c91;">
                                            <h4 class="mb-3" style="color: #692c91; font-size: 1.25rem;">
                                                <i class="icon-envelope mr-2"></i>Email Your Application
                                            </h4>
                                            <div class="mb-3">
                                                <p class="mb-2 text-muted" style="font-size: 0.9rem;"><strong>Recruitment Email:</strong></p>
                                                <div class="d-flex align-items-center" style="gap: 8px; white-space: nowrap;">
                                                    <i class="icon-paper-plane" style="font-size: 20px; color: #692c91; flex-shrink: 0;"></i>
                                                    <a href="mailto:recruitment@goodlife.rw" 
                                                       id="email-link"
                                                       style="color: #692c91; font-size: 16px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"
                                                       onmouseover="this.style.color='#8b4fa8'; this.style.textDecoration='underline';"
                                                       onmouseout="this.style.color='#692c91'; this.style.textDecoration='none';">
                                                        recruitment@goodlife.rw
                                                    </a>
                                                    <button onclick="copyEmail(event)" 
                                                            id="copy-btn"
                                                            style="background: transparent; color: #692c91; border: none; padding: 4px 6px; cursor: pointer; transition: all 0.3s ease; font-size: 18px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"
                                                            onmouseover="this.style.color='#8b4fa8'; this.style.transform='scale(1.2)';"
                                                            onmouseout="this.style.color='#692c91'; this.style.transform='scale(1)';"
                                                            title="Copy to clipboard">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="text-muted mb-0" style="font-size: 0.85rem;">
                                                <i class="icon-info mr-2"></i>
                                                Please include your resume and a cover letter in your email.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="alert alert-info mt-4" style="background: #e3f2fd; border-left: 4px solid #2196F3;">
                                    <h5 class="mb-2"><i class="icon-info mr-2"></i>Application Process</h5>
                                    <ul class="mb-0 pl-4">
                                        <li>Send your resume and cover letter to <strong>recruitment@goodlife.rw</strong></li>
                                        <li>Our HR team will review your application</li>
                                        <li>Qualified candidates will be contacted for interviews</li>
                                        <li>We keep all applications on file for future opportunities</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div style="margin-bottom: 80px;"></div>

        @include('includes.footer')

    </body>

    <script>
        function copyEmail(event) {
            const email = 'recruitment@goodlife.rw';
            const button = event.target.closest('button');
            const originalHTML = button.innerHTML;
            const originalColor = button.style.color;
            
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(email).then(function() {
                    // Show success feedback
                    button.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>';
                    button.style.color = '#28a745';
                    setTimeout(function() {
                        button.innerHTML = originalHTML;
                        button.style.color = originalColor;
                    }, 2000);
                }).catch(function(err) {
                    fallbackCopy(email, button, originalHTML, originalColor);
                });
            } else {
                fallbackCopy(email, button, originalHTML, originalColor);
            }
        }
        
        function fallbackCopy(email, button, originalHTML, originalColor) {
            const textArea = document.createElement('textarea');
            textArea.value = email;
            textArea.style.position = 'fixed';
            textArea.style.opacity = '0';
            document.body.appendChild(textArea);
            textArea.select();
            try {
                document.execCommand('copy');
                button.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>';
                button.style.color = '#28a745';
                setTimeout(function() {
                    button.innerHTML = originalHTML;
                    button.style.color = originalColor;
                }, 2000);
            } catch (err) {
                alert('Failed to copy. Please copy manually: ' + email);
            }
            document.body.removeChild(textArea);
        }
    </script>

    </html>
@endsection
