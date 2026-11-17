@extends('layouts.app')
@section('content')
@php
  $pageData = $page?->content_data ?? [];
  $doctors = data_get($pageData, 'doctors', [
      ['name' => 'Dr. Soulos Nyirenda', 'specialty' => 'Urology Specialist.', 'image' => 'images/team/doctor-2.jpg', 'alt' => 'doctor'],
      ['name' => 'Dr. Jessica Chakwana', 'specialty' => 'Pediatrics Specialist', 'image' => 'images/team/doctor-lab-3.jpg', 'alt' => 'doctor'],
      ['name' => 'Dr. Delia Munthali Mabedi', 'specialty' => 'ICU Specialist', 'image' => 'images/team/doctor-lab-3.jpg', 'alt' => 'doctor'],
  ]);
  $chunked = collect($doctors)->chunk(3);
@endphp

<section class="page-title text-center" style="background-image:url('{{ asset('images/background/3a.jpg?v=20260602') }}');">
  <div class="container">
    <div class="title-text">
      <h1>{{ $page?->title ?? 'Doctors' }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ strtolower($page?->title ?? 'doctors') }}</li>
      </ul>
    </div>
  </div>
</section>

<section class="team-section section">
  <div class="container">
    <div class="section-title text-center">
      <h3>{{ data_get($pageData, 'page_heading_label', 'Our Expert') }} <span>{{ data_get($pageData, 'page_heading_highlight', 'Doctors') }}</span></h3>
      <p class="mb-0">{{ data_get($pageData, 'page_description', 'Meet our experienced medical professionals dedicated to quality patient care.') }}</p>
    </div>
    @foreach ($chunked as $row)
      <div class="row justify-content-center{{ $loop->first ? '' : ' mt-4' }}">
        @foreach ($row as $doctor)
          <div class="col-lg-4 col-md-6">
            <div class="team-member">
              <img loading="lazy" src="{{ \App\Models\HomePage::assetUrl($doctor['image'] ?? '') }}" alt="{{ $doctor['alt'] ?? 'doctor' }}" class="img-fluid">
              <div class="contents text-center">
                <h4>{{ $doctor['name'] }}</h4>
                <p>{{ $doctor['specialty'] }}</p>
                <a href="{{ route('frontend.appointment', ['doctor' => $doctor['name']]) }}" class="btn btn-main">BOOK APPOINTMENT</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
</section>

<!-- CTA Section -->
<section class="about-section about-cta text-center" style="background: linear-gradient(rgba(0, 168, 204, 0.9), rgba(0, 168, 204, 0.9)), url('{{ asset('images/background/appoinment.jpg') }}') fixed center center; background-size: cover; color: #fff; padding: 80px 0;">
  <div class="container">
    <h2 style="color: #fff; font-size: 36px; margin-bottom: 20px;">{{ data_get($pageData, 'cta_title', 'Dedicated to Your Health & Well-being') }}</h2>
    <p style="color: #fff; font-size: 18px; max-width: 800px; margin: 0 auto 30px; opacity: 0.9;">{{ data_get($pageData, 'cta_text', 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.') }}</p>
    <div class="cta-btns">
      <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_1_url', 'frontend.contact')) }}" class="btn-style-one" style="background: #fff; color: #00a8cc; border-color: #fff;">{{ data_get($pageData, 'cta_button_1_text', 'Get in Touch') }}</a>
      <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_2_url', 'frontend.services')) }}" class="btn-style-two" style="background: transparent; color: #fff; border-color: #fff; margin-left: 15px;">{{ data_get($pageData, 'cta_button_2_text', 'Our Services') }}</a>
    </div>
  </div>
</section>

@endsection
