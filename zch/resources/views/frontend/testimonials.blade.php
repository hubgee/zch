@extends('layouts.app')
@section('content')

@php
  $pageData = $page?->content_data ?? [];
@endphp

<style>
    .testimonials-page {
      background: #ffffff;
      padding: 4rem 0 5rem;
    }

    .testimonials-intro {
      max-width: 860px;
      margin: 0 auto 2.75rem;
      text-align: center;
    }

    .eyebrow {
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

    .testimonials-intro h2 {
      color: #0c2f65;
      font-size: clamp(2rem, 4vw, 3.2rem);
      line-height: 1.1;
      margin-bottom: 0.5rem;
    }

    .testimonials-intro p {
      color: #35584b;
      font-size: 1.05rem;
      margin: 0.95rem auto 0;
      max-width: 680px;
    }

    .testimonials-accent {
      width: 70px;
      height: 4px;
      border-radius: 999px;
      margin: 0.65rem auto 0;
      background: #1f8a6b;
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
    }

    .testimonial-card {
      background: #ffffff;
      border: 1px solid rgba(31, 138, 107, 0.18);
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 18px 32px -18px rgba(6, 78, 59, 0.22);
      transition: transform 0.24s ease, box-shadow 0.24s ease, border-color 0.24s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .testimonial-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 28px 46px -22px rgba(6, 78, 59, 0.28);
      border-color: rgba(31, 138, 107, 0.36);
    }

    .testimonial-top {
      padding: 1.6rem 1.5rem 1rem;
      background: linear-gradient(135deg, #f8fcfa 0%, #ffffff 100%);
      flex: 1 1 auto;
    }

    .quote-mark {
      color: #1f8a6b;
      font-size: 1.5rem;
      opacity: 0.55;
      margin-bottom: 0.9rem;
    }

    .testimonial-text {
      color: #1f2e2a;
      font-size: 1rem;
      line-height: 1.65;
      margin: 0;
    }

    .testimonial-rating {
      margin-top: 1rem;
      color: #f5b042;
      letter-spacing: 0.15rem;
      font-size: 0.95rem;
    }

    .testimonial-meta {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 1.2rem 1.5rem 1.4rem;
      border-top: 1px solid #e7eeea;
      background: #fbfdfc;
    }

    .testimonial-avatar {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      flex-shrink: 0;
      background: linear-gradient(135deg, #d8f0e6, #b8e1d1);
      color: #064e3b;
      font-weight: 800;
      font-size: 1.1rem;
      box-shadow: 0 8px 16px -10px rgba(6, 78, 59, 0.45);
    }

    .testimonial-meta h3 {
      margin: 0 0 0.2rem;
      font-size: 1.05rem;
      color: #0c4a3a;
    }

    .testimonial-tag {
      display: inline-flex;
      align-items: center;
      padding: 0.25rem 0.65rem;
      border-radius: 999px;
      background: #eef4f1;
      color: #4f7b6b;
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.02em;
      margin-bottom: 0.35rem;
    }

    .testimonial-date {
      color: #6b8e7e;
      font-size: 0.8rem;
      display: flex;
      align-items: center;
      gap: 0.4rem;
    }

    .testimonials-note {
      max-width: 720px;
      margin: 2.5rem auto 0;
      padding: 1rem 1.25rem;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.72);
      color: #2c6b58;
      text-align: center;
      box-shadow: 0 14px 24px -18px rgba(6, 78, 59, 0.28);
    }

    @media (max-width: 575px) {
      .testimonials-page {
        padding: 2.75rem 0 4rem;
      }

      .testimonial-meta {
        gap: 0.85rem;
      }

      .testimonial-top,
      .testimonial-meta {
        padding-left: 1.1rem;
        padding-right: 1.1rem;
      }
    }
  </style>

  <!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
  <div class="container">
    <div class="title-text">
      <h1>{{ strtoupper($page?->title ?? 'Patient Testimonials') }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>patient testimonials</li>
      </ul>
    </div>
  </div>
</section>

<main class="testimonials-page">
  <div class="container">
    <div class="testimonials-intro">
      <div class="eyebrow"><i class="fas fa-heartbeat"></i> {{ data_get($pageData, 'eyebrow_label', 'genuine voices') }}</div>
      <h2>{{ data_get($pageData, 'page_heading', 'Patient Testimonials') }}</h2>
      <div class="testimonials-accent"></div>
      <p>{{ data_get($pageData, 'page_description', 'Stories of care, healing, and hope from our patients and families. These experiences reflect the dedication of our teams across maternity, surgery, pediatrics, emergency care, chronic care, and counseling services at Zomba Central Hospital.') }}</p>
    </div>

    <div class="testimonials-grid">
      @foreach(data_get($pageData, 'testimonials', []) as $testimonial)
        <article class="testimonial-card">
          <div class="testimonial-top">
            <div class="quote-mark"><i class="fas fa-quote-left"></i></div>
            <p class="testimonial-text">"{{ data_get($testimonial, 'text', '') }}"</p>
            <div class="testimonial-rating">
              @for($i = 1; $i <= 5; $i++)
                @if($i <= data_get($testimonial, 'rating', 5))
                  <i class="fas fa-star"></i>
                @else
                  <i class="far fa-star"></i>
                @endif
              @endfor
            </div>
          </div>
          <div class="testimonial-meta">
            <div class="testimonial-avatar">{{ data_get($testimonial, 'initials', '') }}</div>
            <div>
              <h3>{{ data_get($testimonial, 'name', '') }}</h3>
              <div class="testimonial-tag">{!! data_get($testimonial, 'tag', '') !!}</div>
              <div class="testimonial-date"><i class="far fa-calendar-alt"></i> {{ data_get($testimonial, 'date', '') }}</div>
            </div>
          </div>
        </article>
      @endforeach
    </div>

    <div class="testimonials-note">
      <i class="fas fa-hand-holding-heart"></i> {!! data_get($pageData, 'note_text', 'Zomba Central Hospital, your health, our commitment. <strong>#HealingWithDignity</strong>') !!}
    </div>
  </div>
</main>

@endsection
