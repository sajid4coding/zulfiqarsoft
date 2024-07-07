<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncludeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Customized Design',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Responsive Development',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Interactive Elements',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Performance Optimization',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Cross-Browser Compatibility',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'SEO-Friendly Practices',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Accessibility Compliance',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Integration with APIs',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Content Management System (CMS)',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'eCommerce Functionality',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Analytics Integration',
            'created_at' => now()
        ]);
        DB::table('include_services')->insert([
            'serviceID' => 1,
            'includeserviceName' => 'Security Measures',
            'created_at' => now()
        ]);
    }
}
