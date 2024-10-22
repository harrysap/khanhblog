<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\blogs;

class PostPublished extends Mailable
{
    use Queueable, SerializesModels;

    public $post;
    public $groupedPosts;

    public function __construct($post)
    {
        $this->post = $post;

        $otherPosts = blogs::where('id', '!=', $post->id)
                            ->latest()
                            ->take(4)
                            ->get();

        $this->groupedPosts = $otherPosts->chunk(2);
    }

    public function build()
    {
        return $this
            ->subject('Bài viết mới vừa được xuất bản')
            ->view('emails.newsletter_new_post')
            ->with([
                'post' => $this->post,
                'groupedPosts' => $this->groupedPosts,
            ]);
    }
}
