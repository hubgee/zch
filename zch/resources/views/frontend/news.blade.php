@extends('layouts.app')
@section('content')

@php
    $pageData = $page?->content_data ?? [];
    $recentPosts = data_get($pageData, 'recent_posts', []);
    $categories = data_get($pageData, 'categories', []);
    $tags = data_get($pageData, 'tags', []);
@endphp

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
    <div class="container">
        <div class="title-text">
            <h1>{{ data_get($pageData, 'page_heading_label', 'Latest') }} {{ data_get($pageData, 'page_heading_highlight', 'News') }}</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{ route('home') }}">home &nbsp;/</a>
                </li>
                <li>{{ $page?->title ?? 'Latest News' }}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<style>
  .recent-post-widget .post-item {
    display: flex;
    gap: 12px;
    padding: 12px 0;
    border-top: 1px solid #e9edf3;
  }
  .recent-post-widget .post-item:first-of-type {
    border-top: 0;
  }
  .recent-post-widget .thumb {
    width: 74px;
    height: 74px;
    object-fit: cover;
    border-radius: 4px;
    flex-shrink: 0;
  }
  .recent-post-widget .post-date {
    display: block;
    font-size: 13px;
    color: #7b8794;
    margin-bottom: 2px;
  }
  .recent-post-widget .post-title {
    color: #1f2f46;
    font-size: 17px;
    line-height: 1.35;
    font-weight: 700;
    text-decoration: none;
  }
  .recent-post-widget .post-title:hover {
    color: #0da8d6;
    text-decoration: none;
  }
  .featured-news-banner {
    background: linear-gradient(135deg, rgba(0, 86, 179, 0.95), rgba(0, 198, 255, 0.9));
    border-radius: 18px;
    overflow: hidden;
    margin-bottom: 38px;
    box-shadow: 0 18px 40px rgba(0, 86, 179, 0.18);
  }
  .featured-news-banner .featured-image {
    height: 100%;
    min-height: 320px;
  }
  .featured-news-banner .featured-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .featured-news-banner .featured-content {
    padding: 34px 34px 30px;
    color: #ffffff;
  }
  .featured-news-banner .featured-tag {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.4px;
    text-transform: uppercase;
    margin-bottom: 14px;
  }
  .featured-news-banner h3 {
    color: #ffffff;
    font-size: 30px;
    line-height: 1.2;
    font-weight: 800;
    margin-bottom: 14px;
  }
  .featured-news-banner p {
    color: rgba(255, 255, 255, 0.92);
    line-height: 1.8;
    margin-bottom: 18px;
  }
  .featured-news-banner .meta {
    display: block;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 16px;
    font-size: 14px;
  }
  .featured-news-banner .btn-style-one {
    background: #ffffff;
    color: #0056b3;
    border-color: #ffffff;
  }
  .featured-news-banner .btn-style-one:hover {
    background: transparent;
    color: #ffffff;
  }
  .blog-section .content-text h4 {
    color: #143b6a;
    font-size: 1.4rem;
    font-weight: 500;
    line-height: 1.35;
    min-height: 2.7em;
    margin-bottom: 10px;
  }
  .blog-section .content-text h4 a {
    color: inherit;
  }
  @media (max-width: 991px) {
    .featured-news-banner .featured-content {
      padding: 26px 22px 24px;
    }
    .featured-news-banner h3 {
      font-size: 24px;
    }
  }
  @media (max-width: 767px) {
    .blog-section .content-text h4 {
      min-height: 0;
    }
  }
</style>

<!-- Contact Section -->
<section class="blog-section style-four section">
  <div class="container">
    
    <div class="row">
      <div class="col-lg-9">
        <div class="left-side">

          @foreach($articles as $article)
          <div class="item-holder">
            <div class="image-box">
              <figure>
                <a href="{{ route('frontend.news.article', ['article' => $article['slug']]) }}"><img loading="lazy" class="img-fluid" src="{{ \App\Models\HomePage::assetUrl(data_get($article, 'image', 'images/news/news2.jpg')) }}" alt="{{ data_get($article, 'image_alt', '') }}"></a>
              </figure>
            </div>
            <div class="content-text">
              <a href="{{ route('frontend.news.article', ['article' => $article['slug']]) }}">
                <h4>{{ data_get($article, 'title', '') }}</h4>
              </a>
              <span>{{ data_get($article, 'meta', '') }}</span>
              <p>{{ data_get($article, 'excerpt', '') }}</p>
              <div class="link-btn">
                <a href="{{ route('frontend.news.article', ['article' => $article['slug']]) }}" class="btn-style-one">read more</a>
              </div>
            </div>
          </div>
          @endforeach

          
          <div class="styled-pagination">
            <ul>
              <li><a class="prev" href="news.html"><span class="fas fa-angle-left" aria-hidden="true"></span></a></li>
              <li><a href="news.html" class="active">1</a></li>
              <li><a href="news.html">2</a></li>
              <li><a href="news.html">3</a></li>
              <li><a class="next" href="news.html"><span class="fas fa-angle-right" aria-hidden="true"></span></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="right-side">
          <div class="recent-post-widget">
            <div class="text-title">
              <h6>Recent Post</h6>
            </div>
            @foreach($recentPosts as $post)
            @php
              $postTitle = trim((string) data_get($post, 'title', ''));
              $postTitle = preg_replace('/\.\.\.$/', '', $postTitle);
              $postArticle = collect($articles)->first(
                  fn (array $article): bool => \Illuminate\Support\Str::startsWith(
                      \Illuminate\Support\Str::lower((string) data_get($article, 'title', '')),
                      \Illuminate\Support\Str::lower($postTitle)
                  )
              );
              $postUrl = $postArticle
                  ? route('frontend.news.article', ['article' => $postArticle['slug']])
                  : data_get($post, 'link', '#');
            @endphp
            <div class="post-item">
              <a href="{{ $postUrl }}">
                <img loading="lazy" class="thumb" src="{{ \App\Models\HomePage::assetUrl(data_get($post, 'image', 'images/news/news1.jpg')) }}" alt="recent post thumbnail">
              </a>
              <div>
                <span class="post-date">{{ data_get($post, 'date', '') }}</span>
                <a class="post-title" href="{{ $postUrl }}">{{ data_get($post, 'title', '') }}</a>
              </div>
            </div>
            @endforeach
          </div>
          <div class="text-title">
            <h6>Search</h6>
          </div>
          <div class="search-box">
            <form method="post" action="index.html">
              <div class="input-group">
                <input class="form-control" type="search" name="search" placeholder="Enter to Search" required="" autocomplete="off">
              </div>
            </form>
          </div>
          <div class="categorise-menu">
            <div class="text-title">
              <h6>Categories</h6>
            </div>
            <ul class="categorise-list">
              @foreach($categories as $category)
              <li><a href="news.html">{{ data_get($category, 'name', '') }} <span>({{ data_get($category, 'count', 0) }})</span></a></li>
              @endforeach
            </ul>
          </div>
          <div class="tag-list">
            <div class="text-title">
              <h6>Tags</h6>
            </div>
            @foreach($tags as $tag)
            <a href="news.html">{{ data_get($tag, 'name', '') }}</a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<section class="cta-section" style="background: linear-gradient(135deg, #0056b3, #00a8cc); padding: 60px 0; text-align: center;">
  <div class="container">
    <h2 style="color: #fff; font-size: 36px; margin-bottom: 20px;">{{ data_get($pageData, 'cta_title', 'Dedicated to Your Health & Well-being') }}</h2>
    <p style="color: #fff; font-size: 18px; max-width: 800px; margin: 0 auto 30px; opacity: 0.9;">{{ data_get($pageData, 'cta_text', 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.') }}</p>
    <div style="margin-top: 25px;">
      <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_1_url', 'frontend.contact')) }}" class="btn-style-one" style="background: #fff; color: #00a8cc; border-color: #fff;">{{ data_get($pageData, 'cta_button_1_text', 'Get in Touch') }}</a>
      <a href="{{ \App\Models\HomePage::resolveUrl(data_get($pageData, 'cta_button_2_url', 'frontend.services')) }}" class="btn-style-two" style="background: transparent; color: #fff; border-color: #fff; margin-left: 15px;">{{ data_get($pageData, 'cta_button_2_text', 'Our Services') }}</a>
    </div>
  </div>
</section>
@endsection
