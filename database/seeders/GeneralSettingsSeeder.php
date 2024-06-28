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
            'agency_video' => 'https://youtu.be/9JMJr-ou7Og',
            'website_title' => 'ZulfiqarSoft - Build Your Dream To Reality',
            'newsletter_text' => 'At vero eos et accusamus et iusto odio as part dignissimos ducimus qui blandit.',
            'companylogo_text' => 'Our reputed world wide partners Our reputed world wide partners',
            'copyright_text' => 'Copyright © '. $year . ', ZulfiqarSoft, All rights reserved.',
            'favicon' => 'favicon.png',
            'logo' => 'logo.png',
            'created_at' => now()
        ]);
    }
}
