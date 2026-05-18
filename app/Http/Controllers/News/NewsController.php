<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function show($slug)
    {
        $article = News::where('slug', $slug)->firstOrFail();

        return view('news.show', compact('article'));
    }
}
