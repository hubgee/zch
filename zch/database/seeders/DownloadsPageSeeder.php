<?php

namespace Database\Seeders;

use App\Models\DownloadsPage;
use Illuminate\Database\Seeder;

class DownloadsPageSeeder extends Seeder
{
    public function run(): void
    {
        DownloadsPage::updateOrCreate(
            ['slug' => 'downloads'],
            [
                'title' => 'Downloads',
                'is_published' => true,
                'content_data' => [
                    'hero_title' => 'Downloads Library',
                    'hero_text' => 'Find official forms, service guides, policy documents, and patient information resources.',
                    'categories' => [
                        ['id' => 'all', 'name' => 'All Documents', 'description' => 'Browse all available downloadable resources below.'],
                        ['id' => 'forms', 'name' => 'Forms', 'description' => 'Official forms used across departments and services.'],
                        ['id' => 'guides', 'name' => 'Service Guides', 'description' => 'Patient and service process guides for quick reference.'],
                        ['id' => 'policies', 'name' => 'Policies', 'description' => 'Policy documents and official operating standards.'],
                        ['id' => 'patient-info', 'name' => 'Patient Information', 'description' => 'Educational resources for patients and guardians.'],
                    ],
                    'documents' => [
                        ['title' => 'Patient Registration Form', 'category' => 'forms', 'date' => '2026-04-12', 'type' => 'Form', 'description' => 'Printable form for outpatient and inpatient registration.', 'file' => '', 'file_url' => '#'],
                        ['title' => 'Visiting Hours Guide', 'category' => 'guides', 'date' => '2026-03-02', 'type' => 'Guide', 'description' => 'Updated visitor access policy and ward-specific hours.', 'file' => '', 'file_url' => '#'],
                        ['title' => 'Maternal Care Information Pack', 'category' => 'patient-info', 'date' => '2026-02-16', 'type' => 'Patient Info', 'description' => 'Information for antenatal, delivery, and postnatal care pathways.', 'file' => '', 'file_url' => '#'],
                        ['title' => 'Laboratory Request Form', 'category' => 'forms', 'date' => '2026-01-25', 'type' => 'Form', 'description' => 'Standard request form for laboratory and diagnostics services.', 'file' => '', 'file_url' => '#'],
                        ['title' => 'Infection Prevention Policy', 'category' => 'policies', 'date' => '2025-12-10', 'type' => 'Policy', 'description' => 'Hospital policy on hygiene, PPE, and infection control protocols.', 'file' => '', 'file_url' => '#'],
                        ['title' => 'Emergency Preparedness Checklist', 'category' => 'guides', 'date' => '2025-11-08', 'type' => 'Guide', 'description' => 'Preparedness checklist for emergency response and referrals.', 'file' => '', 'file_url' => '#'],
                    ],
                ],
            ]
        );
    }
}
