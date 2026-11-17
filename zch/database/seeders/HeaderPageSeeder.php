<?php

namespace Database\Seeders;

use App\Models\HeaderPage;
use Illuminate\Database\Seeder;

class HeaderPageSeeder extends Seeder
{
    public function run(): void
    {
        HeaderPage::updateOrCreate(
            ['slug' => 'main-header'],
            [
                'title' => 'Main Header',
                'is_published' => true,
                'content_data' => [
                    'top_bar' => [
                        'emergency_text' => '24/7 Emergency Services Available',
                        'emergency_label' => 'Emergency',
                        'emergency_phone' => '999',
                        'toll_free_label' => 'Toll Free',
                        'toll_free_phone' => '+265 (0) 887 682 856',
                    ],
                    'contact' => [
                        'email' => 'zch@zomba.mw',
                        'email_label' => 'Email',
                        'phone' => '+265 (0) 887 682 856',
                        'phone_label' => 'Call Now',
                        'appointment_text' => 'Appointment',
                        'appointment_url' => '/appointment',
                    ],
                    'logo' => [
                        'image' => 'images/logoAQ.png',
                        'alt' => 'Zomba Central Hospital',
                    ],
                    'search_placeholder' => 'Search...',
                    'nav_items' => [
                        [
                            'label' => 'HOME',
                            'url' => '/',
                            'open_new_tab' => false,
                            'children' => [],
                        ],
                        [
                            'label' => 'ABOUT US',
                            'url' => '#',
                            'open_new_tab' => false,
                            'children' => [
                                ['label' => 'ZCH Background', 'url' => '/about', 'open_new_tab' => false, 'children' => []],
                                ['label' => 'Hospital Management', 'url' => '/management', 'open_new_tab' => false, 'children' => []],
                                ['label' => 'Organisational Structure', 'url' => '/structure', 'open_new_tab' => false, 'children' => []],
                                ['label' => 'FAQ', 'url' => '/faq', 'open_new_tab' => false, 'children' => []],
                                ['label' => 'Organogram', 'url' => '/organogram', 'open_new_tab' => false, 'children' => []],
                                ['label' => 'Our Facilities', 'url' => '/facilities', 'open_new_tab' => false, 'children' => []],
                            ],
                        ],
                        [
                            'label' => 'DEPARTMENTS',
                            'url' => '#',
                            'type' => 'departments',
                            'open_new_tab' => false,
                            'children' => [],
                        ],
                        [
                            'label' => 'SERVICES',
                            'url' => '/services',
                            'open_new_tab' => false,
                            'children' => [],
                        ],
                        [
                            'label' => 'MEDICAL TEAM',
                            'url' => '#',
                            'open_new_tab' => false,
                            'children' => [
                                ['label' => 'Top Hospital Management', 'url' => '/management', 'open_new_tab' => false, 'children' => []],
                                ['label' => 'Specialist Doctors', 'url' => '/doctors', 'open_new_tab' => false, 'children' => []],
                            ],
                        ],
                        [
                            'label' => 'RESOURCE CENTER',
                            'url' => '#',
                            'open_new_tab' => false,
                            'children' => [
                                ['label' => 'Latest News', 'url' => '/news', 'open_new_tab' => false, 'children' => []],
                                [
                                    'label' => 'Gallery',
                                    'url' => '#',
                                    'open_new_tab' => false,
                                    'children' => [
                                        ['label' => 'Photos', 'url' => '/photos', 'children' => []],
                                        ['label' => 'Videos', 'url' => '/videos', 'children' => []],
                                        ['label' => 'Audio Clips', 'url' => '/audio', 'children' => []],
                                    ],
                                ],
                                ['label' => 'Downloads', 'url' => '/downloads', 'open_new_tab' => false, 'children' => []],
                                ['label' => 'Events Calendar', 'url' => '/events', 'open_new_tab' => false, 'children' => []],
                                [
                                    'label' => 'Careers',
                                    'url' => '#',
                                    'open_new_tab' => false,
                                    'children' => [
                                        ['label' => 'View Vacancies', 'url' => '/vacancies', 'children' => []],
                                        ['label' => 'Online Job Application', 'url' => '/online-application', 'children' => []],
                                    ],
                                ],
                                ['label' => 'Patient Testimonials', 'url' => '/testimonials', 'open_new_tab' => false, 'children' => []],
                            ],
                        ],
                        [
                            'label' => 'BOMA-MAIL',
                            'url' => 'https://mail.boma.gov.mw/',
                            'open_new_tab' => true,
                            'children' => [],
                        ],
                        [
                            'label' => 'CONTACT',
                            'url' => '/contact',
                            'open_new_tab' => false,
                            'children' => [],
                        ],
                    ],
                ],
            ]
        );
    }
}
