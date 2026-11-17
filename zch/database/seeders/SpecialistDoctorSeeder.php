<?php

namespace Database\Seeders;

use App\Models\SpecialistDoctor;
use Illuminate\Database\Seeder;

class SpecialistDoctorSeeder extends Seeder
{
    public function run(): void
    {
        SpecialistDoctor::updateOrCreate(
            ['slug' => 'specialist-doctors'],
            [
                'title' => 'Doctors',
                'is_published' => true,
                'content_data' => [
                    'page_heading_label' => 'Our Expert',
                    'page_heading_highlight' => 'Doctors',
                    'page_description' => 'Meet our experienced medical professionals dedicated to quality patient care.',
                    'doctors' => [
                        [
                            'name' => 'Dr. Soulos Nyirenda',
                            'specialty' => 'Urology Specialist',
                            'image' => 'images/team/doctor-2.jpg',
                            'alt' => 'doctor',
                        ],
                        [
                            'name' => 'Dr. Jessica Chakwana',
                            'specialty' => 'Pediatrics Specialist',
                            'image' => 'images/team/doctor-lab-3.jpg',
                            'alt' => 'doctor',
                        ],
                        [
                            'name' => 'Dr. Delia Munthali Mabedi',
                            'specialty' => 'ICU Specialist',
                            'image' => 'images/team/doctor-lab-3.jpg',
                            'alt' => 'doctor',
                        ],
                        [
                            'name' => 'Dr. Maranatha Banda',
                            'specialty' => 'General Medicine',
                            'image' => 'images/team/doctor-2.jpg',
                            'alt' => 'doctor',
                        ],
                        [
                            'name' => 'DR. Andyone E-Gov',
                            'specialty' => 'Software Developer',
                            'image' => 'images/team/doctor-lab-3.jpg',
                            'alt' => 'doctor',
                        ],
                        [
                            'name' => 'Dr. Dzuze',
                            'specialty' => 'Chief Medical Officer',
                            'image' => 'images/team/event-2.jpg',
                            'alt' => 'doctor',
                        ],
                        [
                            'name' => 'Mr. Chipembo Soko',
                            'specialty' => 'Radiology Specialist',
                            'image' => 'images/team/doctor-2.jpg',
                            'alt' => 'doctor',
                        ],
                        [
                            'name' => 'Dr. Maguy Kabeya',
                            'specialty' => 'Obs & Gynaecology',
                            'image' => 'images/team/doctor-lab-3.jpg',
                            'alt' => 'doctor',
                        ],
                        [
                            'name' => 'Dr. Olaf Bach',
                            'specialty' => 'Orthopedic Surgeon',
                            'image' => 'images/team/event-2.jpg',
                            'alt' => 'doctor',
                        ],
                    ],
                    'cta_title' => 'Dedicated to Your Health & Well-being',
                    'cta_text' => 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.',
                    'cta_button_1_text' => 'Get in Touch',
                    'cta_button_1_url' => 'frontend.contact',
                    'cta_button_2_text' => 'Our Services',
                    'cta_button_2_url' => 'frontend.services',
                ],
            ]
        );
    }
}
