<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $projects = Project::active()->get();
        $totals = $projects->reduce(function ($carry, Project $item) {
            $carry['money'] += $item->collected;
            $carry['onetime_donors'] += $item->onetime_donors;
            $carry['regular_donors'] += $item->regular_donors;
            return $carry;
        }, ['money' => 0, 'onetime_donors' => 0, 'regular_donors' => 0]);
        return view('index', compact('projects', 'totals'));
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

    public function thankYou()
    {
        return view('thank-you');
    }
}
