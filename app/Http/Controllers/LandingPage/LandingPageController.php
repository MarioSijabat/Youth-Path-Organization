<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Rektor;
use App\Models\Cooperation;
use App\Models\Aboutme;
use App\Models\Announcement;
use App\Models\News;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        $cooperationImg = Cooperation::all();
        $rectors = Rektor::all();
        $abouts = Aboutme::first();
        
        // Use pagination for announcements
        $announcements = Announcement::paginate(3); // Get 3 announcements per page
        
        // Fetch all news articles
        $news = News::latest()->get();
        $news = News::paginate(2);

        return view('landing', compact('cooperationImg', 'abouts', 'rectors', 'announcements', 'news'));
    }

    public function showAnnouncements()
    {        
        $announcements = Announcement::paginate(3); // Get 3 announcements per page
    
        return view('landing', compact('announcements'));
    }

    public function showNews()
    {
        // Paginate news, 3 per page
        $news = News::paginate(2);

        return view('landing', compact('news'));
    }

}
