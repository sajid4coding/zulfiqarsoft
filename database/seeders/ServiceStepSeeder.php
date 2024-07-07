<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_steps')->insert([
            'serviceID' => 1,
            'stepTitle' => 'Consultation and Planning',
            'stepDescription' => 'Initial discussion to understand your project goals and requirements. Planning phase to outline the scope, timeline, and deliverables.',
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 1,
            'stepTitle' => 'Design Mockups and Prototyping',
            'stepDescription' => 'Creation of wireframes and design mockups for visual representation. Iterative prototyping to refine the user interface and experience.',
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 1,
            'stepTitle' => 'Frontend Implementation',
            'stepDescription' => 'Rigorous testing phase to identify and fix any bugs or issues. Compatibility testing across browsers and devices to ensure seamless performance.',
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 1,
            'stepTitle' => 'Testing and Quality Assurance',
            'stepDescription' => 'Rigorous testing phase to identify and fix any bugs or issues. Compatibility testing across browsers and devices to ensure seamless performance.',
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 1,
            'stepTitle' => 'Deployment and Launch',
            'stepDescription' => 'Final deployment of the frontend code to production servers. Post-launch monitoring and support to address any immediate issues.',
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 1,
            'stepTitle' => 'Maintenance and Updates',
            'stepDescription' => 'Ongoing maintenance and updates to keep the frontend secure and optimized. Implementation of new features or enhancements based on client feedback.',
            'created_at' => now()
        ]);
    }
}
