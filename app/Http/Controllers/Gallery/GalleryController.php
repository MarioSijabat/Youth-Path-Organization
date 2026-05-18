<?php

namespace App\Http\Controllers\Gallery;

use App\Models\Gallery;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $galeries = Gallery::all();

        return view('gallery', compact('galeries'));
    }
}
