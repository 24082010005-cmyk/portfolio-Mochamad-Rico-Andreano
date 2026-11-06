<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSkills = Skill::count();

        $totalProjects = Project::count();

        $totalExperiences = Experience::count();

        $totalEducations = Education::count();

        $totalMessages = Message::count();

        $unreadMessages = Message::where(
            'is_read',
            false
        )->count();

        return view('admin.dashboard', compact(
            'totalSkills',
            'totalProjects',
            'totalExperiences',
            'totalEducations',
            'totalMessages',
            'unreadMessages'
        ));
    }
}