<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostPublished extends Mailable
{
    use Queueable, SerializesModels;

    public $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    public function build()
    {
        return $this
            ->subject('Bài viết mới vừa được xuất bản')
            ->view('emails.newsletter_new_post'); 
    }
}
