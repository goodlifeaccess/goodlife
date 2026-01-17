<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #007bff;
        }
        .content {
            margin: 20px 0;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Contact Form Submission</h1>
        <div class="content">
            <p><strong>Name:</strong> {{ $details['name'] }}</p>
            <p><strong>Email:</strong> {{ $details['email'] }}</p>
            <p><strong>Subject:</strong> {{ $details['subject'] }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $details['message'] }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Goodlife. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
