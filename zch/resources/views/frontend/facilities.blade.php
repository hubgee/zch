@extends('layouts.app')

@section('content')
@php
    $pageData = $page?->content_data ?? [];
    $facilities = data_get($pageData, 'facilities', [
        ['title' => 'Modern Wards', 'tag' => 'Patient Care', 'icon' => 'fas fa-bed', 'image' => 'images/facilities/wads.jpg', 'description' => 'Comfortable inpatient wards designed for safe recovery, attentive nursing support, and dignified care.'],
        ['title' => 'Emergency Services', 'tag' => '24/7 Response', 'icon' => 'fas fa-ambulance', 'image' => 'images/facilities/ambulance.jpg', 'description' => 'Round-the-clock emergency care with rapid triage, dedicated teams, and essential lifesaving equipment.'],
        ['title' => 'Advanced Imaging', 'tag' => 'Diagnostics', 'icon' => 'fas fa-x-ray', 'image' => 'images/facilities/theater.jpg', 'description' => 'Imaging support that helps clinicians make timely, accurate decisions for treatment and follow-up care.'],
        ['title' => 'Laboratory', 'tag' => 'Testing', 'icon' => 'fas fa-flask', 'image' => 'images/facilities/lab.jpg', 'description' => 'A dependable diagnostic laboratory focused on accurate results, efficient processing, and patient safety.'],
        ['title' => 'Parking Facility', 'tag' => 'Convenience', 'icon' => 'fas fa-parking', 'image' => 'images/facilities/packing.jpg', 'description' => 'Accessible parking spaces that make hospital visits easier for patients, guardians, and other visitors.'],
        ['title' => 'Free WiFi', 'tag' => 'Connected', 'icon' => 'fas fa-wifi', 'image' => 'images/facilities/Free-wifi.png', 'description' => 'Complimentary internet access in key public areas to support communication, updates, and convenience.'],
    ]);
    $highlights = data_get($pageData, 'highlights', [
        ['value' => '24/7', 'label' => 'Emergency Support'],
        ['value' => '6+', 'label' => 'Core Patient Facilities'],
        ['value' => 'Safe', 'label' => 'Care Environment'],
    ]);
    $checklist = data_get($pageData, 'checklist', [
        ['item' => 'Safe and supportive inpatient spaces'],
        ['item' => 'Rapid emergency and diagnostic access'],
        ['item' => 'Visitor-friendly convenience features'],
    ]);
@endphp

<style>
  .facilities-page { background: linear-gradient(180deg, #f4f9ff 0%, #ffffff 42%, #f7fbff 100%); color: #1e293b; }
  .facilities-banner { position: relative; background-position: center; background-size: cover; }
  .facilities-banner::before { content: ""; position: absolute; inset: 0; background: linear-gradient(120deg, rgba(3, 37, 76, 0.82), rgba(0, 122, 204, 0.58)); }
  .facilities-banner .container { position: relative; z-index: 1; }
  .facilities-section { padding: 90px 0 40px; }
  .facilities-hero { background: #ffffff; border-radius: 28px; box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08); overflow: hidden; margin-top: -70px; position: relative; z-index: 2; }
  .facilities-hero-copy { padding: 48px; }
  .facilities-eyebrow { display: inline-flex; align-items: center; gap: 10px; padding: 8px 16px; border-radius: 999px; background: #e8f3ff; color: #0b63b6; font-size: 13px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 20px; }
  .facilities-hero-copy h2 { color: #0f2747; font-size: 2.9rem; line-height: 1.15; margin-bottom: 18px; font-weight: 800; }
  .facilities-hero-copy p { color: #64748b; font-size: 1.05rem; line-height: 1.9; margin-bottom: 0; max-width: 640px; }
  .facilities-hero-panel { height: 100%; min-height: 100%; background: linear-gradient(160deg, #0056b3 0%, #00a8cc 100%); color: #ffffff; padding: 42px 34px; display: flex; flex-direction: column; justify-content: center; }
  .facilities-hero-panel h3 { color: #ffffff; font-size: 1.6rem; font-weight: 700; margin-bottom: 16px; }
  .facilities-hero-panel p { color: rgba(255, 255, 255, 0.92); margin-bottom: 26px; line-height: 1.8; }
  .facilities-checklist { list-style: none; padding: 0; margin: 0; }
  .facilities-checklist li { display: flex; align-items: center; gap: 12px; color: #ffffff; margin-bottom: 14px; font-weight: 600; }
  .facilities-checklist li i { width: 28px; height: 28px; border-radius: 50%; background: rgba(255, 255, 255, 0.16); display: inline-flex; align-items: center; justify-content: center; font-size: 12px; }
  .facility-highlights { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; margin: 38px 0 56px; }
  .facility-highlight { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 22px; padding: 26px 24px; text-align: center; box-shadow: 0 14px 36px rgba(15, 23, 42, 0.05); }
  .facility-highlight strong { display: block; color: #0b63b6; font-size: 1.9rem; line-height: 1; margin-bottom: 10px; font-weight: 800; }
  .facility-highlight span { color: #64748b; font-weight: 600; }
  .facilities-heading { text-align: center; margin-bottom: 42px; }
  .facilities-heading h3 { color: #0f2747; font-size: 2.2rem; font-weight: 800; margin-bottom: 12px; }
  .facilities-heading p { max-width: 760px; margin: 0 auto; color: #64748b; line-height: 1.8; }
  .facility-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 30px; }
  .facility-card { background: #ffffff; border-radius: 24px; overflow: hidden; border: 1px solid #e7eef6; box-shadow: 0 18px 48px rgba(15, 23, 42, 0.07); transition: transform 0.35s ease, box-shadow 0.35s ease; }
  .facility-card:hover { transform: translateY(-8px); box-shadow: 0 24px 54px rgba(15, 23, 42, 0.12); }
  .facility-image { position: relative; height: 240px; overflow: hidden; }
  .facility-image::after { content: ""; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(7, 20, 39, 0.08) 0%, rgba(7, 20, 39, 0.58) 100%); }
  .facility-image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.45s ease; }
  .facility-card:hover .facility-image img { transform: scale(1.08); }
  .facility-icon { position: absolute; left: 22px; bottom: 22px; z-index: 1; width: 54px; height: 54px; border-radius: 18px; background: rgba(255, 255, 255, 0.18); backdrop-filter: blur(8px); color: #ffffff; display: inline-flex; align-items: center; justify-content: center; font-size: 1.2rem; }
  .facility-body { padding: 28px 24px 26px; }
  .facility-tag { display: inline-block; margin-bottom: 14px; padding: 7px 14px; border-radius: 999px; background: #ebf5ff; color: #0b63b6; font-size: 12px; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; }
  .facility-body h4 { color: #0f2747; font-size: 1.35rem; font-weight: 800; margin-bottom: 12px; }
  .facility-body p { color: #64748b; line-height: 1.8; margin-bottom: 0; }
  .facility-summary { margin-top: 60px; border-radius: 28px; padding: 42px 40px; background: linear-gradient(135deg, #0f2747 0%, #0b63b6 45%, #1cb5e0 100%); color: #ffffff; box-shadow: 0 24px 60px rgba(11, 99, 182, 0.24); }
  .facility-summary h3 { color: #ffffff; font-size: 1.8rem; font-weight: 800; margin-bottom: 12px; }
  .facility-summary p { color: rgba(255, 255, 255, 0.9); line-height: 1.8; margin-bottom: 0; }
  .facility-summary .btn-style-one { background: #ffffff; color: #0b63b6; border-color: #ffffff; margin-top: 22px; }
  @media (max-width: 1199px) { .facility-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); } .facilities-hero-copy h2 { font-size: 2.4rem; } }
  @media (max-width: 991px) { .facilities-section { padding-top: 70px; } .facilities-hero { margin-top: 0; } .facilities-hero-copy, .facilities-hero-panel { padding: 34px 28px; } .facility-highlights { grid-template-columns: 1fr; } }
  @media (max-width: 767px) { .facility-grid { grid-template-columns: 1fr; } .facilities-hero-copy h2, .facilities-heading h3 { font-size: 2rem; } .facility-summary { padding: 34px 24px; } }
</style>

<section class="page-title text-center facilities-banner" style="background-image:url('{{ asset('images/background/3a.jpg?v=20260602') }}');">
  <div class="container">
    <div class="title-text">
      <h1>{{ $page?->title ?? 'Our Facilities' }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ $page?->title ?? 'Our Facilities' }}</li>
      </ul>
    </div>
  </div>
</section>

<main class="facilities-page">
  <section class="facilities-section">
    <div class="container">
      <div class="facilities-hero">
        <div class="row no-gutters align-items-stretch">
          <div class="col-lg-7">
            <div class="facilities-hero-copy">
              <span class="facilities-eyebrow">
                <i class="fas fa-hospital-alt"></i>
                {{ data_get($pageData, 'eyebrow', 'Zomba Central Hospital') }}
              </span>
              <h2>{{ data_get($pageData, 'hero_heading', 'Designed for quality care, comfort, and confidence.') }}</h2>
              <p>{{ data_get($pageData, 'hero_text', 'Our facilities support safe, efficient, and compassionate healthcare delivery. From emergency response and diagnostic services to patient wards and visitor amenities, each space is built to improve the care experience for patients, guardians, and staff.') }}</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="facilities-hero-panel">
              <h3>{{ data_get($pageData, 'panel_heading', 'What patients and visitors can expect') }}</h3>
              <p>{{ data_get($pageData, 'panel_text', 'Clean environments, accessible support areas, responsive service points, and essential amenities that help make every hospital visit more reassuring.') }}</p>
              <ul class="facilities-checklist">
                @foreach ($checklist as $item)
                  <li><i class="fas fa-check"></i> {{ $item['item'] }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="facility-highlights">
        @foreach ($highlights as $highlight)
          <div class="facility-highlight">
            <strong>{{ $highlight['value'] }}</strong>
            <span>{{ $highlight['label'] }}</span>
          </div>
        @endforeach
      </div>

      <div class="facilities-heading">
        <h3>{{ data_get($pageData, 'section_heading', 'Essential facilities that support better care') }}</h3>
        <p>{{ data_get($pageData, 'section_intro', 'Every area is planned to strengthen patient safety, improve workflow for healthcare teams, and create a more welcoming experience across the hospital campus.') }}</p>
      </div>

      <div class="facility-grid">
        @foreach ($facilities as $facility)
          <article class="facility-card">
            <div class="facility-image">
              <img loading="lazy" src="{{ \App\Models\HomePage::assetUrl($facility['image']) }}" alt="{{ $facility['title'] }}">
              <span class="facility-icon">
                <i class="{{ $facility['icon'] }}"></i>
              </span>
            </div>
            <div class="facility-body">
              <span class="facility-tag">{{ $facility['tag'] }}</span>
              <h4>{{ $facility['title'] }}</h4>
              <p>{{ $facility['description'] }}</p>
            </div>
          </article>
        @endforeach
      </div>

      <div class="facility-summary text-center text-lg-left">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h3>{{ data_get($pageData, 'summary_heading', 'Built to serve the community with dignity and efficiency') }}</h3>
            <p>{{ data_get($pageData, 'summary_text', 'Zomba Central Hospital continues to improve its care environment so that patients receive timely support, staff work effectively, and visitors can navigate the hospital with greater ease.') }}</p>
          </div>
          <div class="col-lg-4 text-lg-right">
            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'summary_button_url', 'frontend.contact')) }}" class="btn-style-one">{{ data_get($pageData, 'summary_button_text', 'Contact The Hospital') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
