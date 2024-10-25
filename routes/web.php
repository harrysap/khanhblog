<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Articles\ListArticlesController;
use App\Http\Controllers\Articles\ViewArticleController;
use App\Http\Controllers\Articles\SearchArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\App;
use App\Models\Category;
use App\Models\blogs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Lang;

Route::get('/', function () {
    seo()
        ->title("Khanh Nguyen's Blog")
        ->description('chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
        ->image('https://previewlinks.io/generate/templates/1055/meta?url=' . url()->current())
        ->tag('previewlinks:overline', 'SAP B1')
        ->tag('previewlinks:title', 'Bài viết')
        ->tag('previewlinks:subtitle', 'chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
        ->tag('previewlinks:image', 'https://filamentphp.com/images/icon.png')
        ->tag('previewlinks:repository', 'harrydev/sap');

    $blogs = blogs::select([
            'posts.id', 'posts.title', 'posts.slug', 'posts.sub_title', 'posts.cover_photo_path', 
            'posts.photo_alt_text', 'posts.published_at', 'posts.created_at', 'posts.user_id', 
            'categories.slug as category_slug'
        ])
        ->published()
        ->join('category_post', 'posts.id', '=', 'category_post.post_id')
        ->join('categories', 'category_post.category_id', '=', 'categories.id') 
        ->with(['user', 'categories'])
        ->inRandomOrder()
        ->take(6)
        ->get()
        ->map(function ($blog) {
            $averageReadingSpeed = 200;
            $bodyContent = (Lang::getLocale() == 'vi') ? $blog->body : $blog->body_en;

            $wordCount = str_word_count(strip_tags($bodyContent));
            $totalSeconds = ceil(($wordCount / $averageReadingSpeed) * 60);

            $minutes = floor($totalSeconds / 60);
            $seconds = $totalSeconds % 60;

            $blog->reading_time = sprintf('%d phút %d giây', $minutes, $seconds);

            return $blog;
        });

    $categories = Category::withCount('blogs')
        ->having('blogs_count', '>', 0) 
        ->inRandomOrder()
        ->limit(4)
        ->with(['blogs' => function ($query) {
            $query->inRandomOrder()
                ->published()
                ->with(['user', 'tags'])
                ->limit(5);
        }])
        ->get()
        ->map(function ($category) {
            $averageReadingSpeed = 200;
    
            foreach ($category->blogs as $blog) {
                $bodyContent = (Lang::getLocale() == 'vi') ? $blog->body : $blog->body_en;
    
                $wordCount = str_word_count(strip_tags($bodyContent));
                $totalSeconds = ceil(($wordCount / $averageReadingSpeed) * 60);
    
                $minutes = floor($totalSeconds / 60);
                $seconds = $totalSeconds % 60;
    
                $blog->reading_time = sprintf('%d phút %d giây', $minutes, $seconds);

                $blog->category_slug = $category->slug;
            }
    
            return $category;
        });

    return view('home', [
        'categories' => $categories,
        'blogs' => $blogs
    ]);
})->name('home');
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');
Route::post('/request-contact', [ContactController::class, 'storeWithReason'])->name('contact.storeWithReason');
Route::get('/contact-reasons', [ContactController::class, 'getContactReasons'])->name('contact.reasons');
Route::get('/404', function () {
    return view('errors.notfound');
})->name('notfound');
Route::prefix('/blog')->group(function () {
    Route::get('/', ListArticlesController::class)->name('blogs');
    Route::get('/search', [SearchArticleController::class, 'search'])->name('search');
    Route::get('/category', function () {
        seo()
            ->title((App::getLocale() === 'vi' ? 'Danh mục thể loại' : 'Categories') . ' | Khanh Nguyen')
            ->description('chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->image('https://previewlinks.io/generate/templates/1055/meta?url=' . url()->current())
            ->tag('previewlinks:overline', 'SAP B1')
            ->tag('previewlinks:title', 'Bài viết')
            ->tag('previewlinks:subtitle', 'chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->tag('previewlinks:image', 'https://filamentphp.com/images/icon.png')
            ->tag('previewlinks:repository', 'harrydev/sap');

        return view('categories');
    })->name('categories');
    Route::get('/category/{categoryName}', function ($categoryName) {
        $category = Category::withCount('blogs')->where('slug', $categoryName)->firstOrFail();
        $blogs = $category->blogs()->published()->with('user')->get();

        seo()
            ->title($category['name'] . ' | Khanh Nguyen')
            ->description('chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->image('https://previewlinks.io/generate/templates/1055/meta?url=' . url()->current())
            ->tag('previewlinks:overline', 'SAP B1')
            ->tag('previewlinks:title', 'Bài viết')
            ->tag('previewlinks:subtitle', 'chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->tag('previewlinks:image', 'https://filamentphp.com/images/icon.png')
            ->tag('previewlinks:repository', 'harrydev/sap');

        $averageReadingSpeed = 200;
        foreach ($blogs as $blog) {
            $bodyContent = (App::getLocale() === 'vi') ? $blog->body : $blog->body_en;
            $wordCount = str_word_count(strip_tags($bodyContent));
            $totalSeconds = ceil(($wordCount / $averageReadingSpeed) * 60);
    
            $minutes = floor($totalSeconds / 60);
            $seconds = $totalSeconds % 60;
    
            $blog->reading_time = sprintf('%d phút %d giây', $minutes, $seconds);
            $blog->category_slug = $category->slug;
        }
    
        return view('category', [
            'categoryName' => $categoryName,
            'category' => $category,
            'blogs' => $blogs,
        ]);
    })->name('category');
    Route::get('/test/{blogName}', function ($blogName) {
        return view('blog', ['blogName' => $blogName]);
    })->name('blog');
});
Route::post('/subscribe-newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::post('/unsubscribe-newsletter/{email}', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe');
Route::fallback(function () {
    return response()->view('errors.notfound', [], 404);
});
Route::name('admin.')->group(function () {
    Route::get('blog/{category:slug}/{blogs:slug}', ViewArticleController::class)->name('post.show');
    
    Route::get('{year}/{month}/{blogs:slug}', function ($year, $month, $slug) {
        $blog = blogs::where('slug', $slug)
            ->whereYear('published_at', $year)
            ->whereMonth('published_at', $month)
            ->orderBy('published_at', 'asc')
            ->limit(20)
            ->first();

        if (!$blog) {
            abort(404);
        }

        return app(ViewArticleController::class)->show($blog);
    })->name('post.show.byDate');
});
