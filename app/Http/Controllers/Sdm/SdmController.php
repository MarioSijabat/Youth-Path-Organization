<?php

namespace App\Http\Controllers\Sdm;

use App\Models\Team;
use App\Models\Elder;
use App\Http\Controllers\Controller;

class SdmController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $elders = Elder::all();

        return view('sdm', compact('teams', 'elders'));
    }
}
