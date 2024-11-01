<?php
namespace App\Listeners;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\BlogPublished;
use App\Models\Newsletter;

class SendBlogPublishedNotification
{
    public function handle($event)
    {
        Log::info('Listener is triggered');
        $subscribers = NewsLetter::where('active', 1)->get();

        foreach ($subscribers as $subscriber) {
            //logging the email
            Log::info('Sending email to ' . $subscriber->email);
            Mail::queue(new BlogPublished($event->post, $subscriber->email));
        }
    }
}
