<?php

namespace App\Filament\Resources\BlogsResource\Pages;

use App\Filament\Resources\BlogsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Enums\PostStatus;
use App\Mail\PostPublished;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Newsletter;
use Carbon\Carbon;
use App\Jobs\PostScheduleJob;
class CreateBlogs extends CreateRecord
{
    protected static string $resource = BlogsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        unset($data['category_id']);
        if ($this->data['status'] === PostStatus::PUBLISHED->value) {
            $data['is_published']=true;
            $data['published_at'] = date('Y-m-d H:i:s');
            return $data;
        }
        return $data;

    }

    protected function afterCreate(): void
    {
        $post = $this->record;
        if ( $post->isScheduled()) {

            $now = Carbon::now();
            $scheduledFor = Carbon::parse($this->record->scheduled_for);
            PostScheduleJob::dispatch($this->record)
                ->delay($now->diffInSeconds($scheduledFor));

        }
        if ($post->is_published) {
            $newsletters = Newsletter::where('active', true)->get();

            foreach ($newsletters as $newsletter) {
                Mail::to($newsletter->email)->queue(new PostPublished($post));
            }
        }
    }
}
