<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Project;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $projects = Project::active()->orderBy('priority')->get();
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

    public function thankYou()
    {
        return view('thank-you');
    }

    public function referral($ref)
    {
        $donor = Donor::where(['uuid' => $ref])->first();
        if (!$donor) {
            throw new NotFound();
        }
        return view('referral-page', compact('donor'));
    }
}
