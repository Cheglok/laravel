<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('categories', ['newsCategories' => $this->newsCategories]);
    }

    public function showCategory($category) {
    if(!in_array($category, $this->newsCategories)) {
        return "Нет такой категории новостей";
    } else {
        return view("newsByCategory", ['category'=> $category, 'newsList' =>$this->newsList]);
    }
    }
}
