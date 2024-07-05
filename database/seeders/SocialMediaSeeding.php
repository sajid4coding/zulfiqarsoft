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
            'facebook' => "zulfiqarsoft",
            'twitter' => NULL,
            'linkedin' => 'zulfiqarsoft',
            'instagram' => NULL,
            'github' => NULL,
            'created_at' => now()
        ]);
    }
}
