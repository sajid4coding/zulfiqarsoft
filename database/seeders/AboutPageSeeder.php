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
            'about' => "Welcome to ZulfiqarSoft, your trusted partner for business. We specialize in delivering cutting-edge solutions in Frontend Development, Backend Development, SEO, and Video Editing. With a commitment to excellence and innovation, we empower businesses to thrive in the digital landscape. Whether you're looking to enhance your online presence, optimize for search engines, or create compelling visual content, ZulfiqarSoft is here to transform your vision into reality. Partner with us and experience the difference of working with a team dedicated to your success.",
            'heading_meta_line' => 'Your trusted partner for business',
            'about_meta_description' => "Welcome to ZulfiqarSoft, your trusted partner for business. We specialize in delivering cutting-edge solutions in Frontend Development, Backend Development, SEO, and Video Editing. With a commitment to excellence and innovation, we empower businesses to thrive in the digital landscape. Whether you're looking to enhance your online presence, optimize for search engines, or create compelling visual content, ZulfiqarSoft is here to transform your vision into reality. Partner with us and experience the difference of working with a team dedicated to your success.",
            'about_image_1' => 'about_img_1.jpeg',
            'about_image_2' => 'about_img_2.jpeg',
            'about_image_3' => 'about_img_3.jpeg',
            'created_at' => now()
        ]);
    }
}
