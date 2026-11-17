@extends('layouts.app')
@section('content')

<section class="cta">
  <div class="container">
    <div class="cta-block row no-gutters">
      @foreach ($homePage->cta_blocks ?? [] as $block)
        @php($type = $block['type'] ?? 'departments')
        <div class="col-lg-4 col-md-6 {{ $type === 'emergency' ? 'emmergency' : ($type === 'hours' ? 'working-time col-md-12' : 'top-doctor') }} item">
          @if (! empty($block['icon']))
            <i class="{{ $block['icon'] }}"></i>
          @endif
          <h2>{{ $block['title'] }}</h2>
          @if ($type === 'emergency' && ! empty($block['phone']))
            <a href="{{ $block['phone_link'] ?? 'tel:' . preg_replace('/\s+/', '', $block['phone']) }}">{{ $block['phone'] }}</a>
          @endif
          @if (! empty($block['body']))
            <p>{{ $block['body'] }}</p>
          @endif
          @if ($type === 'departments' && ! empty($block['button_text']))
            <a href="{{ \App\Models\HomePage::resolveUrl($block['button_url'] ?? null) }}" class="btn btn-main">{{ $block['button_text'] }}</a>
          @endif
          @if ($type === 'hours' && ! empty($block['hours']))
            <ul class="w-hours">
              @foreach ($block['hours'] as $hour)
                <li>{{ $hour['label'] }} - <span>{{ $hour['time'] }}</span></li>
              @endforeach
            </ul>
          @endif
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Hospital History Section -->
<section class="history-section section" id="history">
  <div class="container history-container">
    <div class="history-content">
      <h2><i class="fas fa-landmark"></i> {{ $homePage->about_title }}</h2>
      <span class="subtitle">{{ $homePage->about_subtitle }}</span>
      @if ($homePage->about_paragraph_1)
        <p>{{ $homePage->about_paragraph_1 }}</p>
      @endif
      @if ($homePage->about_paragraph_2)
        <p>{{ $homePage->about_paragraph_2 }}</p>
      @endif
      @if ($homePage->about_button_url)
        <a href="{{ \App\Models\HomePage::resolveUrl($homePage->about_button_url) }}" class="btn btn-primary mt-3">Read More</a>
      @endif
    </div>

    <div class="history-image">
      @if ($homePage->about_image)
        <img loading="lazy" class="img-fluid" src="{{ \App\Models\HomePage::assetUrl($homePage->about_image) }}" alt="{{ $homePage->about_title }}">
      @endif
    </div>
  </div>

  <div class="container">
    <div class="history-stats">
      @foreach ($homePage->stats ?? [] as $stat)
        <div class="history-stat">
          @if (! empty($stat['icon']))
            <i class="{{ $stat['icon'] }}"></i>
          @endif
          <h3>{{ $stat['value'] }}</h3>
          <p>{{ $stat['label'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<div class="section-title text-center">
  <h3>{{ $homePage->leadership_title }}
    <span>{{ $homePage->leadership_highlight }}</span>
  </h3>
  @if ($homePage->leadership_intro)
    <p class="mb-0">{!! nl2br(e($homePage->leadership_intro)) !!}</p>
  @endif
</div>

<style>
  .service-tab-section .service-box .row {
    align-items: stretch;
  }
  .service-tab-section .service-box .col-lg-6:first-child {
    display: flex;
  }
  .service-tab-section .service-box .col-lg-6:first-child img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .service-tab-section .service-box .contents {
    display: flex;
    flex-direction: column;
    height: 100%;
  }
  .service-tab-section .service-box .contents .btn-style-one {
    display: inline-block;
    margin-top: auto;
    vertical-align: middle;
  }
  .service-tab-section .service-box .contents .text p {
    text-align: justify;
  }
</style>
<!--Start about us area-->
<section class="service-tab-section section">
  <div class="outer-box clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="tabs mb-5">
            <ul class="nav nav-tabs justify-content-center" id="aboutTab" role="tablist">
              @foreach ($homePage->leaders ?? [] as $index => $leader)
                <li class="nav-item" role="presentation">
                  <a class="nav-link {{ $index === 0 ? 'active' : '' }}" id="{{ $leader['tab_id'] }}-tab" data-toggle="tab" href="#{{ $leader['tab_id'] }}" role="tab" aria-controls="{{ $leader['tab_id'] }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">{{ $leader['tab_label'] }}</a>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="tab-content" id="aboutTab">
            @foreach ($homePage->leaders ?? [] as $index => $leader)
              <div class="service-box tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="{{ $leader['tab_id'] }}">
                <div class="row">
                  <div class="col-lg-6">
                    @if (! empty($leader['image']))
                      <img loading="lazy" class="img-fluid" src="{{ \App\Models\HomePage::assetUrl($leader['image'] ?? null) }}" alt="{{ $leader['name'] }}">
                    @endif
                  </div>
                  <div class="col-lg-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>{{ $leader['name'] }}</h3>
                      </div>
                      <div class="text">
                        @foreach ($leader['paragraphs'] ?? [] as $paragraph)
                          <p>{{ is_array($paragraph) ? ($paragraph['paragraph'] ?? $paragraph['text'] ?? '') : $paragraph }}</p>
                        @endforeach
                      </div>
                      @if (! empty($leader['bullet_points']))
                        <ul class="content-list">
                          @foreach ($leader['bullet_points'] as $point)
                            <li>
                              <i class="far fa-dot-circle"></i>{{ is_array($point) ? ($point['point'] ?? $point['text'] ?? '') : $point }}
                            </li>
                          @endforeach
                        </ul>
                      @endif
                      @if (! empty($leader['button_text']))
                        <a href="{{ \App\Models\HomePage::resolveUrl($leader['button_url'] ?? null) }}" class="btn btn-style-one">{{ $leader['button_text'] }}</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End about us area-->

<!--Service Section-->
<style>
  .service-section .fb-embed-card iframe {
    width: 100%;
    height: 520px;
    border: 0;
    display: block;
  }
  .service-section .facebook-title {
    background: #00a8cc;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    display: inline-block;
    padding: 8px 14px;
    border-radius: 4px;
    margin-bottom: 12px;
    text-align: center;
    width: 100%;
  }
  .service-section .facebook-frame {
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
    border: 1px solid rgba(16, 82, 135, 0.12);
    box-shadow: 0 12px 28px rgba(13, 56, 95, 0.18);
  }
  .service-section .fb-embed-card {
    background: linear-gradient(180deg, #f7fbff 0%, #eef6fc 100%);
    padding: 12px;
    border-radius: 12px;
  }
  .service-section .provided-intro h3 {
    margin-bottom: 12px;
  }
  .service-section .provided-intro p {
    max-width: 760px;
    color: #5f6f82;
    line-height: 1.75;
    font-size: 17px;
    margin-bottom: 18px;
  }
  .service-section .items-container .item {
    display: flex;
    align-items: stretch;
  }
  .service-section .items-container .item .inner-box {
    display: flex;
    flex-direction: column;
    height: 100%;
    min-height: 760px;
    width: 100%;
  }
  .service-section .items-container .item .img_holder {
    height: 520px;
    overflow: hidden;
  }
  .service-section .fb-embed-card .facebook-frame iframe {
    display: block;
  }
  .service-section .items-container .item .img_holder img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .service-section .items-container .item .image-content {
    flex: 1;
  }
  @media (max-width: 991px) {
    .service-section .items-container .item .inner-box {
      min-height: unset;
    }
    .service-section .items-container .item .img_holder,
    .service-section .fb-embed-card iframe {
      height: 360px;
    }
  }
</style>
<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-left provided-intro">
      <h3>{{ $homePage->news_title }}
        <span>{{ $homePage->news_highlight }}</span>
      </h3>
      <p>{{ $homePage->news_intro }}</p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="items-container">
          @foreach ($homeNewsItems ?? [] as $item)
            <div class="item">
              <div class="inner-box">
                <div class="img_holder {{ ($item['type'] ?? 'news') === 'facebook' ? 'fb-embed-card' : '' }}">
                  @if (($item['type'] ?? 'news') === 'facebook')
                    <h5 class="facebook-title">{{ $item['facebook_title'] ?? 'Follow Us on Facebook' }}</h5>
                    <div class="facebook-frame">
                      <iframe
                        src="{{ $item['facebook_embed_url'] }}"
                        width="100%"
                        height="700"
                        style="border:none;overflow:hidden"
                        scrolling="no"
                        frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                  @elseif (! empty($item['image']))
                    <a href="{{ $item['resolved_url'] }}">
                      <img loading="lazy" src="{{ \App\Models\HomePage::assetUrl($item['image'] ?? null) }}" alt="{{ $item['title'] }}" class="img-fluid">
                    </a>
                  @endif
                </div>
                <div class="image-content text-center">
                  <span>{{ $item['category'] }}</span>
                  <a href="{{ $item['resolved_url'] }}" @if($item['resolved_external'] ?? false) target="_blank" rel="noopener noreferrer" @endif>
                    <h6>{{ $item['title'] }}</h6>
                  </a>
                  <p>{{ $item['excerpt'] }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Service Section-->

<!-- Clients / Stakeholders -->
<div class="container content-space-1">
  <section class="stakeholders-section">
    <div class="text-center mb-5">
      <h2 class="stakeholders-title">{{ $homePage->partners_title }}</h2>
      <p class="stakeholders-subtitle">{{ $homePage->partners_subtitle }}</p>
    </div>

    <div class="row stakeholders-logos-row justify-content-center">
      @foreach ($homePage->partners ?? [] as $partner)
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="stakeholder-logo-card" title="{{ $partner['name'] }}">
            @if (! empty($partner['logo']))
              <img class="stakeholder-logo" src="{{ \App\Models\HomePage::assetUrl($partner['logo'] ?? null) }}" alt="{{ $partner['name'] }}">
            @endif
            <span class="stakeholder-logo-label">{{ $partner['name'] }}</span>
          </div>
        </div>
      @endforeach
    </div>
  </section>
</div>
<!-- End Clients / Stakeholders -->

<!-- CTA Section -->
<section class="about-section about-cta text-center" style="background: linear-gradient(rgba(0, 168, 204, 0.9), rgba(0, 168, 204, 0.9)), url('{{ \App\Models\HomePage::assetUrl($homePage->bottom_cta_background_image) }}') fixed center center; background-size: cover; color: #fff; padding: 80px 0;">
  <div class="container">
    <h2 style="color: #fff; font-size: 36px; margin-bottom: 20px;">{{ $homePage->bottom_cta_title }}</h2>
    <p style="color: #fff; font-size: 18px; max-width: 800px; margin: 0 auto 30px; opacity: 0.9;">{{ $homePage->bottom_cta_text }}</p>
    <div class="cta-btns">
      @if ($homePage->bottom_cta_button_1_text)
        <a href="{{ \App\Models\HomePage::resolveUrl($homePage->bottom_cta_button_1_url) }}" class="btn-style-one" style="background: #fff; color: #00a8cc; border-color: #fff;">{{ $homePage->bottom_cta_button_1_text }}</a>
      @endif
      @if ($homePage->bottom_cta_button_2_text)
        <a href="{{ \App\Models\HomePage::resolveUrl($homePage->bottom_cta_button_2_url) }}" class="btn-style-two" style="background: transparent; color: #fff; border-color: #fff; margin-left: 15px;">{{ $homePage->bottom_cta_button_2_text }}</a>
      @endif
    </div>
  </div>
</section>

@endsection
