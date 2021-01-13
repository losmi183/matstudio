<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 12; $i++) 
        {
            Image::create([
                'project_id' => $i,
                'full' => $i . '.jpg',
                'thumb' => $i . '-thumb.jpg',
            ]);
        }
    }
}
