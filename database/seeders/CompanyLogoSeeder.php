<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CompanyLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_logos')->insert([
            'companyLogo' => 'companyLogo-1.png',
            'created_at' => now()
        ]);
        DB::table('company_logos')->insert([
            'companyLogo' => 'companyLogo-2.png',
            'created_at' => now()
        ]);
        DB::table('company_logos')->insert([
            'companyLogo' => 'companyLogo-3.png',
            'created_at' => now()
        ]);
        DB::table('company_logos')->insert([
            'companyLogo' => 'companyLogo-4.png',
            'created_at' => now()
        ]);
        DB::table('company_logos')->insert([
            'companyLogo' => 'companyLogo-5.png',
            'created_at' => now()
        ]);
    }
}
