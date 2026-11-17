@extends('layouts.app')
@section('content')
@php
    $pageData = $page?->content_data ?? [];
    $bannerTitle = data_get($pageData, 'banner_title', 'Online Job Application');
    $breadcrumb = data_get($pageData, 'breadcrumb', 'Online Job Application');
    $cardTitle = data_get($pageData, 'card_title', 'Zomba Central Hospital');
    $cardSubtitle = data_get($pageData, 'card_subtitle', 'Online Job Application Form');
    $sectionPersonal = data_get($pageData, 'section_personal', 'Personal Information');
    $sectionPosition = data_get($pageData, 'section_position', 'Position Applying For');
    $sectionEducation = data_get($pageData, 'section_education', 'Education & Qualifications');
    $sectionDocuments = data_get($pageData, 'section_documents', 'Upload Supporting Documents');
    $sectionDeclaration = data_get($pageData, 'section_declaration', 'Declaration');
    $deptOptions = data_get($pageData, 'departments', []);
    $employmentTypes = data_get($pageData, 'employment_types', []);
    $genders = data_get($pageData, 'genders', []);
    $declarationText = data_get($pageData, 'declaration_text', 'I confirm that the information provided in this application form is accurate and complete to the best of my knowledge.');
    $submitButtonText = data_get($pageData, 'submit_button_text', 'Submit Application');
    $footerNote = data_get($pageData, 'footer_note', '© 2026 Zomba Central Hospital. All Rights Reserved.');
@endphp

<section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
  <div class="container">
    <div class="title-text">
      <h1>{{ strtoupper($bannerTitle) }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ $breadcrumb }}</li>
      </ul>
    </div>
  </div>
</section>

<style>
    * { margin:0; padding:0; box-sizing:border-box }
    .application-card{ background:#fff; border-radius:18px; overflow:hidden; box-shadow:0 10px 35px rgba(0,0,0,.08) }
    .header{ background:linear-gradient(135deg,#0f4c81,#1676c2); color:#fff; padding:35px; text-align:center }
    .header h1{ font-size:34px; margin-bottom:8px; font-weight:700 }
    .header p{ opacity:.9; font-size:15px; color:#ffffff }
    form{ padding:35px }
    .section-title{ font-size:20px; font-weight:700; margin-bottom:20px; color:#0f4c81; border-left:5px solid #1676c2; padding-left:12px }
    .form-grid{ display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; margin-bottom:35px }
    .form-group{ display:flex; flex-direction:column }
    .form-group.full-width{ grid-column:1/-1 }
    label{ margin-bottom:8px; font-weight:600; font-size:14px; color:#374151 }
    input,select,textarea{ padding:14px; border:1px solid #d1d5db; border-radius:10px; font-size:14px; transition:all .3s ease; background:#fff }
    input:focus, select:focus, textarea:focus{ border-color:#1676c2; outline:none; box-shadow:0 0 0 4px rgba(22,118,194,.12) }
    textarea{ resize:vertical; min-height:120px }
    .upload-box{ border:2px dashed #b9c7d6; padding:25px; border-radius:12px; background:#f8fbff; text-align:center; transition:.3s }
    .upload-box:hover{ border-color:#1676c2; background:#eef6fd }
    .checkbox-group{ display:flex; align-items:flex-start; gap:12px; margin-top:10px }
    .checkbox-group input{ margin-top:5px }
    .submit-btn{ background:linear-gradient(135deg,#0f4c81,#1676c2); color:#fff; border:none; padding:16px 28px; border-radius:12px; font-size:16px; font-weight:600; cursor:pointer; transition:all .3s ease; width:100%; margin-top:20px }
    .submit-btn:hover{ transform:translateY(-2px); box-shadow:0 10px 20px rgba(22,118,194,.2) }
    .footer-note{ margin-top:18px; text-align:center; color:#6b7280; font-size:13px }
    .online-application-wrap{ padding: 80px 0 90px; }
    @media(max-width:768px){ .header h1{ font-size:26px } form{ padding:25px } .online-application-wrap{ padding: 64px 0 70px; } }
  </style>


<!-- Page Content: Online Application Form -->
  <div class="online-application-wrap">
    <div class="container">
    <div class="application-card">
      <div class="header">
        <h1>{{ $cardTitle }}</h1>
        <p>{{ $cardSubtitle }}</p>
      </div>

      <form action="{{ route('frontend.online_application.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if(session('success'))
        <div style="background:#d4edda; color:#155724; border:1px solid #c3e6cb; border-radius:10px; padding:16px 20px; margin:0 35px 20px; font-size:14px;">
          {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div style="background:#f8d7da; color:#721c24; border:1px solid #f5c6cb; border-radius:10px; padding:16px 20px; margin:0 35px 20px; font-size:14px;">
          <strong>Please correct the following errors:</strong>
          <ul style="margin:6px 0 0 18px;">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <!-- Personal Information -->
        <h2 class="section-title">{{ $sectionPersonal }}</h2>

        <div class="form-grid">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" placeholder="Enter first name" required>
          </div>

          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Enter last name" required>
          </div>

          <div class="form-group">
            <label>Gender</label>
            <select name="gender" required>
              <option value="">Select gender</option>
              @foreach($genders as $key => $label)
              <option>{{ $label }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="date_of_birth" required>
          </div>

          <div class="form-group">
            <label>National ID / Passport</label>
            <input type="text" name="national_id" placeholder="Enter ID number">
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="Enter phone number" required>
          </div>

          <div class="form-group full-width">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter email address" required>
          </div>

          <div class="form-group full-width">
            <label>Residential Address</label>
            <textarea name="address" placeholder="Enter full address"></textarea>
          </div>
        </div>

        <!-- Position Details -->
        <h2 class="section-title">{{ $sectionPosition }}</h2>

        <div class="form-grid">
          <div class="form-group">
            <label>Department</label>
            <select name="department">
              <option value="">Select department</option>
              @foreach($deptOptions as $key => $label)
              <option>{{ $label }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Position Title</label>
            <input type="text" name="position_title" placeholder="Enter position title">
          </div>

          <div class="form-group">
            <label>Employment Type</label>
            <select name="employment_type">
              <option value="">Select type</option>
              @foreach($employmentTypes as $key => $label)
              <option>{{ $label }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Years of Experience</label>
            <input type="number" name="experience" min="0" placeholder="Years of experience">
          </div>
        </div>

        <!-- Education -->
        <h2 class="section-title">{{ $sectionEducation }}</h2>

        <div class="form-grid">
          <div class="form-group">
            <label>Highest Qualification</label>
            <input type="text" name="qualification" placeholder="e.g. Bachelor's Degree">
          </div>

          <div class="form-group">
            <label>Institution Name</label>
            <input type="text" name="institution" placeholder="Enter institution name">
          </div>

          <div class="form-group">
            <label>Year Completed</label>
            <input type="number" name="year_completed" placeholder="e.g. 2025">
          </div>

          <div class="form-group full-width">
            <label>Professional Certifications</label>
            <textarea name="certifications" placeholder="List any certifications or licenses"></textarea>
          </div>
        </div>

        <!-- Upload Documents -->
        <h2 class="section-title">{{ $sectionDocuments }}</h2>

        <div class="form-grid">
          <div class="form-group">
            <label>Curriculum Vitae (CV)</label>
            <div class="upload-box">
              <input type="file" name="cv">
            </div>
          </div>

          <div class="form-group">
            <label>Academic Certificates</label>
            <div class="upload-box">
              <input type="file" name="certificates[]" multiple>
            </div>
          </div>

          <div class="form-group full-width">
            <label>Cover Letter</label>
            <textarea name="cover_letter" placeholder="Write your cover letter here..."></textarea>
          </div>
        </div>

        <!-- Declaration -->
        <h2 class="section-title">{{ $sectionDeclaration }}</h2>

        <div class="checkbox-group">
          <input type="checkbox" required>
          <label>
            {{ $declarationText }}
          </label>
        </div>

        <button type="submit" class="submit-btn">
          {{ $submitButtonText }}
        </button>

        <p class="footer-note">
          {{ $footerNote }}
        </p>

      </form>
    </div>
  </div>


@endsection
