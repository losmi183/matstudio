<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=28; $i++) 
        {
            Project::create([
                'order' => $i,
                'name' => 'Project' . $i,
                'description' => 'Hallway visualization done for a project previously shown on a courtyard image. This is our newest visualization project and is ongoing so stay tuned for more images coming soon.',
                // 'image_full' => 'images/projects/'.$i.'.jpg',
                // 'image_thumb' => 'images/projects/'.$i.'-thumb.jpg',
            ]);
        }
        
    }
}
