<?php

namespace App\Http\Controllers\VisionMission;

use App\Models\VisionMission;
use App\Http\Controllers\Controller;

class VisionMissionController extends Controller
{
    public function index()
    {
        $visionMission = VisionMission::first();

        if ($visionMission) {
            $vision = $visionMission->vision;
            $mission = $visionMission->mission;
            $images = $visionMission->image;
        } else {
            $vision = 'Vision not set';
            $mission = 'Mission not set';
            $images = [];
        }

        return view('vision-mission', compact('vision', 'mission', 'images'));
    }
}
