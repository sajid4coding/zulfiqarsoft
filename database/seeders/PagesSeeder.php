<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            'page_title' => 'Term of Conditions',
            'page_title_slug' => 'term-of-use',
            'page_content' => "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.",
            'page_meta_title' => 'Term of Conditions',
            'page_meta_content' => "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.",
            'page_status' => 'on',
            'created_at' => now()
        ]);
        DB::table('pages')->insert([
            'page_title' => 'Privacy Policy',
            'page_title_slug' => 'privacy-policy',
            'page_content' => "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.",
            'page_meta_title' => 'Privacy Policy',
            'page_meta_content' => "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.",
            'page_status' => 'on',
            'created_at' => now()
        ]);
    }
}
