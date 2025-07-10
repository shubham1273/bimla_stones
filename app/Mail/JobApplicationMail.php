<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $job;

    /**
     * Create a new message instance.
     */
    public function __construct(\App\Models\JobApplication $job)
    {
        $this->job = $job;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Job Application Received')
                    ->markdown('emails.job_application');
    }
}