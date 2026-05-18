<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('application');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:applications,email',
            'phone_number' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'motivation' => 'required|string',
            'source' => 'required|in:social_media,friend,website,other',
        ]);

        Application::create($request->all());

        return redirect()->route('application.index')->with('success', 'Your application has been submitted successfully!');
    }
}