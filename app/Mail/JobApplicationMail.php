<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $job;

    public function __construct(\App\Models\JobApplication $job)
    {
        $this->job = $job;
    }

    public function build()
    {
        $email = $this->subject('New Job Application Received')
                      ->view('emails.job_application')
                      ->with(['job' => $this->job]);

        // Attach the resume if exists
        if ($this->job->resume && file_exists(public_path('uploads/resumes/' . $this->job->resume))) {
            $email->attach(public_path('uploads/resumes/' . $this->job->resume), [
                'as' => 'Resume - ' . $this->job->name . '.' . pathinfo($this->job->resume, PATHINFO_EXTENSION),
                'mime' => mime_content_type(public_path('uploads/resumes/' . $this->job->resume)),
            ]);
        }

        return $email;
    }
}
