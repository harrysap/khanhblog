<?php

namespace App\Jobs;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use App\Models\blogs as Post;
use App\Enums\PostStatus;
use App\Events\BlogPublished;
class PostScheduleJob implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public function __construct(private Post $post)
    {
    }

    public function handle(): void
    {
        Log::info('PostScheduleJob Started');
        $this->post->update([
            'status' => PostStatus::PUBLISHED,
            'published_at' => now(),
            'scheduled_for' => null,
        ]);
        event(new BlogPublished($this->post));
        Log::info('PostScheduleJob Ended');
    }
}
