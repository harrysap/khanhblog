<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use App\Models\Category;
use Illuminate\Http\Request;
use Lang;
class ViewArticleController extends Controller
{
    public function __invoke(Category $category, blogs $blogs)
    {
        $title=(Lang::getLocale() == 'vi') ? $blogs->title : ($blogs->title_en ?? $blogs->title);
        $averageReadingSpeed = 200;
        $bodyContent = (Lang::getLocale() == 'vi') ? $blogs->body : $blogs->body_en;
        
        $wordCount = str_word_count(strip_tags($bodyContent));
        $totalSeconds = ceil(($wordCount / $averageReadingSpeed) * 60);
        
        $minutes = floor($totalSeconds / 60);
        $seconds = $totalSeconds % 60;
        
        $readingTime = sprintf('%d phút %d giây', $minutes, $seconds);
        
        $subtitle = $blogs->sub_title;
        $coverPhotoPath = asset('storage/' . $blogs->cover_photo_path);
        $siteLogo = asset('storage/assets/site_logo.png');

        seo()
            ->title($title)
            ->description($subtitle)
            ->image($coverPhotoPath)
            ->rawTag('<meta property="og:title" content="' . $title . '" />')
            ->rawTag('<meta property="og:description" content="' . $subtitle . '" />')
            ->rawTag('<meta property="og:image" content="' . $coverPhotoPath . '" />')
            ->rawTag('<meta property="og:url" content="' . ($blogs->canonical_url ?? request()->url()) . '" />')
            ->rawTag('<meta property="og:type" content="article" />')
            ->rawTag('<meta property="twitter:card" content="summary_large_image" />')
            ->rawTag('<meta property="twitter:title" content="' . $title . '" />')
            ->rawTag('<meta property="twitter:description" content="' . $subtitle . '" />')
            ->rawTag('<meta property="twitter:image" content="' . $coverPhotoPath . '" />')
            ->rawTag('<meta property="linkedin:title" content="' . $title . '" />')
            ->rawTag('<meta property="linkedin:description" content="' . $subtitle . '" />')
            ->rawTag('<meta property="linkedin:image" content="' . $coverPhotoPath . '" />')
            ->rawTag('<meta property="linkedin:url" content="' . ($blogs->canonical_url ?? request()->url()) . '" />')
            ->rawTag('<meta name="description" content="' . $subtitle . '">');
        
            $types= collect([
            'article' => [
                'slug' => 'article',
                'name' => 'Article',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28 28">
                                    <path fill="currentColor" d="M8 10.25a.75.75 0 0 1 .75-.75h10a.75.75 0 0 1 0 1.5h-10a.75.75 0 0 1-.75-.75Zm0 4.5a.75.75 0 0 1 .75-.75h10a.75.75 0 0 1 0 1.5h-10a.75.75 0 0 1-.75-.75Zm.75 3.75a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5h-4.5ZM14 2a.75.75 0 0 1 .75.75V4h3.75V2.75a.75.75 0 0 1 1.5 0V4h.75A2.25 2.25 0 0 1 23 6.25v12.996a.75.75 0 0 1-.22.53l-5.504 5.504a.75.75 0 0 1-.53.22H6.75a2.25 2.25 0 0 1-2.25-2.25v-17A2.25 2.25 0 0 1 6.75 4H8V2.75a.75.75 0 0 1 1.5 0V4h3.75V2.75A.75.75 0 0 1 14 2ZM6 6.25v17c0 .414.336.75.75.75h9.246v-3.254a2.25 2.25 0 0 1 2.25-2.25H21.5V6.25a.75.75 0 0 0-.75-.75h-14a.75.75 0 0 0-.75.75Zm12.246 13.746a.75.75 0 0 0-.75.75v2.193l2.943-2.943h-2.193Z"></path>
                                </svg>
                            ',
                'color' => 'amber',
            ],
            'news' => [
                'slug' => 'news',
                'name' => 'News',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"></path><path fill="currentColor" d="M19 4.741V8a3 3 0 1 1 0 6v3c0 1.648-1.881 2.589-3.2 1.6l-2.06-1.546A8.658 8.658 0 0 0 10 15.446v2.844a2.71 2.71 0 0 1-5.316.744l-1.57-5.496a4.7 4.7 0 0 1 3.326-7.73l3.018-.168a9.344 9.344 0 0 0 4.19-1.259l2.344-1.368C17.326 2.236 19 3.197 19 4.741ZM5.634 15.078l.973 3.407A.71.71 0 0 0 8 18.29v-3.01l-1.56-.087a4.723 4.723 0 0 1-.806-.115ZM17 4.741L14.655 6.11A11.343 11.343 0 0 1 10 7.604v5.819c1.787.246 3.488.943 4.94 2.031L17 17V4.741ZM8 7.724l-1.45.08a2.7 2.7 0 0 0-.17 5.377l.17.015l1.45.08V7.724ZM19 10v2a1 1 0 0 0 .117-1.993L19 10Z">
                                 </path></g>
                             </svg>
                            ', 
                'color' => 'blue',
            ],
            'trick' => [
                'slug' => 'trick',
                'name' => 'Trick',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m9 4l2.5 5.5L17 12l-5.5 2.5L9 20l-2.5-5.5L1 12l5.5-2.5L9 4m0 4.83L8 11l-2.17 1L8 13l1 2.17L10 13l2.17-1L10 11L9 8.83M19 9l-1.26-2.74L15 5l2.74-1.25L19 1l1.25 2.75L23 5l-2.75 1.26L19 9m0 14l-1.26-2.74L15 19l2.74-1.25L19 15l1.25 2.75L23 19l-2.75 1.26L19 23Z"></path>
                                </svg>
                            ',
                'color' => 'violet',
            ],
        ]);

        $blogs->load('categories');
        $blogs->load('tags');
        $type=showBadgeType($blogs->type);

        $categoryBlogs = collect(); 

        if ($blogs->categories->isNotEmpty()) { 
            $firstCategory = $blogs->categories->first();
            $categoryBlogs = blogs::query()
                ->select('posts.id', 'posts.title', 'posts.title_en', 'posts.slug', 'posts.slug_en', 'posts.sub_title', 'posts.sub_title_en', 'categories.slug as category_slug')
                ->whereHas('categories', function($query) use ($firstCategory) {
                    $query->where('categories.id', $firstCategory->id); 
                })
                ->where('posts.id', '!=', $blogs->id)
                ->orderBy('posts.updated_at', 'desc') 
                ->limit(3) 
                ->join('category_post', 'posts.id', '=', 'category_post.post_id') 
                ->join('categories', 'category_post.category_id', '=', 'categories.id') 
                ->get();
        }

        $previousBlog = blogs::query()
            ->select('posts.id', 'posts.title', 'posts.title_en', 'posts.slug', 'posts.slug_en', 'posts.sub_title', 'posts.sub_title_en', 'categories.slug as category_slug', 'categories.background')
            ->where('posts.id', '<', $blogs->id)
            ->where('posts.is_published', true)
            ->orderBy('posts.id', 'desc')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id') 
            ->join('categories', 'category_post.category_id', '=', 'categories.id')
            ->first();

        $nextBlog = blogs::query()
            ->select('posts.id', 'posts.title', 'posts.title_en', 'posts.slug', 'posts.slug_en', 'posts.sub_title', 'posts.sub_title_en', 'categories.slug as category_slug', 'categories.background')
            ->where('posts.id', '>', $blogs->id)
            ->where('posts.is_published', true)
            ->orderBy('posts.id', 'asc')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id') 
            ->join('categories', 'category_post.category_id', '=', 'categories.id') 
            ->first();

        $recentCategoryBlogs = blogs::query()
            ->select('posts.id', 'posts.title', 'posts.title_en', 'posts.slug', 'posts.slug_en', 'posts.created_at', 'posts.cover_photo_path', 'posts.photo_alt_text', 'categories.slug as category_slug', 'categories.background') // Change 'blogs' to 'posts'
            ->join('category_post', 'posts.id', '=', 'category_post.post_id') 
            ->join('categories', 'category_post.category_id', '=', 'categories.id')
            // ->where('categories.id', $firstCategory->id)
            ->where('posts.id', '!=', $blogs->id) 
            ->published()
            ->with('categories')
            ->orderBy('posts.published_at', 'desc')
            ->limit(3)
            ->get();
            
        return view('blog', [
            'article' => $blogs, 
            'category' => $category,
            'category_blogs' => $categoryBlogs, 
            'previous_blog' => $previousBlog, 
            'next_blog' => $nextBlog, 
            'type' => $type, 
            'reading_time' => $readingTime,
            'recent_category_blogs' => $recentCategoryBlogs
        ]);
    }
    public function show(blogs $blogs)
    {
        $title=(Lang::getLocale() == 'vi') ? $blogs->title : ($blogs->title_en ?? $blogs->title);
        $averageReadingSpeed = 200;
        $bodyContent = (Lang::getLocale() == 'vi') ? $blogs->body : $blogs->body_en;

        $wordCount = str_word_count(strip_tags($bodyContent));
        $totalSeconds = ceil(($wordCount / $averageReadingSpeed) * 60);

        $minutes = floor($totalSeconds / 60);
        $seconds = $totalSeconds % 60;

        $readingTime = sprintf('%d phút %d giây', $minutes, $seconds);
        $subtitle = $blogs->sub_title;
        $coverPhotoPath = asset('storage/' . $blogs->cover_photo_path);
        $siteLogo = asset('storage/assets/site_logo.png');

        seo()
            ->title($title)
            ->description($subtitle)
            ->image($coverPhotoPath)
            ->rawTag('<meta property="og:title" content="' . $title . '" />')
            ->rawTag('<meta property="og:description" content="' . $subtitle . '" />')
            ->rawTag('<meta property="og:image" content="' . $coverPhotoPath . '" />')
            ->rawTag('<meta property="og:url" content="' . ($blogs->canonical_url ?? request()->url()) . '" />')
            ->rawTag('<meta property="og:type" content="article" />')
            ->rawTag('<meta property="twitter:card" content="summary_large_image" />')
            ->rawTag('<meta property="twitter:title" content="' . $title . '" />')
            ->rawTag('<meta property="twitter:description" content="' . $subtitle . '" />')
            ->rawTag('<meta property="twitter:image" content="' . $coverPhotoPath . '" />')
            ->rawTag('<meta property="linkedin:title" content="' . $title . '" />')
            ->rawTag('<meta property="linkedin:description" content="' . $subtitle . '" />')
            ->rawTag('<meta property="linkedin:image" content="' . $coverPhotoPath . '" />')
            ->rawTag('<meta property="linkedin:url" content="' . ($blogs->canonical_url ?? request()->url()) . '" />')
            ->rawTag('<meta name="description" content="' . $subtitle . '">');
            
        $types= collect([
            'article' => [
                'slug' => 'article',
                'name' => 'Article',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28 28">
                                    <path fill="currentColor" d="M8 10.25a.75.75 0 0 1 .75-.75h10a.75.75 0 0 1 0 1.5h-10a.75.75 0 0 1-.75-.75Zm0 4.5a.75.75 0 0 1 .75-.75h10a.75.75 0 0 1 0 1.5h-10a.75.75 0 0 1-.75-.75Zm.75 3.75a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5h-4.5ZM14 2a.75.75 0 0 1 .75.75V4h3.75V2.75a.75.75 0 0 1 1.5 0V4h.75A2.25 2.25 0 0 1 23 6.25v12.996a.75.75 0 0 1-.22.53l-5.504 5.504a.75.75 0 0 1-.53.22H6.75a2.25 2.25 0 0 1-2.25-2.25v-17A2.25 2.25 0 0 1 6.75 4H8V2.75a.75.75 0 0 1 1.5 0V4h3.75V2.75A.75.75 0 0 1 14 2ZM6 6.25v17c0 .414.336.75.75.75h9.246v-3.254a2.25 2.25 0 0 1 2.25-2.25H21.5V6.25a.75.75 0 0 0-.75-.75h-14a.75.75 0 0 0-.75.75Zm12.246 13.746a.75.75 0 0 0-.75.75v2.193l2.943-2.943h-2.193Z"></path>
                                </svg>
                            ',
                'color' => 'amber',
            ],
            'news' => [
                'slug' => 'news',
                'name' => 'News',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"></path><path fill="currentColor" d="M19 4.741V8a3 3 0 1 1 0 6v3c0 1.648-1.881 2.589-3.2 1.6l-2.06-1.546A8.658 8.658 0 0 0 10 15.446v2.844a2.71 2.71 0 0 1-5.316.744l-1.57-5.496a4.7 4.7 0 0 1 3.326-7.73l3.018-.168a9.344 9.344 0 0 0 4.19-1.259l2.344-1.368C17.326 2.236 19 3.197 19 4.741ZM5.634 15.078l.973 3.407A.71.71 0 0 0 8 18.29v-3.01l-1.56-.087a4.723 4.723 0 0 1-.806-.115ZM17 4.741L14.655 6.11A11.343 11.343 0 0 1 10 7.604v5.819c1.787.246 3.488.943 4.94 2.031L17 17V4.741ZM8 7.724l-1.45.08a2.7 2.7 0 0 0-.17 5.377l.17.015l1.45.08V7.724ZM19 10v2a1 1 0 0 0 .117-1.993L19 10Z">
                                 </path></g>
                             </svg>
                            ', 
                'color' => 'blue',
            ],
            'trick' => [
                'slug' => 'trick',
                'name' => 'Trick',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m9 4l2.5 5.5L17 12l-5.5 2.5L9 20l-2.5-5.5L1 12l5.5-2.5L9 4m0 4.83L8 11l-2.17 1L8 13l1 2.17L10 13l2.17-1L10 11L9 8.83M19 9l-1.26-2.74L15 5l2.74-1.25L19 1l1.25 2.75L23 5l-2.75 1.26L19 9m0 14l-1.26-2.74L15 19l2.74-1.25L19 15l1.25 2.75L23 19l-2.75 1.26L19 23Z"></path>
                                </svg>
                            ',
                'color' => 'violet',
            ],
        ]);

        $blogs->load('categories');
        $blogs->load('tags');
        $type=showBadgeType($blogs->type);

        $categoryBlogs = collect(); 

        if ($blogs->categories->isNotEmpty()) { 
            $firstCategory = $blogs->categories->first();
            $categoryBlogs = blogs::query()
                ->select('posts.id', 'posts.title', 'posts.title_en', 'posts.slug', 'posts.slug_en', 'posts.sub_title', 'posts.sub_title_en', 'categories.slug as category_slug')
                ->whereHas('categories', function($query) use ($firstCategory) {
                    $query->where('categories.id', $firstCategory->id); 
                })
                ->where('posts.id', '!=', $blogs->id)
                ->orderBy('posts.updated_at', 'desc') 
                ->limit(3) 
                ->join('category_post', 'posts.id', '=', 'category_post.post_id') 
                ->join('categories', 'category_post.category_id', '=', 'categories.id') 
                ->get();
        }

        $previousBlog = blogs::query()
            ->select('posts.id', 'posts.title', 'posts.title_en', 'posts.slug', 'posts.slug_en', 'posts.sub_title', 'posts.sub_title_en', 'categories.slug as category_slug')
            ->where('posts.id', '<', $blogs->id)
            ->where('posts.is_published', true)
            ->orderBy('posts.id', 'desc')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id') 
            ->join('categories', 'category_post.category_id', '=', 'categories.id')
            ->first();

        $nextBlog = blogs::query()
            ->select('posts.id', 'posts.title', 'posts.title_en', 'posts.slug', 'posts.slug_en', 'posts.sub_title', 'posts.sub_title_en', 'categories.slug as category_slug')
            ->where('posts.id', '>', $blogs->id)
            ->where('posts.is_published', true)
            ->orderBy('posts.id', 'asc')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id') 
            ->join('categories', 'category_post.category_id', '=', 'categories.id') 
            ->first();

        $recentCategoryBlogs = blogs::query()
            ->select('posts.id', 'posts.title', 'posts.title_en', 'posts.slug', 'posts.slug_en', 'posts.created_at', 'posts.cover_photo_path', 'posts.photo_alt_text', 'categories.slug as category_slug') // Change 'blogs' to 'posts'
            ->join('category_post', 'posts.id', '=', 'category_post.post_id') 
            ->join('categories', 'category_post.category_id', '=', 'categories.id')
            ->where('categories.id', $firstCategory->id)
            ->where('posts.id', '!=', $blogs->id) 
            ->published()
            ->with('categories')
            ->orderBy('posts.updated_at', 'desc')
            ->limit(3)
            ->get();
            
        return view('blog', [
            'article' => $blogs, 
            'category_blogs' => $categoryBlogs, 
            'previous_blog' => $previousBlog, 
            'next_blog' => $nextBlog, 
            'type' => $type, 
            'reading_time' => $readingTime,
            'recent_category_blogs' => $recentCategoryBlogs
        ]);
    }
}
