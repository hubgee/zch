@extends('layouts.app')

@section('content')
<style>
    .single-news-title {
        font-weight: 500;
        font-size: 2rem;
        line-height: 1.25;
    }

    @media (max-width: 767px) {
        .single-news-title {
            font-size: 1.6rem;
        }
    }

    .single-news-content {
        text-align: justify;
    }
</style>
@php
    $article = $selectedArticle;
    $pageTitle = $page?->title ?? 'Latest News';
    $image = \App\Models\HomePage::assetUrl(data_get($article, 'image', 'images/news/news2.jpg'));
    $content = data_get($article, 'content', data_get($article, 'excerpt', ''));
    $author = data_get($article, 'author');
    $date = data_get($article, 'date');
@endphp

<section class="page-title text-center" style="background-image:url('{{ asset('images/background/3a.jpg') }}');">
    <div class="container">
        <div class="title-text">
            <h1>{{ $pageTitle }}</h1>
            <ul class="title-menu clearfix">
                <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
                <li><a href="{{ route('frontend.news') }}">latest news &nbsp;/</a></li>
                <li>{{ data_get($article, 'title') }}</li>
            </ul>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <article class="col-lg-8">
                <img loading="lazy" class="img-fluid rounded mb-4" src="{{ $image }}" alt="{{ data_get($article, 'image_alt', data_get($article, 'title')) }}">
                <h1 class="single-news-title mb-3">{{ data_get($article, 'title') }}</h1>

                <div class="text-muted mb-4">
                    @if ($author)
                        <span><i class="far fa-user mr-1"></i>{{ $author }}</span>
                    @endif
                    @if ($date)
                        <span class="{{ $author ? 'ml-3' : '' }}"><i class="far fa-calendar mr-1"></i>{{ $date }}</span>
                    @elseif (data_get($article, 'meta'))
                        <span class="{{ $author ? 'ml-3' : '' }}">{{ data_get($article, 'meta') }}</span>
                    @endif
                </div>

                <div class="single-news-content article-content" style="white-space: pre-line; line-height: 1.9;">
                    {!! nl2br(e($content)) !!}
                </div>

                <a href="{{ route('frontend.news') }}" class="btn-style-one mt-4">Back to News</a>
            </article>

            <aside class="col-lg-4 mt-5 mt-lg-0">
                <div class="p-4 rounded" style="background:#f4f8ff;">
                    <h4 class="mb-3">Related News</h4>
                    @forelse ($relatedArticles as $related)
                        <div class="d-flex mb-3">
                            <img loading="lazy" class="mr-3 rounded" style="width:80px;height:65px;object-fit:cover;" src="{{ \App\Models\HomePage::assetUrl(data_get($related, 'image', 'images/news/news2.jpg')) }}" alt="{{ data_get($related, 'image_alt', data_get($related, 'title')) }}">
                            <a href="{{ route('frontend.news.article', ['article' => $related['slug']]) }}" class="font-weight-bold">
                                {{ data_get($related, 'title') }}
                            </a>
                        </div>
                    @empty
                        <p class="mb-0 text-muted">No related news articles available.</p>
                    @endforelse
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
