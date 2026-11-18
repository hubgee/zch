<style>
  .footer-main .footer-top .footer-grid {
    display: flex;
    flex-wrap: wrap;
  }
  .footer-main .footer-top .footer-grid > [class*="col-"] {
    margin-bottom: 30px;
  }
  .footer-main .footer-top .footer-widget-title {
    display: flex;
    align-items: center;
    gap: 14px;
    color: #00a8cc;
    font-size: 28px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 14px;
  }
  .footer-main .footer-top .footer-widget-title i {
    font-size: 28px;
  }
  .footer-main .footer-top .footer-title-rule {
    width: 70px;
    height: 4px;
    background: #00a8cc;
    border-radius: 999px;
    margin-bottom: 36px;
  }
  .footer-main .footer-top .footer-ombudsman-text {
    color: #d0d7e2;
    font-size: 15px;
    line-height: 1.9;
    margin-bottom: 22px;
    max-width: 360px;
  }
  .footer-main .footer-top .footer-contact-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .footer-main .footer-top .footer-contact-list li {
    position: relative;
    padding-left: 34px;
    margin-bottom: 18px;
    color: #d0d7e2;
    line-height: 1.8;
  }
  .footer-main .footer-top .footer-contact-list li i {
    position: absolute;
    left: 0;
    top: 5px;
    color: #00a8cc;
    font-size: 18px;
  }
  .footer-main .footer-top .visitor-card {
    background: transparent;
    border: 0;
    border-radius: 0;
    padding: 0;
    min-height: 100%;
    box-shadow: none;
  }
  .footer-main .footer-top .visitor-card-title {
    display: flex;
    align-items: center;
    gap: 14px;
    color: #00a8cc;
    font-size: 28px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 14px;
    text-transform: none;
    letter-spacing: 0;
    font-family: "Source Sans Pro", sans-serif;
  }
  .footer-main .footer-top .visitor-card-title i {
    font-size: 28px;
  }
  .footer-main .footer-top .visitor-hero {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 10px;
  }
  .footer-main .footer-top .visitor-bars {
    display: flex;
    align-items: flex-end;
    gap: 8px;
    height: 82px;
    margin-left: 8px;
  }
  .footer-main .footer-top .visitor-bars span {
    display: block;
    width: 14px;
    background: #00a8cc;
  }
  .footer-main .footer-top .visitor-bars .bar-1 { height: 28px; }
  .footer-main .footer-top .visitor-bars .bar-2 { height: 44px; }
  .footer-main .footer-top .visitor-bars .bar-3 { height: 62px; }
  .footer-main .footer-top .visitor-bars .bar-4 { height: 80px; }
  .footer-main .footer-top .visitor-bars .bar-5 { height: 38px; }
  .footer-main .footer-top .visitor-word {
    color: #ffffff;
    font-size: 42px;
    line-height: 1;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  .footer-main .footer-top .visitor-stats {
    margin-top: 8px;
  }
  .footer-main .footer-top .visitor-stats .visitor-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 14px;
    color: #d0d7e2;
    font-size: 19px;
    font-weight: 400;
    font-family: "Source Sans Pro", sans-serif;
    line-height: 1.2;
    text-transform: uppercase;
    margin-bottom: 6px;
  }
  .footer-main .footer-top .visitor-stats .visitor-row span:last-child {
    min-width: 92px;
    text-align: right;
    font-size: 22px;
    font-weight: 700;
    color: #ffffff;
  }
  .footer-main .footer-top .visitor-stats .visitor-row:last-child {
    margin-bottom: 0;
  }
  .footer-main .footer-top .visitor-stats .visitor-online {
    font-size: 16px;
  }
  .footer-main .footer-top .visitor-stats .visitor-online span:last-child {
    min-width: 72px;
  }
  .footer-main .footer-top .visitor-note {
    color: #ababab;
    font-size: 13px;
    line-height: 1.6;
    margin-bottom: 0;
  }
  @media (max-width: 991px) {
    .footer-main .footer-top .footer-widget-title {
      font-size: 24px;
    }
    .footer-main .footer-top .visitor-card-title {
      font-size: 24px;
    }
    .footer-main .footer-top .visitor-word {
      font-size: 36px;
    }
  }
  @media (max-width: 767px) {
    .footer-main .footer-top .footer-title-rule {
      margin-bottom: 28px;
    }
  }
</style>
<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row footer-grid">
        <div class="col-lg-3 col-md-6">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="{{ route('home') }}">
                  <img loading="lazy" class="img-fluid" src="{{ asset(data_get($footerData, 'about.logo', 'images/logo4.png')) }}" alt="{{ e(data_get($footerData, 'about.logo_alt', 'medic')) }}">
                </a>
              </figure>
            </div>
            <p>{{ data_get($footerData, 'about.description', '') }}</p>
            <ul class="location-link">
              @foreach(data_get($footerData, 'about.contact_items', []) as $item)
                <li class="item">
                  <i class="{{ data_get($item, 'icon', '') }}"></i>
                  @if(data_get($item, 'href'))
                    <a href="{{ \App\Models\HomePage::resolveNavUrl(data_get($item, 'href')) }}">
                      <p>{!! nl2br(e(data_get($item, 'text', ''))) !!}</p>
                    </a>
                  @else
                    <p>{!! nl2br(e(data_get($item, 'text', ''))) !!}</p>
                  @endif
                </li>
              @endforeach
            </ul>
            <ul class="list-inline social-icons">
              @foreach(data_get($footerData, 'about.social_links', []) as $social)
                <li class="list-inline-item">
                  <a href="{{ \App\Models\HomePage::resolveNavUrl(data_get($social, 'url', '#')) }}" aria-label="{{ data_get($social, 'label', '') }}">
                    <i class="{{ data_get($social, 'icon', '') }}"></i>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h2 class="footer-widget-title">
            <i class="{{ data_get($footerData, 'quick_links.icon', 'fas fa-link') }}"></i>
            {{ data_get($footerData, 'quick_links.title', 'Quick Links') }}
          </h2>
          <div class="footer-title-rule"></div>
          <ul class="menu-link">
            @foreach(data_get($footerData, 'quick_links.items', []) as $link)
              <li>
                <a href="{{ \App\Models\HomePage::resolveNavUrl(data_get($link, 'url', '#')) }}">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>{{ data_get($link, 'label', '') }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <h2 class="footer-widget-title">
            <i class="{{ data_get($footerData, 'ombudsman.icon', 'fas fa-headset') }}"></i>
            {{ data_get($footerData, 'ombudsman.title', 'Ombudsman') }}
          </h2>
          <div class="footer-title-rule"></div>
          <p class="footer-ombudsman-text">{{ data_get($footerData, 'ombudsman.description', '') }}</p>
          <ul class="footer-contact-list">
            @foreach(data_get($footerData, 'ombudsman.contact_items', []) as $contact)
              <li>
                <i class="{{ data_get($contact, 'icon', '') }}"></i>
                {{ data_get($contact, 'text', '') }}
              </li>
            @endforeach
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="visitor-card">
            <div class="visitor-card-title">
              <i class="{{ data_get($footerData, 'visitor_counter.icon', 'fas fa-users') }}"></i>
              {{ data_get($footerData, 'visitor_counter.title', 'Visitor Counter') }}
            </div>
            <div class="visitor-hero">
              <div class="visitor-bars" aria-hidden="true">
                <span class="bar-1"></span>
                <span class="bar-2"></span>
                <span class="bar-3"></span>
                <span class="bar-4"></span>
                <span class="bar-5"></span>
              </div>
              <div class="visitor-word">{{ data_get($footerData, 'visitor_counter.word', 'Visitors') }}</div>
            </div>
            <div class="visitor-stats">
              <div class="visitor-row visitor-online">
                <span>Online</span>
                <span id="visitorOnline">001</span>
              </div>
              <div class="visitor-row">
                <span>Today</span>
                <span id="visitorToday">0000</span>
              </div>
              <div class="visitor-row">
                <span>Yesterday</span>
                <span id="visitorYesterday">0000</span>
              </div>
              <div class="visitor-row">
                <span>All Time</span>
                <span id="visitorAllTime">0000</span>
              </div>
            </div>
            <p class="visitor-note mt-3">{{ data_get($footerData, 'visitor_counter.note', '') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>{!! data_get($footerData, 'bottom.copyright', '') !!}</p>
      </div>
      <ul class="footer-bottom-link">
        @foreach(data_get($footerData, 'bottom.links', []) as $bLink)
          <li>
            <a href="{{ \App\Models\HomePage::resolveNavUrl(data_get($bLink, 'url', '#')) }}">{{ data_get($bLink, 'label', '') }}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

<!-- scroll-to-top -->
<div id="back-to-top" class="back-to-top">
  <i class="fa fa-angle-up"></i>
</div>

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>
