@extends('layouts.app')
@section('content')
@php
  $pageData = $page?->content_data ?? [];
  $deputies = data_get($pageData, 'deputies', [
      ['name' => 'Dr. Delia Munthali Mabedi', 'role' => 'Deputy Hospital Director', 'alt' => 'Deputy Hospital Director', 'image' => 'images/team/d1.webp'],
      ['name' => 'Dr. Jessica Chakwana', 'role' => 'Deputy Director', 'alt' => 'Deputy Director', 'image' => 'images/team/d3.jpg'],
  ]);
  $teamMembers = data_get($pageData, 'team_members', [
      ['name' => 'Mrs. Grace Banda', 'role' => 'Chief Nursing Officer', 'alt' => 'Chief Nursing Officer', 'image' => 'images/team/d4.jpg'],
      ['name' => 'Mr. John Phiri', 'role' => 'Hospital Administrator', 'alt' => 'Hospital Administrator', 'image' => 'images/team/doctor-2.jpg'],
      ['name' => 'Ms. Mary Kachale', 'role' => 'Chief Finance Officer', 'alt' => 'Chief Finance Officer', 'image' => 'images/team/d3.jpg'],
      ['name' => 'Mr. Chipembo Soko', 'role' => 'Human Resource Officer', 'alt' => 'Human Resource Officer', 'image' => 'images/team/doctor-lab-1.jpg'],
      ['name' => 'Mr. David Mzere', 'role' => 'Procurement Officer', 'alt' => 'Procurement Officer', 'image' => 'images/team/d4.jpg'],
      ['name' => 'Mrs. Catherine Phiri', 'role' => 'Public Relations Officer', 'alt' => 'Public Relations Officer', 'image' => 'images/team/doctor-lab-3.jpg'],
  ]);
@endphp

<section class="page-title text-center" style="background-image:url('{{ asset('images/background/3a.jpg?v=20260602') }}');">
  <div class="container">
    <div class="title-text">
      <h1>{{ $page?->title ?? 'Hospital Management' }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ strtolower($page?->title ?? 'management') }}</li>
      </ul>
    </div>
  </div>
</section>

<main class="management-page">
  <section class="management-section">
    <div class="container">
      <div class="about-section-heading text-center management-intro">
        <h2 class="about-heading">{{ data_get($pageData, 'board_heading', 'Board of Directors') }}</h2>
        <p class="about-values-intro">{{ data_get($pageData, 'board_intro', 'The executive leadership overseeing the strategic direction of ZCH.') }}</p>
      </div>

      <div class="leadership-hierarchy">
        <div class="hierarchy-member hierarchy-lead">
          <img src="{{ \App\Models\HomePage::assetUrl(data_get($pageData, 'lead_image', 'images/team/doctormw-2a.jpg')) }}" alt="{{ data_get($pageData, 'lead_alt', 'Hospital Director General') }}">
          <h3>{{ data_get($pageData, 'lead_name', 'Dr. Saulos Nyirenda') }}</h3>
          <div class="leadership-box box-dg">{{ data_get($pageData, 'lead_role', 'Hospital Director General') }}</div>
        </div>

        <div class="hierarchy-connector" aria-hidden="true"></div>
        <div class="hierarchy-branch" aria-hidden="true"></div>

        <div class="hierarchy-deputies row mt-5">
          @foreach ($deputies as $member)
            <div class="col-md-6 text-center{{ $loop->first ? ' mb-4 mb-md-0' : '' }}">
              <div class="hierarchy-member">
                <img src="{{ \App\Models\HomePage::assetUrl($member['image']) }}" alt="{{ $member['alt'] }}">
                <h3>{{ $member['name'] }}</h3>
                <div class="leadership-box {{ $loop->first ? 'box-dhd' : 'box-dd' }}">{{ $member['role'] }}</div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section class="management-grid-section">
    <div class="container">
      <div class="about-section-heading text-center">
        <h2 class="about-heading">{{ data_get($pageData, 'team_heading', 'Senior Management Team') }}</h2>
        <p class="about-values-intro">{{ data_get($pageData, 'team_intro', 'Our diverse team of medical and administrative professionals.') }}</p>
      </div>

      <div class="management-grid">
        @foreach ($teamMembers as $member)
          <div class="hierarchy-member">
            <img src="{{ \App\Models\HomePage::assetUrl($member['image']) }}" alt="{{ $member['alt'] }}">
            <h3>{{ $member['name'] }}</h3>
            <div class="leadership-box">{{ $member['role'] }}</div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="about-section about-cta text-center management-cta" style="background: linear-gradient(rgba(0, 168, 204, 0.9), rgba(0, 168, 204, 0.9)), url('{{ asset('images/background/appoinment.jpg') }}') fixed center center; background-size: cover; color: #fff; padding: 80px 0 0; margin-bottom: 0;">
    <div class="container">
      <h2 style="color: #fff; font-size: 36px; margin-bottom: 20px;">{{ data_get($pageData, 'cta_title', 'Dedicated to Your Health & Well-being') }}</h2>
      <p style="color: #fff; font-size: 18px; max-width: 800px; margin: 0 auto 30px; opacity: 0.9;">{{ data_get($pageData, 'cta_text', 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.') }}</p>
      <div class="cta-btns pb-5">
        <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_1_url', 'frontend.contact')) }}" class="btn-style-one" style="background: #fff; color: #00a8cc; border-color: #fff;">{{ data_get($pageData, 'cta_button_1_text', 'Get in Touch') }}</a>
        <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_2_url', 'frontend.facilities')) }}" class="btn-style-two" style="background: transparent; color: #fff; border-color: #fff; margin-left: 15px;">{{ data_get($pageData, 'cta_button_2_text', 'Our Facilities') }}</a>
      </div>
    </div>
  </section>
</main>
@endsection
