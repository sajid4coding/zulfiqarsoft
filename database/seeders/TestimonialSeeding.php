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
            'client_name' => "Jens Schleicher",
            'client_position' => 'Senior Advisor AT ABICOR BINZEL',
            'client_message' => "The SEO services provided by ZulfiqarSoft have greatly improved our online presence. Their comprehensive strategy, from keyword research to on-page optimization and link building, has driven a noticeable increase in organic traffic and search engine rankings. Their team's expertise and dedication to our success have made a huge difference for our business.",
            'client_image' => 'testimonial_image_1.jpeg',
            'testimonial_status' => 'active',
            'created_at' => now()
        ]);
        DB::table('testimonials')->insert([
            'client_name' => "Jeff Rogers",
            'client_position' => 'Chief Executive Officer AT Cambay Group',
            'client_message' => "We engaged ZulfiqarSoft for video editing services, and the results were fantastic. They took our raw footage and transformed it into a professional, engaging video that perfectly conveys our brand message. The team's creativity, attention to detail, and commitment to quality were evident in every step of the process. We look forward to working with them again!",
            'client_image' => 'testimonial_image_2.jpeg',
            'testimonial_status' => 'active',
            'created_at' => now()
        ]);
        DB::table('testimonials')->insert([
            'client_name' => "Andreas Kahn",
            'client_position' => 'Director of Business Development',
            'client_message' => "ZulfiqarSoft's backend development team is exceptional. They designed and implemented a robust and scalable backend for our e-commerce platform, ensuring seamless integration with third-party services and providing excellent support throughout the process. Our website's performance has significantly improved, and we couldn't be happier with the results.",
            'client_image' => 'testimonial_image_3.jpeg',
            'testimonial_status' => 'active',
            'created_at' => now()
        ]);
        DB::table('testimonials')->insert([
            'client_name' => "JP ODonnell",
            'client_position' => 'CEO & President AT ProActive',
            'client_message' => 'Working with ZulfiqarSoft was a game-changer for our business. Their frontend development team created a stunning and responsive website that not only looks amazing but also functions flawlessly across all devices. The level of detail and creativity they brought to the project exceeded our expectations. Highly recommend their services!',
            'client_image' => 'testimonial_image_4.jpeg',
            'testimonial_status' => 'active',
            'created_at' => now()
        ]);
    }
}
