@php
    $h = $headerData ?? [];
    $topBar = data_get($h, 'top_bar', []);
    $contact = data_get($h, 'contact', []);
    $logo = data_get($h, 'logo', []);
    $navItems = data_get($h, 'nav_items', []);
    $searchPlaceholder = data_get($h, 'search_placeholder', 'Search...');
@endphp

<!--header top-->
<div class="header-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="top-left text-center text-md-left">
          <h6><i class="fas fa-ambulance mr-2"></i>{{ data_get($topBar, 'emergency_text', '24/7 Emergency Services Available') }}</h6>
        </div>
      </div>
      <div class="col-md-6">
        <div class="top-right text-center text-md-right">
          <ul class="top-contact-list">
            <li>
              <i class="fas fa-phone-volume mr-1"></i>
              <span class="label">{{ data_get($topBar, 'emergency_label', 'Emergency') }}:</span> {{ data_get($topBar, 'emergency_phone', '999') }}
            </li>
            <li>
              <span class="divider">|</span>
            </li>
            <li>
              <i class="fas fa-phone-alt mr-1"></i>
              <span class="label">{{ data_get($topBar, 'toll_free_label', 'Toll Free') }}:</span> {{ data_get($topBar, 'toll_free_phone', '+265 (0) 887 682 856') }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-4 col-lg-3">
        <div class="logo">
          <a href="{{ route('home') }}">
            <img loading="lazy" class="img-fluid header-logo-image" src="{{ asset(data_get($logo, 'image', 'images/logoAQ.png')) }}" alt="{{ data_get($logo, 'alt', 'Zomba Central Hospital') }}">
          </a>
        </div>
      </div>
      <div class="col-xl-8 col-lg-9">
        <div class="right-side">
          <ul class="contact-info pl-0 mb-4 mb-md-0">
            <li class="item text-left">
              <div class="icon-box">
                <i class="far fa-envelope"></i>
              </div>
              <strong>{{ data_get($contact, 'email_label', 'Email') }}</strong>
              <br>
              <a href="mailto:{{ data_get($contact, 'email', 'zch@zomba.mw') }}">
                <span>{{ data_get($contact, 'email', 'zch@zomba.mw') }}</span>
              </a>
            </li>
            <li class="item text-left">
              <div class="icon-box">
                <i class="fas fa-phone"></i>
              </div>
              <strong>{{ data_get($contact, 'phone_label', 'Call Now') }}</strong>
              <br>
              <span>{{ data_get($contact, 'phone', '+265 (0) 887 682 856') }}</span>
            </li>
          </ul>
          <div class="link-btn text-center text-lg-right">
            <a href="{{ data_get($contact, 'appointment_url', '/appointment') }}" class="btn-style-one">{{ data_get($contact, 'appointment_text', 'Appointment') }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarLinks">
      <ul class="navbar-nav mr-auto">
        @foreach($navItems as $navItem)
          @php
            $navUrl = data_get($navItem, 'url', '#');
            $navLabel = data_get($navItem, 'label', '');
            $navChildren = data_get($navItem, 'children', []);
            $isDepartments = data_get($navItem, 'type') === 'departments';
            $hasDropdown = count($navChildren) > 0 || $isDepartments;
            $openNewTab = data_get($navItem, 'open_new_tab', false);
            $targetAttr = $openNewTab ? 'target="_blank" rel="noopener noreferrer"' : '';
          @endphp

          @if($hasDropdown)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#!" id="navDropdown{{ $loop->index }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @if($openNewTab) target="_blank" rel="noopener noreferrer" @endif style="white-space: nowrap;">{{ $navLabel }}</a>
              <ul class="dropdown-menu" aria-labelledby="navDropdown{{ $loop->index }}">
                @if($isDepartments)
                  @foreach($departments as $dept)
                  <li><a class="dropdown-item" href="{{ route('frontend.departments.'.$dept->slug) }}">{{ $dept->title }}</a></li>
                  @endforeach
                @else
                  @foreach($navChildren as $child)
                    @php
                      $childUrl = data_get($child, 'url', '#');
                      $childLabel = data_get($child, 'label', '');
                      $childChildren = data_get($child, 'children', []);
                      $hasSubmenu = count($childChildren) > 0;
                      $childNewTab = data_get($child, 'open_new_tab', false);
                    @endphp

                    @if($hasSubmenu)
                      <li class="dropdown dropdown-submenu dropright">
                        <a class="dropdown-item dropdown-toggle" href="#!" id="navSubDropdown{{ $loop->parent->index }}-{{ $loop->index }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $childLabel }}</a>
                        <ul class="dropdown-menu" aria-labelledby="navSubDropdown{{ $loop->parent->index }}-{{ $loop->index }}">
                          @foreach($childChildren as $subChild)
                          <li><a class="dropdown-item" href="{{ data_get($subChild, 'url', '#') }}">{{ data_get($subChild, 'label', '') }}</a></li>
                          @endforeach
                        </ul>
                      </li>
                    @else
                      <li><a class="dropdown-item" href="{{ $childUrl }}" @if($childNewTab) target="_blank" rel="noopener noreferrer" @endif>{{ $childLabel }}</a></li>
                    @endif
                  @endforeach
                @endif
              </ul>
            </li>
          @else
            <li class="nav-item"><a class="nav-link" href="{{ $navUrl }}" {{ $targetAttr }}>{{ $navLabel }}</a></li>
          @endif
        @endforeach
      </ul>
      <form class="menu-search-form" action="#" method="get" role="search">
        <input type="text" name="q" class="menu-search-input" placeholder="{{ $searchPlaceholder }}" aria-label="Search">
      </form>
    </div>
  </div>
</nav>
<!--End Main Header -->
