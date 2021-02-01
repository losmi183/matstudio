<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ScrollController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(4);

        return view('scroll', compact('projects'));
    }
}
