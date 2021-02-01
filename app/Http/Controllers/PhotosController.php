<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{

    
    public function addPhoto(Request $request, $id)
    {
        if( ! $request->hasFile('image') ) {
            return back()->with('error', 'Please select image to upload');
        }
        else {

            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2000'
            ]);
            
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
    }


    public function removePhoto($id)
    {
        $photo = Photo::find($id);

        Storage::delete([$photo->full, $photo->thumb]);

        $photo->delete();

        return back()->with('success', 'Photo deleted');
    }
}
