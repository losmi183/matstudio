<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * Model methods
     */
    public static function changeOrder($currentOrder, $newOrder)
    {
        // return $request->all();
        // 1 Case, $currentId == new id , nothing heppend
        if( $currentOrder == $newOrder ) {
            return back();
        }

        // First taking current project in memory
       $currentProject = self::where('order', $currentOrder)->first();

        if($currentOrder > $newOrder) {
            $projects = self::whereBetween('order', [$newOrder, $currentOrder - 1])->orderBy('order', 'DESC')->get();

            foreach($projects as $project)
            {
                $project->order++;
                $project->save();       
            }  
            $currentProject->order = $newOrder;
            $currentProject->save();
        } 

        if($currentOrder < $newOrder) {
            $projects = self::whereBetween('order', [$currentOrder + 1, $newOrder])->orderBy('order', 'DESC')->get();

            foreach($projects as $project)
            {
                $project->order--;
                $project->save();       
            }  
            $currentProject->order = $newOrder;
            $currentProject->save();
        } 

        return back();
    }


    
}
