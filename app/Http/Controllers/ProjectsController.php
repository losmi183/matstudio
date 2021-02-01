<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::with('photos')->orderBy('order', 'DESC')->paginate(12);

        return view('index', compact('projects'));
    }
 
    /**
     * Show single project
     */
    public function show($id)
    {
        $project = Project::with('photos')->where('id', $id)->first();

        return view('show', compact('project'));
    }
}
