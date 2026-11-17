<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
  @foreach ($homePage->sliders ?? [] as $slide)
    @if ($slide['is_active'] ?? true)
      <div class="slider-item {{ $slide['css_class'] ?? '' }}" style="background-image:url({{ \App\Models\HomePage::assetUrl($slide['background_image'] ?? null) }})">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="content style text-center">
                <h2 class="text-white text-bold mb-2" data-animation-in="slideInRight">{{ $slide['title'] }}</h2>
                <p class="tag-text mb-4" data-animation-in="slideInRight">{{ $slide['subtitle'] }}</p>
                @if (! empty($slide['button_text']))
                  <a href="{{ \App\Models\HomePage::resolveUrl($slide['button_url'] ?? null) }}" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2">{{ $slide['button_text'] }}</a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
  @endforeach
</div>

<!--====  End of Page Slider  ====-->
