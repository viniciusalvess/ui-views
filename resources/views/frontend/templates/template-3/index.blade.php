@php
  $templateData = templateData(\Illuminate\Support\Facades\App::isProduction());
  $slides = templateSlideShows();
  $products = templateProductsRecent();
  $logoDarkUrl = templateLogoDark();
  $logoLightUrl = templateLogoDark();
@endphp
  <!DOCTYPE html>
<html>
<head>

  <!-- Basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  {!! VinAppHelper::renderGoogleAnalyticsScripts() !!}

  <title>{{$templateData->title}}</title>

  <meta name="keywords" content="{{$templateData->keywords}}"/>
  <meta name="description" content="{{$templateData->description}}">
  <meta name="author" content="{{$templateData->author}}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{templateAsset('assets-cdn/default/img/favicon.ico')}}"
        type="image/x-icon"/>
  <link rel="apple-touch-icon" href="{{templateAsset('assets-cdn/default/img/apple-touch-icon.png')}}">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

  <!-- Web Fonts  -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400"
    rel="stylesheet" type="text/css">

  <!-- Vendor CSS -->
  <link href="{{templateAsset('assets-cdn/default//vendor/bootstrap/css/bootstrap.min.css')}}"
        rel="stylesheet" type="text/css"></link>
  <link rel="stylesheet"
        href="{{templateAsset('assets-cdn/default/vendor/fontawesome-free/css/all.min.css')}}"></link>
  <link rel="stylesheet"
        href="{{templateAsset('assets-cdn/default/vendor/animate/animate.min.css')}}"></link>
  <link rel="stylesheet"
        href="{{templateAsset('assets-cdn/default/vendor/simple-line-icons/css/simple-line-icons.min.css')}}"></link>
  <link rel="stylesheet"
        href="{{templateAsset('assets-cdn/default/vendor/owl.carousel/assets/owl.carousel.min.css')}}"></link>
  <link rel="stylesheet"
        href="{{templateAsset('assets-cdn/default/vendor/owl.carousel/assets/owl.theme.default.min.css')}}"></link>
  <link rel="stylesheet"
        href="{{templateAsset('assets-cdn/default/vendor/magnific-popup/magnific-popup.min.css')}}"></link>

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{templateAsset('assets-cdn/default/css/theme.css')}}"></link>
  <link rel="stylesheet" href="{{templateAsset('assets-cdn/default/css/theme-elements.css')}}"></link>
  <link rel="stylesheet" href="{{templateAsset('assets-cdn/default/css/theme-blog.css')}}"></link>
  <link rel="stylesheet" href="{{templateAsset('assets-cdn/default/css/theme-shop.css')}}"></link>

  <!-- Current Page CSS -->
  <link rel="stylesheet"
        href="{{templateAsset('assets-cdn/default/vendor/rs-plugin/css/settings.css')}}"></link>
  <link rel="stylesheet"
        href="{{templateAsset('assets-cdn/default/vendor/rs-plugin/css/layers.css')}}"></link>
  <link rel="stylesheet"
        href="{{templateAsset('assets-cdn/default/vendor/rs-plugin/css/navigation.css')}}"></link>

  <!-- Demo CSS -->


  <!-- Skin CSS -->
  <link rel="stylesheet" href="{{templateAsset('assets-cdn/default/css/skins/default.css')}}"></link>

  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="{{templateAsset('assets-cdn/default/css/custom.css')}}"></link>

  <script src="{{templateAsset('assets-cdn/default/vendor/modernizr/modernizr.min.js')}}"></script>

</head>
<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
      data-plugin-options="{'hideDelay': 500}">
<div class="loading-overlay">
  <div class="bounce-loader">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>
<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

<div class="body">

  <header id="header"
          data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': true}">
    <div class="header-body border-color-primary border-top-0 box-shadow-none">

      <div class="header-top header-top-default border-bottom-0 border-top-0">
        <div class="container">
          <div class="header-row py-2">
            <div class="header-column justify-content-start">
              <div class="header-row">
                <nav class="header-nav-top">
{{--                  <ul class="nav nav-pills text-uppercase text-2">--}}
{{--                    <li class="nav-item nav-item-anim-icon">--}}
{{--                      <a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item nav-item-anim-icon">--}}
{{--                      <a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>--}}
{{--                    </li>--}}
{{--                  </ul>--}}
                </nav>
              </div>
            </div>
            <div class="header-column justify-content-end">
              <div class="header-row">
                <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->facebook)
                  <li class="social-icons-facebook"><a href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->facebook}}" target="_blank" title="Facebook"><i
                        class="fab fa-facebook-f"></i></a></li>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->instagram)
                  <li class="social-icons-facebook"><a href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->instagram}}" target="_blank" title="Instagram"><i
                        class="fab fa-instagram"></i></a></li>
                  @endif

                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->twitter_x)
                      <li class="social-icons-twitter"><a href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->twitter_x}}" target="_blank" title="Twitter"><i
                            class="fab fa-twitter"></i></a></li>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->linkedin)
                      <li class="social-icons-linkedin"><a href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->linkedin}}" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a></li>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->youtube)
                      <li class="social-icons-linkedin"><a href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->youtube}}" target="_blank" title="Linkedin"><i
                            class="fab fa-youtube"></i></a></li>
                  @endif
{{--                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->tiktok)--}}
{{--                      <li class="social-icons-linkedin"><a href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->tiktok}}" target="_blank" title="Tiktok"><i--}}
{{--                            class="fab fa-tiktok"></i></a></li>--}}
{{--                  @endif--}}


                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-container container z-index-2">
        <div class="header-row py-2">
          <div class="header-column">
            <div class="header-row">
              <div class="header-logo header-logo-sticky-change">
                <a href="index.html">
                  <img class="header-logo-sticky opacity-0" alt="Porto" width="100" height="48" data-sticky-width="89"
                       data-sticky-height="43" data-sticky-top="88" src="{{$logoDarkUrl}}">
                  <img class="header-logo-non-sticky opacity-0" alt="Porto" width="100" height="48"
                       src="{{$logoLightUrl}}">
                </a>
              </div>
            </div>
          </div>
          <div class="header-column justify-content-end">
            <div class="header-row">
              <ul class="header-extra-info d-flex align-items-center">
                @if(SystemSetting::instance()->email)
                <li class="d-none d-sm-inline-flex">
                  <div class="header-extra-info-text">
                    <label>@lang('Email')</label>
                    <strong><a href="mailto:{{SystemSetting::instance()->email}}">{{SystemSetting::instance()->email}}</a></strong>
                  </div>
                </li>
                @endif
                @if(SystemSetting::instance()->phone)
                <li>
                  <div class="header-extra-info-text">
                    <label>@lang('Phone')</label>
                    <strong><a href="tel:{{SystemSetting::instance()->phone}}">{{SystemSetting::instance()->phone}}</a></strong>
                  </div>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}"
           data-sticky-header-style-active="{'background-color': 'transparent'}"
           data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
        <div class="container">
          <div class="header-row">
            <div class="header-column">
              <div class="header-row justify-content-end">
                <div class="header-nav header-nav-force-light-text justify-content-start py-2 py-lg-3"
                     data-sticky-header-style="{'minResolution': 991}"
                     data-sticky-header-style-active="{'margin-left': '135px'}"
                     data-sticky-header-style-deactive="{'margin-left': '0'}">
                  <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                    <nav class="collapse">
                      <ul class="nav nav-pills" id="mainNav">
                        <li class="dropdown dropdown-full-color dropdown-light">
                          <a class="dropdown-item dropdown-toggle active" href="index.html">
                            Início
                          </a>
                        </li>
                        <li class="dropdown dropdown-full-color dropdown-light dropdown-mega">
                          <a class="dropdown-item dropdown-toggle" href="#services">
                            Serviços
                          </a>

                        </li>
                        <li class="dropdown dropdown-full-color dropdown-light">
                          <a class="dropdown-item dropdown-toggle" href="#">
                            Features
                          </a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Headers</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="feature-headers-overview.html">Overview</a></li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Classic</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-classic.html">Classic</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-classic-language-dropdown.html">Classic
                                        + Language Dropdown</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-classic-big-logo.html">Classic +
                                        Big Logo</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Flat</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-flat.html">Flat</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-flat-top-bar.html">Flat + Top
                                        Bar</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-flat-top-bar-top-borders.html">Flat
                                        + Top Bar + Top Border</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-flat-colored-top-bar.html">Flat +
                                        Colored Top Bar</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-flat-borders.html">Flat +
                                        Borders</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Center</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-center.html">Center</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-center-double-navs.html">Center +
                                        Double Navs</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-center-nav-buttons.html">Center +
                                        Nav + Buttons</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-center-below-slider.html">Center
                                        Below Slider</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Floating</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-floating-bar.html">Floating
                                        Bar</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-floating-icons.html">Floating
                                        Icons</a></li>
                                  </ul>
                                </li>
                                <li><a class="dropdown-item" href="feature-headers-below-slider.html">Below Slider</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-headers-full-video.html">Full Video</a></li>
                                <li><a class="dropdown-item" href="feature-headers-narrow.html">Narrow</a></li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Sticky</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-sticky-shrink.html">Sticky
                                        Shrink</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-sticky-static.html">Sticky
                                        Static</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-sticky-change-logo.html">Sticky
                                        Change Logo</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-sticky-reveal.html">Sticky
                                        Reveal</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Transparent</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-transparent-light.html">Transparent
                                        Light</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-transparent-dark.html">Transparent
                                        Dark</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-headers-transparent-light-bottom-border.html">Transparent Light
                                        + Bottom Border</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-headers-transparent-dark-bottom-border.html">Transparent Dark +
                                        Bottom Border</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-transparent-bottom-slider.html">Transparent
                                        Bottom Slider</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-light.html">Semi
                                        Transparent Light</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-dark.html">Semi
                                        Transparent Dark</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-headers-semi-transparent-bottom-slider.html">Semi Transparent
                                        Bottom Slider</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-headers-semi-transparent-top-bar-borders.html">Semi Transparent
                                        + Top Bar + Borders</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Full Width</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-full-width.html">Full Width</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-headers-full-width-borders.html">Full
                                        Width + Borders</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-headers-full-width-transparent-light.html">Full Width
                                        Transparent Light</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-headers-full-width-transparent-dark.html">Full Width
                                        Transparent Dark</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-headers-full-width-semi-transparent-light.html">Full Width Semi
                                        Transparent Light</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-headers-full-width-semi-transparent-dark.html">Full Width Semi
                                        Transparent Dark</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Navbar</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-navbar.html">Navbar</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-navbar-full.html">Navbar Full</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-headers-navbar-pills.html">Navbar
                                        Pills</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-navbar-divisors.html">Navbar
                                        Divisors</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-navbar-icons-search.html">Nav Bar
                                        + Icons + Search</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Side Header</a>
                                  <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Side Header Left</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-left-dropdown.html">Dropdown</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-left-expand.html">Expand</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-left-columns.html">Columns</a></li>
                                        <li><a class="dropdown-item" href="feature-headers-side-header-left-slide.html">Slide</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-left-semi-transparent.html">Semi
                                            Transparent</a></li>
                                        <li><a class="dropdown-item" href="feature-headers-side-header-left-dark.html">Dark</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Side Header Right</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-right-dropdown.html">Dropdown</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-right-expand.html">Expand</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-right-columns.html">Columns</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-right-slide.html">Slide</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-right-semi-transparent.html">Semi
                                            Transparent</a></li>
                                        <li><a class="dropdown-item" href="feature-headers-side-header-right-dark.html">Dark</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Side Header Offcanvas</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-offcanvas-push.html">Push</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-headers-side-header-offcanvas-slide.html">Slide</a></li>
                                      </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-headers-side-header-narrow-bar.html">Side
                                        Header Narrow Bar</a></li>
                                  </ul>
                                </li>
                                <li><a class="dropdown-item" href="feature-headers-sign-in-sign-up.html">Sign In / Sign
                                    Up</a></li>
                                <li><a class="dropdown-item" href="feature-headers-logged.html">Logged</a></li>
                                <li><a class="dropdown-item" href="feature-headers-mini-cart.html">Mini Cart</a></li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Search Styles</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-search-simple-input.html">Simple
                                        Input</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-search-simple-input-reveal.html">Simple
                                        Input Reveal</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-headers-search-dropdown.html">Dropdown</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-search-big-input-hidden.html">Big
                                        Input Hidden</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-search-full-screen.html">Full
                                        Screen</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Extra</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-headers-extra-big-icon.html">Big Icon</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-headers-extra-big-icons-top.html">Big
                                        Icons Top</a></li>
                                    <li><a class="dropdown-item" href="feature-headers-extra-button.html">Button</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-headers-extra-background-color.html">Background
                                        Color</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Navigations</a>
                              <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Pills</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-navigations-pills.html">Pills</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-pills-arrows.html">Pills +
                                        Arrows</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-pills-dark-text.html">Pills
                                        Dark Text</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-pills-color-dropdown.html">Pills
                                        Color Dropdown</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-pills-square.html">Pills
                                        Square</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-pills-rounded.html">Pills
                                        Rounded</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Stripes</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-navigations-stripe.html">Stripe</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-stripe-dark-text.html">Stripe
                                        Dark Text</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-stripe-color-dropdown.html">Stripe
                                        Color Dropdown</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Hover Effects</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-navigations-hover-top-line.html">Top
                                        Line</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-hover-top-line-animated.html">Top Line Animated</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-hover-top-line-color-dropdown.html">Top Line Color
                                        Dropdown</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-hover-bottom-line.html">Bottom
                                        Line</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-hover-bottom-line-animated.html">Bottom Line
                                        Animated</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-hover-slide.html">Slide</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-navigations-hover-sub-title.html">Sub
                                        Title</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-hover-line-under-text.html">Line
                                        Under Text</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Vertical</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-navigations-vertical-dropdown.html">Dropdown</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-vertical-expand.html">Expand</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-vertical-columns.html">Columns</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-vertical-slide.html">Slide</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Hamburguer</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-navigations-hamburguer-sidebar.html">Sidebar</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-navigations-hamburguer-overlay.html">Overlay</a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Dropdown Styles</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-dark.html">Dark</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-dropdowns-light.html">Light</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-dropdowns-colors.html">Colors</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-top-line.html">Top
                                        Line</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-dropdowns-square.html">Square</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow.html">Arrow
                                        Dropdown</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow-center.html">Arrow
                                        Center Dropdown</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-light.html">Modern
                                        Light</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-dark.html">Modern
                                        Dark</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Dropdown Effects</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-dropdowns-effect-no-effect.html">No Effect</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-dropdowns-effect-opacity.html">Opacity</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-dropdowns-effect-move-to-top.html">Move To Top</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-dropdowns-effect-move-to-bottom.html">Move To
                                        Bottom</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-dropdowns-effect-move-to-right.html">Move To
                                        Right</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-navigations-dropdowns-effect-move-to-left.html">Move To
                                        Left</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Font Styles</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-navigations-font-small.html">Small</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-navigations-font-medium.html">Medium</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-navigations-font-large.html">Large</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-navigations-font-alternative.html">Alternative</a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Icons</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-navigations-icons.html">Icons</a></li>
                                    <li><a class="dropdown-item" href="feature-navigations-icons-float-icons.html">Float
                                        Icons</a></li>
                                  </ul>
                                </li>
                                <li><a class="dropdown-item" href="feature-navigations-sub-title.html">Sub Title</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-navigations-divisors.html">Divisors</a></li>
                                <li><a class="dropdown-item" href="feature-navigations-logo-between.html">Logo
                                    Between</a></li>
                                <li><a class="dropdown-item" href="feature-navigations-one-page.html">One Page Nav</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-navigations-click-to-open.html">Click To
                                    Open</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Page Headers</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="feature-page-headers-overview.html">Overview</a></li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Classic</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="feature-page-headers-classic-small.html">Small</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-page-headers-classic-medium.html">Medium</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-page-headers-classic-large.html">Large</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Modern</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-page-headers-modern-small.html">Small</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-page-headers-modern-medium.html">Medium</a></li>
                                    <li><a class="dropdown-item" href="feature-page-headers-modern-large.html">Large</a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Colors</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="feature-page-headers-colors-primary.html">Primary</a></li>
                                    <li><a class="dropdown-item" href="feature-page-headers-colors-secondary.html">Secondary</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-page-headers-colors-tertiary.html">Tertiary</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-page-headers-colors-quaternary.html">Quaternary</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-page-headers-colors-light.html">Light</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-page-headers-colors-dark.html">Dark</a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Title Position</a>
                                  <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Left</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-title-position-left-small.html">Small</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-title-position-left-medium.html">Medium</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-title-position-left-large.html">Large</a></li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Right</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-title-position-right-small.html">Small</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-title-position-right-medium.html">Medium</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-title-position-right-large.html">Large</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Center</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-title-position-center-small.html">Small</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-title-position-center-medium.html">Medium</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-title-position-center-large.html">Large</a>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Background</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="feature-page-headers-background-fixed.html">Fixed</a></li>
                                    <li><a class="dropdown-item" href="feature-page-headers-background-parallax.html">Parallax</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-page-headers-background-video.html">Video</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-page-headers-background-transparent-header.html">Transparent
                                        Header</a></li>
                                    <li><a class="dropdown-item" href="feature-page-headers-background-pattern.html">Pattern</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-page-headers-background-overlay.html">Overlay</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-page-headers-background-clean.html">Clean
                                        (No Background)</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Extra</a>
                                  <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Breadcrumb</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-extra-breadcrumb-outside.html">Outside</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-page-headers-extra-breadcrumb-dark.html">Dark</a></li>
                                      </ul>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-page-headers-extra-scroll-to-content.html">Scroll to
                                        Content</a></li>
                                    <li><a class="dropdown-item" href="feature-page-headers-extra-full-width.html">Full
                                        Width</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Footers</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="feature-footers-overview.html">Overview</a></li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Classic</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-footers-classic.html#footer">Classic</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-footers-classic-advanced.html#footer">Advanced</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-footers-classic-compact.html#footer">Compact</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-footers-classic-simple.html#footer">Simple</a>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-footers-classic-locations.html#footer">Locations</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Copyright</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-footers-classic-copyright-light.html#footer">Light</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-classic-copyright-dark.html#footer">Dark</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-classic-copyright-social-icons.html#footer">Social
                                            Icons</a></li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Colors</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-footers-classic-colors-primary.html#footer">Primary</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-classic-colors-secondary.html#footer">Secondary</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-classic-colors-tertiary.html#footer">Tertiary</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-classic-colors-quaternary.html#footer			">Quaternary</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-classic-colors-light.html#footer">Light</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-classic-colors-light-simple.html#footer">Light
                                            Simple</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Modern</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-footers-modern.html#footer">Modern</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-footers-modern-font-style-alternative.html#footer">Font Style
                                        Alternative</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-footers-modern-clean.html#footer">Clean</a></li>
                                    <li><a class="dropdown-item" href="feature-footers-modern-useful-links.html#footer">Useful
                                        Links</a></li>
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Background</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-footers-modern-background-image-simple.html#footer">Image
                                            Simple</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-modern-background-image-advanced.html#footer">Image
                                            Advanced</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-modern-background-video-simple.html#footer">Video
                                            Simple</a></li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Call to Action</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-footers-modern-call-to-action-button.html#footer">Button</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-modern-call-to-action-simple.html#footer">Simple</a>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Blog</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-footers-blog-classic.html#footer">Blog
                                        Classic</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">eCommerce</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-footers-ecommerce-classic.html#footer">eCommerce
                                        Classic</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Contact Form</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="feature-footers-contact-form-classic.html#footer">Classic</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-footers-contact-form-above-the-map.html#footer">Above the
                                        Map</a></li>
                                    <li><a class="dropdown-item" href="feature-footers-contact-form-center.html#footer">Center</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="feature-footers-contact-form-columns.html#footer">Columns</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Map</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="feature-footers-map-hidden.html#footer">Hidden
                                        Map</a></li>
                                    <li><a class="dropdown-item" href="feature-footers-map-full-width.html#footer">Full
                                        Width</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item" href="#">Extra</a>
                                  <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Simple</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-footers-extra-top-social-icons.html#footer">Top Social
                                            Icons</a></li>
                                        <li><a class="dropdown-item" href="feature-footers-extra-big-icons.html#footer">Big
                                            Icons</a></li>
                                      </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-footers-extra-recent-work.html#footer">Recent
                                        Work</a></li>
                                    <li><a class="dropdown-item"
                                           href="feature-footers-extra-reveal.html#footer">Reveal</a></li>
                                    <li><a class="dropdown-item" href="feature-footers-extra-instagram.html#footer">Instagram</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="#">Full Width</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="feature-footers-extra-full-width-light.html#footer">Simple
                                            Light</a></li>
                                        <li><a class="dropdown-item"
                                               href="feature-footers-extra-full-width-dark.html#footer">Simple Dark</a>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Admin Extension <span class="tip tip-dark">hot</span><em
                                  class="not-included">(Not Included)</em></a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="feature-admin-forms-basic.html">Forms Basic</a></li>
                                <li><a class="dropdown-item" href="feature-admin-forms-advanced.html">Forms Advanced</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-admin-forms-wizard.html">Forms Wizard</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-admin-forms-code-editor.html">Code Editor</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-admin-tables-advanced.html">Tables
                                    Advanced</a></li>
                                <li><a class="dropdown-item" href="feature-admin-tables-responsive.html">Tables
                                    Responsive</a></li>
                                <li><a class="dropdown-item" href="feature-admin-tables-editable.html">Tables
                                    Editable</a></li>
                                <li><a class="dropdown-item" href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
                                <li><a class="dropdown-item" href="feature-admin-charts.html">Charts</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Sliders</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index-classic.html">Revolution Slider</a></li>
                                <li><a class="dropdown-item" href="index-slider-nivo.html">Nivo Slider</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Layout Options</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
                                <li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
                                <li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Extra</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="feature-grid-system.html">Grid System</a></li>
                                <li><a class="dropdown-item" href="feature-page-loading.html">Page Loading</a></li>
                                <li><a class="dropdown-item" href="feature-page-transition.html">Page Transition</a>
                                </li>
                                <li><a class="dropdown-item" href="feature-lazy-load.html">Lazy Load</a></li>
                                <li><a class="dropdown-item" href="feature-side-panel.html">Side Panel</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown dropdown-full-color dropdown-light">
                          <a class="dropdown-item dropdown-toggle" href="#">
                            Pages
                          </a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Contact Us</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="contact-us-advanced.php">Contact Us - Advanced</a>
                                </li>
                                <li><a class="dropdown-item" href="contact-us.html">Contact Us - Basic</a></li>
                                <li><a class="dropdown-item" href="contact-us-recaptcha.html">Contact Us - Recaptcha</a>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">About Us</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about-us-advanced.html">About Us - Advanced</a></li>
                                <li><a class="dropdown-item" href="about-us.html">About Us - Basic</a></li>
                                <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Layouts</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="page-full-width.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="page-left-sidebar.html">Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="page-right-sidebar.html">Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="page-left-and-right-sidebars.html">Left and Right
                                    Sidebars</a></li>
                                <li><a class="dropdown-item" href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
                                <li><a class="dropdown-item" href="page-secondary-navbar.html">Secondary Navbar</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Extra</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="page-404.html">404 Error</a></li>
                                <li><a class="dropdown-item" href="page-500.html">500 Error</a></li>
                                <li><a class="dropdown-item" href="page-coming-soon.html">Coming Soon</a></li>
                                <li><a class="dropdown-item" href="page-maintenance-mode.html">Maintenance Mode</a></li>
                                <li><a class="dropdown-item" href="page-search-results.html">Search Results</a></li>
                                <li><a class="dropdown-item" href="sitemap.html">Sitemap</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Team</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="page-team-advanced.html">Team - Advanced</a></li>
                                <li><a class="dropdown-item" href="page-team.html">Team - Basic</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Services</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="page-services.html">Services - Version 1</a></li>
                                <li><a class="dropdown-item" href="page-services-2.html">Services - Version 2</a></li>
                                <li><a class="dropdown-item" href="page-services-3.html">Services - Version 3</a></li>
                              </ul>
                            </li>
                            <li><a class="dropdown-item" href="page-custom-header.html">Custom Header</a></li>
                            <li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
                            <li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
                            <li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
                            <li><a class="dropdown-item" href="page-user-profile.html">User Profile</a></li>
                          </ul>
                        </li>
                        <li class="dropdown dropdown-full-color dropdown-light">
                          <a class="dropdown-item dropdown-toggle" href="#">
                            Portfolio
                          </a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Single Project</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="portfolio-single-wide-slider.html">Wide Slider</a>
                                </li>
                                <li><a class="dropdown-item" href="portfolio-single-small-slider.html">Small Slider</a>
                                </li>
                                <li><a class="dropdown-item" href="portfolio-single-full-width-slider.html">Full Width
                                    Slider</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-gallery.html">Gallery</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-carousel.html">Carousel</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-medias.html">Medias</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-full-width-video.html">Full Width
                                    Video</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-masonry-images.html">Masonry
                                    Images</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="portfolio-single-right-sidebar.html">Right
                                    Sidebar</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-left-and-right-sidebars.html">Left
                                    and Right Sidebars</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-sticky-sidebar.html">Sticky
                                    Sidebar</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-extended.html">Extended</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Grid Layouts</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Column</a></li>
                                <li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-grid-no-margins.html">No Margins</a></li>
                                <li><a class="dropdown-item" href="portfolio-grid-full-width.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="portfolio-grid-full-width-no-margins.html">Full Width
                                    No Margins</a></li>
                                <li><a class="dropdown-item" href="portfolio-grid-1-column-title-and-description.html">Title
                                    and Description</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Masonry Layouts</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
                                <li><a class="dropdown-item" href="portfolio-masonry-no-margins.html">No Margins</a>
                                </li>
                                <li><a class="dropdown-item" href="portfolio-masonry-full-width.html">Full Width</a>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Sidebar Layouts</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="portfolio-sidebar-left-and-right.html">Left and Right
                                    Sidebars</a></li>
                                <li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Ajax</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="portfolio-ajax-page.html">Ajax on Page</a></li>
                                <li><a class="dropdown-item" href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Extra</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
                                <li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
                                <li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
                                <li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite
                                    Scroll</a></li>
                                <li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
                                <li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination
                                    Filters</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown dropdown-full-color dropdown-light">
                          <a class="dropdown-item dropdown-toggle" href="#">
                            Blog
                          </a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Large Image</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-large-image-full-width.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="blog-large-image-sidebar-left.html">Left Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="blog-large-image-sidebar-right.html">Right
                                    Sidebar </a></li>
                                <li><a class="dropdown-item" href="blog-large-image-sidebar-left-and-right.html">Left
                                    and Right Sidebar</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Medium Image</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-medium-image-sidebar-left.html">Left Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="blog-medium-image-sidebar-right.html">Right
                                    Sidebar </a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Grid</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-grid-4-columns.html">4 Columns</a></li>
                                <li><a class="dropdown-item" href="blog-grid-3-columns.html">3 Columns</a></li>
                                <li><a class="dropdown-item" href="blog-grid-full-width.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="blog-grid-no-margins.html">No Margins</a></li>
                                <li><a class="dropdown-item" href="blog-grid-no-margins-full-width.html">No Margins Full
                                    Width</a></li>
                                <li><a class="dropdown-item" href="blog-grid-sidebar-left.html">Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-grid-sidebar-right.html">Right Sidebar </a></li>
                                <li><a class="dropdown-item" href="blog-grid-sidebar-left-and-right.html">Left and Right
                                    Sidebar</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Masonry</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-masonry-4-columns.html">4 Columns</a></li>
                                <li><a class="dropdown-item" href="blog-masonry-3-columns.html">3 Columns</a></li>
                                <li><a class="dropdown-item" href="blog-masonry-full-width.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="blog-masonry-no-margins.html">No Margins</a></li>
                                <li><a class="dropdown-item" href="blog-masonry-no-margins-full-width.html">No Margins
                                    Full Width</a></li>
                                <li><a class="dropdown-item" href="blog-masonry-sidebar-left.html">Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-masonry-sidebar-right.html">Right Sidebar </a>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Timeline</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-timeline.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="blog-timeline-sidebar-left.html">Left Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="blog-timeline-sidebar-right.html">Right Sidebar </a>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Single Post</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-post.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="blog-post-slider-gallery.html">Slider Gallery</a>
                                </li>
                                <li><a class="dropdown-item" href="blog-post-image-gallery.html">Image Gallery</a></li>
                                <li><a class="dropdown-item" href="blog-post-embedded-video.html">Embedded Video</a>
                                </li>
                                <li><a class="dropdown-item" href="blog-post-html5-video.html">HTML5 Video</a></li>
                                <li><a class="dropdown-item" href="blog-post-blockquote.html">Blockquote</a></li>
                                <li><a class="dropdown-item" href="blog-post-link.html">Link</a></li>
                                <li><a class="dropdown-item" href="blog-post-embedded-audio.html">Embedded Audio</a>
                                </li>
                                <li><a class="dropdown-item" href="blog-post-small-image.html">Small Image</a></li>
                                <li><a class="dropdown-item" href="blog-post-sidebar-left.html">Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-post-sidebar-right.html">Right Sidebar </a></li>
                                <li><a class="dropdown-item" href="blog-post-sidebar-left-and-right.html">Left and Right
                                    Sidebar</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Post Comments</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-post.html#comments">Default</a></li>
                                <li><a class="dropdown-item" href="blog-post-comments-facebook.html#comments">Facebook
                                    Comments</a></li>
                                <li><a class="dropdown-item" href="blog-post-comments-disqus.html#comments">Disqus
                                    Comments</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown dropdown-full-color dropdown-light">
                          <a class="dropdown-item dropdown-toggle" href="#">
                            Shop
                          </a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Single Product</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and
                                    Right Sidebar</a></li>
                              </ul>
                            </li>
                            <li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">3 Columns</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="shop-3-columns-full-width.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="shop-3-columns-sidebar-left.html">Left Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="shop-3-columns-sidebar-right.html">Right Sidebar </a>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">2 Columns</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="shop-2-columns-full-width.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="shop-2-columns-sidebar-left.html">Left Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="shop-2-columns-sidebar-right.html">Right Sidebar </a>
                                </li>
                                <li><a class="dropdown-item" href="shop-2-columns-sidebar-left-and-right.html">Left and
                                    Right Sidebar</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">1 Column</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="shop-1-column-full-width.html">Full Width</a></li>
                                <li><a class="dropdown-item" href="shop-1-column-sidebar-left.html">Left Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="shop-1-column-sidebar-right.html">Right Sidebar </a>
                                </li>
                                <li><a class="dropdown-item" href="shop-1-column-sidebar-left-and-right.html">Left and
                                    Right Sidebar</a></li>
                              </ul>
                            </li>
                            <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                            <li><a class="dropdown-item" href="shop-login.html">Login</a></li>
                            <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <button class="btn header-btn-collapse-nav my-2" data-toggle="collapse"
                          data-target=".header-nav-main nav">
                    <i class="fas fa-bars"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div role="main" class="main" id="home">
    @if($slides->count() > 0)
      <div class="slider-container rev_slider_wrapper" style="height: 670px;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
             data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
          <ul>
            @foreach($slides as $s)
              <li data-transition="fade">
                <img src="{{$s->pictureUrl()}}"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     class="rev-slidebg">

                <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                     data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                     data-x="center"
                     data-y="center"
                     data-fontsize="['50','50','50','90']"
                     data-lineheight="['55','55','55','95']">{!! $s->title !!}</div>

                <div class="tp-caption font-weight-light"
                     data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                     data-x="center"
                     data-y="center" data-voffset="['40','40','40','80']"
                     data-fontsize="['18','18','18','50']"
                     data-lineheight="['20','20','20','55']"
                     style="color: #b5b5b5;">{!! $s->description !!}</div>

                <div class="tp-caption text-color-light font-weight-normal"
                     data-x="center"
                     data-y="center" data-voffset="['80','80','80','95']"
                     data-start="700"
                     data-fontsize="['22','22','22','40']"
                     data-lineheight="['25','25','25','45']"
                     data-transform_in="y:[-50%];opacity:0;s:500;">

                  @if($s->primary_action_title)
                    <a href="{{$s->primary_action_url}}"
                       class="btn btn-{{$s->detail_color ?? 'primary'}} me-2 mb-0">{{$s->primary_action_title}}</a>
                  @endif
                  @if($s->secondary_action_title)
                    <a href="{{$s->secondary_action_url}}"
                       class="btn btn-outline-white mb-0">{{$s->secondary_action_title}}</a>
                  @endif
                </div>

              </li>
            @endforeach

            {{--							<li class="slide-overlay" data-transition="fade">--}}
            {{--								<img src="{{templateAsset('assets-cdn/default/img/slides/slide-bg-2.jpg')}}"--}}
            {{--									 alt=""--}}
            {{--									 data-bgposition="center center"--}}
            {{--									 data-bgfit="cover"--}}
            {{--									 data-bgrepeat="no-repeat"--}}
            {{--									 class="rev-slidebg">--}}

            {{--								<div class="tp-caption"--}}
            {{--									 data-x="center" data-hoffset="['-170','-170','-170','-350']"--}}
            {{--									 data-y="center" data-voffset="['-50','-50','-50','-75']"--}}
            {{--									 data-start="1000"--}}
            {{--									 data-transform_in="x:[-300%];opacity:0;s:500;"--}}
            {{--									 data-transform_idle="opacity:0.2;s:500;"><img src="{{templateAsset('assets-cdn/default/img/slides/slide-title-border.png')}}" alt=""></div>--}}

            {{--								<div class="tp-caption text-color-light font-weight-normal"--}}
            {{--									 data-x="center"--}}
            {{--									 data-y="center" data-voffset="['-50','-50','-50','-75']"--}}
            {{--									 data-start="700"--}}
            {{--									 data-fontsize="['16','16','16','40']"--}}
            {{--									 data-lineheight="['25','25','25','45']"--}}
            {{--									 data-transform_in="y:[-50%];opacity:0;s:500;">WE WORK HARD AND PORTO HAS</div>--}}

            {{--								<div class="tp-caption"--}}
            {{--									 data-x="center" data-hoffset="['170','170','170','350']"--}}
            {{--									 data-y="center" data-voffset="['-50','-50','-50','-75']"--}}
            {{--									 data-start="1000"--}}
            {{--									 data-transform_in="x:[300%];opacity:0;s:500;"--}}
            {{--									 data-transform_idle="opacity:0.2;s:500;"><img src="{{templateAsset('assets-cdn/default/img/slides/slide-title-border.png')}}" alt=""></div>--}}

            {{--								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"--}}
            {{--									 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
            {{--									 data-x="center"--}}
            {{--									 data-y="center"--}}
            {{--									 data-fontsize="['50','50','50','90']"--}}
            {{--									 data-lineheight="['55','55','55','95']">THE BEST DESIGN</div>--}}

            {{--								<div class="tp-caption font-weight-light ws-normal text-center"--}}
            {{--									 data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}
            {{--									 data-x="center"--}}
            {{--									 data-y="center" data-voffset="['60','60','60','105']"--}}
            {{--									 data-width="['530','530','530','1100']"--}}
            {{--									 data-fontsize="['18','18','18','40']"--}}
            {{--									 data-lineheight="['26','26','26','45']"--}}
            {{--									 style="color: #b5b5b5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</div>--}}

            {{--							</li>--}}
            {{--							<li class="slide-overlay slide-overlay-primary" data-transition="fade">--}}
            {{--								<img src="{{templateAsset('assets-cdn/default/img/slides/slide-bg-6.jpg')}}"--}}
            {{--									 alt=""--}}
            {{--									 data-bgposition="center center"--}}
            {{--									 data-bgfit="cover"--}}
            {{--									 data-bgrepeat="no-repeat"--}}
            {{--									 class="rev-slidebg">--}}

            {{--								<div class="tp-caption"--}}
            {{--									 data-x="center" data-hoffset="['-145','-145','-145','-320']"--}}
            {{--									 data-y="center" data-voffset="['-80','-80','-80','-130']"--}}
            {{--									 data-start="1000"--}}
            {{--									 data-transform_in="x:[-300%];opacity:0;s:500;"--}}
            {{--									 data-transform_idle="opacity:0.2;s:500;"><img src="{{templateAsset('assets-cdn/default/img/slides/slide-title-border.png')}}" alt=""></div>--}}

            {{--								<div class="tp-caption text-color-light font-weight-normal"--}}
            {{--									 data-x="center"--}}
            {{--									 data-y="center" data-voffset="['-80','-80','-80','-130']"--}}
            {{--									 data-start="700"--}}
            {{--									 data-fontsize="['16','16','16','40']"--}}
            {{--									 data-lineheight="['25','25','25','45']"--}}
            {{--									 data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE DESIGNS, WE ARE</div>--}}

            {{--								<div class="tp-caption"--}}
            {{--									 data-x="center" data-hoffset="['145','145','145','320']"--}}
            {{--									 data-y="center" data-voffset="['-80','-80','-80','-130']"--}}
            {{--									 data-start="1000"--}}
            {{--									 data-transform_in="x:[300%];opacity:0;s:500;"--}}
            {{--									 data-transform_idle="opacity:0.2;s:500;"><img src="{{templateAsset('assets-cdn/default/img/slides/slide-title-border.png')}}" alt=""></div>--}}

            {{--								<div class="tp-caption font-weight-extra-bold text-color-light"--}}
            {{--									 data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
            {{--									 data-x="center" data-hoffset="['-155','-155','-155','-255']"--}}
            {{--									 data-y="center"--}}
            {{--									 data-fontsize="['145','145','145','250']"--}}
            {{--									 data-lineheight="['150','150','150','260']">P</div>--}}

            {{--								<div class="tp-caption font-weight-extra-bold text-color-light"--}}
            {{--									 data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
            {{--									 data-x="center" data-hoffset="['-80','-80','-80','-130']"--}}
            {{--									 data-y="center"--}}
            {{--									 data-fontsize="['145','145','145','250']"--}}
            {{--									 data-lineheight="['150','150','150','260']">I</div>--}}

            {{--								<div class="tp-caption font-weight-extra-bold text-color-light"--}}
            {{--									 data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
            {{--									 data-x="center"--}}
            {{--									 data-y="center"--}}
            {{--									 data-fontsize="['145','145','145','250']"--}}
            {{--									 data-lineheight="['150','150','150','260']">L</div>--}}

            {{--								<div class="tp-caption font-weight-extra-bold text-color-light"--}}
            {{--									 data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
            {{--									 data-x="center" data-hoffset="['65','65','65','115']"--}}
            {{--									 data-y="center"--}}
            {{--									 data-fontsize="['145','145','145','250']"--}}
            {{--									 data-lineheight="['150','150','150','260']">A</div>--}}

            {{--								<div class="tp-caption font-weight-extra-bold text-color-light"--}}
            {{--									 data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
            {{--									 data-x="center" data-hoffset="['139','139','139','240']"--}}
            {{--									 data-y="center"--}}
            {{--									 data-fontsize="['145','145','145','250']"--}}
            {{--									 data-lineheight="['150','150','150','260']">R</div>--}}

            {{--								<div class="tp-caption font-weight-light text-color-light"--}}
            {{--									 data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}
            {{--									 data-x="center"--}}
            {{--									 data-y="center" data-voffset="['85','85','85','140']"--}}
            {{--									 data-fontsize="['18','18','18','40']"--}}
            {{--									 data-lineheight="['26','26','26','45']">ASSESSORIA</div>--}}

            {{--							</li>--}}
          </ul>
        </div>
      </div>
    @endif

    <section id="services" class="section section-height-3 bg-primary border-0 m-0 appear-animation"
             data-appear-animation="fadeIn">
      <div class="container my-3">
        <div class="row mb-5">
          <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter"
               data-appear-animation-delay="200">
            <h2 class="font-weight-bold text-color-light mb-2">{{$templateData->service->title}}</h2>
            <p class="text-color-light opacity-7">{{$templateData->service->description}}</p>
          </div>
        </div>
        <div class="row mb-lg-4">
          @foreach($templateData->service->items as $service)
            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                 data-appear-animation-delay="300">
              <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                  <i class="{{$service->icon}}"></i>
                </div>
                <div class="feature-box-info">
                  <h4 class="font-weight-bold text-color-light text-4 mb-2">{!! $service->title !!}</h4>
                  <p class="text-color-light opacity-7">
                    {!! $service->description !!}
                  </p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>


    @if(count($templateData->project->items) > 0)
      <div id="projects" class="container">
        <div class="row justify-content-center pt-5 mt-5">
          <div class="col-lg-9 text-center">
            <div class="appear-animation" data-appear-animation="fadeInUpShorter">
              <h2 class="font-weight-bold mb-2">{{$templateData->project->title}}</h2>
              <p class="mb-4">{{$templateData->project->description}}</p>
            </div>
            {!! $templateData->project->subtitle !!}
          </div>
        </div>
        <div class="row pb-5 mb-5">
          <div class="col">

            <div class="appear-animation popup-gallery-ajax" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="200">
              <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">

                @foreach($templateData->project->items as $i)
                <div class="portfolio-item">
                  <a href="{{templateAsset($i->url)}}" target="_blank">
											<span class="thumb-info thumb-info-lighten">
												<span class="thumb-info-wrapper">
													<img src="{{templateAsset($i->image)}}"
                               class="img-fluid border-radius-0" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">{{$i->title}}</span>
														<span class="thumb-info-type">{{$i->description}}</span>
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
													</span>
												</span>
											</span>
                  </a>
                </div>
                @endforeach
              </div>
            </div>

          </div>
        </div>
      </div>
    @endif
      @if(count($templateData->testimonial->items) > 0)
    <section id="clients"
             class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0"
             style="background-image: url({{templateAsset($templateData->testimonial->image)}}); background-size: cover; background-position: center;">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2 class="font-weight-bold text-color-light mb-2">{{$templateData->testimonial->title}}</h2>
            <p class="text-color-light opacity-7">{{$templateData->testimonial->description}}</p>
          </div>
        </div>
        <div class="row text-center py-3 my-4">
          <div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0"
               data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
            @foreach($templateData->testimonial->customers as $c)
            <div>
              <img class="img-fluid" src="{{templateAsset($c->image)}}" alt="{{$c->title}}">
            </div>
            @endforeach
          </div>
        </div>
        <div class="row">
          <div class="col">

            <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0"
                 data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
              @foreach($templateData->testimonial->items as $t)
              <div>
                <div
                  class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                  <blockquote>
                    <p class="text-5 line-height-5 mb-0">{{$t->description}}</p>
                  </blockquote>
                  <div class="testimonial-author">
                    <p><strong class="font-weight-extra-bold text-2">- {{$t->title}}</strong></p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

          </div>
        </div>
      </div>
    </section>
      @endif

      @if($products->count() > 0)
    <div id="team" class="container pb-4">
      <div class="row pt-5 mt-5 mb-4">
        <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
          <h2 class="font-weight-bold mb-1">{{$templateData->product->title}}</h2>
          <p>{{$templateData->product->description}}</p>
        </div>
      </div>

      <div class="row pb-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
           data-appear-animation-delay="200">
        @foreach($products as $p)
        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="{{route('shop-product-details', ['slug' => $p->slug])}}">
										<img src="{{$p->mainPictureUrl()}}" class="img-fluid"
                         alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">
                    <a href="{{route('shop-product-details', ['slug' => $p->slug])}}">
                    {{$p->name}}
                    </a>
                  </h3>
{{--									<span class="text-2 mb-0">CEO</span>--}}
									<span class="thumb-info-caption-text pt-1">
                    <a href="{{route('shop-product-details', ['slug' => $p->slug])}}">
                      {{$p->description}}
                    </a>
                  </span>
{{--									<span class="thumb-info-social-icons">--}}
{{--										<a target="_blank" href="http://www.facebook.com"><i--}}
{{--                        class="fab fa-facebook-f"></i><span>Facebook</span></a>--}}
{{--										<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>--}}
{{--										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>--}}
{{--									</span>--}}
								</span>
							</span>
        </div>
        @endforeach
      </div>
    </div>
      @endif
    <section id="contact" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Google Maps - Settings on footer -->
            <div id="googlemaps" class="google-ma h-100 mb-0" style="min-height: 400px;"></div>

          </div>
          <div class="col-md-6 p-5 my-5">

{{--            <div class="px-4">--}}
{{--              <h2 class="font-weight-bold line-height-1 mb-2">Contact Us</h2>--}}
{{--              <p class="text-3 mb-4">LOREM IPSUM DOLOR SIT A MET</p>--}}
{{--              <form class="contact-form form-style-2 pr-xl-5" action="php/contact-form.php" method="POST">--}}
{{--                <div class="contact-form-success alert alert-success d-none mt-4">--}}
{{--                  <strong>Success!</strong> Your message has been sent to us.--}}
{{--                </div>--}}

{{--                <div class="contact-form-error alert alert-danger d-none mt-4">--}}
{{--                  <strong>Error!</strong> There was an error sending your message.--}}
{{--                  <span class="mail-error-message text-1 d-block"></span>--}}
{{--                </div>--}}

{{--                <div class="form-row">--}}
{{--                  <div class="form-group col-xl-4">--}}
{{--                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"--}}
{{--                           class="form-control" name="name" placeholder="Name" required>--}}
{{--                  </div>--}}
{{--                  <div class="form-group col-xl-8">--}}
{{--                    <input type="email" value="" data-msg-required="Please enter your email address."--}}
{{--                           data-msg-email="Please enter a valid email address." maxlength="100" class="form-control"--}}
{{--                           name="email" placeholder="Email" required>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="form-row">--}}
{{--                  <div class="form-group col">--}}
{{--                    <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100"--}}
{{--                           class="form-control" name="subject" placeholder="Subject" required>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="form-row">--}}
{{--                  <div class="form-group col">--}}
{{--                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4"--}}
{{--                              class="form-control" name="message" placeholder="Message" required></textarea>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="form-row">--}}
{{--                  <div class="form-group col">--}}
{{--                    <input type="submit" value="SUBMIT"--}}
{{--                           class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2"--}}
{{--                           data-loading-text="Loading...">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </form>--}}
{{--            </div>--}}

          </div>
        </div>
      </div>
    </section>

    <section class="section bg-primary border-0 m-0">
      <div class="container">
        <div class="row justify-content-center text-center text-lg-left py-4">
          <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
            <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
              <div class="feature-box-icon">
                <i class="icon-location-pin icons text-color-light"></i>
              </div>
              @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->address)
                <div class="feature-box-info pl-1">
                  <h5 class="font-weight-light text-color-light opacity-7 mb-0">@lang('ADDRESS')</h5>
                  <p class="text-color-light font-weight-semibold mb-0">{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->addressFormatted()}}</p>
                </div>
              @endif
            </div>
          </div>
          <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
               data-appear-animation-delay="200">
            <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
              <div class="feature-box-icon">
                <i class="icon-call-out icons text-color-light"></i>
              </div>
              @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->phone)
              <div class="feature-box-info pl-1">
                <h5 class="font-weight-light text-color-light opacity-7 mb-0">@lang('CALL US NOW')</h5>
                <a href="tel:{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->phone}}" class="text-color-light font-weight-semibold text-decoration-none">{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->phone}}</a>
              </div>
              @endif
            </div>
          </div>
          <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
               data-appear-animation-delay="400">
            <div class="feature-box feature-box-style-2 d-block d-lg-flex">
              <div class="feature-box-icon">
                <i class="icon-share icons text-color-light"></i>
              </div>
              <div class="feature-box-info pl-1">
                <h5 class="font-weight-light text-color-light opacity-7 mb-0">@lang('FOLLOW US')</h5>
                <p class="mb-0">
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->facebook)
                    <span class="social-icons-facebook">
                      <a href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->facebook}}" target="_blank"
                                                           class="text-color-light font-weight-semibold" title="Facebook">
                        <i class="mr-1 fab fa-facebook-f"></i> FACEBOOK</a>
                    </span>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->twitter_x)
                      <span class="social-icons-twitter pl-3"><a href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->twitter_x}}" target="_blank" class="text-color-light font-weight-semibold" title="Twitter"><i class="mr-1 fab fa-twitter"></i> TWITTER</a>
                      </span>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->linkedin)
                      <span class="social-icons-instagram pl-3"><a href="\Vinsystems\DataPersistence\Models\SystemSetting::instance()->linkedin" target="_blank"
                                                                   class="text-color-light font-weight-semibold"
                                                                   title="Linkedin"><i class="mr-1 fab fa-instagram"></i> INSTAGRAM</a>
                  </span>
                  @endif
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer id="footer" class="mt-0">
    <div class="footer-copyright">
      <div class="container py-2">
        <div class="row py-4">
          <div class="col d-flex align-items-center justify-content-center">
            @if(SystemSetting::instance()->shop_copyright_html)
              {!! SystemSetting::instance()->shop_copyright_html !!}
            @else
              @lang('Copyright') <a href="{{config('app.companyWebsite')}}" class="text-body"
                                    target="_blank">©{{\Carbon\Carbon::now()->year}} {{config('app.companyName')}}</a>
              . @lang('All rights reserved').
            @endif
          </div>
        </div>
      </div>
    </div>
  </footer>

</div>

<!-- Vendor -->
<script src="{{templateAsset('assets-cdn/default/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/common/common.min.js')}}"></script>
<script
  src="{{templateAsset('assets-cdn/default/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
<script
  src="{{templateAsset('assets-cdn/default/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script
  src="{{templateAsset('assets-cdn/default/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/vide/jquery.vide.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/vendor/vivus/vivus.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{templateAsset('assets-cdn/default/js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script
  src="{{templateAsset('assets-cdn/default/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script
  src="{{templateAsset('assets-cdn/default/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{templateAsset('assets-cdn/default/js/views/view.contact.js')}}"></script>

<!-- Theme Custom -->
<script src="{{templateAsset('assets-cdn/default/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{templateAsset('assets-cdn/default/js/theme.init.js')}}"></script>

<!-- Examples -->
<script src="{{templateAsset('assets-cdn/default/js/examples/examples.portfolio.js')}}"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12345678-1', 'auto');
  ga('send', 'pageview');
</script>
 -->

{{--		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>--}}
{{--		<script>--}}

{{--			/*--}}
{{--			Map Settings--}}

{{--				Find the Latitude and Longitude of your address:--}}
{{--					- https://www.latlong.net/--}}
{{--					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/--}}

{{--			*/--}}

{{--			// Map Markers--}}
{{--			var mapMarkers = [{--}}
{{--				address: "New York, NY 10017",--}}
{{--				html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",--}}
{{--				icon: {--}}
{{--					image: "{{templateAsset('assets-cdn/default/img/pin.png')}}",--}}
{{--					iconsize: [26, 46],--}}
{{--					iconanchor: [12, 46]--}}
{{--				}--}}
{{--			}];--}}

{{--			// Map Initial Location--}}
{{--			var initLatitude = 40.75198;--}}
{{--			var initLongitude = -73.96978;--}}

{{--			// Map Extended Settings--}}
{{--			var mapSettings = {--}}
{{--				controls: {--}}
{{--					draggable: (($.browser.mobile) ? false : true),--}}
{{--					panControl: true,--}}
{{--					zoomControl: true,--}}
{{--					mapTypeControl: true,--}}
{{--					scaleControl: true,--}}
{{--					streetViewControl: true,--}}
{{--					overviewMapControl: true--}}
{{--				},--}}
{{--				scrollwheel: false,--}}
{{--				markers: mapMarkers,--}}
{{--				latitude: initLatitude,--}}
{{--				longitude: initLongitude,--}}
{{--				zoom: 5--}}
{{--			};--}}

{{--			var map = $('#googlemaps').gMap(mapSettings),--}}
{{--				mapRef = $('#googlemaps').data('gMap.reference');--}}

{{--			// Map text-center At--}}
{{--			var mapCenterAt = function(options, e) {--}}
{{--				e.preventDefault();--}}
{{--				$('#googlemaps').gMap("centerAt", options);--}}
{{--			}--}}

{{--			// Styles from https://snazzymaps.com/--}}
{{--			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];--}}

{{--			var styledMap = new google.maps.StyledMapType(styles, {--}}
{{--				name: 'Styled Map'--}}
{{--			});--}}

{{--			mapRef.mapTypes.set('map_style', styledMap);--}}
{{--			mapRef.setMapTypeId('map_style');--}}

{{--		</script>--}}


</body>
</html>
