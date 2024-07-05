<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Sajid",
            'email' => 'thezulfiqarsoft@gmail.com',
            'email_status' => 'visible',
            'phone' => '+880 1605031695',
            'phone_status' => 'visible',
            'address' => 'Dhaka, Bangladesh',
            'address_status' => 'visible',
            'subcription_status' => 'invisible',
            'password' => hash::make('12345678'),
            'created_at' => now()
        ]);
    }
}
