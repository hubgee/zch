@extends('layouts.app')
@section('content')

@php
  $content = $page->content_data ?? [];
  $headingLabel = $content['page_heading_label'] ?? 'Our Services';
  $headingTitle = $content['page_heading_title'] ?? 'Excellent';
  $headingHighlight = $content['page_heading_highlight'] ?? 'Medical Services';
  $pageDescription = $content['page_description'] ?? '';
  $cards = $content['cards'] ?? [];
  $ctaHeading = $content['cta_heading'] ?? 'Need Immediate Medical Support?';
  $ctaDescription = $content['cta_description'] ?? '';
  $ctaButtonText = $content['cta_button_text'] ?? 'Book Appointment';
  $ctaButtonUrl = $content['cta_button_url'] ?? 'appointment.html';
  $serviceDepartmentRoutes = [
    'emergency care' => 'frontend.departments.emergency',
    'operation & surgery' => 'frontend.departments.surgical',
    'outdoor checkup' => 'frontend.departments.medical',
    'ambulance service' => 'frontend.departments.emergency',
    'medicine & pharmacy' => 'frontend.departments.medical',
    'blood testing' => 'frontend.departments.diagnostic',
  ];
@endphp

<style>
    :root {
      --svc-primary: #0f5c99;
      --svc-accent: #1aa6c1;
      --svc-ink: #132238;
      --svc-soft: #f4f8fc;
    }
    .services-style2-service-page {
      background:
        radial-gradient(circle at 10% 10%, rgba(26,166,193,.08) 0, rgba(26,166,193,0) 40%),
        radial-gradient(circle at 90% 0%, rgba(15,92,153,.08) 0, rgba(15,92,153,0) 36%),
        var(--svc-soft);
      padding-top: 84px;
      padding-bottom: 90px;
    }
    .services-style2-service-page .services-head .label {
      display: block;
      color: var(--svc-accent);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 1.2px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }
    .services-style2-service-page .services-head h2 {
      margin: 0;
      font-size: 26px;
      font-weight: 800;
      line-height: 1.1;
      text-transform: uppercase;
      color: var(--svc-ink);
      white-space: nowrap;
    }
    .services-style2-service-page .services-head h2 span {
      font-weight: 500;
      color: var(--svc-primary);
    }
    .services-style2-service-page .services-head p {
      color: #5d6470;
      font-size: 18px;
      line-height: 1.7;
      margin: 0;
      text-align: justify;
    }
    .service-card {
      margin-top: 34px;
      text-align: center;
      background: #fff;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(19,34,56,.08);
      transition: transform .28s ease, box-shadow .28s ease;
    }
    .service-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 18px 44px rgba(19,34,56,.14);
    }
    .service-card .img-holder {
      position: relative;
      overflow: hidden;
      background: #d9d9d9;
    }
    .service-card .img-holder img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: transform .4s ease;
    }
    .service-card .img-holder::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0,0,0,.28), rgba(0,0,0,.04));
      pointer-events: none;
    }
    .service-card:hover .img-holder img {
      transform: scale(1.04);
    }
    .service-card .icon-holder {
      width: 84px;
      height: 84px;
      border-radius: 50%;
      border: 2px dashed #d8d8d8;
      background: #fff;
      margin: -42px auto 0;
      position: relative;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--svc-primary);
      font-size: 30px;
    }
    .service-card .inner {
      padding: 22px 18px 0;
    }
    .service-card h3 {
      font-size: 28px;
      margin-bottom: 10px;
      color: #1a1f27;
    }
    .service-card .text p {
      color: #666d78;
      line-height: 1.75;
      min-height: 98px;
      margin-bottom: 16px;
    }
    .service-card .read-more a {
      display: inline-block;
      width: 100%;
      background: #eef6ff;
      color: var(--svc-primary);
      font-weight: 700;
      font-size: 15px;
      padding: 16px 14px;
      transition: all .3s ease;
    }
    .service-card .read-more a i {
      margin-left: 8px;
      transition: transform .3s ease;
    }
    .service-card .read-more a:hover {
      background: #00a8cc;
      color: #fff;
      text-decoration: none;
    }
    .service-card .read-more a:hover i {
      transform: translateX(4px);
    }
    .services-cta-strip {
      margin-top: 56px;
      background: linear-gradient(120deg, var(--svc-primary), var(--svc-accent));
      color: #fff;
      border-radius: 16px;
      padding: 28px 24px;
      box-shadow: 0 12px 34px rgba(15,92,153,.28);
    }
    .services-cta-strip h4 {
      margin: 0 0 8px;
      color: #fff;
      font-size: 28px;
    }
    .services-cta-strip p {
      margin: 0;
      color: #fff;
      opacity: 1;
    }
    .services-cta-strip .btn-style-one {
      background: #fff;
      color: var(--svc-primary);
      border-radius: 30px;
      padding: 11px 24px;
      font-weight: 700;
      margin-top: 10px;
    }
    @media (max-width: 991px) {
      .services-style2-service-page .services-head h2 {
        font-size: 22px;
        white-space: normal;
      }
      .services-style2-service-page .services-head p {
        margin-top: 16px;
        font-size: 16px;
      }
      .services-cta-strip h4 {
        font-size: 24px;
      }
    }
  </style>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('images/background/3a.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>SERVICES</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{ route('home') }}">home &nbsp;/</a>
                </li>
                <li>SERVICES</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Start services style2 Service Page-->
<section class="services-style2-service-page section">
  <div class="container">
    <div class="row services-head align-items-center">
      <div class="col-xl-5 col-lg-5">
        <div>
          <span class="label">{{ $headingLabel }}</span>
          <h2>{{ $headingTitle }} <span>{{ $headingHighlight }}</span></h2>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7">
        <div>
          <p>{{ $pageDescription }}</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($cards as $card)
      @php
        $serviceKey = \Illuminate\Support\Str::lower(trim(strip_tags($card['title'] ?? '')));
        $departmentSlug = $card['department_slug'] ?? null;
        $departmentRoute = $departmentSlug
          ? match ($departmentSlug) {
              'surgical' => 'frontend.departments.surgical',
              'maternal-child' => 'frontend.departments.maternal-child',
              'diagnostic' => 'frontend.departments.diagnostic',
              'emergency' => 'frontend.departments.emergency',
              'medical' => 'frontend.departments.medical',
              default => null,
            }
          : ($serviceDepartmentRoutes[$serviceKey] ?? null);
        $serviceUrl = $departmentRoute
          ? route($departmentRoute)
          : \App\Models\HomePage::resolveUrl($card['link'] ?? '#');
      @endphp
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="service-card wow fadeInUp" data-wow-delay="{{ $card['delay'] ?? '0ms' }}" data-wow-duration="{{ $card['duration'] ?? '1200ms' }}">
          <div class="img-holder">
            <img loading="lazy" src="{{ asset($card['image'] ?? '') }}" alt="{{ $card['image_alt'] ?? '' }}">
          </div>
          <div class="icon-holder"><i class="{{ $card['icon'] ?? '' }}"></i></div>
          <div class="inner">
            <h3>{!! $card['title'] ?? '' !!}</h3>
            <div class="text"><p>{{ $card['description'] ?? '' }}</p></div>
            <div class="read-more"><a href="{{ $serviceUrl }}">Read More <i class="fas fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="services-cta-strip">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h4>{{ $ctaHeading }}</h4>
          <p>{{ $ctaDescription }}</p>
        </div>
        <div class="col-lg-4 text-lg-right">
          <a href="{{ asset($ctaButtonUrl) }}" class="btn-style-one">{{ $ctaButtonText }}</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End services style2 Service Page-->

@endsection
