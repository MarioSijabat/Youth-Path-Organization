<?php

namespace App\Http\Controllers\Facility;

use App\Models\Facility;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();

        return view('facilities', compact('facilities'));
    }
}
