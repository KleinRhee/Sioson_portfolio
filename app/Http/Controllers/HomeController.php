<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profiless = Home::all();

        return view('pages.homes', compact("profiles"));
    }
}
