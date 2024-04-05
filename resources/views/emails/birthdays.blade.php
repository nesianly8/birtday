<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Birthday Greetings</title>
<style>
    /* CSS Reset */
    body, html {
        margin: 0;
        padding: 0;
    }
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f8f8f8;
        color: #333;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #ff4500;
    }
    p {
        margin-bottom: 20px;
    }
    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff4500;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }
    .button:hover {
        background-color: #ff6347;
    }
    .footer {
        margin-top: 20px;
        text-align: center;
        color: #888;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Happy Birthday!</h1>
    <p>Dear [Name],</p>
    <p>Wishing you a day filled with joy, laughter, and all the things you love. May this year bring you endless happiness and success.</p>
    <p>Celebrate your special day with us!</p>
    <p><a href="#" class="button">Join the Celebration</a></p>
    <p>Best wishes,<br>{{ config('app.name') }}</p>
</div>
<div class="footer">
    &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
</div>
</body>
</html>
