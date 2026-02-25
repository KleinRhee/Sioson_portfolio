<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function home() 
    {
        $profile = Profile::first(); 
        return view('home', compact('profile'));
    }

    public function skills() 
    {
        $profile = Profile::first();
        $skills = Skill::all(); 
        return view('skills', compact('profile', 'skills'));
    }

    public function projects() 
    {
        $profile = Profile::first();
        $projects = Project::all(); 
        return view('projects', compact('profile', 'projects'));
    }

    public function experience() 
    {
        $profile = Profile::first();
        $experiences = Experience::all(); 
        return view('experience', compact('profile', 'experiences'));
    }

    public function contact() 
    {
        $profile = Profile::first();
        $contact = Contact::first(); 
        return view('contact', compact('profile', 'contact'));
    }
}