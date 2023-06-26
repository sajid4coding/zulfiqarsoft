<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'heading_line' => 'Your trusted partner for business',
            'about' => 'This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we’ve also learned that while each channel.',
            'heading_meta_line' => 'Your trusted partner for business',
            'about_meta_description' => 'This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we’ve also learned that while each channel.',
            'about_image_1' => 'about_img_1.jpeg',
            'about_image_2' => 'about_img_2.jpeg',
            'about_image_3' => 'about_img_3.jpeg',
            'created_at' => now()
        ]);
    }
}
