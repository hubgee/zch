@extends('layouts.app')
@section('content')
@php
  $pageData = $page?->content_data ?? [];
  $compassItems = data_get($pageData, 'compass_items', [
      ['icon' => 'fas fa-eye', 'title' => 'Vision', 'body' => 'To be a centre of excellence in the provision of tertiary health services using cutting-edge technology in the South Eastern Zone.'],
      ['icon' => 'fas fa-bullhorn', 'title' => 'Mission', 'body' => 'To provide specialised, quality tertiary healthcare services to patients and clients in the South Eastern Zone and beyond.'],
      ['icon' => 'fas fa-tasks', 'title' => 'Mandate', 'body' => 'Tertiary referral & teaching hospital responsible for specialised healthcare, emergency care, inpatient/outpatient services, medical training, research, and referral support to districts within the South Eastern Region of Malawi and beyond.'],
  ]);
  $values = data_get($pageData, 'values', [
      ['value' => 'Teamwork'],
      ['value' => 'Privacy'],
      ['value' => 'Informed Consent'],
      ['value' => 'Safety'],
      ['value' => 'Integrity'],
      ['value' => 'Reliability'],
      ['value' => 'Equal Opportunities'],
      ['value' => 'Confidentiality'],
      ['value' => 'Veracity'],
      ['value' => 'Infection Prevention'],
      ['value' => 'Accountability'],
      ['value' => 'Responsibility'],
  ]);
  $milestones = data_get($pageData, 'milestones', [
      ['year' => '1930s', 'icon' => 'fas fa-hospital', 'title' => 'Hospital Established', 'description' => 'Founded as a modest facility with 50 beds and basic medical services for the Zomba community.'],
      ['year' => '1950s', 'icon' => 'fas fa-building', 'title' => 'Major Expansion', 'description' => 'Added a surgical wing and maternity department to meet growing regional healthcare demand.'],
      ['year' => '1980s', 'icon' => 'fas fa-microscope', 'title' => 'Modern Laboratory', 'description' => 'Upgraded diagnostic facilities and laboratory equipment to support advanced clinical care.'],
      ['year' => '2020s', 'icon' => 'fas fa-laptop-medical', 'title' => 'Digital Transformation', 'description' => 'Introduced electronic health records, telemedicine support, and modern hospital information systems.'],
  ]);
@endphp

<section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
  <div class="container">
    <div class="title-text">
      <h1>{{ $page?->title ?? 'ABOUT US' }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ $page?->title ?? 'ABOUT US' }}</li>
      </ul>
    </div>
  </div>
</section>

<main class="about-page">
  <section class="about-section about-history" id="background">
    <div class="container">
      <div class="row align-items-center about-history-row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="about-section-content">
            <h2 class="about-heading">{{ data_get($pageData, 'history_heading', 'Our History & Legacy') }}</h2>
            <p class="about-tagline">{{ data_get($pageData, 'history_tagline', 'Serving the Community Since 1930s.') }}</p>
            <p>{{ data_get($pageData, 'history_paragraph_1', 'Zomba Central Hospital was established in the 1930s with a vision to provide quality healthcare services to the people of Zomba and surrounding districts. What started as a modest 50-bed facility has grown into a comprehensive healthcare institution serving thousands of patients every year.') }}</p>
            <p>{{ data_get($pageData, 'history_paragraph_2', 'Over the decades, we have continued to evolve by adopting modern medical technologies and expanding our services to meet growing healthcare needs. Our commitment to excellence, compassion, and patient-centered care remains at the heart of everything we do.') }}</p>
            <div class="about-highlight">
              <i class="fas fa-shield-alt"></i>
              <div>
                <strong>{{ data_get($pageData, 'history_highlight_title', 'Tertiary & Teaching Hospital:') }}</strong>
                <span>{{ data_get($pageData, 'history_highlight_text', 'A referral centre and training hub supporting clinical education, specialist care, and national health priorities across Malawi.') }}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <figure class="about-figure">
            <img loading="lazy" class="img-fluid" src="{{ \App\Models\HomePage::assetUrl(data_get($pageData, 'history_image', 'images/about/1a.jpg')) }}" alt="{{ data_get($pageData, 'history_image_alt', 'Zomba Central Hospital building') }}">
            <figcaption>{{ data_get($pageData, 'history_caption', 'Early infrastructure of Zomba medical facilities foundation of care') }}</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="about-section about-compass" id="compass">
    <div class="container">
      <div class="about-section-heading">
        <h2 class="about-heading">{{ data_get($pageData, 'compass_heading', 'Our Compass') }}</h2>
      </div>
      <div class="about-compass-grid">
        @foreach ($compassItems as $item)
          <div class="about-compass-card">
            <i class="{{ $item['icon'] }}"></i>
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['body'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="about-section about-values" id="core-values">
    <div class="container">
      <div class="about-section-heading">
        <h2 class="about-heading">{{ data_get($pageData, 'values_heading', 'Core Values') }}</h2>
        <p class="about-values-intro">{{ data_get($pageData, 'values_intro', 'The principles that define our daily commitment to our patients and community.') }}</p>
      </div>
      <div class="about-values-grid">
        @foreach ($values as $item)
          <span class="about-value-tag">{{ $item['value'] }}</span>
        @endforeach
      </div>
    </div>
  </section>

  <section class="about-section about-training" id="training-legacy">
    <div class="container">
      <div class="about-training-panel">
        <div class="row align-items-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <figure class="about-figure about-training-figure">
              <img loading="lazy" class="img-fluid about-training-image" src="{{ \App\Models\HomePage::assetUrl(data_get($pageData, 'training_image', 'images/services/nu.jpg')) }}" alt="{{ data_get($pageData, 'training_image_alt', 'Nursing cohort, Zomba General Hospital - 1960s') }}">
              <figcaption>{{ data_get($pageData, 'training_caption', 'Nursing cohort, Zomba General Hospital - 1960s') }}</figcaption>
            </figure>
          </div>
          <div class="col-lg-7">
            <div class="about-section-content">
              <h2 class="about-heading"><i class="fas fa-school"></i> {{ data_get($pageData, 'training_heading', 'The Training School Legacy') }}</h2>
              <p>{{ data_get($pageData, 'training_paragraph_1', 'For generations, Zomba Central Hospital has been a cornerstone of health worker education in Malawi. Our training programmes have produced nurses, midwives, and clinical officers who serve communities across the country and beyond.') }}</p>
              <p>{{ data_get($pageData, 'training_paragraph_2', 'Through partnerships with the Ministry of Health and academic institutions, we continue to strengthen practical training, mentorship, and professional development, ensuring that every cohort carries forward our standards of compassionate, competent care.') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-section about-milestones" id="milestones">
    <div class="container">
      <div class="about-section-heading text-center">
        <h2 class="about-heading about-heading-underline">{{ data_get($pageData, 'milestones_heading', 'Historic Milestones') }}</h2>
      </div>
      <div class="about-milestone-list">
        @foreach ($milestones as $item)
          <article class="about-milestone-card">
            <div class="about-milestone-year">{{ $item['year'] }}</div>
            <div class="about-milestone-body">
              <i class="{{ $item['icon'] }}"></i>
              <div>
                <h3>{{ $item['title'] }}</h3>
                <p>{{ $item['description'] }}</p>
              </div>
            </div>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <section class="about-section about-cta text-center" style="background: linear-gradient(rgba(0, 168, 204, 0.9), rgba(0, 168, 204, 0.9)), url('images/background/appoinment.jpg') fixed center center; background-size: cover; color: #fff; padding: 80px 0;">
    <div class="container">
      <h2 style="color: #fff; font-size: 36px; margin-bottom: 20px;">{{ data_get($pageData, 'cta_title', 'Dedicated to Your Health & Well-being') }}</h2>
      <p style="color: #fff; font-size: 18px; max-width: 800px; margin: 0 auto 30px; opacity: 0.9;">{{ data_get($pageData, 'cta_text', 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.') }}</p>
      <div class="cta-btns">
        <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_1_url', 'frontend.contact')) }}" class="btn-style-one" style="background: #fff; color: #00a8cc; border-color: #fff;">{{ data_get($pageData, 'cta_button_1_text', 'Get in Touch') }}</a>
        <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_2_url', 'frontend.services')) }}" class="btn-style-two" style="background: transparent; color: #fff; border-color: #fff; margin-left: 15px;">{{ data_get($pageData, 'cta_button_2_text', 'Our Services') }}</a>
      </div>
    </div>
  </section>
</main>
@endsection
