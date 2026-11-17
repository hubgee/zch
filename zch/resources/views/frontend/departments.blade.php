@extends('layouts.app')
@section('content')
<style>
  .department-layout {
    background: linear-gradient(180deg, #f5f9ff 0%, #f9fbff 45%, #f4f7fc 100%);
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .dept-sidebar-box,
  .dept-contact-box,
  .dept-hours-box,
  .dept-content-card,
  .dept-faq-block {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 10px 24px rgba(14, 42, 84, 0.09);
  }
  .dept-sidebar-box {
    padding: 20px;
    margin-bottom: 22px;
    border: 1px solid #e5edf8;
  }
  .dept-sidebar-box h5 {
    font-size: 28px;
    color: #0a2f5a;
    margin-bottom: 18px;
    line-height: 1.2;
  }
  .dept-links {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .dept-links li + li {
    margin-top: 8px;
  }
  .dept-links a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #0d2f68;
    color: #ffffff;
    padding: 10px 12px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 600;
  }
  .dept-links a:hover {
    background: #00a8cc;
    color: #ffffff;
  }
  .dept-group + .dept-group {
    margin-top: 12px;
  }
  .dept-group-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #0d2f68;
    color: #ffffff;
    padding: 10px 12px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 700;
  }
  .dept-sidebar-box .dept-group-title {
    display: none;
  }
  .dept-group-title:hover {
    background: #00a8cc;
    color: #ffffff;
  }
  .dept-sublist {
    margin: 8px 0 0;
    padding: 8px 10px 8px 22px;
    background: #f4f8ff;
    border-left: 3px solid #00a8cc;
    border-radius: 3px;
  }
  .dept-sublist li {
    color: #2e4662;
    font-size: 13px;
    line-height: 1.5;
    margin-bottom: 4px;
    cursor: pointer;
  }
  .dept-sublist li:hover {
    color: #00a8cc;
  }
  .dept-sublist li:last-child {
    margin-bottom: 0;
  }
  .dept-sublist-cards {
    list-style: none;
    padding: 0;
    margin-top: 10px;
    background: transparent;
    border-left: 0;
  }
  .dept-sublist-cards li {
    background: #00a8cc;
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    padding: 14px 16px;
    margin-bottom: 12px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 6px 16px rgba(0, 168, 204, 0.25);
    transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
  }
  .dept-sublist-cards li::after {
    content: "\f061";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: #ffffff;
    font-size: 16px;
  }
  .dept-sublist-cards li:hover {
    background: #00a8cc;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 10px 22px rgba(0, 168, 204, 0.32);
  }
  .dept-render-box {
    background: #f4f9ff;
    border-left: 4px solid #00a8cc;
    border-radius: 8px;
    padding: 16px 18px;
    margin: 12px 0 18px;
  }
  .dept-render-box h5 {
    margin-bottom: 8px;
    color: #0a2f5a;
    font-size: 26px;
  }
  .dept-render-box h6 {
    margin: 14px 0 8px;
    color: #0a2f5a;
    font-size: 16px;
  }
  .dept-render-box ul {
    margin: 0 0 8px;
    padding-left: 0;
  }
  .dept-render-box ul li {
    color: #3d536e;
    margin-bottom: 0;
    list-style: none;
  }
  .dept-render-box .operating-theatre-list li {
    position: relative;
    padding: 14px 0 14px 42px;
    font-size: 18px;
    color: #3e3e3e;
    border-bottom: 1px solid #e3e3e3;
  }
  .dept-render-box .operating-theatre-list li:last-child {
    border-bottom: 0;
  }
  .dept-render-box .operating-theatre-list li::before {
    content: "\f058";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    color: #28a745;
    font-size: 20px;
  }
  .dept-render-box h6 i {
    margin-right: 6px;
    color: #1386c9;
  }
  .dept-render-box p i {
    color: #1f5fa8;
    width: 20px;
    margin-right: 6px;
  }
  .dept-render-box img {
    border-radius: 6px;
    margin: 10px 0 6px;
  }
  .dept-render-box p {
    margin-bottom: 10px;
    color: #3d536e;
    line-height: 1.75;
  }
  .surgical-redesign {
    border: 1px solid #dce8f7;
  }
  .surgical-hero {
    display: grid;
    grid-template-columns: 1.15fr 1fr;
    gap: 20px;
    align-items: center;
    background: linear-gradient(135deg, #0c2f65 0%, #0f4d9b 55%, #00a8cc 100%);
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 18px;
  }
  .surgical-hero-copy .surgical-kicker {
    display: inline-block;
    color: #ffffff;
    font-size: 12px;
    letter-spacing: 1.2px;
    text-transform: uppercase;
  }
  .surgical-hero-copy h3 {
    color: #ffffff !important;
    margin: 8px 0 10px;
    font-size: 32px;
  }
  .surgical-hero-copy p {
    color: #ffffff !important;
    margin-bottom: 0;
  }
  .surgical-hero img {
    border-radius: 10px;
    max-height: 230px;
    width: 100%;
    object-fit: cover;
  }
  .surgical-render-box h5 {
    font-size: 28px;
    color: #102f57;
  }
  .surgical-render-box h6 {
    font-size: 20px;
    color: #123b73;
  }
  .surgical-info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-top: 10px;
  }
  .surgical-info-card {
    background: #ffffff;
    border: 1px solid #dce8f7;
    border-radius: 8px;
    padding: 14px;
  }
  .surgical-info-card h6 {
    margin-top: 0;
    color: #11407b;
  }
  .surgical-info-card p {
    color: #27384d;
  }
  .surgical-render-box p {
    color: #2f4158;
  }
  .surgical-render-box .operating-theatre-list li {
    color: #2d3f56;
  }
  @media (max-width: 991px) {
    .surgical-hero {
      grid-template-columns: 1fr;
    }
    .surgical-hero-copy h3 {
      font-size: 28px;
    }
    .surgical-info-grid {
      grid-template-columns: 1fr;
    }
  }
  .dept-contact-box,
  .dept-hours-box {
    padding: 20px;
    margin-bottom: 22px;
    border: 1px solid #e5edf8;
  }
  .dept-contact-box {
    background: linear-gradient(160deg, #0d3f8c, #00a8cc);
    color: #ffffff;
  }
  .dept-contact-box h6,
  .dept-contact-box p,
  .dept-contact-box a {
    color: #ffffff;
  }
  .dept-contact-box h6 {
    font-size: 18px;
    margin-bottom: 10px;
  }
  .dept-contact-box a {
    font-size: 22px;
    font-weight: 700;
  }
  .dept-hours-box h6 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #0a2f5a;
  }
  .dept-hours-box ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .dept-hours-box li {
    display: flex;
    justify-content: space-between;
    color: #526276;
    border-bottom: 1px solid #e7edf5;
    padding: 9px 0;
    font-size: 14px;
  }
  .dept-content-card {
    padding: 28px;
    margin-bottom: 22px;
    border: 1px solid #e6edf8;
  }
  .dept-content-card h3 {
    color: #0a2f5a;
    margin-bottom: 12px;
    font-size: 34px;
    line-height: 1.2;
  }
  .dept-content-card p {
    color: #4a5b70;
    line-height: 1.75;
  }
  .dept-content-card img {
    border-radius: 10px;
    margin: 12px 0 16px;
  }
  .dept-subservices {
    background: #f5f9ff;
    border-left: 4px solid #00a8cc;
    border-radius: 8px;
    padding: 16px;
  }
  .dept-subservices h5 {
    color: #0a2f5a;
    font-size: 19px;
    margin-bottom: 12px;
  }
  .dept-subservices ul {
    margin: 0;
    padding-left: 18px;
  }
  .dept-subservices li {
    color: #38506c;
    padding: 4px 0;
  }
  .dept-faq-block {
    padding: 24px;
    border: 1px solid #e6edf8;
  }
  .dept-faq-block h4 {
    color: #0a2f5a;
    margin-bottom: 14px;
    font-size: 28px;
  }
  .dept-faq-block .card {
    border: 1px solid #e5edf6;
    border-radius: 8px;
    overflow: hidden;
  }
  .dept-faq-block .card + .card {
    margin-top: 10px;
  }
  .dept-faq-block .card-header {
    background: #ffffff;
    padding: 0;
  }
  .dept-faq-block .btn-link {
    width: 100%;
    text-align: left;
    padding: 14px 16px;
    color: #0a2f5a;
    font-weight: 600;
    font-size: 15px;
  }
  .dept-faq-block .btn-link:hover,
  .dept-faq-block .btn-link:focus {
    text-decoration: none;
  }
  @media (max-width: 991px) {
    .department-layout {
      padding-top: 45px;
      padding-bottom: 45px;
    }
    .dept-sidebar-box h5 {
      font-size: 24px;
    }
    .dept-content-card {
      padding: 20px;
    }
    .dept-content-card h3 {
      font-size: 30px;
    }
  }
  @media (max-width: 576px) {
    .dept-sidebar-box h5 {
      font-size: 22px;
    }
    .dept-content-card h3 {
      font-size: 26px;
    }
    .dept-render-box h5 {
      font-size: 22px;
    }
  }
</style>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('images/background/3a.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>{{ $departments->first()->content_data['page_title'] ?? 'DEPARTMENTS' }}</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{ route('home') }}">home &nbsp;/</a>
                </li>
                <li>{{ $departments->first()->content_data['page_title'] ?? 'DEPARTMENTS' }}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="department-layout section">
  <div class="container">
    <div class="row">
      <aside class="col-lg-4 col-xl-3 mb-4 mb-lg-0">
        <div class="dept-sidebar-box">
          @foreach($departments as $dept)
          <div class="dept-group" data-department="{{ $dept->slug }}">
            <h5 class="dept-sidebar-heading">{{ $dept->content_data['sidebar_heading'] ?? $dept->title }}</h5>
            <a class="dept-group-title" href="#{{ $dept->slug }}">{{ $dept->title }} <i class="fas fa-arrow-right"></i></a>
            <ul class="dept-sublist dept-sublist-cards">
              @foreach($dept->content_data['sub_units'] ?? [] as $sub)
              <li>{{ $sub['name'] }}</li>
              @endforeach
            </ul>
          </div>
          @endforeach
        </div>
        <div class="dept-contact-box">
          <h6><i class="fas fa-phone-volume"></i> Emergency Cases</h6>
          <p>Please call our emergency line for urgent support at any time.</p>
          <a href="tel:+265999">+265 999</a>
        </div>
        <div class="dept-hours-box">
          <h6><i class="far fa-clock"></i> Opening Hours</h6>
          <ul>
            <li>Monday - Friday <span>08:00 - 17:00</span></li>
            <li>Saturday <span>09:00 - 13:00</span></li>
            <li>Sunday <span>10:00 - 12:00</span></li>
          </ul>
        </div>
      </aside>

      <div class="col-lg-8 col-xl-9">
        @foreach($departments as $dept)
        <article class="dept-content-card surgical-redesign" id="{{ $dept->slug }}" data-department="{{ $dept->slug }}">
          @php
            $firstSub = $dept->content_data['sub_units'][0] ?? null;
            $heroKicker = $dept->content_data['hero_kicker'] ?? 'Zomba Central Hospital';
            $heroTitle = $dept->content_data['hero_title'] ?? $dept->title;
            $heroText = $dept->content_data['hero_text'] ?? '';
            $heroImage = $dept->content_data['hero_image'] ?? 'images/gallery/gallery-04.jpg';
            $heroAlt = $dept->content_data['hero_alt'] ?? $dept->title;
          @endphp
          <div class="surgical-hero">
            <div class="surgical-hero-copy">
              <span class="surgical-kicker">{{ $heroKicker }}</span>
              <h3>{{ $heroTitle }}</h3>
              <p>{{ $heroText }}</p>
            </div>
            <img loading="lazy" src="{{ asset($heroImage) }}" alt="{{ $heroAlt }}" class="img-fluid">
          </div>

          <div class="dept-render-box surgical-render-box">
            <h5>{{ $dept->title }} - Overview</h5>
            <p>{{ $dept->content_data['overview_summary'] ?? '' }}</p>
          </div>

          <p>{{ $dept->content_data['overview_summary'] ?? '' }}</p>
          <div class="dept-subservices">
            <h5>Units Under {{ $dept->title }}</h5>
            <ul>
              @foreach($dept->content_data['overview_units'] ?? [] as $unit)
              <li>{{ $unit['unit'] }}</li>
              @endforeach
            </ul>
          </div>
        </article>
        @endforeach

        <div class="dept-faq-block">
          <h4>Health &amp; Tips Info</h4>
          <div class="accordion" id="deptFaq">
            @php
              $faqs = $departments->first()->content_data['faqs'] ?? null;
              $defaultFaqs = [
                ['question' => 'Which Department Should I Visit First?', 'answer' => 'Start at Outpatient or Emergency triage for assessment. You will then be directed to the appropriate specialist department.'],
                ['question' => 'Do I Need A Referral For Specialist Clinics?', 'answer' => 'Some clinics accept direct visits, while others require referral from a clinician. Reception will guide you on arrival.'],
              ];
              $faqItems = $faqs ?: $defaultFaqs;
            @endphp
            @foreach($faqItems as $index => $faq)
            <div class="card">
              <div class="card-header" id="faq{{ $index }}">
                <h5 class="mb-0">
                  <button class="btn btn-link {{ $index > 0 ? 'collapsed' : '' }}" type="button" data-toggle="collapse" data-target="#faqCollapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $index }}">
                    {{ $faq['question'] }}
                  </button>
                </h5>
              </div>
              <div id="faqCollapse{{ $index }}" class="collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="faq{{ $index }}" data-parent="#deptFaq">
                <div class="card-body">{{ $faq['answer'] }}</div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
