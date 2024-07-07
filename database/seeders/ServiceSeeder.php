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
            'serviceDescription' => "<p>Frontend development is the art of crafting visually appealing and user-friendly interfaces that engage and delight users. At ZulfiqarSoft, our expert frontend developers bring your ideas to life with sleek, responsive, and interactive web designs. Utilizing the latest technologies and frameworks such as HTML, CSS, JavaScript, React, Angular, and Vue.js, we ensure your website not only looks stunning but also performs flawlessly across all devices and browsers. Our services cover everything from design mockups and prototyping to full-scale frontend implementation and optimization. Whether you need a simple landing page or a complex web application, our team is dedicated to delivering high-quality frontend solutions that provide an exceptional user experience and drive your business success.<br></p>",
            'serviceCategory' => 1,
            'serviceStatus' => 'on',
            'created_at' => now()
        ]);
        DB::table('services')->insert([
            'serviceDescription' => "<p>Backend development is the backbone of any robust and scalable web application. At <b>ZulfiqarSoft</b>, we specialize in creating powerful and efficient server-side solutions that ensure your application runs smoothly, securely, and efficiently. Our backend development services encompass everything from database design and API creation to server-side logic and third-party integrations. With a focus on performance and scalability, our expert developers use the latest technologies and best practices to build backends that meet the unique needs of your business. Whether you're looking to build a new application from scratch or enhance an existing one, our team is here to deliver reliable and high-performing backend solutions.<br></p>",
            'serviceCategory' => 2,
            'serviceStatus' => 'on',
            'created_at' => now()
        ]);
        DB::table('services')->insert([
            'serviceDescription' => "<p>Search Engine Optimization (SEO) is essential for enhancing your website’s visibility and driving organic traffic. At ZulfiqarSoft, we specialize in comprehensive SEO strategies that help your business rank higher on search engines, attract more visitors, and achieve long-term growth. Our team of SEO experts utilizes the latest tools and techniques to optimize your website and ensure it meets the ever-evolving search engine algorithms.<br></p>",
            'serviceCategory' => 3,
            'serviceStatus' => 'on',
            'created_at' => now()
        ]);
        DB::table('services')->insert([
            'serviceDescription' => "<p>Our video editing services at ZulfiqarSoft bring your visual content to life, ensuring it captivates and engages your audience. Whether it’s for marketing, corporate communications, or social media, our expert editors work with you to create professional and polished videos that reflect your brand’s message and vision. We combine creativity with technical expertise to deliver high-quality video content tailored to your needs.<br></p>",
            'serviceCategory' => 4,
            'serviceStatus' => 'on',
            'created_at' => now()
        ]);
    }
}
