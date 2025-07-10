<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // will be available in blade

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('shubham.feb.1995@gmail.com', 'Shubham Jaiswal')
                    ->subject('New Contact Enquiry')
                    ->view('emails.contact_enquiry');
    }

}
