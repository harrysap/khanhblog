<?php

namespace App\Mail;

use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterThankYou extends Mailable
{
    use Queueable, SerializesModels;

    public $newsletter;

    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function build()
    {
        return $this->subject('Cảm ơn bạn đã đăng ký nhận bản tin!')
                    ->view('emails.newsletter_thankyou')
                    ->with([
                        'email' => $this->newsletter->email,
                    ]);
    }
}