@extends('layouts.app')
@php
  $pageData = $page?->content_data ?? [];
  $pageTitle = strtoupper($page?->title ?? 'Downloads');
  $heroTitle = data_get($pageData, 'hero_title', 'Downloads Library');
  $heroText  = data_get($pageData, 'hero_text', 'Find official forms, service guides, policy documents, and patient information resources.');
@endphp
@section('content')

  <style>
    .dl-wrap { background: linear-gradient(180deg, #eef8ff 0%, #ffffff 40%); }
    .dl-hero {
      background: linear-gradient(120deg, #0b3d91 0%, #00a8cc 100%);
      color: #fff;
      border-radius: 14px;
      padding: 30px;
      margin-bottom: 26px;
      box-shadow: 0 12px 28px rgba(11, 61, 145, 0.22);
    }
    .dl-hero h2 { margin: 0 0 8px; font-size: 34px; font-weight: 700; }
    .dl-hero p { margin: 0; color: #fff; }

    .dl-side, .dl-main {
      background: #fff;
      border: 1px solid #e5eef8;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }
    .dl-side { padding: 18px; }
    .dl-main { padding: 22px; }
    .dl-title { font-size: 18px; font-weight: 700; color: #123765; margin-bottom: 12px; }

    .dl-cats { list-style: none; margin: 0; padding: 0; }
    .dl-cats li { margin-bottom: 9px; }
    .dl-cat {
      width: 100%;
      text-align: left;
      border: 0;
      border-left: 4px solid transparent;
      background: #f4f8ff;
      color: #173e6f;
      border-radius: 8px;
      padding: 10px 12px;
      font-weight: 600;
      transition: .2s ease;
    }
    .dl-cat:hover, .dl-cat.active {
      background: #00a8cc;
      color: #fff;
      border-left-color: #0b3d91;
    }

    .dl-card {
      border: 1px solid #e5eef8;
      border-radius: 10px;
      padding: 14px;
      margin-bottom: 12px;
      background: #fff;
      transition: .2s ease;
    }
    .dl-card:hover { box-shadow: 0 10px 20px rgba(0, 168, 204, 0.12); transform: translateY(-1px); }
    .dl-type {
      display: inline-block;
      background: #e8f8fc;
      color: #007f9c;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 700;
      padding: 4px 9px;
      margin-bottom: 8px;
    }
    .dl-card h4 { font-size: 19px; margin: 0 0 7px; color: #143b6a; }
    .dl-card p { margin: 0 0 8px; color: #577096; }
    .dl-meta { font-size: 13px; color: #5c7599; margin-bottom: 10px; }
    .dl-meta i { color: #00a8cc; margin-right: 4px; }

    .dl-btn {
      display: inline-block;
      background: #00a8cc;
      color: #fff;
      border-radius: 6px;
      padding: 8px 12px;
      font-weight: 700;
      text-decoration: none;
    }
    .dl-btn:hover { color: #fff; background: #0b3d91; }
    .dl-btn-outline {
      display: inline-block;
      background: transparent;
      color: #00a8cc;
      border: 1px solid #00a8cc;
      border-radius: 6px;
      padding: 8px 12px;
      font-weight: 700;
      text-decoration: none;
      margin-right: 6px;
    }
    .dl-btn-outline:hover { color: #fff; background: #00a8cc; }
    .dl-actions { display: flex; gap: 6px; flex-wrap: wrap; }

    .dl-empty {
      border: 1px dashed #c7d7ec;
      border-radius: 10px;
      padding: 24px;
      text-align: center;
      color: #637ea5;
      background: #fbfdff;
    }
  </style>
  
<section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
  <div class="container"><div class="title-text"><h1>{{ $pageTitle }}</h1><ul class="title-menu clearfix"><li><a href="{{ route('home') }}">home &nbsp;/</a></li><li>Downloads</li></ul></div></div>
</section>

<section class="section dl-wrap">
  <div class="container">
    <div class="dl-hero">
      <h2>{{ $heroTitle }}</h2>
      <p>{{ $heroText }}</p>
    </div>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <aside class="dl-side">
          <h4 class="dl-title">Document Categories</h4>
          <ul class="dl-cats" id="dlCats"></ul>
        </aside>
      </div>

      <div class="col-lg-8 mb-4">
        <div class="dl-main">
          <h4 class="dl-title" id="dlHeading">All Documents</h4>
          <p id="dlDesc" class="mb-3" style="color:#5d7699;">Browse all available downloadable resources below.</p>
          <div id="dlList"></div>
        </div>
      </div>
    </div>
  </div>
</section>
  <div id="back-to-top" class="back-to-top"><i class="fa fa-angle-up"></i></div>
</div>
<div class="scroll-to-top scroll-to-target" data-target=".header-top"><span class="icon fa fa-angle-up"></span></div>

<script src="plugins/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.min.js" defer></script>
<script src="plugins/jquery-ui/jquery-ui.js" defer></script>
<script src="plugins/timePicker/timePicker.js" defer></script>
<script src="js/script.js"></script>
<script>
@php
  $defaultDocs = [
      ['title' => 'Patient Registration Form', 'category' => 'forms', 'date' => '2026-04-12', 'type' => 'Form', 'desc' => 'Printable form for outpatient and inpatient registration.', 'file' => '', 'file_url' => '#'],
      ['title' => 'Visiting Hours Guide', 'category' => 'guides', 'date' => '2026-03-02', 'type' => 'Guide', 'desc' => 'Updated visitor access policy and ward-specific hours.', 'file' => '', 'file_url' => '#'],
      ['title' => 'Maternal Care Information Pack', 'category' => 'patient-info', 'date' => '2026-02-16', 'type' => 'Patient Info', 'desc' => 'Information for antenatal, delivery, and postnatal care pathways.', 'file' => '', 'file_url' => '#'],
      ['title' => 'Laboratory Request Form', 'category' => 'forms', 'date' => '2026-01-25', 'type' => 'Form', 'desc' => 'Standard request form for laboratory and diagnostics services.', 'file' => '', 'file_url' => '#'],
      ['title' => 'Infection Prevention Policy', 'category' => 'policies', 'date' => '2025-12-10', 'type' => 'Policy', 'desc' => 'Hospital policy on hygiene, PPE, and infection control protocols.', 'file' => '', 'file_url' => '#'],
      ['title' => 'Emergency Preparedness Checklist', 'category' => 'guides', 'date' => '2025-11-08', 'type' => 'Guide', 'desc' => 'Preparedness checklist for emergency response and referrals.', 'file' => '', 'file_url' => '#'],
  ];
  $defaultCategories = [
      ['id' => 'all', 'name' => 'All Documents', 'desc' => 'Browse all available downloadable resources below.'],
      ['id' => 'forms', 'name' => 'Forms', 'desc' => 'Official forms used across departments and services.'],
      ['id' => 'guides', 'name' => 'Service Guides', 'desc' => 'Patient and service process guides for quick reference.'],
      ['id' => 'policies', 'name' => 'Policies', 'desc' => 'Policy documents and official operating standards.'],
      ['id' => 'patient-info', 'name' => 'Patient Information', 'desc' => 'Educational resources for patients and guardians.'],
  ];

  $documents = collect(data_get($pageData, 'documents', $defaultDocs))
      ->map(function (array $document): array {
          $file = filled($document['file_url'] ?? null) && ($document['file_url'] ?? null) !== '#'
              ? $document['file_url']
              : ($document['file'] ?? null);

          if (filled($file) && ! str_starts_with($file, 'http://') && ! str_starts_with($file, 'https://')) {
              $file = asset(ltrim($file, '/'));
          }

          $document['download_url'] = $file ?: '#';

          return $document;
      })
      ->values()
      ->all();
@endphp
  
(function(){
  var docs = @json($documents);
  var categories = @json(data_get($pageData, 'categories', $defaultCategories));

  var active='all';
  var catsEl=document.getElementById('dlCats');
  var listEl=document.getElementById('dlList');
  var heading=document.getElementById('dlHeading');
  var desc=document.getElementById('dlDesc');

  function renderCats(){
    catsEl.innerHTML = categories.map(function(c){
      var count = c.id==='all' ? docs.length : docs.filter(function(d){return d.category===c.id;}).length;
      return '<li><button class="dl-cat '+(c.id===active?'active':'')+'" data-id="'+c.id+'">'+c.name+' ('+count+')</button></li>';
    }).join('');
    catsEl.querySelectorAll('.dl-cat').forEach(function(btn){
      btn.addEventListener('click', function(){ active=this.getAttribute('data-id'); render(); });
    });
  }

  function renderList(){
    var filtered = active==='all' ? docs : docs.filter(function(d){ return d.category===active; });
    if(!filtered.length){
      listEl.innerHTML = '<div class="dl-empty"><i class="far fa-folder-open fa-2x mb-2"></i><h5>No documents found</h5><p>There are no files in this category right now.</p></div>';
      return;
    }
    listEl.innerHTML = filtered.map(function(d){
      var fileUrl = d.download_url || '#';
      var isPdf = fileUrl.toLowerCase().endsWith('.pdf');
      var viewBtn = '<a class="dl-btn-outline" href="'+fileUrl+'" target="_blank" rel="noopener noreferrer"><i class="fa fa-eye mr-1"></i>View</a>';
      var dlBtn = '<a class="dl-btn" href="'+fileUrl+'" '+(isPdf ? 'download' : 'target="_blank" rel="noopener noreferrer"')+'><i class="fa fa-download mr-1"></i>Download</a>';
      return '<article class="dl-card">'+
        '<span class="dl-type">'+d.type+'</span>'+
        '<h4>'+d.title+'</h4>'+
        '<p>'+d.desc+'</p>'+
        '<div class="dl-meta"><i class="far fa-calendar"></i>'+d.date+'</div>'+
        '<div class="dl-actions">'+viewBtn+dlBtn+'</div>'+
      '</article>';
    }).join('');
  }

  function renderHead(){
    var cat = categories.find(function(c){return c.id===active;}) || categories[0];
    heading.textContent = cat.name;
    desc.textContent = cat.desc;
  }

  function render(){ renderCats(); renderHead(); renderList(); }
  render();
})();
</script>

@endsection
