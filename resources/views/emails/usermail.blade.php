<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: auto;
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
        }
        .content {
            font-size: 16px;
            color: #333;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Company Logo">
        </div>
        <div class="content">
            <p>Dear {{ $contactdata['name'] }},</p>
            <p>Thank you for reaching out to us. We have received your message and will get back to you shortly.</p>
            <p>Here are the details of your submission:</p>
            <ul>
                <li><strong>Name:</strong> {{ $contactdata['name'] }}</li>
                <li><strong>Email:</strong> {{ $contactdata['email'] }}</li>
                <li><strong>Subject:</strong> {{ $contactdata['subject'] }}</li>
                <li><strong>Message:</strong> {{ $contactdata['message'] }}</li>
            </ul>
            <p>Thank you for contacting us!</p>
            <p>Best regards,</p>
            <p>ContactApp</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} ContactApp. All rights reserved.
        </div>
    </div>
</body>
</html>
