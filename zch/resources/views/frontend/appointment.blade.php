@extends('layouts.app')
@section('content')

<!-- Page Title -->
<section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
  <div class="container">
    <div class="title-text">
      <h1>APPOINTMENT</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>APPOINTMENT</li>
      </ul>
    </div>
  </div>
</section>

<style>
  .appointment-polished {
    background: #24b6cc;
    padding: 70px 0;
  }
  .appointment-grid {
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 42px;
    align-items: start;
  }
  .appointment-copy h5 {
    color: #ffffff;
    font-size: 38px;
    letter-spacing: 1px;
    margin: 0 0 22px;
    font-weight: 800;
    text-transform: uppercase;
    text-decoration: underline;
    text-decoration-thickness: 4px;
    text-underline-offset: 8px;
  }
  .appointment-copy h1 {
    color: #142f63;
    font-size: 38px;
    line-height: 1.05;
    margin: 0 0 28px;
    font-weight: 800;
  }
  .appointment-copy p {
    color: #ecf9ff;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 34px;
    max-width: 780px;
  }
  .appointment-actions {
    display: flex;
    gap: 18px;
    flex-wrap: wrap;
  }
  .btn-find-doctor,
  .btn-read-more {
    display: inline-block;
    min-width: 190px;
    text-align: center;
    border-radius: 999px;
    padding: 16px 30px;
    font-size: 16px;
    font-weight: 700;
    text-decoration: none;
    transition: 0.2s ease;
  }
  .btn-find-doctor {
    background: #1a2f62;
    border: 1px solid #1a2f62;
    color: #fff;
  }
  .btn-find-doctor:hover { color: #fff; opacity: 0.9; }
  .btn-read-more {
    background: transparent;
    border: 1px solid #1a2f62;
    color: #1a2f62;
  }
  .btn-read-more:hover { background: #1a2f62; color: #fff; }

  .appointment-form-card {
    background: #e9e9ea;
    border-radius: 12px;
    padding: 34px 32px 30px;
  }
  .appointment-form-card h2 {
    color: #152f63;
    text-align: center;
    margin: 0 0 26px;
    font-size: 32px;
    font-weight: 800;
    line-height: 1.2;
  }
  .appointment-form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px 14px;
    margin-bottom: 16px;
  }
  .appointment-form-grid input,
  .appointment-form-grid select {
    width: 100%;
    height: 55px;
    border: 0;
    background: #cfd6de;
    color: #55677d;
    border-radius: 10px;
    padding: 0 14px;
    font-size: 16px;
    outline: none;
  }
  .appointment-form-grid input::placeholder { color: #6a7c92; }
  .appointment-form-card button {
    width: 100%;
    border: 0;
    border-radius: 10px;
    background: #24b6cc;
    color: #fff;
    font-weight: 700;
    font-size: 16px;
    padding: 13px 18px;
  }
  .appointment-form-card button:hover { background: #149eb6; }

  @media (max-width: 991px) {
    .appointment-grid { grid-template-columns: 1fr; }
    .appointment-copy h1 { font-size: 34px; }
    .appointment-form-card h2 { font-size: 30px; }
    .appointment-form-card { margin-top: 8px; }
  }
  @media (max-width: 576px) {
    .appointment-polished { padding: 46px 0; }
    .appointment-copy h5 { font-size: 18px; }
    .appointment-copy h1 { font-size: 28px; }
    .appointment-copy p { font-size: 15px; }
    .btn-find-doctor, .btn-read-more {
      min-width: 160px;
      font-size: 18px;
      padding: 13px 20px;
    }
    .appointment-form-card { padding: 22px 16px 18px; }
    .appointment-form-card h2 { font-size: 26px; }
    .appointment-form-grid { grid-template-columns: 1fr; }
    .appointment-form-grid input, .appointment-form-grid select { font-size: 15px; }
    .appointment-form-card button { font-size: 15px; }
  }
</style>

<section class="appointment-polished">
  <div class="container">
    <div class="appointment-grid">
      <div class="appointment-copy">
        <h5>APPOINTMENT</h5>
        <h1>Book an Appointment with Your Doctor</h1>
        <p>
          Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum.
          Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt
          voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt
          lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata
          sanctus sed.
        </p>
        <div class="appointment-actions">
          <a class="btn-find-doctor" href="{{ route('frontend.doctors') }}">Find Doctor</a>
          <a class="btn-read-more" href="{{ route('frontend.services') }}">Read More</a>
        </div>
      </div>

      <div class="appointment-form-card">
        <h2>Book An Appointment</h2>
        <form action="#" method="post">
          @php
            $selectedDoctor = request('doctor', old('doctor'));
            $doctors = [
              'Dr. Soulos Nyirenda',
              'Dr. Jessica Chakwana',
              'Dr. Delia Munthali Mabedi',
              'Dr. Maranatha Banda',
              'DR. Andyone E-Gov',
              'Dr. Dzuze',
              'Mr. Chipembo Soko',
              'Dr. Maguy Kabeya',
              'Dr. Olaf Bach',
            ];
          @endphp
          @if ($selectedDoctor)
            <div style="margin: -6px 0 14px; padding: 12px 14px; border-radius: 10px; background: #eef8fb; color: #1a2f62; font-weight: 700;">
              Booking request for: {{ $selectedDoctor }}
            </div>
          @endif
          <div class="appointment-form-grid">
            <select aria-label="Choose Department">
              <option selected>Choose Department</option>
              <option>Surgical</option>
              <option>Maternal &amp; Child</option>
              <option>Diagnostic</option>
              <option>Emergency</option>
              <option>Medical</option>
            </select>
            <select aria-label="Select Doctor" name="doctor" id="doctorSelect">
              <option selected value="">Select Doctor</option>
              @foreach ($doctors as $doctor)
                <option value="{{ $doctor }}" @selected($selectedDoctor === $doctor)>{{ $doctor }}</option>
              @endforeach
            </select>
            <input type="text" placeholder="Your Name" aria-label="Your Name">
            <input type="email" placeholder="Your Email" aria-label="Your Email">
            <input type="date" aria-label="Appointment Date">
            <input type="time" aria-label="Appointment Time">
          </div>
          @if ($selectedDoctor)
            <div style="margin-bottom: 14px; padding: 12px 14px; border-radius: 10px; background: #eef8fb; color: #1a2f62; font-weight: 700;">
              Booking request for: {{ $selectedDoctor }}
            </div>
          @endif
          <button type="submit">Make An Appointment</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var params = new URLSearchParams(window.location.search);
    var doctor = params.get('doctor');
    var doctorSelect = document.getElementById('doctorSelect');
    if (doctor && doctorSelect) {
      for (var i = 0; i < doctorSelect.options.length; i++) {
        if (doctorSelect.options[i].value === doctor) {
          doctorSelect.selectedIndex = i;
          break;
        }
      }
    }
  });
</script>

@endsection
