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
            'name' => 'Melon Bulgery',
            'position' => 'Product Designer',
            'bio' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium voltire doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

            Ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.',
            'member_image' => 'member_1.jpeg',
            'facebook' => 'melon_bulgery',
            'twitter' => 'melon_bulgery',
            'linkedin' => 'melon_bulgery',
            'instagram' => 'melon_bulgery',
            'github' => 'melon_bulgery',
            'created_at' => now()
        ]);

        DB::table('teams')->insert([
            'name' => 'Olinaz Fushi',
            'position' => 'Project Manager',
            'bio' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium voltire doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

            Ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.',
            'member_image' => 'member_2.jpeg',
            'facebook' => 'olinaz_Fushi',
            'twitter' => 'olinaz_Fushi',
            'linkedin' => 'olinaz_Fushi',
            'instagram' => 'olinaz_Fushi',
            'github' => 'olinaz_Fushi',
            'created_at' => now()
        ]);

        DB::table('teams')->insert([
            'name' => 'David Elone',
            'position' => 'React Developer',
            'bio' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium voltire doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

            Ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.',
            'member_image' => 'member_3.jpeg',
            'facebook' => 'david_elone',
            'twitter' => 'david_elone',
            'linkedin' => 'david_elone',
            'instagram' => 'david_elone',
            'github' => 'david_elone',
            'created_at' => now()
        ]);

        DB::table('teams')->insert([
            'name' => 'Melina Opole',
            'position' => 'React Developer',
            'bio' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium voltire doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

            Ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.',
            'member_image' => 'member_4.jpeg',
            'facebook' => 'melina_opole',
            'twitter' => 'melina_opole',
            'linkedin' => 'melina_opole',
            'instagram' => 'melina_opole',
            'github' => 'melina_opole',
            'created_at' => now()
        ]);
    }
}
