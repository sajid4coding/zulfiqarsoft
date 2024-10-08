<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeding::class,
            TeamSeeding::class,
            TestimonialSeeding::class,
            SocialMediaSeeding::class,
            AboutPageSeeder::class,
            WhyChooseUsSeeder::class,
            FunFactSeeder::class,
            GeneralSettingsSeeder::class,
            ServiceCategoriesSeeding::class,
            PagesSeeder::class,
            PortfolioSeeder::class,
            GlobalSettingStatusSeeder::class,
            CompanyLogoSeeder::class,
            ServiceSeeder::class,
            ServiceStepSeeder::class,
            IncludeServiceSeeder::class,
            ServiceFAQSeeder::class,
        ]);
    }
}
