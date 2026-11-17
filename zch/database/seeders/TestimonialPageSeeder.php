<?php

namespace Database\Seeders;

use App\Models\TestimonialPage;
use Illuminate\Database\Seeder;

class TestimonialPageSeeder extends Seeder
{
    public function run(): void
    {
        TestimonialPage::updateOrCreate(
            ['slug' => 'testimonials'],
            [
                'title' => 'Patient Testimonials',
                'is_published' => true,
                'content_data' => [
                    'eyebrow_label' => 'genuine voices',
                    'page_heading' => 'Patient Testimonials',
                    'page_description' => 'Stories of care, healing, and hope from our patients and families. These experiences reflect the dedication of our teams across maternity, surgery, pediatrics, emergency care, chronic care, and counseling services at Zomba Central Hospital.',
                    'testimonials' => [
                        [
                            'name' => 'Esther Banda',
                            'initials' => 'EB',
                            'tag' => 'Maternity & Childbirth',
                            'date' => 'March 2025',
                            'text' => 'The maternity team at Zomba Central Hospital treated me like family. During my delivery, the nurses were so encouraging and professional. I felt safe and cared for every step of the way. My baby boy arrived healthy, and I\'ll forever be grateful.',
                            'rating' => 5,
                        ],
                        [
                            'name' => 'John Phiri',
                            'initials' => 'JP',
                            'tag' => 'General Surgery',
                            'date' => 'January 2025',
                            'text' => 'After my hernia surgery, I was nervous about recovery, but the surgical ward staff were exceptional. They explained everything, managed my pain with care, and followed up even after discharge. Truly world-class dedication.',
                            'rating' => 5,
                        ],
                        [
                            'name' => 'Grace Mwale',
                            'initials' => 'GM',
                            'tag' => 'Pediatrics (Mother)',
                            'date' => 'December 2024',
                            'text' => 'My 3-year-old daughter had severe malaria. The pediatric team worked tirelessly, day and night. They not only saved her life but also comforted me as a worried mother. The new children\'s wing is a blessing for Zomba.',
                            'rating' => 5,
                        ],
                        [
                            'name' => 'Davie Likongwe',
                            'initials' => 'DL',
                            'tag' => 'Chronic Care / Diabetes',
                            'date' => 'February 2025',
                            'text' => 'Living with diabetes requires constant monitoring. The outpatient clinic at Zomba Central Hospital made managing my condition easier. The staff are respectful, medication is consistently available, and the health talks changed my lifestyle.',
                            'rating' => 5,
                        ],
                        [
                            'name' => 'Ruth Nkhoma',
                            'initials' => 'RN',
                            'tag' => 'Emergency & Trauma',
                            'date' => 'November 2024',
                            'text' => 'I was rushed to the emergency department after a road accident. The trauma team acted swiftly, with compassion and skill. Thanks to their fast decision-making and the modern equipment, I recovered faster than expected. Asante sana!',
                            'rating' => 5,
                        ],
                        [
                            'name' => 'Hastings Maluwa',
                            'initials' => 'HM',
                            'tag' => 'Mental Health & Counseling',
                            'date' => 'April 2025',
                            'text' => 'Seeking mental health support was never easy for me. But the counseling unit at Zomba Central Hospital is a safe haven. The therapists listened without judgment and guided me back to stability. I\'m living proof that healing starts here.',
                            'rating' => 4,
                        ],
                    ],
                    'note_text' => 'Zomba Central Hospital, your health, our commitment. #HealingWithDignity',
                ],
            ]
        );
    }
}
