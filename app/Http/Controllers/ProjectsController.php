<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::with('images')->get();

        return view('index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::with('images')->where('id', $id)->first();

        return view('project', compact('project'));
    }

}
