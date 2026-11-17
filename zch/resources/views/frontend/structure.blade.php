@extends('layouts.app')
@section('content')
@php
  $pageData = $page?->content_data ?? [];
@endphp

<section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
  <div class="container">
    <div class="title-text">
      <h1>{{ $page?->title ?? 'Organisational Structure' }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ $page?->title ?? 'Organisational Structure' }}</li>
      </ul>
    </div>
  </div>
</section>

<main class="about-page">
  <section class="about-section about-organisation" id="organisational-structure">
    <div class="container">
      <div class="about-section-heading">
        <h2 class="about-heading">{{ data_get($pageData, 'heading', 'ZCH Organisational Structure') }}</h2>
        <p class="about-values-intro">{{ data_get($pageData, 'intro', 'Our structured approach to healthcare management and clinical excellence.') }}</p>
      </div>
      <div class="about-org-chart">
        <img loading="lazy" src="{{ \App\Models\HomePage::assetUrl(data_get($pageData, 'chart_image', 'images/gallery/structure.jpg')) }}" alt="{{ data_get($pageData, 'chart_alt', 'ZCH Organisational Chart') }}" class="img-fluid" style="width: 100%; border-radius: 16px; box-shadow: 0 14px 32px rgba(0, 168, 204, 0.15);">
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
