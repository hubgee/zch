@extends('layouts.app')

@section('content')
<style>
  .department-layout {
    background: #f4f8fd;
  }

  .dept-sidebar-box,
  .dept-contact-box,
  .dept-hours-box,
  .dept-faq-block,
  .dept-content-card {
    background: #fff;
    border: 1px solid #dbe7f3;
    border-radius: 8px;
    box-shadow: 0 8px 24px rgba(18, 53, 87, 0.06);
  }

  .dept-sidebar-box,
  .dept-contact-box,
  .dept-hours-box {
    padding: 16px;
  }

  .dept-sidebar-heading {
    margin-bottom: 14px;
    font-size: 22px;
    line-height: 1.15;
    font-weight: 800;
    color: #0a2c5a;
  }

  .dept-group + .dept-group {
    margin-top: 10px;
  }

  .dept-group-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding: 10px 12px;
    border-radius: 4px;
    background: #00a8cc;
    color: #fff !important;
    font-weight: 600;
    text-decoration: none !important;
    font-size: 15px;
    line-height: 1.2;
  }

  .dept-group-title i {
    margin-left: auto;
    font-size: 14px;
  }

  .dept-group-title:hover,
  .dept-group-title.is-active,
  .dept-group:first-child .dept-group-title {
    background: #00a8cc;
    color: #fff !important;
  }

  .dept-sublist {
    list-style: none;
    padding: 0;
    margin: 8px 0 0;
  }

  .dept-sublist li {
    margin-bottom: 7px;
  }

  .dept-sublist li a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    padding: 8px 10px;
    border-radius: 4px;
    background: #00a8cc;
    border: 1px solid #00a8cc;
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
  }

  .dept-sublist li a:hover,
  .dept-sublist li a.is-active {
    background: #00a8cc;
    border-color: #00a8cc;
    color: #fff;
  }

  .dept-sublist li a i {
    font-size: 13px;
  }

  .dept-contact-box,
  .dept-hours-box {
    margin-top: 14px;
  }

  .dept-contact-box h6,
  .dept-hours-box h6 {
    margin-bottom: 10px;
    color: #0a2c5a;
    font-size: 16px;
    font-weight: 800;
  }

  .dept-contact-box p,
  .dept-hours-box li {
    font-size: 13px;
    color: #4a5d73;
  }

  .dept-contact-box a {
    display: inline-block;
    margin-top: 6px;
    font-weight: 700;
    color: #0ea5d8;
    text-decoration: none;
  }

  .dept-contact-box {
    background: linear-gradient(135deg, #0a4f9b 0%, #0d78be 54%, #12a7d1 100%);
    border: 0;
    color: #fff;
  }

  .dept-contact-box h6,
  .dept-contact-box p,
  .dept-contact-box a {
    color: #fff;
  }

  .dept-hours-box ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .dept-hours-box li {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    padding: 12px 0;
    border-bottom: 1px solid #eef4fa;
  }

  .dept-hours-box li:last-child {
    border-bottom: 0;
    padding-bottom: 0;
  }

  .dept-content-card {
    padding: 16px;
    margin-bottom: 16px;
  }

  .surgical-hero {
    display: grid;
    grid-template-columns: minmax(0, 1.25fr) minmax(220px, 0.75fr);
    gap: 16px;
    align-items: stretch;
    padding: 16px;
    border-radius: 8px;
    background: linear-gradient(135deg, #0b3a74 0%, #0b6aa4 55%, #0ea5d8 100%);
    color: #fff;
    margin-bottom: 14px;
  }

  .surgical-hero-copy {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .surgical-kicker {
    display: inline-block;
    margin-bottom: 10px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    opacity: 0.88;
  }

  .surgical-hero-copy h3 {
    margin-bottom: 8px;
    color: #fff;
    font-size: 32px;
    font-weight: 800;
  }

  .surgical-hero-copy p {
    margin-bottom: 0;
    max-width: 430px;
    color: rgba(255, 255, 255, 0.95);
    font-size: 14px;
    line-height: 1.6;
    font-weight: 600;
  }

  .surgical-hero img {
    width: 100%;
    height: 100%;
    min-height: 170px;
    object-fit: cover;
    border-radius: 4px;
  }

  .dept-render-box h5 {
    margin-bottom: 8px;
    color: #12355a;
    font-size: 20px;
    font-weight: 800;
  }

  .dept-render-box p {
    color: #52667a;
    font-size: 14px;
    line-height: 1.7;
  }

  .dept-render-box img {
    width: 100%;
    max-width: 310px;
    border-radius: 8px;
    margin: 10px 0 14px;
  }

  .operating-theatre-list {
    list-style: none;
    padding: 0;
    margin: 12px 0 0;
  }

  .operating-theatre-list li {
    padding: 10px 0;
    border-bottom: 1px solid #dbe7f3;
    font-size: 14px;
    color: #18395d;
  }

  .operating-theatre-list li:last-child {
    border-bottom: 0;
  }

  .operating-theatre-list li::before {
    content: "\f058";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: #15a84a;
    margin-right: 10px;
  }

  .surgical-info-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 12px;
    margin-top: 14px;
  }

  .surgical-info-card {
    border: 1px solid #dbe7f3;
    border-radius: 4px;
    padding: 12px;
    background: #fff;
  }

  .surgical-info-card h6 {
    margin-bottom: 8px;
    color: #12355a;
    font-size: 14px;
    font-weight: 800;
  }

  .surgical-info-card p {
    margin-bottom: 0;
    color: #52667a;
    font-size: 13px;
    line-height: 1.6;
  }

  .dept-subservices {
    margin-top: 16px;
    padding: 14px;
    border-radius: 4px;
    border: 1px solid #dbe7f3;
    background: #f8fbff;
  }

  .dept-subservices h5 {
    margin-bottom: 10px;
    color: #12355a;
    font-size: 18px;
    font-weight: 800;
  }

  .dept-subservices ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .dept-subservices li {
    padding: 5px 0;
    font-size: 14px;
    color: #34526f;
  }

  .dept-faq-block {
    padding: 0;
    overflow: hidden;
  }

  .dept-faq-block h4 {
    margin: 0;
    padding: 14px 16px;
    border-bottom: 1px solid #dbe7f3;
    color: #12355a;
    font-size: 18px;
    font-weight: 800;
  }

  .dept-faq-block .accordion {
    margin: 0;
  }

  .dept-faq-block .card {
    border: 0;
    border-bottom: 1px solid #e6eef6;
    border-radius: 0;
  }

  .dept-faq-block .card:last-child {
    border-bottom: 0;
  }

  .dept-faq-block .card-header {
    background: #fff;
    border: 0;
    padding: 0;
  }

  .dept-faq-block .btn.btn-link {
    width: 100%;
    text-align: left;
    text-decoration: none;
    color: #12355a;
    font-weight: 700;
    padding: 12px 16px;
    white-space: normal;
  }

  .dept-faq-block .card-body {
    padding: 0 16px 16px;
    font-size: 13px;
    color: #52667a;
    line-height: 1.7;
  }

  @media (max-width: 991.98px) {
    .surgical-hero {
      grid-template-columns: 1fr;
    }

    .surgical-info-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

@php
  $subUnits = $department->content_data['sub_units'] ?? [];
  $firstSubUnit = $subUnits[0] ?? [];
  $deptMapData = [];
  foreach ($subUnits as $su) {
    $servicesArr = [];
    foreach ($su['services'] ?? [] as $svc) {
      $servicesArr[] = $svc['service'] ?? $svc;
    }
    $unitsArr = [];
    foreach ($su['units'] ?? [] as $u) {
      $unitsArr[] = $u['unit'] ?? $u;
    }
    $deptMapData[$su['slug']] = [
      'heroTitle' => $su['hero_title'] ?? '',
      'heroText' => $su['hero_text'] ?? '',
      'heroImage' => asset($su['hero_image'] ?? ''),
      'heroAlt' => $su['hero_alt'] ?? '',
      'title' => $su['title'] ?? '',
      'text' => $su['text'] ?? '',
      'image' => asset($su['image'] ?? ''),
      'imageAlt' => $su['image_alt'] ?? '',
      'services' => $servicesArr,
      'hours' => $su['hours'] ?? '',
      'contact' => $su['contact'] ?? '',
      'summary' => $su['summary'] ?? '',
      'unitsTitle' => $su['units_title'] ?? '',
      'units' => $unitsArr,
    ];
  }
@endphp

<section class="page-title text-center" style="background-image:url({{ asset('images/background/3a.jpg') }});">
  <div class="container">
    <div class="title-text">
      <h1>{{ strtoupper($department->content_data['page_title'] ?? 'MEDICAL DEPARTMENT') }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ strtoupper($department->content_data['page_title'] ?? 'MEDICAL DEPARTMENT') }}</li>
      </ul>
    </div>
  </div>
</section>

<section class="department-layout section">
  <div class="container">
    <div class="row">
      <aside class="col-lg-4 col-xl-3 mb-4 mb-lg-0">
        <div class="dept-sidebar-box">
          <h5 class="dept-sidebar-heading">{{ $department->content_data['sidebar_heading'] ?? 'Medical Department' }}</h5>
          @foreach($subUnits as $index => $sub_unit)
          <div class="dept-group">
            <a class="dept-group-title{{ $index === 0 ? ' is-active' : '' }}" href="#{{ $sub_unit['slug'] }}" data-dept="{{ $sub_unit['slug'] }}">{{ $sub_unit['name'] }} <i class="fas fa-arrow-right"></i></a>
          </div>
          @endforeach
        </div>

        <div class="dept-contact-box">
          <h6><i class="fas fa-phone-volume"></i> Emergency Cases</h6>
          <p>Please call our emergency line for urgent support any time.</p>
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
        <article class="dept-content-card" id="medical-dept-content" data-current-dept="{{ $firstSubUnit['slug'] ?? '' }}">
          <div class="surgical-hero">
            <div class="surgical-hero-copy">
              <span class="surgical-kicker">{{ $department->content_data['hero_kicker'] ?? 'Zomba Central Hospital' }}</span>
              <h3 id="deptHeroTitle">{{ $department->content_data['hero_title'] ?? '' }}</h3>
              <p id="deptHeroText">{{ $department->content_data['hero_text'] ?? '' }}</p>
            </div>
            <img id="deptHeroImage" loading="lazy" src="{{ asset($department->content_data['hero_image'] ?? '') }}" alt="{{ $department->content_data['hero_alt'] ?? '' }}" class="img-fluid">
          </div>

          <div class="dept-render-box" id="deptRenderBox">
            <h5>{{ $firstSubUnit['title'] ?? '' }}</h5>
            <p>{{ $firstSubUnit['text'] ?? '' }}</p>

            <img loading="lazy" src="{{ asset($firstSubUnit['image'] ?? '') }}" alt="{{ $firstSubUnit['image_alt'] ?? '' }}" class="img-fluid">

            <h6><i class="far fa-check-circle"></i> Core Services &amp; Functions</h6>
            <ul class="operating-theatre-list">
              @foreach($firstSubUnit['services'] ?? [] as $service)
              <li>{{ $service['service'] }}</li>
              @endforeach
            </ul>

            <div class="surgical-info-grid">
              <div class="surgical-info-card">
                <h6><i class="far fa-clock"></i> Operating Hours</h6>
                <p>{!! $firstSubUnit['hours'] ?? '' !!}</p>
              </div>
              <div class="surgical-info-card">
                <h6><i class="fas fa-address-book"></i> Contact Information</h6>
                <p><i class="fas fa-phone-alt"></i> {!! $firstSubUnit['contact'] ?? '' !!}</p>
              </div>
            </div>
          </div>

          <p class="mt-3" id="deptSummary">{!! $department->content_data['overview_summary'] ?? '' !!}</p>

          <div class="dept-subservices">
            <h5 id="deptUnitsTitle">{{ $department->content_data['overview_heading'] ?? '' }}</h5>
            <ul id="deptUnitsList">
              @foreach($department->content_data['overview_units'] ?? [] as $unit)
              <li>{!! $unit['unit'] !!}</li>
              @endforeach
            </ul>
          </div>
        </article>

        <div class="dept-faq-block">
          <h4>Health &amp; Tips Info</h4>
          <div class="accordion" id="deptFaq">
            @foreach($department->content_data['faqs'] ?? [] as $faqIndex => $faq)
            @php $faqId = 'faq' . ($faqIndex + 1); @endphp
            <div class="card">
              <div class="card-header" id="{{ $faqId }}">
                <h5 class="mb-0">
                  <button class="btn btn-link{{ $faqIndex > 0 ? ' collapsed' : '' }}" type="button" data-toggle="collapse" data-target="#collapse{{ $faqId }}" aria-expanded="{{ $faqIndex === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $faqId }}">
                    {{ $faq['question'] }}
                  </button>
                </h5>
              </div>
              <div id="collapse{{ $faqId }}" class="collapse{{ $faqIndex === 0 ? ' show' : '' }}" aria-labelledby="{{ $faqId }}" data-parent="#deptFaq">
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

<script>
  (function () {
    var deptButtons = document.querySelectorAll('.dept-group-title[data-dept]');
    var renderBox = document.getElementById('deptRenderBox');
    var summaryNode = document.getElementById('deptSummary');
    var unitsTitleNode = document.getElementById('deptUnitsTitle');
    var unitsListNode = document.getElementById('deptUnitsList');
    var heroTitleNode = document.getElementById('deptHeroTitle');
    var heroTextNode = document.getElementById('deptHeroText');
    var heroImageNode = document.getElementById('deptHeroImage');

    if (!deptButtons.length || !renderBox || !summaryNode || !unitsTitleNode || !unitsListNode || !heroTitleNode || !heroTextNode || !heroImageNode) {
      return;
    }

    var deptMap = @json($deptMapData);

    function setActiveButton(dept) {
      deptButtons.forEach(function (btn) {
        btn.classList.toggle('is-active', btn.getAttribute('data-dept') === dept);
      });
    }

    function renderDepartment(dept) {
      var active = deptMap[dept] || deptMap[Object.keys(deptMap)[0]];
      heroTitleNode.textContent = active.heroTitle;
      heroTextNode.textContent = active.heroText;
      heroImageNode.src = active.heroImage;
      heroImageNode.alt = active.heroAlt;
      renderBox.innerHTML =
        '<h5>' + active.title + '</h5>' +
        '<p>' + active.text + '</p>' +
        '<img loading="lazy" src="' + active.image + '" alt="' + active.imageAlt + '" class="img-fluid">' +
        '<h6><i class="far fa-check-circle"></i> Core Services &amp; Functions</h6>' +
        '<ul class="operating-theatre-list">' +
        active.services.map(function (service) {
          return '<li>' + service + '</li>';
        }).join('') +
        '</ul>' +
        '<div class="surgical-info-grid">' +
          '<div class="surgical-info-card">' +
            '<h6><i class="far fa-clock"></i> Operating Hours</h6>' +
            '<p>' + active.hours + '</p>' +
          '</div>' +
          '<div class="surgical-info-card">' +
            '<h6><i class="fas fa-address-book"></i> Contact Information</h6>' +
            '<p><i class="fas fa-phone-alt"></i> ' + active.contact + '</p>' +
          '</div>' +
        '</div>';
      summaryNode.innerHTML = active.summary;
      unitsTitleNode.innerHTML = active.unitsTitle;
      unitsListNode.innerHTML = active.units.map(function (unit) {
        return '<li>' + unit + '</li>';
      }).join('');
      setActiveButton(dept);
    }

    deptButtons.forEach(function (btn) {
      btn.addEventListener('click', function (event) {
        event.preventDefault();
        var dept = btn.getAttribute('data-dept');
        history.replaceState(null, '', '#' + dept);
        renderDepartment(dept);
      });
    });

    var initialDept = (window.location.hash || '#{{ $firstSubUnit['slug'] ?? '' }}').replace('#', '') || '{{ $firstSubUnit['slug'] ?? '' }}';
    renderDepartment(initialDept);
  })();
</script>
@endsection
