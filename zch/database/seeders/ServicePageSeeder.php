<?php

namespace Database\Seeders;

use App\Models\ServicePage;
use Illuminate\Database\Seeder;

class ServicePageSeeder extends Seeder
{
    public function run(): void
    {
        ServicePage::updateOrCreate(
            ['slug' => 'services'],
            [
                'title' => 'Services',
                'content_data' => [
                    'page_heading_label' => 'Our Services',
                    'page_heading_title' => 'Excellent',
                    'page_heading_highlight' => 'Medical Services',
                    'page_description' => 'From emergency response to diagnostics and pharmacy support, our hospital provides integrated medical services focused on fast access, accurate treatment, and compassionate care for every patient.',
                    'cards' => [
                        [
                            'title' => 'Emergency Care',
                            'description' => '24/7 emergency stabilization and urgent treatment for trauma, severe infections, breathing distress, and critical medical events.',
                            'icon' => 'fas fa-briefcase-medical',
                            'image' => 'images/services/service-foura.jpg',
                            'image_alt' => 'Emergency Care team responding quickly',
                            'department_slug' => 'emergency',
                            'link' => 'contact.html',
                            'link_text' => 'Read More',
                            'delay' => '0ms',
                            'duration' => '1200ms',
                        ],
                        [
                            'title' => 'Operation & Surgery',
                            'description' => 'Safe surgical procedures with pre-operative evaluation, modern theatre protocols, and structured post-operative recovery support.',
                            'icon' => 'fas fa-user-md',
                            'image' => 'images/services/service-fivea.jpg',
                            'image_alt' => 'Operation and Surgery unit',
                            'department_slug' => 'surgical',
                            'link' => 'departments.html#surgical',
                            'link_text' => 'Read More',
                            'delay' => '100ms',
                            'duration' => '1200ms',
                        ],
                        [
                            'title' => 'Outdoor Checkup',
                            'description' => 'Daily outpatient reviews for adults and children including clinical assessment, routine diagnostics, and follow-up care planning.',
                            'icon' => 'fas fa-stethoscope',
                            'image' => 'images/slider/slider-bg-1a.jpg',
                            'image_alt' => 'Outdoor checkup consultation',
                            'department_slug' => 'medical',
                            'link' => 'appointment.html',
                            'link_text' => 'Read More',
                            'delay' => '200ms',
                            'duration' => '1200ms',
                        ],
                        [
                            'title' => 'Ambulance Service',
                            'description' => 'Rapid transport for emergencies and referrals, with in-transit monitoring and communication to prepare receiving teams.',
                            'icon' => 'fas fa-ambulance',
                            'image' => 'images/services/slider-bg-1c.jpg',
                            'image_alt' => 'Ambulance transport service',
                            'department_slug' => 'emergency',
                            'link' => 'contact.html',
                            'link_text' => 'Read More',
                            'delay' => '300ms',
                            'duration' => '1200ms',
                        ],
                        [
                            'title' => 'Medicine & Pharmacy',
                            'description' => 'Reliable access to prescribed medicines, dosage counseling, and medication safety guidance by licensed pharmacy staff.',
                            'icon' => 'fas fa-pills',
                            'image' => 'images/team/doctor-lab-3a1.jpg',
                            'image_alt' => 'Medicine and pharmacy dispensing',
                            'department_slug' => 'medical',
                            'link' => 'departments.html#medical',
                            'link_text' => 'Read More',
                            'delay' => '400ms',
                            'duration' => '1200ms',
                        ],
                        [
                            'title' => 'Blood Testing',
                            'description' => 'Comprehensive lab testing with timely reporting for full blood count, infection screens, and treatment response tracking.',
                            'icon' => 'fas fa-vial',
                            'image' => 'images/team/1doctor-lab-3a.jpg',
                            'image_alt' => 'Blood testing in a laboratory',
                            'department_slug' => 'diagnostic',
                            'link' => 'departments.html#diagnostic',
                            'link_text' => 'Read More',
                            'delay' => '500ms',
                            'duration' => '1200ms',
                        ],
                    ],
                    'cta_heading' => 'Need Immediate Medical Support?',
                    'cta_description' => 'Our emergency and outpatient teams are available to guide you quickly to the right service.',
                    'cta_button_text' => 'Book Appointment',
                    'cta_button_url' => 'appointment.html',
                ],
            ]
        );
    }
}
