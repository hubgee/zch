<?php

namespace Database\Seeders;

use App\Models\OnlineApplicationPage;
use Illuminate\Database\Seeder;

class OnlineApplicationPageSeeder extends Seeder
{
    public function run(): void
    {
        OnlineApplicationPage::updateOrCreate(
            ['slug' => 'online-application'],
            [
                'title' => 'Online Application',
                'is_published' => true,
                'content_data' => [
                    'banner_title' => 'Online Job Application',
                    'breadcrumb' => 'Online Job Application',
                    'card_title' => 'Zomba Central Hospital',
                    'card_subtitle' => 'Online Job Application Form',
                    'section_personal' => 'Personal Information',
                    'section_position' => 'Position Applying For',
                    'section_education' => 'Education & Qualifications',
                    'section_documents' => 'Upload Supporting Documents',
                    'section_declaration' => 'Declaration',
                    'departments' => [
                        'Administration' => 'Administration',
                        'Nursing' => 'Nursing',
                        'Human Resources' => 'Human Resources',
                        'Finance' => 'Finance',
                        'Laboratory' => 'Laboratory',
                        'Pharmacy' => 'Pharmacy',
                        'Clinical Services' => 'Clinical Services',
                        'ICT Department' => 'ICT Department',
                    ],
                    'employment_types' => [
                        'Full-Time' => 'Full-Time',
                        'Part-Time' => 'Part-Time',
                        'Contract' => 'Contract',
                        'Internship' => 'Internship',
                    ],
                    'genders' => [
                        'Male' => 'Male',
                        'Female' => 'Female',
                    ],
                    'declaration_text' => 'I confirm that the information provided in this application form is accurate and complete to the best of my knowledge.',
                    'submit_button_text' => 'Submit Application',
                    'footer_note' => '© 2026 Zomba Central Hospital. All Rights Reserved.',
                ],
            ]
        );
    }
}
