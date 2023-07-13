<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IntermediateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $newbie = new \App\Models\Intermediate();
            $newbie->title = 'Intermediate ' . $i;
            $newbie->slug = 'intermediate-' . $i;
            $newbie->view_code = 'newbie-' . $i;
            $newbie->position = $i;
            $newbie->image = 'https://picsum.photos/seed/' . $i . '/200/300';
            $newbie->hosted_url = 'https://picsum.photos/seed/' . $i . '/200/300';
            $newbie->github_url = 'https://picsum.photos/seed/' . $i . '/200/300';
            $newbie->save();
        }
    }
}
