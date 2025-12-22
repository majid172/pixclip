<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 30px;
            text-align: center;
            color: #ffffff;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .email-body {
            padding: 40px 30px;
            color: #333333;
            line-height: 1.6;
        }
        .email-body h2 {
            color: #667eea;
            font-size: 20px;
            margin-bottom: 20px;
        }
        .email-body p {
            margin: 15px 0;
            font-size: 16px;
        }
        .reset-button {
            display: inline-block;
            margin: 25px 0;
            padding: 14px 35px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 16px;
            transition: transform 0.2s;
        }
        .reset-button:hover {
            transform: translateY(-2px);
        }
        .email-footer {
            background-color: #f9f9f9;
            padding: 20px 30px;
            text-align: center;
            font-size: 14px;
            color: #666666;
            border-top: 1px solid #eeeeee;
        }
        .link-text {
            word-break: break-all;
            color: #667eea;
            font-size: 14px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>PixClipping</h1>
        </div>
        <div class="email-body">
            <h2>Reset Your Password</h2>
            <p>Hello,</p>
            <p>You are receiving this email because we received a password reset request for your account.</p>
            <p>Click the button below to reset your password:</p>
            <div style="text-align: center;">
                <a href="{{ $resetLink }}" class="reset-button">Reset Password</a>
            </div>
            <p>This password reset link will expire in 60 minutes.</p>
            <p>If you did not request a password reset, no further action is required.</p>
            <p class="link-text">If you're having trouble clicking the button, copy and paste the URL below into your web browser:<br>{{ $resetLink }}</p>
        </div>
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} PixClipping. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
