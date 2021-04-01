<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(int $id)
    {
        $news = $this->newsList[$id];
        return view('news', ['news'=>$news]);
    }
}

