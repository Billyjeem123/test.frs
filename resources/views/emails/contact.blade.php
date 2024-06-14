<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333333;
            text-align: center;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #666666;
            line-height: 1.5;
        }
        .strong {
            font-weight: bold;
            color: #333333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #aaaaaa;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>FRS Contact Form Notification</h1>
    <p><span class="strong">Name:</span> {{ $details['name'] }}</p>
    <p><span class="strong">Email:</span> {{ $details['email'] }}</p>
    <p><span class="strong">Subject:</span> {{ $details['subject'] }}</p>
    <p><span class="strong">Message:</span> {{ $details['message'] }}</p>
</div>
<div class="footer">
    <p>This email was sent from the FRS Contact Form.</p>
</div>
</body>
</html>
