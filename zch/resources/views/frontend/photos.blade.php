@extends('layouts.app')

@section('content')
@php
    $pageData = $page?->content_data ?? [];
    $photos = data_get($pageData, 'photos', [
        [
            'title' => 'Facility 01',
            'description' => 'A closer look at one of the hospital spaces that supports daily patient care and service delivery.',
            'image' => 'images/gallery/gallery-01a.jpg',
        ],
        [
            'title' => 'Facility 02',
            'description' => 'A gallery view highlighting infrastructure and surroundings across the Zomba Central Hospital campus.',
            'image' => 'images/gallery/gallery-02a1.jpg',
        ],
        [
            'title' => 'Facility 03',
            'description' => 'Visual moments from our clinical environment, showing the spaces where services are delivered.',
            'image' => 'images/gallery/gallery-03a1.jpg',
            'full_image' => 'images/gallery/gallery-03a.jpg',
        ],
        [
            'title' => 'Facility 04',
            'description' => 'A snapshot of hospital infrastructure that reflects our commitment to care, safety, and access.',
            'image' => 'images/gallery/gallery-04a1.jpg',
        ],
        [
            'title' => 'Facility 05',
            'description' => 'Images that capture more of the hospital environment, facilities, and day-to-day care settings.',
            'image' => 'images/gallery/gallery-07a.jpg',
            'full_image' => 'images/gallery/gallery-05a.jpg',
        ],
        [
            'title' => 'Facility 06',
            'description' => 'Another selected view from the hospital showing service areas and facility presentation.',
            'image' => 'images/gallery/gallery-06a.jpg',
        ],
    ]);

    $galleryHighlights = [
        ['value' => count($photos), 'label' => 'Featured Photos'],
        ['value' => 'Campus', 'label' => 'Hospital Spaces'],
        ['value' => 'Visual', 'label' => 'Facility Stories'],
    ];
@endphp

<style>
  .photos-page {
    background: linear-gradient(180deg, #f4f9ff 0%, #ffffff 38%, #f8fbff 100%);
    color: #1e293b;
  }

  .photos-banner {
    position: relative;
    background-position: center;
    background-size: cover;
  }

  .photos-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, rgba(4, 31, 64, 0.84), rgba(0, 122, 204, 0.56));
  }

  .photos-banner .container {
    position: relative;
    z-index: 1;
  }

  .photos-section {
    padding: 90px 0 50px;
  }

  .photos-hero {
    background: linear-gradient(120deg, #0b3d91 0%, #00a8cc 100%);
    color: #ffffff;
    border-radius: 28px;
    padding: 38px 36px;
    margin-top: -70px;
    margin-bottom: 38px;
    position: relative;
    z-index: 2;
    overflow: hidden;
    box-shadow: 0 20px 48px rgba(11, 61, 145, 0.22);
  }

  .photos-hero::after {
    content: "";
    position: absolute;
    top: -70px;
    right: -20px;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08);
  }

  .photos-hero > * {
    position: relative;
    z-index: 1;
  }

  .photos-hero h2 {
    margin: 0 0 10px;
    font-size: 2.5rem;
    font-weight: 800;
    color: #ffffff;
  }

  .photos-hero p {
    margin: 0;
    max-width: 780px;
    color: rgba(255, 255, 255, 0.92);
    line-height: 1.8;
    font-size: 1.03rem;
  }

  .photo-highlights {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 24px;
    margin-bottom: 54px;
  }

  .photo-highlight {
    background: #ffffff;
    border: 1px solid #e2ebf5;
    border-radius: 22px;
    padding: 24px 22px;
    text-align: center;
    box-shadow: 0 14px 36px rgba(15, 23, 42, 0.05);
  }

  .photo-highlight strong {
    display: block;
    color: #0b63b6;
    font-size: 1.9rem;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 10px;
  }

  .photo-highlight span {
    color: #64748b;
    font-weight: 600;
  }

  .photos-heading {
    text-align: center;
    margin-bottom: 38px;
  }

  .photos-heading h3 {
    color: #163c6b;
    font-size: 2.15rem;
    font-weight: 800;
    margin-bottom: 12px;
  }

  .photos-heading p {
    max-width: 760px;
    margin: 0 auto;
    color: #5c7599;
    line-height: 1.85;
  }

  .gallery-item {
    background: #ffffff;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 14px 34px rgba(15, 23, 42, 0.08);
    border: 1px solid #e5eef8;
    margin-bottom: 28px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }

  .gallery-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 36px rgba(0, 168, 204, 0.16);
  }

  .gallery-figure {
    position: relative;
    margin: 0;
    overflow: hidden;
  }

  .gallery-figure img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
  }

  .gallery-item:hover .gallery-figure img {
    transform: scale(1.05);
  }

  .gallery-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    padding: 18px;
    background: linear-gradient(180deg, rgba(11, 61, 145, 0.05) 0%, rgba(10, 22, 42, 0.45) 100%);
  }

  .gallery-overlay span {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(6px);
    color: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
  }

  .gallery-body {
    padding: 18px 18px 20px;
  }

  .gallery-body h3 {
    color: #163c6b;
    font-size: 1.3rem;
    font-weight: 800;
    margin-bottom: 8px;
  }

  .gallery-body p {
    margin: 0;
    color: #5c7599;
    line-height: 1.8;
  }

  .photos-cta {
    margin-top: 24px;
    border-radius: 28px;
    padding: 40px 36px;
    background: linear-gradient(135deg, #0f2747 0%, #0b63b6 48%, #1cb5e0 100%);
    color: #ffffff;
    box-shadow: 0 24px 60px rgba(11, 99, 182, 0.24);
  }

  .photos-cta h3 {
    color: #ffffff;
    font-size: 1.8rem;
    font-weight: 800;
    margin-bottom: 12px;
  }

  .photos-cta p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    margin-bottom: 0;
  }

  .photos-cta .btn-style-one {
    background: #ffffff;
    color: #0b63b6;
    border-color: #ffffff;
  }

  .photos-cta .btn-style-two {
    background: #ffffff;
    color: #0f2747;
    border-color: #ffff;
    box-shadow: 0 10px 22px rgba(255, 205, 77, 0.28);
  }

  .photos-cta .btn-style-two:hover {
    background: #ffd86f;
    border-color: #ffd86f;
    color: #0f2747;
  }

  @media (max-width: 991px) {
    .photos-section {
      padding-top: 70px;
    }

    .photos-hero {
      margin-top: 0;
      padding: 32px 26px;
    }

    .photos-hero h2 {
      font-size: 2rem;
    }

    .photo-highlights {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 767px) {
    .photos-heading h3 {
      font-size: 1.9rem;
    }

    .gallery-figure img {
      height: 240px;
    }

    .photos-cta {
      padding: 32px 22px;
    }

    .photos-cta .btn-style-one,
    .photos-cta .btn-style-two {
      display: block;
      width: 100%;
      text-align: center;
      margin: 0 0 12px;
    }
  }
</style>

<section class="page-title text-center photos-banner" style="background-image:url('{{ asset('images/background/3a.jpg?v=20260602') }}');">
  <div class="container">
    <div class="title-text">
      <h1>{{ $page?->title ?? 'Photo Gallery' }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>Photo</li>
      </ul>
    </div>
  </div>
</section>

<main class="photos-page">
  <section class="gallery photos-section">
    <div class="container">
      <div class="photos-hero">
        <h2>{{ data_get($pageData, 'photos_hero_title', 'Collected Shots of Our Hospital') }}</h2>
        <p>
          {{ data_get($pageData, 'photos_hero_text', 'Explore selected images of hospital spaces, service areas, and facilities that reflect the care environment and daily life at Zomba Central Hospital.') }}
        </p>
      </div>

      <div class="photo-highlights">
        @foreach ($galleryHighlights as $highlight)
          <div class="photo-highlight">
            <strong>{{ $highlight['value'] }}</strong>
            <span>{{ $highlight['label'] }}</span>
          </div>
        @endforeach
      </div>

      <div class="photos-heading">
        <h3>Visual highlights from across the hospital</h3>
        <p>
          A curated gallery of hospital facilities and environments that gives visitors a better sense of our
          infrastructure, care spaces, and public-facing areas.
        </p>
      </div>

      <div class="row">
        @foreach ($photos as $photo)
          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <figure class="gallery-figure">
                <img loading="lazy" src="{{ \App\Models\HomePage::assetUrl(data_get($photo, 'image')) }}" class="img-fluid" alt="{{ data_get($photo, 'image_alt', data_get($photo, 'title')) }}">
                <a data-fancybox="photos" href="{{ \App\Models\HomePage::assetUrl(data_get($photo, 'full_image', data_get($photo, 'image'))) }}" aria-label="Open {{ data_get($photo, 'title') }}">
                  <div class="gallery-overlay">
                    <span><i class="fas fa-search-plus"></i></span>
                  </div>
                </a>
              </figure>
              <div class="gallery-body">
                <h3>{{ data_get($photo, 'title') }}</h3>
                <p>{{ data_get($photo, 'description') }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="photos-cta">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h3>{{ data_get($pageData, 'photos_cta_title', 'Want to explore more hospital updates?') }}</h3>
            <p>
              {{ data_get($pageData, 'photos_cta_text', 'You can continue browsing our resource centre through videos, audio features, and contact channels for more official hospital information.') }}
            </p>
          </div>
          <div class="col-lg-4 text-lg-right">
            <a href="{{ route('frontend.videos') }}" class="btn-style-one">Video Gallery</a>
            <a href="{{ route('frontend.contact') }}" class="btn-style-two">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
