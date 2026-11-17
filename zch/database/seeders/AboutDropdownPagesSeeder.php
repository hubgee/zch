<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Facilities;
use App\Models\Faq;
use App\Models\Management;
use App\Models\Organogram;
use App\Models\Structure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AboutDropdownPagesSeeder extends Seeder
{
    /**
     * @var array<int, array{model: class-string<Model>, title: string, slug: string, content_data: array<string, mixed>}>
     */
    private array $pages = [
        [
            'model' => About::class,
            'title' => 'ABOUT US',
            'slug' => 'zch-background',
            'content_data' => [
                'history_heading' => 'Our History & Legacy',
                'history_tagline' => 'Serving the Community Since 1930s.',
                'history_paragraph_1' => 'Zomba Central Hospital was established in the 1930s with a vision to provide quality healthcare services to the people of Zomba and surrounding districts. What started as a modest 50-bed facility has grown into a comprehensive healthcare institution serving thousands of patients every year.',
                'history_paragraph_2' => 'Over the decades, we have continued to evolve by adopting modern medical technologies and expanding our services to meet growing healthcare needs. Our commitment to excellence, compassion, and patient-centered care remains at the heart of everything we do.',
                'history_highlight_title' => 'Tertiary & Teaching Hospital:',
                'history_highlight_text' => 'A referral centre and training hub supporting clinical education, specialist care, and national health priorities across Malawi.',
                'history_image' => 'images/about/1a.jpg',
                'history_image_alt' => 'Zomba Central Hospital building',
                'history_caption' => 'Early infrastructure of Zomba medical facilities foundation of care',
                'compass_heading' => 'Our Compass',
                'compass_items' => [
                    ['icon' => 'fas fa-eye', 'title' => 'Vision', 'body' => 'To be a centre of excellence in the provision of tertiary health services using cutting-edge technology in the South Eastern Zone.'],
                    ['icon' => 'fas fa-bullhorn', 'title' => 'Mission', 'body' => 'To provide specialised, quality tertiary healthcare services to patients and clients in the South Eastern Zone and beyond.'],
                    ['icon' => 'fas fa-tasks', 'title' => 'Mandate', 'body' => 'Tertiary referral & teaching hospital responsible for specialised healthcare, emergency care, inpatient/outpatient services, medical training, research, and referral support to districts within the South Eastern Region of Malawi and beyond.'],
                ],
                'values_heading' => 'Core Values',
                'values_intro' => 'The principles that define our daily commitment to our patients and community.',
                'values' => [
                    ['value' => 'Teamwork'], ['value' => 'Privacy'], ['value' => 'Informed Consent'], ['value' => 'Safety'],
                    ['value' => 'Integrity'], ['value' => 'Reliability'], ['value' => 'Equal Opportunities'], ['value' => 'Confidentiality'],
                    ['value' => 'Veracity'], ['value' => 'Infection Prevention'], ['value' => 'Accountability'], ['value' => 'Responsibility'],
                ],
                'training_image' => 'images/services/nu.jpg',
                'training_image_alt' => 'Nursing cohort, Zomba General Hospital - 1960s',
                'training_caption' => 'Nursing cohort, Zomba General Hospital - 1960s',
                'training_heading' => 'The Training School Legacy',
                'training_paragraph_1' => 'For generations, Zomba Central Hospital has been a cornerstone of health worker education in Malawi. Our training programmes have produced nurses, midwives, and clinical officers who serve communities across the country and beyond.',
                'training_paragraph_2' => 'Through partnerships with the Ministry of Health and academic institutions, we continue to strengthen practical training, mentorship, and professional development, ensuring that every cohort carries forward our standards of compassionate, competent care.',
                'milestones_heading' => 'Historic Milestones',
                'milestones' => [
                    ['year' => '1930s', 'icon' => 'fas fa-hospital', 'title' => 'Hospital Established', 'description' => 'Founded as a modest facility with 50 beds and basic medical services for the Zomba community.'],
                    ['year' => '1950s', 'icon' => 'fas fa-building', 'title' => 'Major Expansion', 'description' => 'Added a surgical wing and maternity department to meet growing regional healthcare demand.'],
                    ['year' => '1980s', 'icon' => 'fas fa-microscope', 'title' => 'Modern Laboratory', 'description' => 'Upgraded diagnostic facilities and laboratory equipment to support advanced clinical care.'],
                    ['year' => '2020s', 'icon' => 'fas fa-laptop-medical', 'title' => 'Digital Transformation', 'description' => 'Introduced electronic health records, telemedicine support, and modern hospital information systems.'],
                ],
                'cta_title' => 'Dedicated to Your Health & Well-being',
                'cta_text' => 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.',
                'cta_button_1_text' => 'Get in Touch',
                'cta_button_1_url' => 'frontend.contact',
                'cta_button_2_text' => 'Our Services',
                'cta_button_2_url' => 'frontend.services',
            ],
        ],
        [
            'model' => Management::class,
            'title' => 'Hospital Management',
            'slug' => 'hospital-management',
            'content_data' => [
                'board_heading' => 'Board of Directors',
                'board_intro' => 'The executive leadership overseeing the strategic direction of ZCH.',
                'lead_name' => 'Dr. Saulos Nyirenda',
                'lead_role' => 'Hospital Director General',
                'lead_alt' => 'Hospital Director General',
                'lead_image' => 'images/team/doctormw-2a.jpg',
                'deputies' => [
                    ['name' => 'Dr. Delia Munthali Mabedi', 'role' => 'Deputy Hospital Director', 'alt' => 'Deputy Hospital Director', 'image' => 'images/team/d1.webp'],
                    ['name' => 'Dr. Jessica Chakwana', 'role' => 'Deputy Director', 'alt' => 'Deputy Director', 'image' => 'images/team/d3.jpg'],
                ],
                'team_heading' => 'Senior Management Team',
                'team_intro' => 'Our diverse team of medical and administrative professionals.',
                'team_members' => [
                    ['name' => 'Mrs. Grace Banda', 'role' => 'Chief Nursing Officer', 'alt' => 'Chief Nursing Officer', 'image' => 'images/team/d4.jpg'],
                    ['name' => 'Mr. John Phiri', 'role' => 'Hospital Administrator', 'alt' => 'Hospital Administrator', 'image' => 'images/team/doctor-2.jpg'],
                    ['name' => 'Ms. Mary Kachale', 'role' => 'Chief Finance Officer', 'alt' => 'Chief Finance Officer', 'image' => 'images/team/d3.jpg'],
                    ['name' => 'Mr. Chipembo Soko', 'role' => 'Human Resource Officer', 'alt' => 'Human Resource Officer', 'image' => 'images/team/doctor-lab-1.jpg'],
                    ['name' => 'Mr. David Mzere', 'role' => 'Procurement Officer', 'alt' => 'Procurement Officer', 'image' => 'images/team/d4.jpg'],
                    ['name' => 'Mrs. Catherine Phiri', 'role' => 'Public Relations Officer', 'alt' => 'Public Relations Officer', 'image' => 'images/team/doctor-lab-3.jpg'],
                ],
                'cta_title' => 'Dedicated to Your Health & Well-being',
                'cta_text' => 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.',
                'cta_button_1_text' => 'Get in Touch',
                'cta_button_1_url' => 'frontend.contact',
                'cta_button_2_text' => 'Our Facilities',
                'cta_button_2_url' => 'frontend.facilities',
            ],
        ],
        [
            'model' => Structure::class,
            'title' => 'Organisational Structure',
            'slug' => 'organisational-structure',
            'content_data' => [
                'heading' => 'ZCH Organisational Structure',
                'intro' => 'Our structured approach to healthcare management and clinical excellence.',
                'chart_image' => 'images/gallery/structure.jpg',
                'chart_alt' => 'ZCH Organisational Chart',
                'cta_title' => 'Dedicated to Your Health & Well-being',
                'cta_text' => 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.',
                'cta_button_1_text' => 'Get in Touch',
                'cta_button_1_url' => 'frontend.contact',
                'cta_button_2_text' => 'Our Services',
                'cta_button_2_url' => 'frontend.services',
            ],
        ],
        [
            'model' => Faq::class,
            'title' => 'Frequently Asked Questions',
            'slug' => 'faq',
            'content_data' => [
                'eyebrow' => 'Help Centre',
                'hero_heading' => 'Quick answers for patients, guardians, and visitors.',
                'hero_text' => 'Find helpful information about hospital services, contact options, appointments, emergency support, and what to expect when visiting Zomba Central Hospital.',
                'side_heading' => 'Need help quickly?',
                'side_text' => 'Browse the most common questions below or contact the hospital directly if you need support that is specific to your visit or referral.',
                'side_points' => [
                    ['point' => 'Clear guidance for first-time visitors'],
                    ['point' => 'Useful information on appointments and referrals'],
                    ['point' => 'Easy access to support and contact options'],
                ],
                'highlights' => [
                    ['value' => '10', 'label' => 'Common Questions'],
                    ['value' => '24/7', 'label' => 'Emergency Care'],
                    ['value' => 'Fast', 'label' => 'Helpful Answers'],
                ],
                'content_heading' => 'Answers to the questions we hear most often',
                'content_intro' => 'This page is designed to make it easier for patients and families to get key information before visiting the hospital or accessing care.',
                'items' => [
                    ['question' => 'What services does Zomba Central Hospital provide?', 'answer' => 'Zomba Central Hospital provides specialised and general healthcare services including emergency care, surgery, maternity services, paediatrics, orthopaedic care, laboratory services, radiology, outpatient services, and inpatient care.'],
                    ['question' => 'Where is Zomba Central Hospital located?', 'answer' => 'Zomba Central Hospital is located in Zomba City, Malawi, serving patients from the Eastern Region and surrounding districts.'],
                    ['question' => 'Does the hospital operate 24 hours a day?', 'answer' => 'Yes. The hospital provides 24/7 emergency and critical healthcare services, including ambulance and emergency response support.'],
                    ['question' => 'How can I contact Zomba Central Hospital?', 'answer' => 'Patients and visitors can contact the hospital through the official phone numbers, email addresses, or by visiting the hospital administration offices during working hours.'],
                    ['question' => 'Does the hospital provide ambulance services?', 'answer' => 'Yes. Zomba Central Hospital provides emergency ambulance and patient transfer services for urgent medical cases and referrals.'],
                    ['question' => 'Are specialist doctors available at the hospital?', 'answer' => 'Yes. The hospital has qualified specialists in areas such as paediatrics, obstetrics and gynaecology, orthopaedics, surgery, nutrition, and internal medicine.'],
                    ['question' => 'Can patients book appointments in advance?', 'answer' => 'Yes. Patients can schedule appointments for consultations, specialist clinics, and follow-up visits through the hospital booking procedures.'],
                    ['question' => 'Does ZCH accept referrals from other hospitals?', 'answer' => 'Yes. The hospital serves as a referral hospital and accepts patients referred from district hospitals, clinics, and other healthcare facilities.'],
                    ['question' => 'What should patients bring when visiting?', 'answer' => 'Patients are encouraged to bring identification documents, health records, referral letters if any, and prescribed medications when visiting the hospital.'],
                    ['question' => 'Does the hospital provide maternity services?', 'answer' => 'Yes. Zomba Central Hospital offers antenatal care, maternity services, postnatal care, neonatal care, immunisation services, and paediatric healthcare services.'],
                ],
                'support_heading' => 'Still need assistance?',
                'support_text' => 'If your question is not covered here, our team is ready to help with appointment guidance, patient enquiries, and general hospital information.',
                'support_button_text' => 'Get In Touch',
                'support_button_url' => 'frontend.contact',
            ],
        ],
        [
            'model' => Organogram::class,
            'title' => 'Organogram',
            'slug' => 'organogram',
            'content_data' => [
                'heading' => 'ZCH Organogram',
                'intro' => 'Our structured approach to healthcare management and clinical excellence.',
                'chart_image' => 'images/gallery/organogram1.png',
                'chart_alt' => 'ZCH Organisational Chart',
                'cta_title' => 'Dedicated to Your Health & Well-being',
                'cta_text' => 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.',
                'cta_button_1_text' => 'Get in Touch',
                'cta_button_1_url' => 'frontend.contact',
                'cta_button_2_text' => 'Our Services',
                'cta_button_2_url' => 'frontend.services',
            ],
        ],
        [
            'model' => Facilities::class,
            'title' => 'Our Facilities',
            'slug' => 'our-facilities',
            'content_data' => [
                'eyebrow' => 'Zomba Central Hospital',
                'hero_heading' => 'Designed for quality care, comfort, and confidence.',
                'hero_text' => 'Our facilities support safe, efficient, and compassionate healthcare delivery. From emergency response and diagnostic services to patient wards and visitor amenities, each space is built to improve the care experience for patients, guardians, and staff.',
                'panel_heading' => 'What patients and visitors can expect',
                'panel_text' => 'Clean environments, accessible support areas, responsive service points, and essential amenities that help make every hospital visit more reassuring.',
                'checklist' => [
                    ['item' => 'Safe and supportive inpatient spaces'],
                    ['item' => 'Rapid emergency and diagnostic access'],
                    ['item' => 'Visitor-friendly convenience features'],
                ],
                'highlights' => [
                    ['value' => '24/7', 'label' => 'Emergency Support'],
                    ['value' => '6+', 'label' => 'Core Patient Facilities'],
                    ['value' => 'Safe', 'label' => 'Care Environment'],
                ],
                'section_heading' => 'Essential facilities that support better care',
                'section_intro' => 'Every area is planned to strengthen patient safety, improve workflow for healthcare teams, and create a more welcoming experience across the hospital campus.',
                'facilities' => [
                    ['title' => 'Modern Wards', 'tag' => 'Patient Care', 'icon' => 'fas fa-bed', 'image' => 'images/facilities/wads.jpg', 'description' => 'Comfortable inpatient wards designed for safe recovery, attentive nursing support, and dignified care.'],
                    ['title' => 'Emergency Services', 'tag' => '24/7 Response', 'icon' => 'fas fa-ambulance', 'image' => 'images/facilities/ambulance.jpg', 'description' => 'Round-the-clock emergency care with rapid triage, dedicated teams, and essential lifesaving equipment.'],
                    ['title' => 'Advanced Imaging', 'tag' => 'Diagnostics', 'icon' => 'fas fa-x-ray', 'image' => 'images/facilities/theater.jpg', 'description' => 'Imaging support that helps clinicians make timely, accurate decisions for treatment and follow-up care.'],
                    ['title' => 'Laboratory', 'tag' => 'Testing', 'icon' => 'fas fa-flask', 'image' => 'images/facilities/lab.jpg', 'description' => 'A dependable diagnostic laboratory focused on accurate results, efficient processing, and patient safety.'],
                    ['title' => 'Parking Facility', 'tag' => 'Convenience', 'icon' => 'fas fa-parking', 'image' => 'images/facilities/packing.jpg', 'description' => 'Accessible parking spaces that make hospital visits easier for patients, guardians, and other visitors.'],
                    ['title' => 'Free WiFi', 'tag' => 'Connected', 'icon' => 'fas fa-wifi', 'image' => 'images/facilities/Free-wifi.png', 'description' => 'Complimentary internet access in key public areas to support communication, updates, and convenience.'],
                ],
                'summary_heading' => 'Built to serve the community with dignity and efficiency',
                'summary_text' => 'Zomba Central Hospital continues to improve its care environment so that patients receive timely support, staff work effectively, and visitors can navigate the hospital with greater ease.',
                'summary_button_text' => 'Contact The Hospital',
                'summary_button_url' => 'frontend.contact',
            ],
        ],
    ];

    public function run(): void
    {
        foreach ($this->pages as $page) {
            $page['model']::query()->updateOrCreate(
                ['slug' => $page['slug']],
                [
                    'title' => $page['title'],
                    'content_data' => $page['content_data'],
                    'content_html' => '',
                    'is_published' => true,
                ],
            );
        }
    }
}
