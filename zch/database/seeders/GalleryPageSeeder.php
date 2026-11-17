<?php

namespace Database\Seeders;

use App\Models\GalleryPage;
use Illuminate\Database\Seeder;

class GalleryPageSeeder extends Seeder
{
    public function run(): void
    {
        GalleryPage::updateOrCreate(
            ['slug' => 'gallery'],
            [
                'title' => 'Gallery',
                'is_published' => true,
                'content_data' => [
                    'photos' => [
                        ['title' => 'Facility 01', 'description' => 'A closer look at one of the hospital spaces that supports daily patient care and service delivery.', 'image' => 'images/gallery/gallery-01a.jpg', 'full_image' => 'images/gallery/gallery-01a.jpg', 'image_alt' => 'Facility 01'],
                        ['title' => 'Facility 02', 'description' => 'A gallery view highlighting infrastructure and surroundings across the Zomba Central Hospital campus.', 'image' => 'images/gallery/gallery-02a1.jpg', 'full_image' => 'images/gallery/gallery-02a1.jpg', 'image_alt' => 'Facility 02'],
                        ['title' => 'Facility 03', 'description' => 'Visual moments from our clinical environment, showing the spaces where services are delivered.', 'image' => 'images/gallery/gallery-03a1.jpg', 'full_image' => 'images/gallery/gallery-03a.jpg', 'image_alt' => 'Facility 03'],
                        ['title' => 'Facility 04', 'description' => 'A snapshot of hospital infrastructure that reflects our commitment to care, safety, and access.', 'image' => 'images/gallery/gallery-04a1.jpg', 'full_image' => 'images/gallery/gallery-04a1.jpg', 'image_alt' => 'Facility 04'],
                        ['title' => 'Facility 05', 'description' => 'Images that capture more of the hospital environment, facilities, and day-to-day care settings.', 'image' => 'images/gallery/gallery-07a.jpg', 'full_image' => 'images/gallery/gallery-05a.jpg', 'image_alt' => 'Facility 05'],
                        ['title' => 'Facility 06', 'description' => 'Another selected view from the hospital showing service areas and facility presentation.', 'image' => 'images/gallery/gallery-06a.jpg', 'full_image' => 'images/gallery/gallery-06a.jpg', 'image_alt' => 'Facility 06'],
                    ],
                    'videos' => [
                        ['title' => 'Hospital Orientation', 'description' => 'Overview of patient care services and pathways at ZCH.', 'type' => 'Hospital Update', 'embed_url' => 'https://www.youtube.com/embed/tgbNymZ7vqY'],
                        ['title' => 'Maternal & Child Awareness', 'description' => 'Community education for maternal and newborn health.', 'type' => 'Public Health', 'embed_url' => 'https://www.youtube.com/embed/ysz5S6PUM-U'],
                        ['title' => 'Emergency Response Readiness', 'description' => 'Inside our emergency and ICU preparedness drills.', 'type' => 'Emergency', 'embed_url' => 'https://www.youtube.com/embed/ScMzIvxBSi4'],
                        ['title' => 'Diagnostic Services Spotlight', 'description' => 'How lab and imaging teams support faster diagnosis.', 'type' => 'Diagnostics', 'embed_url' => 'https://www.youtube.com/embed/jNQXAC9IVRw'],
                    ],
                    'audio' => [
                        ['title' => 'From crisis to smile', 'author' => 'Grace M.', 'duration' => '2:15 min', 'category' => 'Patient Voices', 'description' => 'Grace shares how pediatric care saved her daughter during a severe malaria crisis.', 'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3', 'icon' => 'fas fa-microphone-alt'],
                        ['title' => 'Maternity Moments', 'author' => 'Sr. Mary M.', 'duration' => '3:02 min', 'category' => 'Patient Voices', 'description' => 'Senior nurse Mary reflects on compassionate delivery care and healthy newborns.', 'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3', 'icon' => 'fas fa-hands-helping'],
                        ['title' => 'Mind & Soul', 'author' => 'Counsellor Hastings', 'duration' => '2:48 min', 'category' => 'Health Talks', 'description' => 'Mental health support, stigma reduction, and recovery journeys at Zomba Central Hospital.', 'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3', 'icon' => 'fas fa-brain'],
                        ['title' => 'Second Chance After Surgery', 'author' => 'John P.', 'duration' => '2:30 min', 'category' => 'Patient Voices', 'description' => 'John narrates his surgery recovery and the post-op care he received from the surgical ward.', 'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-4.mp3', 'icon' => 'fas fa-band-aid'],
                        ['title' => 'Living Well with Diabetes', 'author' => 'Health Ed. Thandi', 'duration' => '3:15 min', 'category' => 'Health Talks', 'description' => 'Practical nutrition tips and chronic care guidance for patients living with diabetes.', 'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3', 'icon' => 'fas fa-apple-alt'],
                        ['title' => 'Reaching Remote Villages', 'author' => 'Outreach Team', 'duration' => '2:55 min', 'category' => 'Staff Sessions', 'description' => 'Hear from our outreach lead about vaccine drives and preventive care in rural communities.', 'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-6.mp3', 'icon' => 'fas fa-truck-medical'],
                    ],
                    'photos_hero_title' => 'Collected Shots of Our Hospital',
                    'photos_hero_text' => 'Explore selected images of hospital spaces, service areas, and facilities that reflect the care environment and daily life at Zomba Central Hospital.',
                    'videos_hero_title' => 'Official Video Archive',
                    'videos_hero_text' => 'Watch health awareness features, department highlights, community outreach updates, and public service announcements from Zomba Central Hospital.',
                    'audio_hero_title' => 'Audio Gallery',
                    'audio_hero_text' => 'Listen to patient stories, staff reflections, health tips, and inspiring updates from our hospital community.',
                    'photos_cta_title' => 'Want to explore more hospital updates?',
                    'photos_cta_text' => 'You can continue browsing our resource centre through videos, audio features, and contact channels for more official hospital information.',
                    'videos_cta_title' => 'Need more updates from the hospital?',
                    'videos_cta_text' => 'Visit our other resource pages for photos, news, and community updates, or contact the hospital for official information.',
                ],
            ]
        );
    }
}
