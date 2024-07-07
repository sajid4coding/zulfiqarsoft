<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WhyChooseUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('whychooseuses')->insert([
            'team_heading_line' => 'Highly experienced people with us',
            'about_team' => 'This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we’ve also learned that while each channel.

            This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining.',

            'meta_team_heading_line' => 'Highly experienced people with us',
            'meta_about_team' => 'This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we’ve also learned that while each channel.

            This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining.',
            'about_main_image' => 'about_main_image.jpeg',
            'created_at' => now()
        ]);
    }
}
