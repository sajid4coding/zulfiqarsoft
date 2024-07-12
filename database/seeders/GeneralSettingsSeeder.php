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
            'agency_video' => 'https://www.youtube.com/watch?v=2wEnYgqM2SM',
            'website_title' => 'ZulfiqarSoft - Build Your Dream To Reality',
            'newsletter_text' => 'Join our mailing list to receive the latest news, updates, and exclusive insights from ZulfiqarSoft.',
            'companylogo_text' => 'We are working and our clients found us through this platform',
            'genaral_text' => 'At ZulfiqarSoft, agility is our strength. We swiftly adapt to change, turning challenges into opportunities to innovate and deliver top-notch solutions for our clients.',
            'under_logo_text' => 'Transforming ideas into digital excellence.',
            'copyright_text' => 'Copyright © '. $year . ', ZulfiqarSoft, All rights reserved.',
            'favicon' => 'favicon.png',
            'logo' => 'logo.png',
            'created_at' => now()
        ]);
    }
}
