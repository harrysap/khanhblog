<?php

namespace App\Models;

use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Filament\Forms\Components\ColorPicker;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(blogs::class,'category_post','category_id','post_id');
    }
    public static function getForm()
    {
        return [
            TextInput::make('name')
                ->live(true)
                ->afterStateUpdated(function (Get $get, Set $set, ?string $operation, ?string $old, ?string $state) {

                    $set('slug', Str::slug($state));
                })
                ->unique('categories', 'name', null, 'id')
                ->required()
                ->label('Tên thể loại')
                ->maxLength(155),
                TextInput::make('slug')
                    ->unique('categories', 'slug', null, 'id')
                    ->readOnly()
                    ->maxLength(255),
                TextArea::make('description')
                ->label('Mô tả')
                ->maxLength(255)
                ,
                ColorPicker::make('background')
                ->label('Màu chủ đề ')
                ->required(),
                FileUpload::make('svg')
                ->label('Hình ảnh')
                ->directory('/categories-images')
                ->hint('Kích thước khuyến nghị là 300x300')
                ->image()
                ->preserveFilenames()
                ->imageEditor()
                ->maxSize(1024 * 5)
                ->rules('dimensions:max_width=1920,max_height=1004')
                ->required(),
        ];
    }
}
