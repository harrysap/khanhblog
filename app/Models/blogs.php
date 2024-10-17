<?php

namespace App\Models;


use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Get;
use Filament\Forms\Set;
use FilamentTiptapEditor\TiptapEditor;
use App\Enums\PostStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Filament\Forms\Components\Tabs;
use Illuminate\Support\Str;
use Lang;
use App\Forms\Components\CKEditor;
class blogs extends Model
{
    use HasFactory;
    protected  $guarded = [];
    protected $casts = [
        'id' => 'integer',
        'published_at' => 'datetime',
        'scheduled_for' => 'datetime',
        'status' => PostStatus::class,
        'user_id' => 'integer',
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post', 'post_id', 'category_id');
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function seoDetail()
    {
        return $this->hasOne(SeoDetail::class,'post_id');
    }
    public function isNotPublished()
    {
        return ! $this->isStatusPublished();
    }

    public function scopePublished(Builder $query)
    {
        return $query->where('status', PostStatus::PUBLISHED)->latest('published_at');
    }

//    public function scopeScheduled(Builder $query)
//    {
//        return $query->where('status', PostStatus::SCHEDULED)->latest('scheduled_for');
//    }

    public function scopePending(Builder $query)
    {
        return $query->where('status', PostStatus::PENDING)->latest('created_at');
    }
    public function formattedPublishedDate()
    {
        return $this->published_at?->format('d M Y');
    }
//    public function isScheduled()
//    {
//        return $this->status === PostStatus::SCHEDULED;
//    }

    public function isStatusPublished()
    {
        return $this->status === PostStatus::PUBLISHED;
    }
    public function relatedPosts($take = 3)
    {
        return $this->whereHas('categories', function ($query) {
            $query->whereIn('categories.id', $this->categories->pluck('id'))
                ->whereNotIn('posts.id', [$this->id]);
        })->published()->with('user')->take($take)->get();
    }
    protected function getFeaturePhotoAttribute()
    {
        return asset('storage/'.$this->cover_photo_path);
    }
    public static function getForm()
    {
        return [
            Section::make('Chi Tiết Bài Viết')
                ->schema([
                    Fieldset::make('Trạng thái')
                        ->schema([
                            Select::make('category_id')
                                // ->multiple()
                                ->preload()
                                ->createOptionForm(Category::getForm())
                                ->searchable()
                                ->relationship('categories', 'name')
                                ->label('Thể loại')
                                ->columnSpanFull(),
                            Select::make('tag_id')
                                ->multiple()
                                ->preload()
                                ->createOptionForm(Tag::getForm())
                                ->searchable()
                                ->relationship('tags', 'name')
                                ->label('Thẻ')
                                ->columnSpanFull(),
                            ToggleButtons::make('status')
                                ->live()
                                ->inline()
                                ->options(PostStatus::class)
                                ->label('Trạng thái')
                                ->required()
                        ]),

                    Tabs::make('Tabs')
                        ->tabs([
                            Tabs\Tab::make('Tiếng Việt')
                                ->schema([
                                    TextInput::make('title')
                                        ->live(true)
                                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set(
                                            'slug',
                                            Str::slug($state)
                                        ))
                                        ->required()
                                        ->unique('posts', 'title', null, 'id')
                                        ->label('Tiêu đề')
                                        ->maxLength(255),

                                    TextInput::make('slug')
                                        ->label('Đường dẫn')
                                        ->maxLength(255),

                                    Textarea::make('sub_title')
                                        ->maxLength(255)
                                        ->label('Tóm tắt nội dung')
                                        ->columnSpanFull(),
                                    CKEditor::make('body')
                                        ->required()
                                        ->label('Nội dung chính')
                                        ->columnSpanFull(),
                                ]),
                            ]),
                    Fieldset::make('Hình Ảnh')
                        ->schema([
                            FileUpload::make('cover_photo_path')
                                ->label('Ảnh minh hoạ')
                                ->directory('/blog-feature-images')
                                ->hint('Ảnh minh hoạ dùng cho bài viết. Kích thước đề nghị là 1200 X 628')
                                ->image()
                                ->preserveFilenames()
                                ->imageEditor()
                                ->maxSize(1024 * 5)
                                ->rules('dimensions:max_width=1920,max_height=1004')
                                ->required(),
                                TextInput::make('photo_alt_text')->required()->label('Tiêu đề ảnh'),
                        ])->columns(1),

                    // Fieldset::make('Status')
                    //     ->schema([

                    //         ToggleButtons::make('status')
                    //             ->live()
                    //             ->inline()
                    //             ->options(PostStatus::class)
                    //             ->required(),

                    //        DateTimePicker::make('scheduled_for')
                    //            ->visible(function ($get) {
                    //                return $get('status') === PostStatus::SCHEDULED->value;
                    //            })
                    //            ->required(function ($get) {
                    //                return $get('status') === PostStatus::SCHEDULED->value;
                    //            })
                    //            ->minDate(now()->addMinutes(5))
                    //            ->native(false),
                    //     ]),
                    Select::make('user_id')
                     ->relationship('user', 'name')
                        ->nullable(false)
                        ->label('Người đăng')
                        ->default(auth()->id()),

                ]),
        ];
    }
    public function getTable()
    {
        return 'posts';
    }
    public function getDataArray(): array
    {
        $averageReadingSpeed = 200;
        $wordCount = str_word_count(strip_tags($this->content));
        $totalSeconds = ceil(($wordCount / $averageReadingSpeed) * 60);

        $minutes = floor($totalSeconds / 60);
        $seconds = $totalSeconds % 60;

        $readingTime = sprintf('%d phút %d giây', $minutes, $seconds);

        return [
            'id' => $this->id ,
            'title' =>(Lang::getLocale() == 'vi') ? $this->title : ($this->title_en ?? $this->title),
            'slug' => (Lang::getLocale() == 'vi') ? $this->slug : ($this->slug_en ?? $this->slug),
            'sub_title' => (Lang::getLocale() == 'vi') ? $this->sub_title : ($this->sub_title_en ?? $this->sub_title),
            'publish_date' => $this->published_at->diffForHumans(),
            'created_date' => $this->created_at->format('d/m/Y'),
            'reading_time' => $readingTime,
            'thumbnail_url' =>'storage/'. $this->cover_photo_path,
            'thumbnail_alt' => $this->photo_alt_text,
            'author' => [
                'name' => $this->user->name,
                'avatar' => null,
            ],
            'tags' => $this->tags->pluck('name'),
            'categories' => $this->categories->pluck('slug'),
            'category' => $this->categories->pluck('name'),
            'type' => $this->type,
            'versions' => $this->versions,
            'canonical_url' => $this->canonical_url,
        ];
    }
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where('slug', $value)->orWhere('slug_en', $value)->firstOrFail();
    }

}
