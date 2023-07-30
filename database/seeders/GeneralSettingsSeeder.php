<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $year = Carbon::now()->year;

        DB::table('general_settings')->insert([
            'agency_video' => 'https://youtu.be/VcaAVWtP48A',
            'website_title' => 'ZulfiqarSoft - Build Your Dream To Reality',
            'copyright_text' => 'Copyright © '. $year . ', ZulfiqarSoft, All rights reserved.',
            'favicon' => 'favicon.png',
            'logo' => 'logo.png',
            'created_at' => now()
        ]);
    }
}
