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
    // Home / About Me Page
    public function home() 
    {
        $profile = Profile::first(); // Eloquent ORM
        return view('home', compact('profile'));
    }

    // Skills Page
    public function skills() 
    {
        $skills = Skill::all(); // Eloquent ORM
        return view('skills', compact('skills'));
    }

    // Projects Page
    public function projects() 
    {
        $projects = Project::all(); // Eloquent ORM
        return view('projects', compact('projects'));
    }

    // Experience & Education Page
    public function experience() 
    {
        $experiences = Experience::all(); // Eloquent ORM
        return view('experience', compact('experiences'));
    }

    // Contact Page (Display Only)
    public function contact() 
    {
        $contact = Contact::first(); // Eloquent ORM
        return view('contact', compact('contact'));
    }
}