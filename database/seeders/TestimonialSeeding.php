<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            'client_name' => "Ahon Monsery",
            'client_position' => 'CEO AT TECH',
            'client_message' => 'I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo.',
            'client_image' => 'testimonial_image_1.jpeg',
            'testimonial_status' => 'active',
            'created_at' => now()
        ]);
        DB::table('testimonials')->insert([
            'client_name' => "Ahon Monsery",
            'client_position' => 'CEO AT TECH',
            'client_message' => 'I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo.',
            'client_image' => 'testimonial_image_2.jpeg',
            'testimonial_status' => 'active',
            'created_at' => now()
        ]);
        DB::table('testimonials')->insert([
            'client_name' => "Ahon Monsery",
            'client_position' => 'CEO AT TECH',
            'client_message' => 'I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo.',
            'client_image' => 'testimonial_image_3.jpeg',
            'testimonial_status' => 'active',
            'created_at' => now()
        ]);
    }
}
