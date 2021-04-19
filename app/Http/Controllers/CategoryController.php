<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);
        return view('news.categories.index',
            ['newsCategories' => $categories
            ]);
    }

    public function show($categoryId)
    {
        $category = Category::with('news.source')->findOrFail($categoryId);
        return view("news.categories.show",
            ['category' => $category]);
    }
}
