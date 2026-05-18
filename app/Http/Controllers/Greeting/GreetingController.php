<?php

namespace App\Http\Controllers\Greeting;

use App\Models\Greeting;
use App\Http\Controllers\Controller;

class GreetingController extends Controller
{
    public function index()
    {
        $greetings = Greeting::all();

        return view('greeting', compact('greetings'));
    }
}
