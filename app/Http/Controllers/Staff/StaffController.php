<?php

namespace App\Http\Controllers\Staff;

use App\Models\Staff;
use App\Models\Advisor;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        $staffMembers = Staff::all();
        $advisors = Advisor::all();

        return view('staff', compact('staffMembers', 'advisors'));
    }
}
