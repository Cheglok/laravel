<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = (new Category())->getCategories();
        return view('news.categories.index',
            ['newsCategories' => $categories
            ]);
    }

    public function show($categoryId)
    {
        $categories = (new Category())->getCategoryById($categoryId);
        $categoryTitle = (new Category())->getCategoryNameById($categoryId);
//        dd($categories, $categoryTitle);
        return view("news.categories.show",
            ['category' => $categoryTitle,
                'newsList' => $categories
            ]);
    }
}
