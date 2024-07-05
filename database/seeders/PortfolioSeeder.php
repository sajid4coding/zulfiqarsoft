<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolios')->insert([
            'portfolio_title' => 'ASPIRE',
            'portfolio_title_slug' => 'ASPIRE',
            'portfolio_description' => 'ASPIRE is a Gaming website.',
            'portfolio_meta_title' => 'ASPIRE',
            'portfolio_meta_description' => 'ASPIRE is a Gaming website.',
            'portfolio_url' => 'https://aspire2.mdanderson.org',
            'project_start_from' => '2024-01-01 00:00:00',
            'project_end_to' => '2024-03-01 18:11:00',
            'portfolio_category_id' => '2',
            'portfolio_thumbnail' => 'portfolio_thumbnail_1.png',
            'portfolio_status' => 'on',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'Mutual Of Omaha',
            'portfolio_title_slug' => 'mutual-of-omaha',
            'portfolio_description' => 'Mutual of Omaha, then known as Mutual Benefit Health & Accident Association, files articles of incorporation with the Nebraska Insurance Department.',
            'portfolio_meta_title' => 'Mutual Of Omaha',
            'portfolio_meta_description' => 'Mutual of Omaha, then known as Mutual Benefit Health & Accident Association, files articles of incorporation with the Nebraska Insurance Department.',
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://www.mutualofomaha.com',
            'project_start_from' => '2023-05-01 00:00:00',
            'project_end_to' => '2023-07-20 14:14:00',
            'portfolio_category_id' => '2',
            'portfolio_thumbnail' => 'portfolio_thumbnail_2.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'The Morning Call',
            'portfolio_title_slug' => 'the-morning-call',
            'portfolio_description' => 'They want to be your one-stop shop for comprehensive, in-depth product reviews of the top brands and models of every product on the market while also pointing you to the best prices on the internet.',
            'portfolio_meta_title' => 'The Morning Call',
            'portfolio_meta_description' => 'They want to be your one-stop shop for comprehensive, in-depth product reviews of the top brands and models of every product on the market while also pointing you to the best prices on the internet.',
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://reviews.mcall.com',
            'project_start_from' => '2024-02-01 00:00:00',
            'project_end_to' => '2024-03-15 14:18:00',
            'portfolio_category_id' => '2',
            'portfolio_thumbnail' => 'portfolio_thumbnail_3.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'VgoTel',
            'portfolio_title_slug' => 'vgoTel',
            'portfolio_description' => 'Vgo Tel is SSH TELECOM (SMC-PRIVATE) LIMITED. It is a Mobile shop Website.',
            'portfolio_meta_title' => 'VgoTel',
            'portfolio_meta_description' => 'Vgo Tel is SSH TELECOM (SMC-PRIVATE) LIMITED. It is a Mobile shop Website.',
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://vgotel.com',
            'project_start_from' => '2021-05-05 00:00:00',
            'project_end_to' => '2021-06-01 00:00:00',
            'portfolio_category_id' => '1',
            'portfolio_thumbnail' => 'portfolio_thumbnail_4.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'Mobotel',
            'portfolio_title_slug' => 'mobotel',
            'portfolio_description' => 'Mobotel is a Multivendor Website. Creating as much comfort as possible for customers and creating an experience of satisfaction from a safe and easy purchase is one of the most important goals of Mobotel, so in order to complete a hard-working, creative, and committed team, they would like to.',
            'portfolio_meta_title' => 'Mobotel',
            'portfolio_meta_description' => 'Mobotel is a Multivendor Website. Creating as much comfort as possible for customers and creating an experience of satisfaction from a safe and easy purchase is one of the most important goals of Mobotel, so in order to complete a hard-working, creative, and committed team, they would like to.',
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://mobotel.ir',
            'project_start_from' => '2022-01-07 00:00:00',
            'project_end_to' => '2022-06-29 04:09:00',
            'portfolio_category_id' => '1',
            'portfolio_thumbnail' => 'portfolio_thumbnail_5.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'Sunshine',
            'portfolio_title_slug' => 'sunshine',
            'portfolio_description' => 'Sun-Shine Marketing (M) Sdn Bhd and they are one of the biggest window films suppliers in Malaysia! And they are unique in the fact that we supply an extensive range of window films products. Also, they provide installation services and consultations regarding any window related issues to ensure cost efficiency within the customer budget and effective solutions for all glass related issues.',
            'portfolio_meta_title' => 'Sunshine',
            'portfolio_meta_description' => 'Sun-Shine Marketing (M) Sdn Bhd and they are one of the biggest window films suppliers in Malaysia! And they are unique in the fact that we supply an extensive range of window films products. Also, they provide installation services and consultations regarding any window related issues to ensure cost efficiency within the customer budget and effective solutions for all glass related issues.',
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://tintedfilm.com.my',
            'project_start_from' => '2023-05-03 00:00:00',
            'project_end_to' => '2023-05-31 05:08:00',
            'portfolio_category_id' => '1',
            'portfolio_thumbnail' => 'portfolio_thumbnail_6.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'M&T Bank',
            'portfolio_title_slug' => 'm&t-bank',
            'portfolio_description' => 'This website was created with PHP and Laravel.',
            'portfolio_meta_title' => 'M&T Bank',
            'portfolio_meta_description' => 'This website was created with PHP and Laravel.',
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://digitalambassador.mtb.com',
            'project_start_from' => '2023-01-02 00:00:00',
            'project_end_to' => '2023-07-14 11:19:00',
            'portfolio_category_id' => '2',
            'portfolio_thumbnail' => 'portfolio_thumbnail_7.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'Marca',
            'portfolio_title_slug' => 'marca',
            'portfolio_description' => 'This website was created with PHP and Laravel.',
            'portfolio_meta_title' => 'Marca',
            'portfolio_meta_description' => 'This website was created with PHP and Laravel.',
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://elfavoritodelaaficion.marca.com',
            'project_start_from' => '2023-05-09 00:00:00',
            'project_end_to' => '2023-11-28 23:22:00',
            'portfolio_category_id' => '2',
            'portfolio_thumbnail' => 'portfolio_thumbnail_8.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'Airport Parking',
            'portfolio_title_slug' => 'airport-parking',
            'portfolio_description' => "AIRPORT PARKING RESERVATIONS.COM's goal is to be the best resource for you to search, compare, and book airport parking.",
            'portfolio_meta_title' => 'Airport Parking',
            'portfolio_meta_description' => "AIRPORT PARKING RESERVATIONS.COM's goal is to be the best resource for you to search, compare, and book airport parking.",
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://airportparkingreservations.com',
            'project_start_from' => '2024-01-27 00:00:00',
            'project_end_to' => '2024-05-17 17:00:00',
            'portfolio_category_id' => '2',
            'portfolio_thumbnail' => 'portfolio_thumbnail_9.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'Postshop',
            'portfolio_title_slug' => 'postshop',
            'portfolio_description' => "From the Postshop website vendors can sell products among the following categories: Clothing, Electronics, Home and Living, Sports, Beauty and Perfume, Toys, Food, and Grocery Personalized Gifts.",
            'portfolio_meta_title' => 'Postshop',
            'portfolio_meta_description' => "From the Postshop website vendors can sell products among the following categories: Clothing, Electronics, Home and Living, Sports, Beauty and Perfume, Toys, Food, and Grocery Personalized Gifts.",
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://postshop.com.gh',
            'project_start_from' => '2024-01-28 00:00:00',
            'project_end_to' => '2024-05-28 00:56:00',
            'portfolio_category_id' => '1',
            'portfolio_thumbnail' => 'portfolio_thumbnail_10.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'BELMONTE FABRICS LTD.',
            'portfolio_title_slug' => 'BELMONTE-FABRICS-LTD.',
            'portfolio_description' => "Belmonte Fabrics Ltd. was established in 10th, November 2007, as a Brand born in Bangladesh to cater the growing need of a brand that meets the demand for suits, Blazers, Pants & shirts and orthers. Our mission is to create best quality product. With 16 outlets at the prominent places of Dhaka, Gazipur, Narayongong. Belmonte Group has a strong setup in the fabrics & tailoring sector. The group is working aiming to expand its business around the county.",
            'portfolio_meta_title' => 'BELMONTE FABRICS LTD.',
            'portfolio_meta_description' => "Belmonte Fabrics Ltd. was established in 10th, November 2007, as a Brand born in Bangladesh to cater the growing need of a brand that meets the demand for suits, Blazers, Pants & shirts and orthers. Our mission is to create best quality product. With 16 outlets at the prominent places of Dhaka, Gazipur, Narayongong. Belmonte Group has a strong setup in the fabrics & tailoring sector. The group is working aiming to expand its business around the county.",
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://shop.belmontebd.com',
            'project_start_from' => '2024-03-28 00:00:00',
            'project_end_to' => '2024-05-28 00:55:00',
            'portfolio_category_id' => '1',
            'portfolio_thumbnail' => 'portfolio_thumbnail_11.png',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'portfolio_title' => 'Cut The Line',
            'portfolio_title_slug' => 'cut-the-line',
            'portfolio_description' => "The client said their version is that customers do not need to stand in the lines of restaurants to order food. Customers just order food from client site reference restaurants and When the ordering food is ready. After that, customers get a message or notification from this site. Related to this, this website slogan is 'CUT THE LINE'.",
            'portfolio_meta_title' => 'Cut The Line',
            'portfolio_meta_description' => "The client said their version is that customers do not need to stand in the lines of restaurants to order food. Customers just order food from client site reference restaurants and When the ordering food is ready. After that, customers get a message or notification from this site. Related to this, this website slogan is 'CUT THE LINE'.",
            'portfolio_status' => 'on',
            'portfolio_url' => 'https://cutthelinemcsllc.com',
            'project_start_from' => '2023-05-28 00:00:00',
            'project_end_to' => '2023-12-27 00:57:00',
            'portfolio_category_id' => '1',
            'portfolio_thumbnail' => 'portfolio_thumbnail_12.png',
            'created_at' => now()
        ]);
    }
}
