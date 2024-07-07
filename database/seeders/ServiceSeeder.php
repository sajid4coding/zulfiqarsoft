<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'serviceDescription' => "<p><span style='letter-spacing: 0.4992px;'>We specialize in crafting visually appealing and highly functional frontend solutions tailored to meet your business needs. Our dedicated frontend developers are proficient in the latest technologies and frameworks, ensuring seamless user experiences across all devices.</span><br></p>",
            'serviceCategory' => 1,
            'serviceStatus' => 'on',
            'created_at' => now()
        ]);
    }
}
