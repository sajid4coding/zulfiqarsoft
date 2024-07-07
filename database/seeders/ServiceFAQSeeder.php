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


        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 2,
            'faqQuestion' => "What technologies do you use for backend development?",
            'faqAnswer' => "We utilize a range of technologies including Node.js, Express, Django, Flask, Ruby on Rails, and more, depending on the project requirements.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 2,
            'faqQuestion' => "How do you ensure the security of the backend?",
            'faqAnswer' => "We implement best security practices including data encryption, secure authentication, regular security audits, and adherence to industry standards.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 2,
            'faqQuestion' => "Can you integrate the backend with existing systems?",
            'faqAnswer' => "Yes, we can integrate the backend with existing systems and third-party services to enhance functionality and streamline operations.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 2,
            'faqQuestion' => "How do you handle scalability for high-traffic applications?",
            'faqAnswer' => "We design scalable architectures, use load balancers, optimize databases, and deploy on cloud platforms to ensure the backend can handle high traffic efficiently.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 2,
            'faqQuestion' => "What kind of databases do you work with?",
            'faqAnswer' => "We work with both SQL (e.g., MySQL, PostgreSQL) and NoSQL (e.g., MongoDB, Redis) databases, choosing the best fit based on the project needs.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 2,
            'faqQuestion' => "Do you provide post-launch support?",
            'faqAnswer' => "Yes, we offer ongoing support and maintenance services to ensure the backend remains functional, secure, and up-to-date.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 2,
            'faqQuestion' => "How long does it take to develop a backend system?",
            'faqAnswer' => "The timeline varies depending on the complexity and scope of the project. We provide a detailed timeline during the initial consultation phase.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 2,
            'faqQuestion' => "Can you help with cloud deployment?",
            'faqAnswer' => "Yes, we have experience with deploying and managing backend systems on various cloud platforms such as AWS, Azure, and Google Cloud.",
            'created_at' => now()
        ]);


        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 3,
            'faqQuestion' => "How long does it take to see results from SEO?",
            'faqAnswer' => "SEO is a long-term strategy, and it typically takes 3-6 months to start seeing significant results. The timeline can vary based on competition, industry, and the current state of your website.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 3,
            'faqQuestion' => "What is included in an SEO audit?",
            'faqAnswer' => "An SEO audit includes a comprehensive analysis of your website’s technical health, on-page SEO, content quality, backlink profile, and overall performance. It identifies areas for improvement and provides actionable recommendations.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 3,
            'faqQuestion' => "How do you choose the keywords to target?",
            'faqAnswer' => "We conduct thorough keyword research using advanced tools to identify high-value keywords relevant to your business. We consider factors such as search volume, competition, and user intent.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 3,
            'faqQuestion' => "Can you help with local SEO?",
            'faqAnswer' => "Yes, we offer local SEO services to optimize your online presence for local search results, helping you attract nearby customers.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 3,
            'faqQuestion' => "Do you provide ongoing SEO support?",
            'faqAnswer' => "Yes, we offer ongoing SEO support and maintenance to ensure your website remains optimized and adapts to changes in search engine algorithms.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 3,
            'faqQuestion' => "How do you build backlinks?",
            'faqAnswer' => "We use ethical, white-hat techniques to build high-quality backlinks from reputable websites. Our strategies include guest posting, influencer outreach, and content marketing.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 3,
            'faqQuestion' => "What tools do you use for SEO?",
            'faqAnswer' => "We use a variety of industry-leading SEO tools such as Google Analytics, Google Search Console, SEMrush, Ahrefs, and Moz to analyze, monitor, and optimize your website.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 3,
            'faqQuestion' => "Can you optimize my website for mobile search?",
            'faqAnswer' => "Yes, we ensure your website is fully optimized for mobile devices, providing a seamless user experience and improving your rankings on mobile search results.",
            'created_at' => now()
        ]);


        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "What types of videos do you edit?",
            'faqAnswer' => "We edit a wide range of videos including corporate videos, promotional content, social media videos, tutorials, and more.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "What video formats do you accept?",
            'faqAnswer' => "We accept most common video formats, including MP4, MOV, AVI, and more. If you have a specific format, let us know.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "How long does the video editing process take?",
            'faqAnswer' => "The timeline varies based on the project's complexity and length. We provide an estimated timeline during the initial consultation.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "Can you add music and sound effects to my video?",
            'faqAnswer' => "Yes, we can add music, sound effects, and voiceovers to enhance your video’s audio quality.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "Do you offer revisions?",
            'faqAnswer' => "Yes, we offer a set number of revisions to ensure the final video meets your expectations. The number of revisions is agreed upon during the planning phase.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "Can you create custom animations and motion graphics?",
            'faqAnswer' => "Yes, we specialize in creating custom animations and motion graphics to make your video more engaging.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "What is color grading and why is it important?",
            'faqAnswer' => "Color grading adjusts the colors in your video to achieve a specific look or mood, enhancing the visual appeal and consistency.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "How do you handle confidentiality and security of the footage?",
            'faqAnswer' => "We take confidentiality seriously and ensure all footage is securely stored and handled. We can also sign NDAs if required.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "Do you provide subtitle and captioning services?",
            'faqAnswer' => "Yes, we can add subtitles and captions to your video to make it more accessible and engaging.",
            'created_at' => now()
        ]);
        DB::table('service_f_a_q_s')->insert([
            'serviceID' => 4,
            'faqQuestion' => "Can you optimize videos for social media platforms?",
            'faqAnswer' => "Yes, we can edit and format videos to meet the specifications and best practices of various social media platforms like YouTube, Instagram, and Facebook.",
            'created_at' => now()
        ]);
    }
}
