<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alien Notification</title>
</head>
<body>
    <h1>Alien Encounter Notification</h1>
    <p>Hello {{ $alien->name }},</p>
    <p>Thank you for sharing your alien encounter with us. We have successfully received your report.</p>
    <p>Details of your encounter:</p>
    <ul>
        <li><strong>Name:</strong> {{ $alien->name }}</li>
        <li><strong>Email:</strong> {{ $alien->email }}</li>
        <li><strong>Location:</strong> {{ $alien->location }}</li>
        <li><strong>Country:</strong> {{ $alien->country->name }}</li>
        <li><strong>Date:</strong> {{ $alien->date }}</li>
        <li><strong>Time:</strong> {{ $alien->time }}</li>
        <li><strong>Scary:</strong> {{ $alien->scary ? 'Yes' : 'No' }}</li>
        <li><strong>Message:</strong> {{ $alien->message }}</li>
    </ul>
    <p>We appreciate your contribution to our understanding of the universe and our place within it. Our team of experts will review your report and may reach out to you for further information if needed.</p>
    <p>Best regards,</p>
    <p>The Alien Online Hotline Team</p>
</body>
</html>