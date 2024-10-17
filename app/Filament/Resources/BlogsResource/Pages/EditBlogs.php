<?php

namespace App\Filament\Resources\BlogsResource\Pages;

use App\Filament\Resources\BlogsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Enums\PostStatus;
class EditBlogs extends EditRecord
{
    protected static string $resource = BlogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeSave(array $data): array
    {
        unset($data['category_id']);

        if ($this->data['status'] === PostStatus::PUBLISHED->value) {
            $data['is_published']=true;
            $data['published_at'] = date('Y-m-d H:i:s');
            return $data;
        }
        return $data;
    }
}
