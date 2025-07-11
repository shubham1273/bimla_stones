<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Quote;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quote;

    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }

    public function build()
    {
        $mail = $this->subject('New Quote Request')
                    ->view('emails.quote');

        if ($this->quote->reference_image && file_exists(public_path('uploads/quotes/' . $this->quote->reference_image))) {
            $mail->attach(public_path('uploads/quotes/' . $this->quote->reference_image));
        }

        return $mail;
    }
}