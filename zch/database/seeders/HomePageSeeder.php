<?php

namespace Database\Seeders;

use App\Models\HomePage;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    public function run(): void
    {
        HomePage::query()->updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Home Page',
                'sliders' => [
                    [
                        'title' => 'World-Class Health in Zomba',
                        'subtitle' => 'Providing compassionate care and advanced medical treatment to the community. Your health is our priority',
                        'button_text' => 'explore',
                        'button_url' => 'frontend.about',
                        'background_image' => 'images/slider/slider-bg-1p.jpg',
                        'css_class' => 'slide1',
                        'is_active' => true,
                    ],
                    [
                        'title' => 'We Care About Your Health',
                        'subtitle' => 'We believe that healthcare is more than treatment -it is about listening, caring, supporting, and restoring hope',
                        'button_text' => 'ABOUT US',
                        'button_url' => 'frontend.about',
                        'background_image' => 'images/slider/slider-bg-1a.jpg',
                        'css_class' => '',
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Best Medical Services',
                        'subtitle' => 'With experienced healthcare professionals, modern medical facilities, and a patient-centered approach,.',
                        'button_text' => 'SERVICES',
                        'button_url' => 'frontend.services',
                        'background_image' => 'images/slider/slider-bg-3o.jpg',
                        'css_class' => '',
                        'is_active' => true,
                    ],
                ],
                'cta_blocks' => [
                    [
                        'type' => 'emergency',
                        'icon' => 'fa fa-phone',
                        'title' => 'Emergency & Ambulance',
                        'phone' => '+265 999',
                        'phone_link' => 'tel:+265999',
                        'body' => '24/7 emergency response for accidents, trauma, and urgent medical care.',
                    ],
                    [
                        'type' => 'departments',
                        'icon' => 'fa fa-stethoscope',
                        'title' => 'Key Departments',
                        'body' => 'Maternity, Pediatrics, Surgery, and Outpatient services led by dedicated clinical teams.',
                        'button_text' => 'View Services',
                        'button_url' => 'frontend.services',
                    ],
                    [
                        'type' => 'hours',
                        'icon' => 'fa fa-hourglass-o',
                        'title' => 'Clinic & Visiting Hours',
                        'hours' => [
                            ['label' => 'Outpatient (Mon - Fri)', 'time' => '08:00 - 17:00'],
                            ['label' => 'Weekend Clinic (Sat)', 'time' => '08:00 - 12:00'],
                            ['label' => 'Emergency Department', 'time' => '24 Hours'],
                        ],
                    ],
                ],
                'about_title' => 'About Zomba Central Hospital',
                'about_subtitle' => 'Serving the Community Since the 1930s',
                'about_paragraph_1' => 'Zomba Central Hospital was established in the 1930s with a vision to provide quality healthcare services to the people of Zomba and surrounding districts. What started as a modest 50-bed facility has grown into a comprehensive healthcare institution serving thousands of patients every year.',
                'about_paragraph_2' => 'Over the decades, we have continued to evolve by adopting modern medical technologies and expanding our services to meet growing healthcare needs. Our commitment to excellence, compassion, and patient-centered care remains strong.',
                'about_image' => 'images/about/1a.jpg',
                'about_button_url' => 'frontend.about',
                'stats' => [
                    ['icon' => 'fas fa-calendar-alt', 'value' => '90+', 'label' => 'Years of Service'],
                    ['icon' => 'fas fa-users', 'value' => '500+', 'label' => 'Staff Members'],
                    ['icon' => 'fas fa-bed', 'value' => '150+', 'label' => 'Hospital Beds'],
                    ['icon' => 'fas fa-smile', 'value' => '10K+', 'label' => 'Patients Served Annually'],
                ],
                'leadership_title' => 'Hospital',
                'leadership_highlight' => 'Leadership',
                'leadership_intro' => "Meet the visionary leaders driving excellence, innovation, and compassionate care at Zomba Central Hospital.\nOur dedicated leadership team is committed to strengthening healthcare delivery, advancing medical services, and ensuring patient-centered care for every individual we serve.\nThrough professionalism, integrity, and strategic direction, they continue to shape the hospital into a trusted center of excellence in healthcare, research, and community service across Malawi.",
                'leaders' => [
                    [
                        'tab_id' => 'dormitory',
                        'tab_label' => 'Hospital Director General',
                        'name' => 'Dr. Soulos Nyirenda',
                        'image' => 'images/services/service-one1.jpg',
                        'paragraphs' => [
                            "Dr. Soulos Nyirenda is a Malawian medical doctor and public health administrator serving as Director General of Zomba Central Hospital, one of Malawi's largest tertiary referral hospitals. He is known for improving hospital operations, patient care delivery, and system-wide efficiency in Southern Malawi.",
                            'He leads medical, administrative, and infrastructure functions for a referral network serving over four million people, while strengthening partnerships with the Ministry of Health and key international health programs.',
                        ],
                        'bullet_points' => [
                            'Focus areas: hospital management, public health systems, and medical service delivery.',
                            'Supports expansion of specialized services including surgical, pediatric, and obstetric care.',
                            "Strengthens Zomba Central Hospital's teaching and research role within Malawi's referral network.",
                        ],
                        'button_text' => 'Read more',
                        'button_url' => 'frontend.services',
                    ],
                    [
                        'tab_id' => 'orthopedic',
                        'tab_label' => 'Deputy Hospital Director',
                        'name' => 'Dr.Delia Munthali Mabedi',
                        'image' => 'images/services/service-three1a.jpg',
                        'paragraphs' => [
                            "Dr. Delia Munthali Mabedi is a Malawian physician and anesthesiologist serving as Deputy Hospital Director and Anesthetic Consultant at Zomba Central Hospital. She is recognized as one of Malawi's leading voices in anesthesia, intensive care, and perioperative patient safety.",
                            'With training in medicine, anesthesia, and critical care, she combines hospital leadership with specialist clinical oversight, supporting service quality, workforce development, and safer surgical outcomes across Southern Malawi.',
                        ],
                        'bullet_points' => [
                            'Focus areas: anesthesia, intensive care, perioperative medicine, and patient safety.',
                            'Leadership: founding chairperson and former first female chairperson of the Society of Anaesthesiologists of Malawi.',
                            'Advocates mentorship, protocol-driven care, and stronger national capacity in surgical and critical care services.',
                        ],
                        'button_text' => 'Read more',
                        'button_url' => 'frontend.services',
                    ],
                    [
                        'tab_id' => 'sonogram',
                        'tab_label' => 'Deputy Director, Nursing Dept',
                        'name' => 'Mrs. Judith Chirwa',
                        'image' => 'images/services/service-two1a.jpg',
                        'paragraphs' => [
                            'Mrs. Judith Chirwa is a senior Malawian nurse and healthcare administrator serving as Deputy Director of the Nursing Department at Zomba Central Hospital. She is recognized for leadership in nursing management, clinical coordination, and patient care quality improvement.',
                            "She oversees nursing operations across high-demand service areas, supports workforce planning and in-service training, and helps align hospital nursing systems with Malawi's national public health priorities.",
                        ],
                        'bullet_points' => [
                            'Focus areas: nursing management, patient safety, and continuous professional development.',
                            'Supports care delivery across internal medicine, pediatrics, surgery, and maternity services.',
                            'Contributes to national goals on maternal health, infection control, and strengthened nursing practice.',
                        ],
                        'button_text' => 'Read more',
                        'button_url' => 'frontend.services',
                    ],
                ],
                'news_title' => 'Latest',
                'news_highlight' => 'News',
                'news_intro' => 'Stay updated with the latest announcements, hospital milestones, service updates, and public health information from Zomba Central Hospital and our partners.',
                'news_items' => [
                    [
                        'type' => 'news',
                        'category' => 'Latest News',
                        'title' => 'Improving Emergency and Surgical Care Delivery',
                        'excerpt' => 'Zomba Central Hospital continues to modernize urgent and specialist care pathways for better outcomes.',
                        'image' => 'images/blog/5a1a.jpg',
                        'url' => 'frontend.news',
                    ],
                    [
                        'type' => 'news',
                        'category' => 'Latest News',
                        'title' => 'Maternal and Child Health Services Expanded',
                        'excerpt' => 'New service improvements support safer maternity care and stronger pediatric follow-up programs.',
                        'image' => 'images/blog/7a1.jpg',
                        'url' => 'frontend.news',
                    ],
                    [
                        'type' => 'facebook',
                        'category' => 'Social Updates',
                        'title' => 'Follow ZCH on Facebook',
                        'excerpt' => 'View official announcements, public notices, and updates from the Malawi Government page.',
                        'facebook_title' => 'Follow Us on Facebook',
                        'facebook_embed_url' => 'https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmalawigovernment%2F&tabs=timeline&width=340&height=700&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId',
                        'url' => 'https://web.facebook.com/malawigovernment/?ref=embed_page#',
                    ],
                ],
                'partners_title' => 'OUR PARTNERS',
                'partners_subtitle' => 'Collaborating with institutions and partners to deliver national impact.',
                'partners' => [
                    ['name' => 'Ministry of Health', 'logo' => 'images/partners/gov.jpg', 'url' => null],
                    ['name' => 'GIZ Malawi', 'logo' => 'images/partners/giz1.jpg', 'url' => null],
                    ['name' => 'Medical Council of Malawi', 'logo' => 'images/partners/medical.jpg', 'url' => null],
                    ['name' => 'Réunion Médicale', 'logo' => 'images/partners/reunion.jpg', 'url' => null],
                    ['name' => 'University of Malawi', 'logo' => 'images/partners/unima1.jpg', 'url' => null],
                    ['name' => 'Zomba City Council', 'logo' => 'images/partners/council.jpg', 'url' => null],
                ],
                'bottom_cta_title' => 'Dedicated to Your Health & Well-being',
                'bottom_cta_text' => 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.',
                'bottom_cta_button_1_text' => 'Get in Touch',
                'bottom_cta_button_1_url' => 'frontend.contact',
                'bottom_cta_button_2_text' => 'Our Services',
                'bottom_cta_button_2_url' => 'frontend.services',
                'bottom_cta_background_image' => 'images/background/appoinment.jpg',
            ],
        );
    }
}
