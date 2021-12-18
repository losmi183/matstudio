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
        // for($i=1; $i<=28; $i++) 
        // {
        //     Photo::create([
        //         'full' => 'images/projects/' . $i . '.jpg',
        //         'thumb' => 'images/projects/' . $i . '-thumb.jpg',
        //         'project_id' => $i,
        //     ]);
        //     Photo::create([
        //         'full' => 'images/projects/' . ($i+1) . '.jpg',
        //         'thumb' => 'images/projects/' . ($i+1) . '-thumb.jpg',
        //         'project_id' => $i,
        //     ]);
        //     Photo::create([
        //         'full' => 'images/projects/' . ($i+2) . '.jpg',
        //         'thumb' => 'images/projects/' . ($i+2) . '-thumb.jpg',
        //         'project_id' => $i,
        //     ]);
        // }

            Photo::create([
                'full' => 'images/projects/1 Project Vila on a Clif 1.jpg',
                'thumb' => 'images/projects/1 Project Vila on a Clif 1.jpg',
                'project_id' => 1,
            ]);
            Photo::create([
                'full' => 'images/projects/1 Project Vila on a Clif 2.jpg',
                'thumb' => 'images/projects/1 Project Vila on a Clif 2.jpg',
                'project_id' => 1,
            ]);
            Photo::create([
                'full' => 'images/projects/1 Project Vila on a Clif 3.jpg',
                'thumb' => 'images/projects/1 Project Vila on a Clif 3.jpg',
                'project_id' => 1,
            ]);

            Photo::create([
                'full' => '2 Competition Conference center 1.jpg',
                'thumb' => '2 Competition Conference center 1.jpg',
                'project_id' => 2,
            ]);
            Photo::create([
                'full' => '2 Competition Conference center 2.jpg',
                'thumb' => '2 Competition Conference center 2.jpg',
                'project_id' => 2,
            ]);

            Photo::create([
                'full' => '3 Project pavilion 1.jpg',
                'thumb' => '3 Project pavilion 1.jpg',
                'project_id' => 3,
            ]);
            Photo::create([
                'full' => '3 Project pavilion 2.jpg',
                'thumb' => '3 Project pavilion 2.jpg',
                'project_id' => 3,
            ]);

            Photo::create([
                'full' => '4 VILLA V 1.jpg',
                'thumb' => '4 VILLA V 1.jpg',
                'project_id' => 4,
            ]);
            Photo::create([
                'full' => '4 VILLA V 2.jpg',
                'thumb' => '4 VILLA V 2.jpg',
                'project_id' => 4,
            ]);
            Photo::create([
                'full' => '4 VILLA V 3.jpg',
                'thumb' => '4 VILLA V 3.jpg',
                'project_id' => 4,
            ]);

            Photo::create([
                'full' => '5 Apartment building 1.jpg',
                'thumb' => '5 Apartment building 1.jpg',
                'project_id' => 5,
            ]);
            Photo::create([
                'full' => '5 Apartment building 2.jpg',
                'thumb' => '5 Apartment building 2.jpg',
                'project_id' => 5,
            ]);


            
            Photo::create([
                'full' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 1.jpg',
                'thumb' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 1.jpg',
                'project_id' => 6,
            ]);
            Photo::create([
                'full' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 2.jpg',
                'thumb' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 2.jpg',
                'project_id' => 6,
            ]);
            Photo::create([
                'full' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 1.jpg',
                'thumb' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 1.jpg',
                'project_id' => 6,
            ]);
            Photo::create([
                'full' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 2.jpg',
                'thumb' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 2.jpg',
                'project_id' => 6,
            ]);
            Photo::create([
                'full' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 2.jpg',
                'thumb' => '6 CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER LOŽIONICA 2.jpg',
                'project_id' => 6,
            ]);


            Photo::create([
                'full' => '7 Competition  for the Pavilion and Depot Extension of the Museum of Contemporary Art .jpg',
                'thumb' => '7 Competition  for the Pavilion and Depot Extension of the Museum of Contemporary Art .jpg',
                'project_id' => 7,
            ]);
            Photo::create([
                'full' => '7 Competition  for the Pavilion and Depot Extension of the Museum of Contemporary Art 2.jpg',
                'thumb' => '7 Competition  for the Pavilion and Depot Extension of the Museum of Contemporary Art 2.jpg',
                'project_id' => 7,
            ]);


            Photo::create([
                'full' => '8 Interior design project.jpg',
                'thumb' => '8 Interior design project.jpg',
                'project_id' => 8,
            ]);
            Photo::create([
                'full' => '8 Interior design project 1B.jpg',
                'thumb' => '8 Interior design project 1B.jpg',
                'project_id' => 8,
            ]);
            Photo::create([
                'full' => '8 Interior design project 2.jpg',
                'thumb' => '8 Interior design project 2.jpg',
                'project_id' => 8,
            ]);


            Photo::create([
                'full' => '9 Mediterranean project located in Igalo Montenegro 01.jpg',
                'thumb' => '9 Mediterranean project located in Igalo Montenegro 01.jpg',
                'project_id' => 9,
            ]);
            Photo::create([
                'full' => '9 Mediterranean project located in Igalo Montenegro 02.jpg',
                'thumb' => '9 Mediterranean project located in Igalo Montenegro 02.jpg',
                'project_id' => 9,
            ]);
            Photo::create([
                'full' => '9 Mediterranean project located in Igalo Montenegro 03.jpg',
                'thumb' => '9 Mediterranean project located in Igalo Montenegro 03.jpg',
                'project_id' => 9,
            ]);


    }
}
