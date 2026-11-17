@extends('layouts.app')
@section('content')

@php
    $pageData = $page?->content_data ?? [];
    $audioItems = data_get($pageData, 'audio', [
        [
            'title' => 'From crisis to smile',
            'author' => 'Grace M.',
            'duration' => '2:15 min',
            'category' => 'Patient Voices',
            'description' => 'Grace shares how pediatric care saved her daughter during a severe malaria crisis.',
            'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3',
            'icon' => 'fas fa-microphone-alt',
        ],
        [
            'title' => 'Maternity Moments',
            'author' => 'Sr. Mary M.',
            'duration' => '3:02 min',
            'category' => 'Staff Sessions',
            'description' => 'Senior nurse Mary reflects on compassionate delivery care and healthy newborns.',
            'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3',
            'icon' => 'fas fa-hands-helping',
        ],
        [
            'title' => 'Mind & Soul',
            'author' => 'Counsellor Hastings',
            'duration' => '2:48 min',
            'category' => 'Health Talks',
            'description' => 'Mental health support, stigma reduction, and recovery journeys at Zomba Central Hospital.',
            'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3',
            'icon' => 'fas fa-brain',
        ],
        [
            'title' => 'Second Chance After Surgery',
            'author' => 'John P.',
            'duration' => '2:30 min',
            'category' => 'Patient Voices',
            'description' => 'John narrates his surgery recovery and the post-op care he received from the surgical ward.',
            'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-4.mp3',
            'icon' => 'fas fa-band-aid',
        ],
        [
            'title' => 'Living Well with Diabetes',
            'author' => 'Health Ed. Thandi',
            'duration' => '3:15 min',
            'category' => 'Health Talks',
            'description' => 'Practical nutrition tips and chronic care guidance for patients living with diabetes.',
            'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3',
            'icon' => 'fas fa-apple-alt',
        ],
        [
            'title' => 'Reaching Remote Villages',
            'author' => 'Outreach Team',
            'duration' => '2:55 min',
            'category' => 'Staff Sessions',
            'description' => 'Hear from our outreach lead about vaccine drives and preventive care in rural communities.',
            'audio_url' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-6.mp3',
            'icon' => 'fas fa-truck-medical',
        ],
    ]);
@endphp

<!-- Page Title -->
<section class="page-title text-center" style="background-image:url('{{ asset('images/background/3a.jpg?v=20260602') }}');">
  <div class="container">
    <div class="title-text">
      <h1>{{ strtoupper($page?->title ?? 'Audio Gallery') }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>Audio</li>
      </ul>
    </div>
  </div>
</section>

<style>
  .audio-page {
    background: #ffffff;
    padding: 4rem 0 5rem;
  }

  .audio-intro {
    max-width: 900px;
    margin: 0 auto 2.5rem;
    text-align: center;
  }

  .audio-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.45rem 1rem;
    border-radius: 999px;
    background: rgba(31, 138, 107, 0.12);
    color: #0f6b4b;
    font-size: 0.85rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 1rem;
  }

  .audio-intro h2 {
    color: #0c2f65;
    font-size: clamp(2rem, 4vw, 3.2rem);
    line-height: 1.1;
    margin-bottom: 0.5rem;
  }

  .audio-accent {
    width: 70px;
    height: 4px;
    border-radius: 999px;
    margin: 0.65rem auto 0;
    background: #1f8a6b;
  }

  .audio-intro p {
    color: #35584b;
    font-size: 1.05rem;
    margin: 0.95rem auto 0;
    max-width: 720px;
  }

  .audio-filter {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 0.8rem;
    margin: 0 0 2rem;
  }

  .audio-chip {
    background: #fff;
    border: 1px solid #cbdcd5;
    padding: 0.5rem 1.2rem;
    border-radius: 60px;
    font-weight: 600;
    font-size: 0.85rem;
    color: #2a5a4d;
    box-shadow: 0 1px 2px rgba(0,0,0,0.02);
    cursor: pointer;
    user-select: none;
    transition: all 0.2s ease;
  }

  .audio-chip.active {
    background: #00a8cc;
    border-color: #00a8cc;
    color: #fff;
  }

  .audio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
  }

  .audio-card {
    background: #ffffff;
    border: 1px solid rgba(31, 138, 107, 0.18);
    border-radius: 26px;
    overflow: hidden;
    box-shadow: 0 18px 32px -18px rgba(6, 78, 59, 0.22);
    display: flex;
    flex-direction: column;
    min-height: 100%;
    transition: transform 0.24s ease, box-shadow 0.24s ease, border-color 0.24s ease;
  }

  .audio-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 28px 46px -22px rgba(6, 78, 59, 0.28);
    border-color: rgba(31, 138, 107, 0.36);
  }

  .audio-top {
    padding: 1.6rem 1.5rem 1rem;
    background: linear-gradient(135deg, #f8fcfa 0%, #ffffff 100%);
    flex: 1 1 auto;
  }

  .audio-icon {
    width: 68px;
    height: 68px;
    border-radius: 50%;
    margin: 0 auto 1rem;
    display: grid;
    place-items: center;
    color: #00a8cc;
    font-size: 2rem;
    background: rgba(0, 168, 204, 0.12);
    box-shadow: 0 8px 16px -10px rgba(6, 78, 59, 0.35);
  }

  .audio-title {
    margin: 0 0 0.5rem;
    color: #0c4a3a;
    font-size: 1.25rem;
    font-weight: 700;
    text-align: center;
  }

  .audio-meta {
    display: flex;
    justify-content: center;
    gap: 0.9rem;
    flex-wrap: wrap;
    color: #5f7f72;
    font-size: 0.78rem;
    font-weight: 600;
  }

  .duration-badge {
    background: #eef4f1;
    border-radius: 999px;
    padding: 0.2rem 0.7rem;
    color: #1e6b56;
  }

  .audio-player {
    padding: 0.9rem 1.5rem 1.25rem;
    border-top: 1px solid #ebf2ef;
    background: #fff;
  }

  .audio-player audio {
    width: 100%;
    height: 48px;
  }

  .audio-desc {
    padding: 0 1.5rem 1.3rem;
    color: #2c5a4c;
    font-size: 0.92rem;
    line-height: 1.55;
    background: #fff;
    border-top: 1px solid #f0f6f2;
  }

  .audio-desc i {
    color: #329b7a;
    margin-right: 6px;
  }

  .audio-note {
    max-width: 760px;
    margin: 2.5rem auto 0;
    background: #eef3f0;
    border-radius: 999px;
    padding: 1rem 1.25rem;
    text-align: center;
    color: #1e6b56;
    box-shadow: 0 14px 24px -18px rgba(6, 78, 59, 0.28);
  }

  @media (max-width: 575px) {
    .audio-page {
      padding: 2.75rem 0 4rem;
    }

    .audio-top,
    .audio-player,
    .audio-desc {
      padding-left: 1.1rem;
      padding-right: 1.1rem;
    }
  }
</style>

<main class="audio-page">
  <div class="container">
    <div class="audio-intro">
      <div class="audio-pill"><i class="fas fa-head-side-medical"></i> Zomba Central Hospital</div>
      <h2>{{ data_get($pageData, 'audio_hero_title', 'Audio Gallery') }}</h2>
      <div class="audio-accent"></div>
      <p>{{ data_get($pageData, 'audio_hero_text', 'Listen to patient stories, staff reflections, health tips, and inspiring updates from our hospital community.') }}</p>
    </div>

    <div class="audio-filter" aria-label="Audio categories">
      <div class="audio-chip active"><i class="fas fa-list-ul"></i> All Stories</div>
      <div class="audio-chip"><i class="fas fa-user-md"></i> Patient Voices</div>
      <div class="audio-chip"><i class="fas fa-microphone-alt"></i> Health Talks</div>
      <div class="audio-chip"><i class="fas fa-heartbeat"></i> Staff Sessions</div>
    </div>

    <div class="audio-grid">
      @foreach($audioItems as $audio)
        <article class="audio-card">
          <div class="audio-top">
            <div class="audio-icon"><i class="{{ data_get($audio, 'icon', 'fas fa-microphone-alt') }}"></i></div>
            <h3 class="audio-title">{{ data_get($audio, 'title') }}</h3>
            <div class="audio-meta">
              <span><i class="far fa-user-circle"></i> {{ data_get($audio, 'author') }}</span>
              <span class="duration-badge"><i class="far fa-clock"></i> {{ data_get($audio, 'duration') }}</span>
            </div>
          </div>
          <div class="audio-player">
            <audio controls preload="metadata" aria-label="Audio player: {{ data_get($audio, 'title') }}">
              <source src="{{ data_get($audio, 'audio_url') }}" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </div>
          <div class="audio-desc">
            <i class="fas fa-comment-dots"></i> {{ data_get($audio, 'description') }}
          </div>
        </article>
      @endforeach
    </div>

    <div class="audio-note">
      <i class="fas fa-headphones"></i> All audio clips are presented as part of the Zomba Central Hospital media gallery.
    </div>
  </div>
</main>

@endsection
