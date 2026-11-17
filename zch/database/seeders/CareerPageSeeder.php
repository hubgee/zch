<?php

namespace Database\Seeders;

use App\Models\CareerPage;
use Illuminate\Database\Seeder;

class CareerPageSeeder extends Seeder
{
    public function run(): void
    {
        CareerPage::updateOrCreate(
            ['slug' => 'careers'],
            [
                'title' => 'Careers',
                'is_published' => true,
                'content_data' => [
                    'advertised' => [
                        [
                            'title' => 'Registered Nurse - Maternity Ward',
                            'location' => 'Zomba Central Hospital',
                            'grade' => 'Grade M',
                            'publishDate' => '2026-06-15',
                            'downloads' => 45,
                            'file' => '',
                            'file_url' => '#',
                            'search' => 'nurse maternity ward registered',
                        ],
                        [
                            'title' => 'Clinical Officer - Emergency Unit',
                            'location' => 'Zomba Central Hospital',
                            'grade' => 'Grade L',
                            'publishDate' => '2026-06-10',
                            'downloads' => 32,
                            'file' => '',
                            'file_url' => '#',
                            'search' => 'clinical officer emergency',
                        ],
                        [
                            'title' => 'Laboratory Technician',
                            'location' => 'Zomba Central Hospital',
                            'grade' => 'Grade K',
                            'publishDate' => '2026-05-28',
                            'downloads' => 21,
                            'file' => '',
                            'file_url' => '#',
                            'search' => 'laboratory technician diagnostics',
                        ],
                    ],
                    'shortlisted' => [
                        [
                            'title' => 'Shortlisted - Registered Nurse (Dec 2025)',
                            'location' => 'Zomba Central Hospital',
                            'grade' => 'Grade M',
                            'publishDate' => '2025-12-20',
                            'downloads' => 67,
                            'file' => '',
                            'file_url' => '#',
                            'search' => 'shortlisted nurse december',
                        ],
                    ],
                    'appointments' => [
                        [
                            'title' => 'Appointment Notice - New Staff Intake Q1 2026',
                            'location' => 'Zomba Central Hospital',
                            'grade' => 'All Grades',
                            'publishDate' => '2026-01-15',
                            'downloads' => 89,
                            'file' => '',
                            'file_url' => '#',
                            'search' => 'appointment staff intake 2026',
                        ],
                    ],
                    'instructions' => [
                        [
                            'title' => 'Application Guidelines for Health Service Commission',
                            'location' => 'National',
                            'grade' => 'All Grades',
                            'publishDate' => '2026-01-01',
                            'downloads' => 156,
                            'file' => '',
                            'file_url' => '#',
                            'search' => 'application guidelines health service commission',
                        ],
                    ],
                    'archived' => [
                        [
                            'title' => 'Pharmacist - Q3 2025',
                            'location' => 'Zomba Central Hospital',
                            'grade' => 'Grade L',
                            'publishDate' => '2025-07-10',
                            'archivedDate' => '2025-10-01',
                            'downloads' => 41,
                            'file' => '',
                            'file_url' => '#',
                            'search' => 'pharmacist archived',
                        ],
                        [
                            'title' => 'Radiographer - Q2 2025',
                            'location' => 'Zomba Central Hospital',
                            'grade' => 'Grade K',
                            'publishDate' => '2025-04-05',
                            'archivedDate' => '2025-08-15',
                            'downloads' => 38,
                            'file' => '',
                            'file_url' => '#',
                            'search' => 'radiographer archived',
                        ],
                    ],
                ],
            ]
        );
    }
}
