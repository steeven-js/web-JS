<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewbieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Avec une boucle for créer 5 challenge newbie
        //Incrémenter la position
        for ($i = 1; $i <= 5; $i++) {
            $newbie = new \App\Models\Newbie();
            $newbie->title = 'Newbie ' . $i;
            $newbie->slug = 'newbie-' . $i;
            // $newbie->view_code = 'newbie-' . $i;
            $newbie->position = $i;
            $newbie->image = 'https://picsum.photos/seed/' . $i . '/200/300';
            $newbie->hosted_url = 'https://picsum.photos/seed/' . $i . '/200/300';
            $newbie->github_url = 'https://picsum.photos/seed/' . $i . '/200/300';
            $newbie->save();
        }
    }
}
