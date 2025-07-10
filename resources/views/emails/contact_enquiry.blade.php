<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Job Application</title>
    @php
        use App\Helper;
    @endphp
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px;">
        <h2 style="color: #333;">New Contact Enquiry</h2>

        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>
        <p><strong>Company Name:</strong> {{ $data['company'] }}</p>
        <p><strong>Location:</strong> {{ $data['location'] }}</p>

        <p style="margin-top: 30px;">Regards,<br>{{ Helper::getSetting('website_name' , "Bimla Stones") }}</p>
    </div>
</body>
</html>
