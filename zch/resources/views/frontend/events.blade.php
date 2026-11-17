@extends('layouts.app')

@section('content')
@php
    $pageData = $page?->content_data ?? [];

    $monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December',
    ];

    $rawEvents = data_get($pageData, 'events', []);
    $eventsByMonth = [];
    foreach ($rawEvents as $evt) {
        $date = data_get($evt, 'date', '');
        $monthIndex = $date ? ((int) date('m', strtotime($date)) - 1) : 0;
        $eventsByMonth[$monthIndex][] = [
            'title'       => data_get($evt, 'title', ''),
            'date'        => $date,
            'venue'       => data_get($evt, 'venue', ''),
            'type'        => data_get($evt, 'type', ''),
            'image'       => data_get($evt, 'image', ''),
            'image_alt'   => data_get($evt, 'image_alt', data_get($evt, 'title', '')),
            'description' => data_get($evt, 'description', ''),
        ];
    }

    $activeMonth = now()->month - 1;
    $activeYear = (int) now()->year;
@endphp

<style>
  .events-page {
    background: linear-gradient(180deg, #eff8ff 0%, #ffffff 45%, #f8fbff 100%);
    color: #1e293b;
  }

  .events-banner {
    position: relative;
    background-position: center;
    background-size: cover;
  }

  .events-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, rgba(4, 31, 64, 0.84), rgba(0, 122, 204, 0.56));
  }

  .events-banner .container {
    position: relative;
    z-index: 1;
  }

  .events-section {
    padding: 90px 0 50px;
  }

  .ec-hero {
    background: linear-gradient(120deg, #0b3d91 0%, #00a8cc 100%);
    border-radius: 28px;
    color: #fff;
    padding: 38px 36px;
    margin-top: -70px;
    margin-bottom: 34px;
    position: relative;
    z-index: 2;
    overflow: hidden;
    box-shadow: 0 20px 48px rgba(11, 61, 145, 0.22);
  }

  .ec-hero::after {
    content: "";
    position: absolute;
    top: -70px;
    right: -20px;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08);
  }

  .ec-hero > * {
    position: relative;
    z-index: 1;
  }

  .ec-hero h2 {
    margin-bottom: 10px;
    font-size: 2.5rem;
    font-weight: 800;
    color: #fff;
  }

  .ec-hero p {
    margin-bottom: 0;
    color: rgba(255, 255, 255, 0.92);
    line-height: 1.8;
  }

  .ec-sidebar,
  .ec-main-card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.07);
    border: 1px solid #e6eef7;
  }

  .ec-sidebar {
    padding: 22px;
  }

  .ec-main-card {
    padding: 24px;
  }

  .ec-title {
    font-size: 18px;
    font-weight: 800;
    color: #0b3d91;
    margin-bottom: 16px;
  }

  .ec-month-list {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .ec-month-list li {
    margin-bottom: 8px;
  }

  .ec-month-list a {
    display: block;
    padding: 10px 12px;
    border-radius: 10px;
    color: #11315c;
    background: #f3f8ff;
    font-weight: 600;
    text-decoration: none;
    transition: 0.2s ease;
  }

  .ec-month-list a:hover,
  .ec-month-list a.active {
    background: #00a8cc;
    color: #fff;
  }

  .ec-event {
    border: 1px solid #e7eef7;
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 18px;
    background: #fff;
    box-shadow: 0 10px 26px rgba(15, 23, 42, 0.05);
  }

  .ec-event img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
  }

  .ec-event-body {
    padding: 16px;
  }

  .ec-badge {
    display: inline-block;
    background: #e8f8fc;
    color: #0083a1;
    font-size: 12px;
    font-weight: 700;
    border-radius: 999px;
    padding: 5px 10px;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }

  .ec-event h4 {
    color: #11315c;
    margin-bottom: 8px;
    font-size: 22px;
    font-weight: 800;
  }

  .ec-event p {
    color: #5c7599;
    line-height: 1.8;
    margin-bottom: 0;
  }

  .ec-meta {
    color: #425e88;
    font-size: 14px;
    margin-bottom: 10px;
  }

  .ec-meta i {
    color: #00a8cc;
    margin-right: 5px;
  }

  .ec-calendar {
    width: 100%;
    border-collapse: separate;
    border-spacing: 6px;
  }

  .ec-calendar th {
    text-align: center;
    font-size: 12px;
    color: #54709b;
    font-weight: 700;
    padding-bottom: 6px;
  }

  .ec-calendar td {
    width: 14.28%;
    height: 38px;
    text-align: center;
    background: #f5f9ff;
    border-radius: 10px;
    font-size: 13px;
    color: #20406c;
    font-weight: 600;
  }

  .ec-calendar td.ec-today {
    background: #0b3d91;
    color: #fff;
  }

  .ec-calendar td.ec-has-event {
    background: #c6f3fb;
    color: #006b82;
  }

  .ec-empty {
    text-align: center;
    border: 1px dashed #c9d9ef;
    border-radius: 14px;
    padding: 28px 20px;
    color: #607da8;
    background: #fbfdff;
  }

  .ec-footer-card {
    margin-top: 26px;
    border-radius: 28px;
    padding: 36px 34px;
    background: linear-gradient(135deg, #0f2747 0%, #0b63b6 48%, #1cb5e0 100%);
    color: #ffffff;
    box-shadow: 0 24px 60px rgba(11, 99, 182, 0.24);
  }

  .ec-footer-card h3 {
    color: #ffffff;
    font-size: 1.7rem;
    font-weight: 800;
    margin-bottom: 12px;
  }

  .ec-footer-card p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    margin-bottom: 0;
  }

  .ec-footer-card .btn-style-one {
    background: #ffffff;
    color: #0b63b6;
    border-color: #ffffff;
  }

  .ec-footer-card .btn-style-two {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.7);
  }

  @media (max-width: 991px) {
    .events-section {
      padding-top: 70px;
    }

    .ec-hero {
      margin-top: 0;
      padding: 32px 26px;
    }

    .ec-hero h2 {
      font-size: 2rem;
    }

    .ec-event img {
      height: 190px;
    }
  }

  @media (max-width: 767px) {
    .ec-footer-card {
      padding: 30px 22px;
    }

    .ec-footer-card .btn-style-one,
    .ec-footer-card .btn-style-two {
      display: block;
      width: 100%;
      text-align: center;
      margin: 0 0 12px;
    }
  }
</style>

<section class="page-title text-center events-banner" style="background-image:url('{{ asset('images/background/3a.jpg?v=20260602') }}');">
  <div class="container">
    <div class="title-text">
      <h1>{{ $page?->title ?? 'Events Calendar' }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ $page?->title ?? 'Events Calendar' }}</li>
      </ul>
    </div>
  </div>
</section>

<main class="events-page">
  <section class="section events-section">
    <div class="container">
      <div class="ec-hero">
        <h2>{{ data_get($pageData, 'hero_title', 'Hospital Events & Public Health Calendar') }}</h2>
        <p>
          {!! nl2br(e(data_get($pageData, 'hero_text', 'Track outreach campaigns, specialist clinics, awareness drives, and staff development events across the year.'))) !!}
        </p>
      </div>

      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="ec-sidebar">
            <h4 class="ec-title">Browse By Month</h4>
            <ul class="ec-month-list" id="monthList"></ul>
          </div>
        </div>

        <div class="col-lg-6 mb-4">
          <div class="ec-main-card">
            <h4 id="monthTitle" class="ec-title">Events</h4>
            <div id="eventsContainer"></div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="ec-main-card">
            <h4 id="calendarLabel" class="ec-title">Calendar</h4>
            <table class="ec-calendar">
              <thead>
                <tr>
                  <th>Su</th>
                  <th>Mo</th>
                  <th>Tu</th>
                  <th>We</th>
                  <th>Th</th>
                  <th>Fr</th>
                  <th>Sa</th>
                </tr>
              </thead>
              <tbody id="calendarBody"></tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="ec-footer-card">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h3>{{ data_get($pageData, 'cta_title', 'Need details on a hospital programme or campaign?') }}</h3>
            <p>
              {{ data_get($pageData, 'cta_text', 'Contact the hospital for official information on upcoming outreach activities, clinics, awareness events, and public health engagements.') }}
            </p>
          </div>
          <div class="col-lg-4 text-lg-right">
            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_1_url', route('frontend.contact'))) }}" class="btn-style-one">{{ data_get($pageData, 'cta_button_1_text', 'Contact Us') }}</a>
            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_2_url', route('frontend.news'))) }}" class="btn-style-two">{{ data_get($pageData, 'cta_button_2_text', 'Latest News') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  (function () {
    var eventsByMonth = @json($eventsByMonth);
    var monthNames = @json($monthNames);
    var activeMonth = {{ $activeMonth }};
    var activeYear = {{ $activeYear }};
    var today = new Date();

    var monthList = document.getElementById('monthList');
    var monthTitle = document.getElementById('monthTitle');
    var eventsContainer = document.getElementById('eventsContainer');
    var calendarBody = document.getElementById('calendarBody');
    var calendarLabel = document.getElementById('calendarLabel');

    if (!monthList || !monthTitle || !eventsContainer || !calendarBody || !calendarLabel) {
      return;
    }

    function escapeHtml(value) {
      return String(value)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;');
    }

    function parseDate(value) {
      var parts = String(value).split('-');
      return new Date(Number(parts[0]), Number(parts[1]) - 1, Number(parts[2]));
    }

    function renderMonthList() {
      var html = '';
      monthNames.forEach(function (month, index) {
        var activeClass = index === activeMonth ? 'active' : '';
        html += '<li><a href="#" data-month="' + index + '" class="' + activeClass + '">' + month + '</a></li>';
      });

      monthList.innerHTML = html;
      monthList.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function (event) {
          event.preventDefault();
          activeMonth = Number(link.getAttribute('data-month'));
          renderAll();
        });
      });
    }

    function renderEvents() {
      var list = eventsByMonth[activeMonth] || [];
      monthTitle.textContent = monthNames[activeMonth] + ' ' + activeYear + ' Events';

      if (!list.length) {
        eventsContainer.innerHTML =
          '<div class="ec-empty">' +
          '<i class="far fa-calendar-times fa-2x mb-2"></i>' +
          '<h5>No events scheduled</h5>' +
          '<p>There are no events published for this month yet. Please check another month or return later.</p>' +
          '</div>';
        return;
      }

      eventsContainer.innerHTML = list.map(function (item) {
        return (
          '<article class="ec-event">' +
            '<img src="' + escapeHtml(item.image) + '" alt="' + escapeHtml(item.title) + '">' +
            '<div class="ec-event-body">' +
              '<span class="ec-badge">' + escapeHtml(item.type) + '</span>' +
              '<h4>' + escapeHtml(item.title) + '</h4>' +
              '<div class="ec-meta">' +
                '<div><i class="far fa-calendar-alt"></i>' + escapeHtml(item.date) + '</div>' +
                '<div><i class="fas fa-map-marker-alt"></i>' + escapeHtml(item.venue) + '</div>' +
              '</div>' +
              '<p>' + escapeHtml(item.description) + '</p>' +
            '</div>' +
          '</article>'
        );
      }).join('');
    }

    function renderCalendar() {
      var firstDay = new Date(activeYear, activeMonth, 1).getDay();
      var totalDays = new Date(activeYear, activeMonth + 1, 0).getDate();
      var eventDays = (eventsByMonth[activeMonth] || []).map(function (item) {
        return parseDate(item.date).getDate();
      });
      var day = 1;
      var rows = '';

      calendarLabel.textContent = monthNames[activeMonth] + ' ' + activeYear;

      for (var week = 0; week < 6; week += 1) {
        var row = '<tr>';
        for (var i = 0; i < 7; i += 1) {
          if ((week === 0 && i < firstDay) || day > totalDays) {
            row += '<td></td>';
          } else {
            var classes = [];
            var isToday = activeYear === today.getFullYear() &&
              activeMonth === today.getMonth() &&
              day === today.getDate();

            if (eventDays.indexOf(day) !== -1) {
              classes.push('ec-has-event');
            }

            if (isToday) {
              classes.push('ec-today');
            }

            row += '<td class="' + classes.join(' ') + '">' + day + '</td>';
            day += 1;
          }
        }
        row += '</tr>';
        rows += row;

        if (day > totalDays) {
          break;
        }
      }

      calendarBody.innerHTML = rows;
    }

    function renderAll() {
      renderMonthList();
      renderEvents();
      renderCalendar();
    }

    renderAll();
  })();
</script>

@endsection
