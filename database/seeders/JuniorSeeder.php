<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuniorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $newbie = new \App\Models\Junior();
            $newbie->title = 'Junior ' . $i;
            $newbie->slug = 'junior-' . $i;
            $newbie->view_code = 'junior-' . $i;
            $newbie->position = $i;
            $newbie->image = 'https://picsum.photos/seed/' . $i . '/200/300';
            $newbie->hosted_url = 'https://picsum.photos/seed/' . $i . '/200/300';
            $newbie->github_url = 'https://picsum.photos/seed/' . $i . '/200/300';
            $newbie->save();
        }
    }
}
