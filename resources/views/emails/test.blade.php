<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Template</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .email-container {
      max-width: 600px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 0.9em;
      color: #777;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      margin-top: 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    .button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="email-container">
    <div class="header">
      <h1>Welcome to Our Service</h1>
    </div>
    <p>Dear</p>
    <p>Thank you for signing up for our service. We are excited to have you on board!</p>
    <p>If you have any questions, feel free to reach out to us at any time.</p>
    <p>Best regards,</p>
    <p>The Team</p>
    <div class="footer">
      <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
    </div>
  </div>
</body>

</html>
