<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('news.categories.index',
            ['newsCategories' => $this->newsCategories
            ]);
    }

    public function show($category)
    {
        if (!in_array($category, $this->newsCategories)) {
            return "Нет такой категории новостей";
        } else {
            return view("news.categories.show",
                ['category' => $category,
                    'newsList' => $this->newsList
                ]);
        }
    }
}
