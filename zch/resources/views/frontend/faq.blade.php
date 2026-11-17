@extends('layouts.app')
@section('content')
@php
    $pageData = $page?->content_data ?? [];
    $faqItems = data_get($pageData, 'items', [
        ['question' => 'What services does Zomba Central Hospital provide?', 'answer' => 'Zomba Central Hospital provides specialised and general healthcare services including emergency care, surgery, maternity services, paediatrics, orthopaedic care, laboratory services, radiology, outpatient services, and inpatient care.'],
        ['question' => 'Where is Zomba Central Hospital located?', 'answer' => 'Zomba Central Hospital is located in Zomba City, Malawi, serving patients from the Eastern Region and surrounding districts.'],
        ['question' => 'Does the hospital operate 24 hours a day?', 'answer' => 'Yes. The hospital provides 24/7 emergency and critical healthcare services, including ambulance and emergency response support.'],
        ['question' => 'How can I contact Zomba Central Hospital?', 'answer' => 'Patients and visitors can contact the hospital through the official phone numbers, email addresses, or by visiting the hospital administration offices during working hours.'],
        ['question' => 'Does the hospital provide ambulance services?', 'answer' => 'Yes. Zomba Central Hospital provides emergency ambulance and patient transfer services for urgent medical cases and referrals.'],
        ['question' => 'Are specialist doctors available at the hospital?', 'answer' => 'Yes. The hospital has qualified specialists in areas such as paediatrics, obstetrics and gynaecology, orthopaedics, surgery, nutrition, and internal medicine.'],
        ['question' => 'Can patients book appointments in advance?', 'answer' => 'Yes. Patients can schedule appointments for consultations, specialist clinics, and follow-up visits through the hospital booking procedures.'],
        ['question' => 'Does ZCH accept referrals from other hospitals?', 'answer' => 'Yes. The hospital serves as a referral hospital and accepts patients referred from district hospitals, clinics, and other healthcare facilities.'],
        ['question' => 'What should patients bring when visiting?', 'answer' => 'Patients are encouraged to bring identification documents, health records, referral letters if any, and prescribed medications when visiting the hospital.'],
        ['question' => 'Does the hospital provide maternity services?', 'answer' => 'Yes. Zomba Central Hospital offers antenatal care, maternity services, postnatal care, neonatal care, immunisation services, and paediatric healthcare services.'],
    ]);
    $faqHighlights = data_get($pageData, 'highlights', [
        ['value' => '10', 'label' => 'Common Questions'],
        ['value' => '24/7', 'label' => 'Emergency Care'],
        ['value' => 'Fast', 'label' => 'Helpful Answers'],
    ]);
    $sidePoints = data_get($pageData, 'side_points', [
        ['point' => 'Clear guidance for first-time visitors'],
        ['point' => 'Useful information on appointments and referrals'],
        ['point' => 'Easy access to support and contact options'],
    ]);
@endphp

<style>
  .faq-page {
    background: linear-gradient(180deg, #f5f9ff 0%, #ffffff 38%, #f7fbff 100%);
    color: #1e293b;
  }
  .faq-banner { position: relative; background-position: center; background-size: cover; }
  .faq-banner::before { content: ""; position: absolute; inset: 0; background: linear-gradient(120deg, rgba(4, 31, 64, 0.84), rgba(0, 122, 204, 0.56)); }
  .faq-banner .container { position: relative; z-index: 1; }
  .faq-section { padding: 90px 0 50px; }
  .faq-hero { background: #ffffff; border-radius: 28px; overflow: hidden; box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08); margin-top: -70px; position: relative; z-index: 2; }
  .faq-hero-content { padding: 48px; }
  .faq-eyebrow { display: inline-flex; align-items: center; gap: 10px; padding: 8px 16px; margin-bottom: 20px; border-radius: 999px; background: #e9f4ff; color: #0b63b6; font-size: 13px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; }
  .faq-hero-content h2 { color: #0f2747; font-size: 2.8rem; line-height: 1.15; font-weight: 800; margin-bottom: 18px; }
  .faq-hero-content p { color: #64748b; line-height: 1.9; font-size: 1.05rem; margin-bottom: 0; max-width: 640px; }
  .faq-side-panel { height: 100%; padding: 42px 34px; background: linear-gradient(160deg, #0056b3 0%, #00a8cc 100%); color: #ffffff; display: flex; flex-direction: column; justify-content: center; }
  .faq-side-panel h3 { color: #ffffff; font-size: 1.55rem; font-weight: 700; margin-bottom: 16px; }
  .faq-side-panel p { color: rgba(255, 255, 255, 0.92); line-height: 1.8; margin-bottom: 22px; }
  .faq-side-list { list-style: none; padding: 0; margin: 0; }
  .faq-side-list li { display: flex; align-items: center; gap: 12px; margin-bottom: 14px; font-weight: 600; }
  .faq-side-list i { width: 28px; height: 28px; border-radius: 50%; background: rgba(255, 255, 255, 0.16); display: inline-flex; align-items: center; justify-content: center; font-size: 12px; }
  .faq-highlights { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; margin: 38px 0 56px; }
  .faq-highlight { text-align: center; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 22px; padding: 26px 24px; box-shadow: 0 14px 36px rgba(15, 23, 42, 0.05); }
  .faq-highlight strong { display: block; color: #0b63b6; font-size: 1.9rem; line-height: 1; margin-bottom: 10px; font-weight: 800; }
  .faq-highlight span { color: #64748b; font-weight: 600; }
  .faq-content-header { text-align: center; margin-bottom: 40px; }
  .faq-content-header h3 { color: #0f2747; font-size: 2.2rem; font-weight: 800; margin-bottom: 12px; }
  .faq-content-header p { max-width: 760px; margin: 0 auto; color: #64748b; line-height: 1.8; }
  .custom-faq .card { border: 1px solid #e2e8f0; border-radius: 22px; overflow: hidden; box-shadow: 0 18px 40px rgba(15, 23, 42, 0.05); margin-bottom: 18px; background: #ffffff; }
  .custom-faq .card-header { background: transparent; border: 0; padding: 0; }
  .custom-faq .btn-link { width: 100%; padding: 22px 24px; background: #ffffff; color: #0f2747; display: flex; align-items: center; justify-content: space-between; gap: 16px; border: 0; font-size: 1.05rem; font-weight: 700; text-decoration: none; text-align: left; transition: background 0.3s ease, color 0.3s ease; }
  .custom-faq .btn-link:hover, .custom-faq .btn-link:focus { text-decoration: none; box-shadow: none; }
  .custom-faq .btn-link:not(.collapsed) { background: linear-gradient(135deg, #0b63b6 0%, #13a3d2 100%); color: #ffffff; }
  .custom-faq .faq-toggle-icon { width: 38px; height: 38px; border-radius: 50%; background: rgba(11, 99, 182, 0.1); color: #0b63b6; display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0; transition: transform 0.3s ease, background 0.3s ease, color 0.3s ease; }
  .custom-faq .btn-link:not(.collapsed) .faq-toggle-icon { background: rgba(255, 255, 255, 0.18); color: #ffffff; transform: rotate(180deg); }
  .custom-faq .card-body { padding: 0 24px 24px; color: #64748b; line-height: 1.85; }
  .faq-support-card { margin-top: 52px; border-radius: 28px; padding: 40px; background: linear-gradient(135deg, #0f2747 0%, #0b63b6 48%, #1cb5e0 100%); color: #ffffff; box-shadow: 0 24px 60px rgba(11, 99, 182, 0.24); }
  .faq-support-card h3 { color: #ffffff; font-size: 1.8rem; font-weight: 800; margin-bottom: 12px; }
  .faq-support-card p { color: rgba(255, 255, 255, 0.9); line-height: 1.8; margin-bottom: 0; }
  .faq-support-actions .btn-style-one { background: #ffffff; color: #0b63b6; border-color: #ffffff; margin-right: 12px; }
  .faq-support-actions .btn-style-two { color: #ffffff; border-color: rgba(255, 255, 255, 0.72); }
  @media (max-width: 1199px) { .faq-hero-content h2 { font-size: 2.4rem; } }
  @media (max-width: 991px) { .faq-section { padding-top: 70px; } .faq-hero { margin-top: 0; } .faq-hero-content, .faq-side-panel { padding: 34px 28px; } .faq-highlights { grid-template-columns: 1fr; } }
  @media (max-width: 767px) { .faq-hero-content h2, .faq-content-header h3 { font-size: 2rem; } .custom-faq .btn-link { padding: 18px 18px; font-size: 1rem; } .custom-faq .card-body, .faq-support-card { padding-left: 20px; padding-right: 20px; } .faq-support-actions .btn-style-one, .faq-support-actions .btn-style-two { display: block; width: 100%; margin: 0 0 12px; text-align: center; } }
</style>

<section class="page-title text-center faq-banner" style="background-image:url('{{ asset('images/background/3a.jpg?v=20260602') }}');">
  <div class="container">
    <div class="title-text">
      <h1>{{ $page?->title ?? 'Frequently Asked Questions' }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ $page?->title ?? 'Frequently Asked Questions' }}</li>
      </ul>
    </div>
  </div>
</section>

<main class="faq-page">
  <section class="faq-section">
    <div class="container">
      <div class="faq-hero">
        <div class="row no-gutters align-items-stretch">
          <div class="col-lg-7">
            <div class="faq-hero-content">
              <span class="faq-eyebrow">
                <i class="fas fa-comment-medical"></i>
                {{ data_get($pageData, 'eyebrow', 'Help Centre') }}
              </span>
              <h2>{{ data_get($pageData, 'hero_heading', 'Quick answers for patients, guardians, and visitors.') }}</h2>
              <p>{{ data_get($pageData, 'hero_text', 'Find helpful information about hospital services, contact options, appointments, emergency support, and what to expect when visiting Zomba Central Hospital.') }}</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="faq-side-panel">
              <h3>{{ data_get($pageData, 'side_heading', 'Need help quickly?') }}</h3>
              <p>{{ data_get($pageData, 'side_text', 'Browse the most common questions below or contact the hospital directly if you need support that is specific to your visit or referral.') }}</p>
              <ul class="faq-side-list">
                @foreach ($sidePoints as $item)
                  <li><i class="fas fa-check"></i> {{ $item['point'] }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="faq-highlights">
        @foreach ($faqHighlights as $highlight)
          <div class="faq-highlight">
            <strong>{{ $highlight['value'] }}</strong>
            <span>{{ $highlight['label'] }}</span>
          </div>
        @endforeach
      </div>

      <div class="faq-content-header">
        <h3>{{ data_get($pageData, 'content_heading', 'Answers to the questions we hear most often') }}</h3>
        <p>{{ data_get($pageData, 'content_intro', 'This page is designed to make it easier for patients and families to get key information before visiting the hospital or accessing care.') }}</p>
      </div>

      <div class="accordion custom-faq" id="faqAccordion">
        @foreach ($faqItems as $index => $item)
          @php
              $headingId = 'faqHeading' . $index;
              $collapseId = 'faqCollapse' . $index;
              $isOpen = $index === 0;
          @endphp
          <div class="card">
            <div class="card-header" id="{{ $headingId }}">
              <button class="btn btn-link {{ $isOpen ? '' : 'collapsed' }}" type="button" data-toggle="collapse" data-target="#{{ $collapseId }}" aria-expanded="{{ $isOpen ? 'true' : 'false' }}" aria-controls="{{ $collapseId }}">
                <span>{{ $item['question'] }}</span>
                <span class="faq-toggle-icon">
                  <i class="fas fa-chevron-down"></i>
                </span>
              </button>
            </div>
            <div id="{{ $collapseId }}" class="collapse {{ $isOpen ? 'show' : '' }}" aria-labelledby="{{ $headingId }}" data-parent="#faqAccordion">
              <div class="card-body">
                {{ $item['answer'] }}
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="faq-support-card">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h3>{{ data_get($pageData, 'support_heading', 'Still need assistance?') }}</h3>
            <p>{{ data_get($pageData, 'support_text', 'If your question is not covered here, our team is ready to help with appointment guidance, patient enquiries, and general hospital information.') }}</p>
          </div>
          <div class="col-lg-4 text-lg-right faq-support-actions">
            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'support_button_url', 'frontend.contact')) }}" class="btn-style-one">{{ data_get($pageData, 'support_button_text', 'Get In Touch') }}</a><br>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
