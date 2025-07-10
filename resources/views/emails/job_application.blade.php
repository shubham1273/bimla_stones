@component('mail::message')
# New Job Application Received

**Name:** {{ $job->name }}  
**Email:** {{ $job->email }}  
**Phone Number:** {{ $job->phone_number }}  
**Position(s) Applied For:** {{ $job->position }}  

@if($job->cover_letter_message)
**Cover Letter / Message:**  
{{ $job->cover_letter_message }}
@endif

@component('mail::button', ['url' => asset('uploads/resumes/' . $job->resume)])
Download Resume
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
