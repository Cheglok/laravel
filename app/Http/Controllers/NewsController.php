<?php

namespace App\Http\Controllers;

use App\Enums\NewsStatusEnum;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::select('news.id', 'news.title', 'news.slug', 'news.text', 'news.created_at', 'news.category_id', 'news.source_id')
            ->where('status', NewsStatusEnum::PUBLISHED)
            ->with(['category', 'source'])
            ->paginate(5);

        return view('news.index', ['newsList'=>$news]);
    }
    public function show(int $id)
    {
        $news = News::with(['category', 'source'])->findOrFail($id);
        return view('news.show', ['news'=>$news]);
    }
}

