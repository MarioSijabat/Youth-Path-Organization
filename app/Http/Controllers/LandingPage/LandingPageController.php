<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Director;
use App\Models\Partnership;
use App\Models\Profile;
use App\Models\Announcement;
use App\Models\News;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        $partnerships = Partnership::all();
        $directors = Director::all();
        $profile = Profile::first();
        
        $announcements = Announcement::paginate(3);
        $news = News::latest()->paginate(2);

        return view('landing', compact('partnerships', 'profile', 'directors', 'announcements', 'news'));
    }

    public function showAnnouncements()
    {        
        $announcements = Announcement::paginate(3);
        return view('landing', compact('announcements'));
    }

    public function showNews()
    {
        $news = News::paginate(2);
        return view('landing', compact('news'));
    }
}
