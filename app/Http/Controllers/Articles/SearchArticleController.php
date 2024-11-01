<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\settings;
use App\Models\blogs;
use App\Models\Tag;
use Illuminate\Support\Facades\App;

class SearchArticleController extends Controller
{
    public function search(Request $request)
    {
        $setting = settings::find(1);
        $query = $request->input('query');

        $articles = blogs::query()
            ->published()
            ->select([
                'posts.id', 'posts.title', 'posts.slug', 'posts.sub_title', 'posts.cover_photo_path', 
                'posts.photo_alt_text', 'posts.published_at', 'posts.created_at', 'posts.user_id', 
                'categories.slug as category_slug'
            ])
            ->where(function ($subQuery) use ($query) {
                $subQuery->where('title', 'like', '%' . $query . '%')
                    ->orWhere('title_en', 'like', '%' . $query . '%');
            })
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->join('categories', 'category_post.category_id', '=', 'categories.id')
            ->with(['user:id,name', 'categories:id,name,slug,background'])
            ->orderByDesc('published_at')
            ->get();
    

        seo()
            ->title((App::getLocale() === 'vi' ? 'Kết quả tìm kiếm ' : 'Search result ') . $query . ' | Khanh Nguyen')
            ->description($setting->site_description ?? 'Chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->image('https://previewlinks.io/generate/templates/1055/meta?url=' . url()->current())
            ->tag('previewlinks:overline', 'SAP B1')
            ->tag('previewlinks:title', 'Bài viết')
            ->tag('previewlinks:subtitle', $setting->site_description ?? 'Chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->tag('previewlinks:image', asset($settings->image_home ?? 'assets/default_image.png'))
            ->tag('previewlinks:repository', 'harrydev/sap');

        return view('search', compact('articles'));
    }
    public function showBlogsByTag($tagName)
    {
        $setting = settings::find(1);
        $tag = Tag::where('slug', $tagName)->firstOrFail();
        
        seo()
            ->title((App::getLocale() === 'vi' ? 'Danh sách bài viết cho từ khoá ' : 'Blog list for tag ') . $tag->name . ' | Khanh Nguyen')
            ->description($setting->site_description ?? 'Chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->image('https://previewlinks.io/generate/templates/1055/meta?url=' . url()->current())
            ->tag('previewlinks:overline', 'SAP B1')
            ->tag('previewlinks:title', 'Bài viết')
            ->tag('previewlinks:subtitle', $setting->site_description ?? 'Chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->tag('previewlinks:image', asset($settings->image_home ?? 'assets/default_image.png'))
            ->tag('previewlinks:repository', 'harrydev/sap');

        $articles = blogs::whereHas('tags', function ($query) use ($tagName) {
                $query->where('slug', $tagName);
            })
            ->select([
                'posts.id', 'posts.title', 'posts.slug', 'posts.sub_title', 'posts.cover_photo_path', 
                'posts.photo_alt_text', 'posts.published_at', 'posts.created_at', 'posts.user_id', 
                'categories.slug as category_slug'
            ])
            ->published()
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->join('categories', 'category_post.category_id', '=', 'categories.id') 
            ->with(['user', 'categories'])
            ->orderBy('posts.published_at', 'desc') 
            ->get();

        return view('tag', compact('articles', 'tag'));
    }
}


