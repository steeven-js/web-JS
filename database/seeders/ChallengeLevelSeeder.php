<?php

namespace Database\Seeders;

use App\Models\Challenge;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use App\Models\ChallengeLevel;
use Illuminate\Database\Seeder;

class ChallengeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $challengeLevels = [
            [
                'name' => 'Newbie',
                'position' => 1,
            ],
            [
                'name' => 'Junior',
                'position' => 2,
            ],
            [
                'name' => 'Intermediate',
                'position' => 3,
            ],
        ];

        $previousLevelName = null;
        $position = 1; // Variable pour suivre la position du challenge

        foreach ($challengeLevels as $challengeLevelData) {
            $challengeLevel = ChallengeLevel::create($challengeLevelData);

            // Réinitialiser la position à 1 lorsque le nom/position du niveau de challenge change
            if ($challengeLevelData['name'] !== $previousLevelName || $challengeLevelData['position'] !== ($position % 3 + 1)) {
                $position = 1;
            }

            for ($i = 0; $i < 5; $i++) {
                $title = $faker->sentence(3);
                $slug = Str::slug($title);

                Challenge::create([
                    'position' => $position, // Affecter la position au challenge
                    'title' => $title,
                    'slug' => $slug,
                    'image' => $faker->imageUrl(),
                    'hosted_url' => $faker->url(),
                    'github_url' => $faker->url(),
                    'challenge_level_id' => $challengeLevel->id,
                ]);

                $position++; // Incrémenter la position
                $previousLevelName = $challengeLevelData['name'];
            }
        }
    }
}
