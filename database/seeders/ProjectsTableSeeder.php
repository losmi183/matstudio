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
        // for($i=1; $i<=28; $i++) 
        // {
        //     Project::create([
        //         'order' => $i,
        //         'name' => 'Project' . $i,
        //         'description' => 'Hallway visualization done for a project previously shown on a courtyard image. This is our newest visualization project and is ongoing so stay tuned for more images coming soon.',
        //         // 'image_full' => 'images/projects/'.$i.'.jpg',
        //         // 'image_thumb' => 'images/projects/'.$i.'-thumb.jpg',
        //     ]);
        // }

        Project::create([
            'order' => 1,
            'name' => 'Villa on a cliff',
            'description' => '<p>Architecture done by<span class="text-danger">studio.paralele</span></p>
            <p>Location Montenegro</p>'
        ]);

        Project::create([
            'order' => 2,
            'name' => '2nd prize (1st prize not awarded) ',
            'description' => '<p>Educational-conference center of the Central Bank of Montenegro</p>
            <p>Architecture done by<span class="text-danger">studio.paralele</span></p>
            <p>Location Montenegro, Tivat</p>'
        ]);

        Project::create([
            'order' => 3,
            'name' => 'Unbuilt from the arhives. House in Portugal.',
            'description' => 'Day end render of a courtyard on the north side of the kitchen/dining. This is a quite courtyard with a reflecting pool.'
        ]);

        Project::create([
            'order' => 4,
            'name' => 'VILLA V',
            'description' => '<p>five bedroom luxury villa</p>
            <p>Architecture done by<span class="text-danger">studio.paralele</span></p>
            <p>Location Montenegro</p>'
        ]);

        Project::create([
            'order' => 5,
            'name' => '3x3 apartment building',
            'description' => '<p>status: under construction</p>
            <p>Architecture done by<span class="text-danger">studio.paralele</span></p>
            <p>Location Montenegro</p>'
        ]);

        Project::create([
            'order' => 6,
            'name' => 'Honorable mention at the international architectural-urban competition for conceptual design',
            'description' => '<p>CREATIVE-INNOVATIVE MULTIFUNCTIONAL CENTER "LOŽIONICA"</p>
            <p>Architecture done by<span class="text-danger">Arhinova</span></p>
            <p>Location Belgrade</p>'
        ]);

        Project::create([
            'order' => 7,
            'name' => '7 Competition  for the Pavilion and Depot Extension of the Museum of Contemporary Art',
            'description' => '<p>7 Competition  for the Pavilion and Depot Extension of the Museum of Contemporary Art</p>
            <p>Architecture done by<span class="text-danger">mat.studio</span> in cooperation with <span class="text-danger">space love studio</span></p>
            <p>Location Belgrade</p>'
        ]);

        Project::create([
            'order' => 8,
            'name' => 'New interior design project',
            'description' => '<p>Architecture done by<span class="text-danger">mat.studio</span></p>
            <p>Location Kosmaj</p>'
        ]);

        Project::create([
            'order' => 9,
            'name' => 'New interior design project',
            'description' => '<p>Architecture done by<span class="text-danger">mat.studio</span></p>
            <p>Location Belgrade</p>'
        ]);
        
    }
}
