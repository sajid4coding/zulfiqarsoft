<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalSettingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('global_setting_statuses')->insert([
            'subscription_section' => NUll,
            'testimonial_section' => 'on',
            'portfolio_section' => 'on',
            'team_section' => 'on',
            'blog_section' => 'on',
            'newsletter_section' => 'on',
            'created_at' => now()
        ]);
    }
}
