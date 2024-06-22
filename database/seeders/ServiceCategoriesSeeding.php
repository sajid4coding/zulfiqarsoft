<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategoriesSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_categories')->insert([
            'service_category_title' => 'Frontend Development',
            'service_category_thumbnail' => 'service_category_thumbnail-1.png',
            'service_category_status' => 'on',
            'created_at' => now()
        ]);
        DB::table('service_categories')->insert([
            'service_category_title' => 'Backend Development',
            'service_category_thumbnail' => 'service_category_thumbnail-2.png',
            'service_category_status' => 'on',
            'created_at' => now()
        ]);
        DB::table('service_categories')->insert([
            'service_category_title' => 'SEO',
            'service_category_thumbnail' => 'service_category_thumbnail-3.png',
            'service_category_status' => 'on',
            'created_at' => now()
        ]);
        DB::table('service_categories')->insert([
            'service_category_title' => 'Video Editing',
            'service_category_thumbnail' => 'service_category_thumbnail-4.png',
            'service_category_status' => 'on',
            'created_at' => now()
        ]);
    }
}
