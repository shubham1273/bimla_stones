<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\GetInTouch;

class GetInTouchMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(GetInTouch $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $mail = $this->subject('New Get In Touch Enquiry')
                    ->view('emails.get_in_touch');

        if ($this->data->reference_image && file_exists(public_path('uploads/get_in_touch/' . $this->data->reference_image))) {
            $mail->attach(public_path('uploads/get_in_touch/' . $this->data->reference_image));
        }

        return $mail;
    }
}
