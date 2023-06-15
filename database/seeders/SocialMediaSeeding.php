<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social_media')->insert([
            'facebook' => "sajid4coding",
            'twitter' => 'sajid4coding',
            'linkedin' => 'sajid4coding',
            'instagram' => 'sajid4coding',
            'github' => 'sajid4coding',
            'created_at' => now()
        ]);
    }
}
