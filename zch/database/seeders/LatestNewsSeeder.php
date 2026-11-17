<?php

namespace Database\Seeders;

use App\Models\LatestNews;
use Illuminate\Database\Seeder;

class LatestNewsSeeder extends Seeder
{
    public function run(): void
    {
        LatestNews::updateOrCreate(
            ['slug' => 'latest-news'],
            [
                'title' => 'Latest News',
                'is_published' => true,
                'content_data' => [
                    'page_heading_label' => 'Latest',
                    'page_heading_highlight' => 'News',
                    'page_description' => 'Stay updated with the latest news and announcements from Zomba Central Hospital.',
                    'articles' => [
                        [
                            'title' => 'Doctors seeks refurbishes maternity HDU at Zomba Central Hospital',
                            'meta' => 'Featured article / Zomba Central Hospital',
                            'excerpt' => 'Standard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital. The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.',
                            'image' => 'images/news/news2.jpg',
                            'image_alt' => 'Standard Bank HDU handover',
                            'read_more_url' => '#',
                        ],
                        [
                            'title' => 'Standard Bank refurbishes maternity HDU at Zomba Central Hospital',
                            'meta' => 'Featured article / Zomba Central Hospital',
                            'excerpt' => 'Standard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital. The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.',
                            'image' => 'images/news/news1.jpg',
                            'image_alt' => 'Standard Bank HDU handover',
                            'read_more_url' => '#',
                        ],
                        [
                            'title' => 'To support patients recovery and improve their experiences of care.',
                            'meta' => 'By James Anderson / 08 January 2020',
                            'excerpt' => 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
                            'image' => 'images/blog/5a.jpg',
                            'image_alt' => '',
                            'read_more_url' => '#',
                        ],
                        [
                            'title' => 'A lesson in Surgery Preparedness - From Hurricane Season',
                            'meta' => 'By Garry Moe / 12 January 2020',
                            'excerpt' => 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
                            'image' => 'images/blog/6a.jpg',
                            'image_alt' => '',
                            'read_more_url' => '#',
                        ],
                        [
                            'title' => 'A lesson in Surgery Preparedness - From Hurricane Season',
                            'meta' => 'By Garry Moe / 12 January 2020',
                            'excerpt' => 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
                            'image' => 'images/blog/7a.jpg',
                            'image_alt' => '',
                            'read_more_url' => '#',
                        ],
                        [
                            'title' => 'To support patients recovery and improve their experiences of care.',
                            'meta' => 'By Luis Morris / 25 January 2020',
                            'excerpt' => 'Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.',
                            'image' => 'images/blog/8a.jpg',
                            'image_alt' => '',
                            'read_more_url' => '#',
                        ],
                    ],
                    'recent_posts' => [
                        ['title' => 'Standard Bank refurbishes maternity HDU...', 'date' => 'Featured Story', 'image' => 'images/news/news1.jpg', 'link' => '#'],
                        ['title' => 'Wondering if interior design is dying...', 'date' => 'May 25, 2026', 'image' => 'images/blog/6a.jpg', 'link' => '#'],
                        ['title' => 'Low cost interior designing ideas for...', 'date' => 'May 20, 2019', 'image' => 'images/blog/7a.jpg', 'link' => '#'],
                    ],
                    'categories' => [
                        ['name' => 'Alumni', 'count' => 20],
                        ['name' => 'Psycology', 'count' => 4],
                        ['name' => 'Sonogram', 'count' => 2],
                        ['name' => 'x-ray', 'count' => 9],
                        ['name' => 'Dental', 'count' => 2],
                    ],
                    'tags' => [
                        ['name' => 'Dental'],
                        ['name' => 'Root'],
                        ['name' => 'Clean'],
                        ['name' => 'Rehabilitation'],
                        ['name' => 'Surgery'],
                        ['name' => 'Doctor'],
                        ['name' => 'Pediatric'],
                    ],
                    'cta_title' => 'Dedicated to Your Health & Well-being',
                    'cta_text' => 'Our doors are always open for those in need of compassionate and professional healthcare.',
                    'cta_button_1_text' => 'Get in Touch',
                    'cta_button_1_url' => 'frontend.contact',
                    'cta_button_2_text' => 'Our Services',
                    'cta_button_2_url' => 'frontend.services',
                ],
            ]
        );
    }
}
