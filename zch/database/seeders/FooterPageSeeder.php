<?php

namespace Database\Seeders;

use App\Models\FooterPage;
use Illuminate\Database\Seeder;

class FooterPageSeeder extends Seeder
{
    public function run(): void
    {
        FooterPage::updateOrCreate(
            ['slug' => 'main-footer'],
            [
                'title' => 'Main Footer',
                'is_published' => true,
                'content_data' => [
                    'about' => [
                        'logo' => 'images/logo4.png',
                        'logo_alt' => 'medic',
                        'description' => 'Leading the way in medical excellence. Trusted by the community for over 50 years. We are committed to providing quality healthcare services to all.',
                        'contact_items' => [
                            [
                                'icon' => 'fas fa-map-marker-alt',
                                'text' => "Zomba Central Hospital, P.O Box 21, Zomba, Malawi\nEastern Africa",
                                'href' => '',
                            ],
                            [
                                'icon' => 'far fa-envelope',
                                'text' => 'zch@zomba.mw',
                                'href' => 'mailto:zch@zomba.mw',
                            ],
                            [
                                'icon' => 'fas fa-phone',
                                'text' => '(265) 999',
                                'href' => '',
                            ],
                        ],
                        'social_links' => [
                            ['icon' => 'fab fa-facebook-f', 'url' => 'https://facebook.com/themefisher', 'label' => 'facebook'],
                            ['icon' => 'fab fa-twitter', 'url' => 'https://twitter.com/themefisher', 'label' => 'twitter'],
                            ['icon' => 'fab fa-instagram', 'url' => 'https://instagram.com/themefisher', 'label' => 'instagram'],
                            ['icon' => 'fab fa-github', 'url' => 'https://github.com/themefisher', 'label' => 'github'],
                        ],
                    ],
                    'quick_links' => [
                        'title' => 'Quick Links',
                        'icon' => 'fas fa-link',
                        'items' => [
                            ['label' => 'Home', 'url' => '/'],
                            ['label' => 'News & Ads', 'url' => '/news'],
                            ['label' => 'Our History', 'url' => '/about'],
                            ['label' => 'Departments', 'url' => '/departments'],
                            ['label' => 'Careers', 'url' => '/vacancies'],
                            ['label' => 'Our Doctors', 'url' => '/doctors'],
                        ],
                    ],
                    'ombudsman' => [
                        'title' => 'Ombudsman',
                        'icon' => 'fas fa-headset',
                        'description' => 'If not satisfied with the service, contact our ombudsman for help, complaints, or follow-up on service delivery concerns.',
                        'contact_items' => [
                            ['icon' => 'fas fa-phone-volume', 'text' => '+265 (0) 887 682 856 (Toll Free)'],
                            ['icon' => 'fas fa-envelope', 'text' => 'zchombudsman@gmail.com'],
                        ],
                    ],
                    'visitor_counter' => [
                        'title' => 'Visitor Counter',
                        'icon' => 'fas fa-users',
                        'word' => 'Visitors',
                        'note' => 'Counts are stored in this browser and styled to match your reference card.',
                    ],
                    'bottom' => [
                        'copyright' => '&copy; Copyright 2026. Designed &amp; Developed by <a href="https://themefisher.com/">Dep. of E-Government</a>',
                        'links' => [
                            ['label' => 'HOME', 'url' => '/'],
                            ['label' => 'About', 'url' => '/about'],
                            ['label' => 'CONTACT', 'url' => '/contact'],
                        ],
                    ],
                ],
            ]
        );
    }
}
