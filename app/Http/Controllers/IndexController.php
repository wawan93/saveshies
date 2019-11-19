<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $projects = Project::active()->get();
        return view('index', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function volunteers()
    {
        return view('volunteers');
    }

    public function support()
    {
        return view('support');
    }
}
