<?php

namespace App\Models;

use App\Enums\NewsStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class News extends Model
{
    use HasFactory;

    protected $table = "news";
    public function getCount() {
        return \DB::table($this->table)
            ->select(['id', 'title', 'text', 'created_at'])
            ->count();
    }

    public function getNews(bool $isAdmin = false): Collection
    {
        if (!$isAdmin) {
            return \DB::table($this->table)
                ->join('categories', 'categories.id', '=', 'news.category_id')
                ->join('sources', 'sources.id', '=', 'news.source_id')
                ->select([
                    'news.id',
                    'news.title',
                    'news.text',
                    'news.created_at',
                    'categories.title as category_title',
                    'sources.title as source_title'
                ])
                ->where('news.status', NewsStatusEnum::PUBLISHED)
                ->get();
        }
        return \DB::table($this->table)
            ->join('sources', 'sources.id', '=', 'news.source_id')
            ->select(['news.id', 'news.title', 'news.text', 'news.created_at', 'sources.title as source_title'])
            ->get();

    }

    public function getNewsById(int $id): ?object
    {
        return \DB::table($this->table)
//            ->join('sources', 'sources.id', '=', 'news.source_id')
            ->select(['news.id', 'news.title', 'news.text', 'news.created_at',])
            ->find($id);
    }
}
