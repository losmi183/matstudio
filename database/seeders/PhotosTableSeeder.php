<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=12; $i++) 
        {
            Photo::create([
                'full' => 'images/projects/' . $i . '.jpg',
                'thumb' => 'images/projects/' . $i . '-thumb.jpg',
                'project_id' => $i,
            ]);
            Photo::create([
                'full' => 'images/projects/' . ($i+1) . '.jpg',
                'thumb' => 'images/projects/' . ($i+1) . '-thumb.jpg',
                'project_id' => $i,
            ]);
            Photo::create([
                'full' => 'images/projects/' . ($i+2) . '.jpg',
                'thumb' => 'images/projects/' . ($i+2) . '-thumb.jpg',
                'project_id' => $i,
            ]);
        }
    }
}
