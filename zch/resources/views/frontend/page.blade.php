@extends('layouts.app')

@section('content')
<section class="page-title text-center" style="background-image:url({{ asset('images/background/3a.jpg') }});">
  <div class="container">
    <div class="title-text">
      <h1>{{ strtoupper($pageTitle) }}</h1>
      <ul class="title-menu clearfix">
        <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
        <li>{{ $pageTitle }}</li>
      </ul>
    </div>
  </div>
</section>

<section class="section bg-gray">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mb-5">
          <h2 class="mb-3">{{ $pageTitle }}</h2>
          <p class="mb-0">{{ $intro }}</p>
        </div>
      </div>
    </div>

    @if (!empty($items))
      <div class="row">
        @foreach ($items as $item)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                @if (!empty($item['badge']))
                  <div class="badge badge-info mb-3">{{ $item['badge'] }}</div>
                @endif
                <h4 class="card-title">{{ $item['title'] }}</h4>
                <p class="card-text">{{ $item['text'] }}</p>
                @if (!empty($item['meta']))
                  <p class="text-muted mb-3">{{ $item['meta'] }}</p>
                @endif
                @if (!empty($item['link']))
                  <a href="{{ $item['link'] }}" class="btn btn-main btn-sm">Learn More</a>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif

    @if (!empty($cta))
      <div class="text-center mt-4">
        <a href="{{ route($cta['route']) }}" class="btn btn-style-one">{{ $cta['label'] }}</a>
      </div>
    @endif
  </div>
</section>
@endsection
