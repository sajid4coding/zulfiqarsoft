<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            'name' => 'Sajal Islam Sajid',
            'name_slug' => 'sajal-islam-sajid',
            'position' => 'Founder & CEO',
            'bio' => "Sajal Islam Sajid is the visionary Founder and CEO of ZulfiqarSoft, a leading agency specializing in Frontend Development, Backend Development, SEO, and Video Editing. With a deep passion for technology and a commitment to excellence, Sajal Islam Sajid has been at the forefront of driving innovation and delivering exceptional digital solutions.",
            'member_image' => 'member_1.png',
            'facebook' => 'melon_bulgery',
            'twitter' => 'melon_bulgery',
            'linkedin' => 'melon_bulgery',
            'instagram' => 'melon_bulgery',
            'github' => 'melon_bulgery',
            'social_account_status' => 'invisible',
            'created_at' => now()
        ]);

        DB::table('teams')->insert([
            'name' => 'Anas Jubayer',
            'name_slug' => 'anas-jubayer',
            'position' => 'Web Application Developer',
            'bio' => "Anas Jubayer is a highly skilled and dedicated Frontend and Backend Developer at ZulfiqarSoft, bringing a wealth of experience and a passion for technology to the team. With a strong foundation in both frontend and backend development, Anas plays a crucial role in delivering comprehensive and high-quality digital solutions for clients.",
            'member_image' => 'member_2.png',
            'facebook' => NULL,
            'twitter' => NULL,
            'linkedin' => NULL,
            'instagram' => NULL,
            'github' => NULL,
            'social_account_status' => 'invisible',
            'created_at' => now()
        ]);

        DB::table('teams')->insert([
            'name' => 'Simon',
            'name_slug' => 'simon',
            'position' => 'Video Editor',
            'bio' => "Simon is a talented and dedicated Video Editor at ZulfiqarSoft, where he brings stories to life through his exceptional editing skills. With a keen eye for detail and a passion for visual storytelling, Simon plays a crucial role in crafting compelling video content that resonates with audiences.",
            'member_image' => 'member_3.jpeg',
            'facebook' => NULL,
            'twitter' => NULL,
            'linkedin' => NULL,
            'instagram' => NULL,
            'github' => NULL,
            'social_account_status' => 'invisible',
            'created_at' => now()
        ]);

        DB::table('teams')->insert([
            'name' => 'Muhammad Shrabon',
            'name_slug' => 'muhammad-shrabon',
            'position' => 'Web Application Developer',
            'bio' => "Muhammad Shrabon is a highly skilled Front and Back Developer at ZulfiqarSoft, where he plays a pivotal role in crafting seamless and efficient digital experiences. With a robust background in both frontend and backend technologies, Shrabon brings a wealth of knowledge and expertise to the team.",
            'member_image' => 'member_4.jpeg',
            'facebook' => NULL,
            'twitter' => NULL,
            'linkedin' => NULL,
            'instagram' => NULL,
            'github' => NULL,
            'social_account_status' => 'invisible',
            'created_at' => now()
        ]);
    }
}
