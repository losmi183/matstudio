<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminProjectsController extends Controller
{
    /**
     * Fetching projects with photos  
     */
    public function index()
    {
        $projects = Project::with('photos')
        ->orderBy('order', 'DESC')
        ->paginate(15);
        
        $count = Project::count();

        $orders = Project::pluck('order')->sortDesc();

        return view('admin.projects.index', compact('projects', 'count', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1000'
        ]);

        // Create Porject first
        $project = Project::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Set order same as id
        $project->order = $project->id;
        $project->save();

            
        // array of temp images
        if($request->hasFile('images')) {

            $images = $request->file('images');
    
            $i = 1;
            foreach($images as $image)
            {
                // Get extension of uploading file
                $extension = $image->getClientOriginalExtension();    
                // Saving full size image and returning path / filename
                $image_full = $image->store('images/projects');  
                // Taking that full size image
                $image = Image::make($image_full);
                
    
                // Crop image and resize image
                $image->fit(600, 600);
                // Unique_name for thumbnail image
                $image_thumb = 'images/projects/' . time() . $i++ . '.' . $extension;            
                // save image in same folder with thumb name 
                $image->save($image_thumb, 70);
    
                // Create separate Image in database for each file
                Photo::create([
                    'full' => $image_full,
                    'thumb' => $image_thumb,
                    'project_id' => $project->id
                ]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::with('photos')->where('id', $id)->first();

        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();
        return back()->with('success', 'Project data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } 

    /***
     * Change project position, calling static ,ethod defined in model
     */
    public function changePosition(Request $request)
    {
        Project::changeOrder($request->current_order, $request->new_order);       

        return back();
    }

    public function changeSize(Request $request)
    {
        $project = Project::find($request->id);
        $project->size = $request->size;
        $project->save();
        return back();
    }   

    /**
     * Custom methods
     */
    // Sort blade 
    public function sort()
    {        
        $projects = Project::with('photos')
            ->orderBy('order', 'ASC')
            ->paginate(30);
        
        $count = Project::count();

        $orders = Project::pluck('order')->sortDesc();

        return view('admin.projects.sort', compact('projects', 'count', 'orders'));
    }

    // Apply sorting in database
    public function sortUpdate(Request $request)
    {        
        $order = json_decode($request->order, true);

        foreach($order as $value)
        {
            // dump($value);
            // Value 1 represent id in database
            $project = Project::find($value[0]);
            $project->order = $value[1];
            $project->save();
            // dump($project);
        }


        return back()->with(['success', 'New order in database is applied']);   
    }
}
