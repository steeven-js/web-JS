<?php

namespace Database\Seeders;

use App\Models\Challenge;
use App\Models\ChallengeLevel;
use Faker\Factory as Faker;
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
            ],
            [
                'name' => 'Junior',
            ],
            [
                'name' => 'Intermediate',
            ],
        ];

        foreach ($challengeLevels as $challengeLevelData) {
            $challengeLevel = ChallengeLevel::create($challengeLevelData);
            for ($i = 0; $i < 5; $i++) {
                Challenge::create([
                    'title' => $faker->sentence(3),
                    'image' => $faker->imageUrl(),
                    'hosted_url' => $faker->url(),
                    'github_url' => $faker->url(),
                    'challenge_level_id' => $challengeLevel->id,
                ]);
            }
        }
    }
}

