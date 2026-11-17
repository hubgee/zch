@extends('layouts.app')

@section('content')
@php
    $pageData = $page?->content_data ?? [];
    $videos = data_get($pageData, 'videos', [
        [
            'title' => 'Hospital Orientation',
            'description' => 'Overview of patient care services and pathways at ZCH.',
            'type' => 'Hospital Update',
            'embed_url' => 'https://www.youtube.com/embed/tgbNymZ7vqY',
        ],
        [
            'title' => 'Maternal & Child Awareness',
            'description' => 'Community education for maternal and newborn health.',
            'type' => 'Public Health',
            'embed_url' => 'https://www.youtube.com/embed/ysz5S6PUM-U',
        ],
        [
            'title' => 'Emergency Response Readiness',
            'description' => 'Inside our emergency and ICU preparedness drills.',
            'type' => 'Emergency',
            'embed_url' => 'https://www.youtube.com/embed/ScMzIvxBSi4',
        ],
        [
            'title' => 'Diagnostic Services Spotlight',
            'description' => 'How lab and imaging teams support faster diagnosis.',
            'type' => 'Diagnostics',
            'embed_url' => 'https://www.youtube.com/embed/jNQXAC9IVRw',
        ],
    ]);

    $videoHighlights = [
        ['value' => count($videos), 'label' => 'Featured Videos'],
        ['value' => '4', 'label' => 'Focus Areas'],
        ['value' => 'Official', 'label' => 'Hospital Content'],
    ];
@endphp

<style>
  .videos-page {
    background: linear-gradient(180deg, #eef8ff 0%, #ffffff 38%, #f8fbff 100%);
    color: #1e293b;
  }

  .videos-banner {
    position: relative;
    background-position: center;
    background-size: cover;
  }

  .videos-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, rgba(4, 31, 64, 0.84), rgba(0, 122, 204, 0.56));
  }

  .videos-banner .container {
    position: relative;
    z-index: 1;
  }

  .videos-section {
    padding: 90px 0 50px;
  }

  .videos-hero {
    background: linear-gradient(120deg, #0b3d91 0%, #00a8cc 100%);
    color: #ffffff;
    border-radius: 28px;
    padding: 38px 36px;
    margin-top: -70px;
    margin-bottom: 38px;
    position: relative;
    z-index: 2;
    box-shadow: 0 20px 48px rgba(11, 61, 145, 0.22);
    overflow: hidden;
  }

  .videos-hero::after {
    content: "";
    position: absolute;
    top: -70px;
    right: -30px;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08);
  }

  .videos-hero > * {
    position: relative;
    z-index: 1;
  }

  .videos-hero h2 {
    margin: 0 0 10px;
    font-size: 2.5rem;
    font-weight: 800;
    color: #ffffff;
  }

  .videos-hero p {
    margin: 0;
    max-width: 780px;
    color: rgba(255, 255, 255, 0.92);
    line-height: 1.8;
    font-size: 1.03rem;
  }

  .video-highlights {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 24px;
    margin-bottom: 54px;
  }

  .video-highlight {
    background: #ffffff;
    border: 1px solid #e2ebf5;
    border-radius: 22px;
    padding: 24px 22px;
    text-align: center;
    box-shadow: 0 14px 36px rgba(15, 23, 42, 0.05);
  }

  .video-highlight strong {
    display: block;
    color: #0b63b6;
    font-size: 1.9rem;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 10px;
  }

  .video-highlight span {
    color: #64748b;
    font-weight: 600;
  }

  .videos-heading {
    text-align: center;
    margin-bottom: 38px;
  }

  .videos-heading h3 {
    color: #163c6b;
    font-size: 2.15rem;
    font-weight: 800;
    margin-bottom: 12px;
  }

  .videos-heading p {
    max-width: 760px;
    margin: 0 auto;
    color: #5c7599;
    line-height: 1.85;
  }

  .vd-card {
    border: 1px solid #e5eef8;
    border-radius: 22px;
    overflow: hidden;
    background: #ffffff;
    box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    margin-bottom: 26px;
    height: calc(100% - 26px);
  }

  .vd-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 18px 34px rgba(0, 168, 204, 0.16);
  }

  .vd-media {
    position: relative;
    padding-top: 56.25%;
    background: #0b3d91;
  }

  .vd-media iframe {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    border: 0;
  }

  .vd-body {
    padding: 18px 18px 20px;
  }

  .vd-badge {
    display: inline-block;
    background: #e8f8fc;
    color: #007f9c;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 700;
    padding: 5px 10px;
    margin-bottom: 10px;
    letter-spacing: 0.03em;
    text-transform: uppercase;
  }

  .vd-title {
    font-size: 1.3rem;
    margin: 0 0 8px;
    color: #163c6b;
    font-weight: 800;
  }

  .vd-desc {
    margin: 0;
    color: #5c7599;
    line-height: 1.8;
  }

  .vd-empty {
    border: 1px dashed #c8d8ee;
    border-radius: 18px;
    padding: 34px 24px;
    text-align: center;
    color: #6884ac;
    background: #fbfdff;
  }

  .videos-cta {
    margin-top: 28px;
    border-radius: 28px;
    padding: 40px 36px;
    background: linear-gradient(135deg, #0f2747 0%, #0b63b6 48%, #1cb5e0 100%);
    color: #ffffff;
    box-shadow: 0 24px 60px rgba(11, 99, 182, 0.24);
  }

  .videos-cta h3 {
    color: #ffffff;
    font-size: 1.8rem;
    font-weight: 800;
    margin-bottom: 12px;
  }

  .videos-cta p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    margin-bottom: 0;
  }

  .videos-cta .btn-style-one {
    background: #ffffff;
    color: #0b63b6;
    border-color: #ffffff;
  }

  .videos-cta .btn-style-two {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.7);
  }

  @media (max-width: 991px) {
    .videos-section {
      padding-top: 70px;
    }

    .videos-hero {
      margin-top: 0;
      padding: 32px 26px;
    }

    .videos-hero h2 {
      font-size: 2rem;
    }

    .video-highlights {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 767px) {
    .videos-heading h3 {
      font-size: 1.9rem;
    }

    .videos-cta {
      padding: 32px 22px;
    }

    .videos-cta .btn-style-one,
    .videos-cta .btn-style-two {
      display: block;
      width: 100%;
      text-align: center;
      margin: 0 0 12px;
    }
  }
</style>

<section class="page-title text-center videos-banner" style="background-image:url('{{ asset('images/background/3a.jpg?v=20260602') }}');">
  <div class="container">
    <div class="title-text">
      <h1>{{ $page?->title ?? 'Videos' }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>Video Gallery</li>
      </ul>
    </div>
  </div>
</section>

<main class="videos-page">
  <section class="section videos-section">
    <div class="container">
      <div class="videos-hero">
        <h2>{{ data_get($pageData, 'videos_hero_title', 'Official Video Archive') }}</h2>
        <p>
          {{ data_get($pageData, 'videos_hero_text', 'Watch health awareness features, department highlights, community outreach updates, and public service announcements from Zomba Central Hospital.') }}
        </p>
      </div>

      <div class="video-highlights">
        @foreach ($videoHighlights as $highlight)
          <div class="video-highlight">
            <strong>{{ $highlight['value'] }}</strong>
            <span>{{ $highlight['label'] }}</span>
          </div>
        @endforeach
      </div>

      <div class="videos-heading">
        <h3>Health education and hospital stories in one place</h3>
        <p>
          Explore selected video content covering public health awareness, emergency preparedness, maternal and
          child health, and diagnostic services.
        </p>
      </div>

      @if ($videos)
        <div class="row">
          @foreach ($videos as $video)
            <div class="col-lg-6 col-md-6">
              <article class="vd-card">
                <div class="vd-media">
                  <iframe
                    src="{{ data_get($video, 'embed_url') }}"
                    title="{{ data_get($video, 'title') }}"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    loading="lazy"
                  ></iframe>
                </div>
                <div class="vd-body">
                  <span class="vd-badge">{{ data_get($video, 'type') }}</span>
                  <h3 class="vd-title">{{ data_get($video, 'title') }}</h3>
                  <p class="vd-desc">{{ data_get($video, 'description') }}</p>
                </div>
              </article>
            </div>
          @endforeach
        </div>
      @else
        <div class="vd-empty">
          <i class="fas fa-video fa-3x mb-3"></i>
          <h4>No Videos Available</h4>
          <p>Please check back later.</p>
        </div>
      @endif

      <div class="videos-cta">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h3>{{ data_get($pageData, 'videos_cta_title', 'Need more updates from the hospital?') }}</h3>
            <p>
              {{ data_get($pageData, 'videos_cta_text', 'Visit our other resource pages for photos, news, and community updates, or contact the hospital for official information.') }}
            </p>
          </div>
          <div class="col-lg-4 text-lg-right">
            <a href="{{ route('frontend.audio') }}" class="btn-style-one">Audio Gallery</a>
            <a href="{{ route('frontend.contact') }}" class="btn-style-two">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
