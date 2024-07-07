<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceFAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 1,
            'faqQuestion' => 'What technologies do you use for frontend development?',
            'faqAnswer' => 'We specialize in HTML, CSS, JavaScript, and popular frontend frameworks such as React, Angular, and Vue.js.',
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 1,
            'faqQuestion' => 'How long does it take to develop a frontend for a typical website?',
            'faqAnswer' => 'The timeline varies based on project complexity and requirements. We provide detailed timelines during the consultation phase.',
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 1,
            'faqQuestion' => 'Can you update an existing frontend or only create new ones?',
            'faqAnswer' => 'Yes, we offer frontend redesign and updates to improve user experience and modernize existing websites.',
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 1,
            'faqQuestion' => 'How do you ensure the frontend is responsive?',
            'faqAnswer' => 'We employ responsive design principles and conduct thorough testing across various devices to ensure compatibility.',
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 1,
            'faqQuestion' => 'Do you provide ongoing maintenance after the frontend is launched?',
            'faqAnswer' => 'Yes, we offer maintenance packages to keep your frontend secure, updated, and performing optimally.',
            'created_at' => now()
        ]);
    }
}
