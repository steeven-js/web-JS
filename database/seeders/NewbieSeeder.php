<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewbieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('newbies')->insert([
            [
                'id' => 1,
                'title' => 'Results summary component',
                'slug' => 'results-summary-component',
                'is_visible' => 1,
                'view_code' => 'newbie-1',
                'position' => 1,
                'image' => 'cRPVTO9SddLN2CSFgLLC04CffgbKHi-metaZGVza3RvcC1wcmV2aWV3LmpwZw==-.jpg',
                'hosted_url' => 'http://127.0.0.1:8000/newbie/results-summary-component',
                'hosted_is_active' => 1,
                'github_url' => NULL,
                'github_is_active' => 0,
                'created_at' => '2023-07-14 05:41:27',
                'updated_at' => '2023-07-14 19:23:07'
            ],
            [
                'id' => 2,
                'title' => 'Product preview card component',
                'slug' => 'product-preview-card-component',
                'is_visible' => 1,
                'view_code' => 'newbie-2',
                'position' => 2,
                'image' => 'L3j7CqBNtkceYuCVh3qymsjDCORoPE-metaZGVza3RvcC1wcmV2aWV3LmpwZw==-.jpg',
                'hosted_url' => 'http://127.0.0.1:8000/newbie/product-preview-card-component',
                'hosted_is_active' => 1,
                'github_url' => NULL,
                'github_is_active' => 0,
                'created_at' => '2023-07-14 17:59:48',
                'updated_at' => '2023-07-14 19:23:07'
            ],
            [
                'id' => 3,
                'title' => 'Interactive rating component',
                'slug' => 'interactive-rating-component',
                'is_visible' => 1,
                'view_code' => 'newbie-3',
                'position' => 3,
                'image' => 'k2Rw9ab3wmp3DMpNvEm9OMXho56RTI-metaZGVza3RvcC1wcmV2aWV3LmpwZw==-.jpg',
                'hosted_url' => 'http://127.0.0.1:8000/newbie/interactive-rating-component',
                'hosted_is_active' => 0,
                'github_url' => NULL,
                'github_is_active' => 0,
                'created_at' => '2023-07-14 18:46:12',
                'updated_at' => '2023-07-14 19:23:07'
            ],
            [
                'id' => 4,
                'title' => 'QR code component',
                'slug' => 'qr-code-component',
                'is_visible' => 1,
                'view_code' => 'newbie-4',
                'position' => 4,
                'image' => 'ZMbnNabjjjhCMcKq0w0r0WWBfdFZn1-metaZGVza3RvcC1wcmV2aWV3LmpwZw==-.jpg',
                'hosted_url' => 'http://127.0.0.1:8000/newbie/qr-code-component',
                'hosted_is_active' => 0,
                'github_url' => NULL,
                'github_is_active' => 0,
                'created_at' => '2023-07-14 19:25:25',
                'updated_at' => '2023-07-14 19:26:17'
            ]
        ]);
    }
}
