<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function view(Project $project)
    {
        return view('project', compact('project'));
    }
}
