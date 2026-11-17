<?php

namespace Database\Seeders;

use App\Models\EventsPage;
use Illuminate\Database\Seeder;

class EventsPageSeeder extends Seeder
{
    public function run(): void
    {
        EventsPage::updateOrCreate(
            ['slug' => 'events'],
            [
                'title' => 'Events Calendar',
                'is_published' => true,
                'content_data' => [
                    'hero_title' => 'Hospital Events & Public Health Calendar',
                    'hero_text' => 'Track outreach campaigns, specialist clinics, awareness drives, and staff development events across the year.',
                    'events' => [
                        [
                            'title' => 'New Year Health Planning',
                            'date' => '2026-01-10',
                            'venue' => 'Main Board Room',
                            'type' => 'Planning',
                            'image' => 'images/gallery/gallery-04a1.jpg',
                            'image_alt' => 'New Year Health Planning',
                            'description' => 'Annual planning for service readiness, departmental priorities, and hospital performance targets.',
                        ],
                        [
                            'title' => 'Maternal & Child Outreach Day',
                            'date' => '2026-03-18',
                            'venue' => 'Maternity Wing',
                            'type' => 'Outreach',
                            'image' => 'images/services/nu.jpg',
                            'image_alt' => 'Maternal & Child Outreach Day',
                            'description' => 'Community maternal and newborn health awareness, education, and referral support activities.',
                        ],
                        [
                            'title' => 'Diagnostic Open Clinic',
                            'date' => '2026-05-22',
                            'venue' => 'Diagnostics Block',
                            'type' => 'Clinic',
                            'image' => 'images/services/service-three.jpg',
                            'image_alt' => 'Diagnostic Open Clinic',
                            'description' => 'Public diagnostic screening, guidance, and counselling support for patients and families.',
                        ],
                        [
                            'title' => 'Emergency Simulation Drill',
                            'date' => '2026-07-09',
                            'venue' => 'Emergency Unit',
                            'type' => 'Training',
                            'image' => 'images/facilities/ambulance.jpg',
                            'image_alt' => 'Emergency Simulation Drill',
                            'description' => 'Emergency and ICU rapid response drill involving multidisciplinary teams and readiness checks.',
                        ],
                        [
                            'title' => 'Medical Review Conference',
                            'date' => '2026-10-16',
                            'venue' => 'Conference Hall',
                            'type' => 'Conference',
                            'image' => 'images/services/service-one1.jpg',
                            'image_alt' => 'Medical Review Conference',
                            'description' => 'A medical case review and care quality improvement session for clinical teams and department leads.',
                        ],
                    ],
                    'cta_title' => 'Need details on a hospital programme or campaign?',
                    'cta_text' => 'Contact the hospital for official information on upcoming outreach activities, clinics, awareness events, and public health engagements.',
                    'cta_button_1_text' => 'Contact Us',
                    'cta_button_1_url' => 'frontend.contact',
                    'cta_button_2_text' => 'Latest News',
                    'cta_button_2_url' => 'frontend.news',
                ],
            ]
        );
    }
}
