<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::with('photos')->get();

        return view('index', compact('projects'));
    }

    public function gallery()
    {
        $projects = Project::with('photos')->get();

        return view('gallery', compact('projects'));
    }

    public function masonry()
    {
        $projects = Project::with('photos')->get();

        return view('masonry', compact('projects'));
    }

    public function classic()
    {
        $projects = Project::with('photos')->get();

        return view('classic', compact('projects'));
    }

    /**
     * Show single project
     */
    public function show($id)
    {
        $project = Project::with('photos')->where('id', $id)->first();

        return view('project', compact('project'));
    }

}
