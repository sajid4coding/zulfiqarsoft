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
            'stepDescription' => "",
            'created_at' => now()
        ]);


        DB::table('service_steps')->insert([
            'serviceID' => 2,
            'stepTitle' => 'Initial Consultation and Requirements Gathering',
            'stepDescription' => "Understanding the client’s needs, objectives, and technical requirements. Defining the project scope, timeline, and deliverables.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 2,
            'stepTitle' => 'Database Design and Implementation',
            'stepDescription' => "Setting up and configuring databases (SQL or NoSQL) to store and manage data efficiently. Designing database schemas and establishing relationships.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 2,
            'stepTitle' => 'API Development',
            'stepDescription' => "Developing RESTful or GraphQL APIs to facilitate communication between the frontend and the backend. Ensuring secure and efficient data exchange.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 2,
            'stepTitle' => 'Backend Logic Implementation',
            'stepDescription' => "Writing server-side code to handle business logic, authentication, and authorization. Implementing server-side rendering if required.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 2,
            'stepTitle' => 'Integration with Third-Party Services',
            'stepDescription' => "Integrating third-party services and APIs to enhance functionality. Setting up payment gateways, email services, and other external systems.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 2,
            'stepTitle' => 'Testing and Quality Assurance',
            'stepDescription' => "Conducting unit tests, integration tests, and end-to-end tests to ensure reliability and performance. Performing security audits and vulnerability assessments.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 2,
            'stepTitle' => 'Deployment and Launch',
            'stepDescription' => "Deploying the backend to production servers or cloud environments. Configuring server environments and load balancers.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 2,
            'stepTitle' => 'Monitoring and Maintenance',
            'stepDescription' => "Setting up monitoring tools to track performance and detect issues. Providing ongoing maintenance and updates to ensure stability and security.",
            'created_at' => now()
        ]);


        DB::table('service_steps')->insert([
            'serviceID' => 3,
            'stepTitle' => 'Initial Consultation and Website Audit',
            'stepDescription' => "Understanding your business goals and target audience. Conducting a thorough audit of your website to identify strengths and areas for improvement.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 3,
            'stepTitle' => 'Keyword Research and Strategy Development',
            'stepDescription' => "Performing detailed keyword research to identify high-value search terms. Developing a tailored SEO strategy that aligns with your business objectives.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 3,
            'stepTitle' => 'On-Page Optimization',
            'stepDescription' => "Optimizing website content, meta tags, headers, and images for target keywords. Improving website structure, internal linking, and user experience.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 3,
            'stepTitle' => 'Technical SEO',
            'stepDescription' => "Ensuring website health by fixing technical issues such as broken links, duplicate content, and slow page speed. Implementing structured data, XML sitemaps, and robots.txt.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 3,
            'stepTitle' => 'Content Creation and Optimization',
            'stepDescription' => "Creating high-quality, engaging content that resonates with your audience and aligns with SEO best practices. Regularly updating and optimizing existing content to maintain relevance and improve rankings.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 3,
            'stepTitle' => 'Off-Page SEO and Link Building',
            'stepDescription' => "Building high-quality backlinks from reputable websites to enhance domain authority. Leveraging social media, influencer outreach, and guest posting to boost your online presence.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 3,
            'stepTitle' => 'Monitoring and Reporting',
            'stepDescription' => "Continuously monitoring SEO performance using analytics tools. Providing regular reports with insights and recommendations for ongoing optimization.",
            'created_at' => now()
        ]);


        DB::table('service_steps')->insert([
            'serviceID' => 4,
            'stepTitle' => 'Initial Consultation and Planning',
            'stepDescription' => "Understanding your vision, goals, and specific requirements for the video. Planning the project timeline, deliverables, and workflow.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 4,
            'stepTitle' => 'Footage Review and Organization',
            'stepDescription' => "Reviewing and organizing raw footage provided by the client. Selecting the best clips to tell a compelling story.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 4,
            'stepTitle' => 'Editing and Assembly',
            'stepDescription' => "Assembling the selected clips into a coherent sequence. Editing for flow, pacing, and narrative structure.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 4,
            'stepTitle' => 'Audio Enhancement',
            'stepDescription' => "Enhancing audio quality, including noise reduction and sound leveling. Adding music, sound effects, and voiceovers as needed.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 4,
            'stepTitle' => 'Visual Effects and Graphics',
            'stepDescription' => "Incorporating visual effects, transitions, and motion graphics. Adding text overlays, titles, and animations.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 4,
            'stepTitle' => 'Color Correction and Grading',
            'stepDescription' => "Adjusting color balance, contrast, and brightness for visual consistency. Applying color grading to achieve the desired mood and style.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 4,
            'stepTitle' => 'Review and Revisions',
            'stepDescription' => "Presenting the edited video to the client for feedback. Making revisions based on client input to ensure satisfaction.",
            'created_at' => now()
        ]);
        DB::table('service_steps')->insert([
            'serviceID' => 4,
            'stepTitle' => 'Final Delivery',
            'stepDescription' => "Rendering the final video in the required format and resolution. Delivering the completed video through the agreed-upon channels.",
            'created_at' => now()
        ]);
    }
}
