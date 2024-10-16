<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blogs;
use Illuminate\Support\Facades\App;

class SearchArticleController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $articles = blogs::query()
            ->published()
            ->where(function ($subQuery) use ($query) {
                $subQuery->where('title', 'like', '%' . $query . '%')
                    ->orWhere('title_en', 'like', '%' . $query . '%');
            })
            ->orderByDesc('published_at')
            ->with(['user'])
            ->get()
            ->map(fn (blogs $blog): array => [  
                ...$blog->getDataArray(),
                'stars_count' => 0, // $stars[$blog->getKey()] ?? 0, // Đổi từ $article sang $blog
            ]);

        seo()
            ->title((App::getLocale() === 'vi' ? 'Kết quả tìm kiếm ' : 'Search result ') . $query . ' | Khanh Nguyen')
            ->description('chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->image('https://previewlinks.io/generate/templates/1055/meta?url=' . url()->current())
            ->tag('previewlinks:overline', 'SAP B1')
            ->tag('previewlinks:title', 'Bài viết')
            ->tag('previewlinks:subtitle', 'chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->tag('previewlinks:image', 'https://filamentphp.com/images/icon.png')
            ->tag('previewlinks:repository', 'harrydev/sap');

        return view('search', compact('articles'));
    }
}


