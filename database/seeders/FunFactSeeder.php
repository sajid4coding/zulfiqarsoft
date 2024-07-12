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
            'heading_description' => 'At ZulfiqarSoft, we take pride in our achievements and the impact we’ve made in the digital landscape.',
            'happy_client' => 40,
            'completed_project' => 105,
            'team_member' => 5,
            'our_services' => 5,
            'created_at' => now()
        ]);
    }
}
