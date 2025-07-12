<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetInTouchMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $attachmentPath;
    public $attachmentName;
    public $attachmentMime;

    public function __construct($data, $attachmentPath = null, $attachmentName = null, $attachmentMime = null)
    {
        $this->data = $data;
        $this->attachmentPath = $attachmentPath;
        $this->attachmentName = $attachmentName;
        $this->attachmentMime = $attachmentMime;
    }

    public function build()
    {
        $email = $this->view('emails.get_in_touch')->with('data', $this->data);

        if ($this->attachmentPath) {
            $email->attach($this->attachmentPath, [
                'as' => $this->attachmentName,
                'mime' => $this->attachmentMime,
            ]);
        }

        return $email->subject('New Get In Touch Submission');
    }
}
