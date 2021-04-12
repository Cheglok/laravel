<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function getCategories(): Collection
    {
        return \DB::table($this->table)
            ->select(['id', 'title', 'created_at'])
            ->where('is_visible', true)->get();
    }

    public function getCategoryById(int $id) {
        return \DB::table('news')
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->join('sources', 'sources.id', '=', 'news.source_id')
            ->select([
                'news.id',
                'news.title',
                'news.text',
                'news.created_at',
                'categories.title as category_title',
                'sources.title as source_title'
            ])
            ->where('categories.id', $id)
            ->get();
    }

    public function getCategoryNameById(int $id) {
        $data = \DB::table($this->table)
            ->select('title')
            ->where('categories.id', $id)
            ->first();
        return $data->title;
    }
}
