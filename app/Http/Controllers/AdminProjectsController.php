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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('photos')->paginate(15);

        return view('admin.projects.index', compact('projects'));
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

            
        // array of temp images
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
    public function update(Request $request, $id)
    {
        //
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

    /**
     * 
     * Custom Methods
     * 
     */
    public function addPhoto(Request $request, $id)
    {
        if( ! $request->hasFile('image') ) {
            return back()->with('error', 'Please select image to upload');
        }

        $image = $request->file('image');

        // Get extension of uploading file
        $extension = $image->getClientOriginalExtension();    
        // Saving full size image and returning path / filename
        $image_full = $image->store('images/projects');  
        // Taking that full size image
        $image = Image::make($image_full);
        

        // Crop image and resize image
        $image->fit(600, 600);
        // Unique_name for thumbnail image
        $image_thumb = 'images/projects/' . time() . '.' . $extension;            
        // save image in same folder with thumb name 
        $image->save($image_thumb, 70);

        // Create separate Image in database for each file
        Photo::create([
            'full' => $image_full,
            'thumb' => $image_thumb,
            'project_id' => $id
        ]);
    

        return back()->with('success', 'Photo added');
    }


    public function removePhoto($id)
    {
        $photo = Photo::find($id);

        Storage::delete([$photo->full, $photo->thumb]);

        $photo->delete();

        return back()->with('success', 'Photo deleted');
    }
}
