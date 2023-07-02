<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FunFactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fun_facts')->insert([
            'heading_title' => 'Our fun fact',
            'heading_description' => 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.',
            'happy_client' => 40,
            'completed_project' => 102,
            'team_member' => 5,
            'our_services' => 5,
            'created_at' => now()
        ]);
    }
}
