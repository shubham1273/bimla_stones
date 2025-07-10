<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Enquiry</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px;">
    <div style="background-color: #ffffff; padding: 20px; border-radius: 8px;">
        <h2>New Contact Enquiry</h2>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>
        <p><strong>Company Name:</strong> {{ $data['company'] }}</p>
        <p><strong>Location:</strong> {{ $data['location'] }}</p>
    </div>
</body>
</html>
