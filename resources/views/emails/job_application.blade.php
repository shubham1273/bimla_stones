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
        <h2 style="color: #333;">New Job Application Received</h2>

        <p><strong>Name:</strong> {{ $job->name }}</p>
        <p><strong>Email:</strong> {{ $job->email }}</p>
        <p><strong>Phone Number:</strong> {{ $job->phone_number }}</p>

        @if($job->position)
            <p><strong>Position(s) Applied:</strong> {{ $job->position }}</p>
        @endif

        @if($job->cover_letter_message)
            <p><strong>Cover Letter:</strong></p>
            <p style="white-space: pre-wrap;">{{ $job->cover_letter_message }}</p>
        @endif

        <p style="margin-top: 30px;">Regards,<br>{{ Helper::getSetting('website_name' , "Bimla Stones") }}</p>
    </div>
</body>
</html>
