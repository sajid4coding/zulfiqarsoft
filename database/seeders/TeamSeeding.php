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
            'name' => 'David Elone',
            'name_slug' => 'david-elone',
            'position' => 'React Developer',
            'bio' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium voltire doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

            Ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.',
            'member_image' => 'member_3.jpeg',
            'facebook' => 'david_elone',
            'twitter' => 'david_elone',
            'linkedin' => 'david_elone',
            'instagram' => 'david_elone',
            'github' => 'david_elone',
            'social_account_status' => 'invisible',
            'created_at' => now()
        ]);

        DB::table('teams')->insert([
            'name' => 'Melina Opole',
            'name_slug' => 'melina-opole',
            'position' => 'React Developer',
            'bio' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium voltire doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

            Ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.',
            'member_image' => 'member_4.jpeg',
            'facebook' => 'melina_opole',
            'twitter' => 'melina_opole',
            'linkedin' => 'melina_opole',
            'instagram' => 'melina_opole',
            'github' => 'melina_opole',
            'social_account_status' => 'invisible',
            'created_at' => now()
        ]);
    }
}
