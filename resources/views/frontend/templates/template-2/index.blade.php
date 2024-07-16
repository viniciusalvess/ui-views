@php
  $templateData = templateData(false);
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

  <title>{{$templateData?->title}}</title>

  <meta name="keywords" content="{{$templateData->keywords}}"/>
  <meta name="description" content="{{$templateData->description}}">
  <meta name="author" content="{{$templateData->author}}">

  @php
    $fav = \Vinsystems\DataPersistence\Models\SystemSetting::instance()->favicon;
  @endphp
  @if($fav)
    <link rel="shortcut icon" href="{{VinLiveWireHelper::downloadUrl($fav, true)}}"/>
  @else
    <link rel="shortcut icon" href="{{asset('assets/media/vinsystems/favicon.ico')}}"/>
  @endif

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

  <!-- Web Fonts  -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400"
    rel="stylesheet" type="text/css">

  <!-- Vendor CSS -->
  <link href="{{templateAsset('assets-cdn/default/vendor/bootstrap/css/bootstrap.min.css')}}"
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
  <style>
    .custom-img-size {
      width: auto !important; /* Defina a largura desejada */
      height: 60px; /* Defina a altura desejada */
      object-fit: contain;; /* Mantém o aspecto das imagens enquanto as redimensiona */
      padding: 0px 30px;
    }
  </style>
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
                    <li class="social-icons-facebook"><a
                        href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->facebook}}"
                        target="_blank" title="Facebook"><i
                          class="fab fa-facebook-f"></i></a></li>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->instagram)
                    <li class="social-icons-facebook"><a
                        href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->instagram}}"
                        target="_blank" title="Instagram"><i
                          class="fab fa-instagram"></i></a></li>
                  @endif

                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->twitter_x)
                    <li class="social-icons-twitter"><a
                        href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->twitter_x}}"
                        target="_blank" title="Twitter"><i
                          class="fab fa-twitter"></i></a></li>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->linkedin)
                    <li class="social-icons-linkedin"><a
                        href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->linkedin}}"
                        target="_blank" title="Linkedin"><i
                          class="fab fa-linkedin-in"></i></a></li>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->youtube)
                    <li class="social-icons-linkedin"><a
                        href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->youtube}}" target="_blank"
                        title="Linkedin"><i
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

                  <img class="header-logo-sticky opacity-0" alt="Porto" width="auto" height="48" data-sticky-width="89"
                       data-sticky-height="43" data-sticky-top="88" src="{{$logoDarkUrl}}">
                  <img class="header-logo-non-sticky opacity-0" alt="Porto" width="auto" height="48"
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
                      <strong><a
                          href="mailto:{{SystemSetting::instance()->email}}">{{SystemSetting::instance()->email}}</a></strong>
                    </div>
                  </li>
                @endif
                @if(SystemSetting::instance()->phone)
                  <li>
                    <div class="header-extra-info-text">
                      <label>@lang('Phone')</label>
                      <strong><a
                          href="tel:{{SystemSetting::instance()->phone}}">{{SystemSetting::instance()->phone}}</a></strong>
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
                          <a class="dropdown-item dropdown-toggle active" href="/">
                            Início
                          </a>
                        </li>

                        <li class="dropdown dropdown-full-color dropdown-light">
                          <a class="dropdown-item dropdown-toggle" href="/shop/products">
                            Cursos
                          </a>
                        </li>
                        <!--
                        <li class="dropdown dropdown-full-color dropdown-light dropdown-mega">
                          <a class="dropdown-item dropdown-toggle" href="#services">
                            Serviços
                          </a>
                        </li>-->
                        <li class="dropdown dropdown-full-color dropdown-light">
                          <a class="dropdown-item dropdown-toggle" href="#contato">
                            Contato
                          </a>
                        </li>

                      </ul>
                    </nav>
                  </div>
                  <div
                    class="header-nav-features ml-auto header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                    @auth
                      <div
                        class="header-nav-feature header-nav-features-user header-nav-features-user-logged d-inline-flex mx-2 pr-2"
                        id="headerAccount">
                        <a href="#" class="header-nav-features-toggle text-color-light">
                          <i class="far fa-user text-color-light"></i> {{ Auth::user()->name }}
                        </a>
                        <div
                          class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right"
                          id="headerTopUserDropdown">
                          <div class="row">
                            <div class="col-8">
                              <p class="mb-0 pb-0 text-2 line-height-1 pt-1">@lang('Hello')</p>
                              <p><strong class="text-color-dark text-4">{{ Auth::user()->name }}</strong></p>
                            </div>
                            <div class="col-4">
                              <div class="d-flex justify-content-end">
                                <img class="rounded-circle" width="40" height="40" alt="avatar"
                                     src="{{ Auth::user()->pictureUrl() }}">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <ul class="nav nav-list-simple flex-column text-3">
                                <li class="nav-item"><a class="nav-link"
                                                        href="{{ route('shop-profile') }}">@lang('My Profile')</a></li>
                                @if(Auth::user()->has_admin_access)
                                  <li class="nav-item"><a class="nav-link"
                                                          href="{{ route('dashboard') }}">@lang('Admin Panel')</a></li>
                                @endif
                                <li class="nav-item"><a class="nav-link border-bottom-0"
                                                        href="{{ route('shop-logout') }}">@lang('Log Out')</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    @else
                      @guest
                        <div class="header-nav-feature header-nav-features-user d-inline-flex mx-2 pr-2 text-white"
                             id="headerAccount">
                          <a class="nav-link text-white" href="{{ route('shop-login') }}"
                             class="header-nav-features-toggle">
                            <i class="far fa-user  text-white"></i> @lang('Login')
                          </a>
                        </div>
                      @endguest
                    @endauth
                  </div>
                  <button class="btn header-btn-collapse-nav my-2" data-toggle="collapse"
                          data-target=".header-nav-main nav">
                    <i class="fas fa-bars text-white"></i>
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
          </ul>
        </div>
      </div>
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
									<span class="thumb-info-caption-text pt-1">
                    <a href="{{route('shop-product-details', ['slug' => $p->slug])}}">
                      {{$p->description}}
                    </a>
                  </span>
								</span>
							</span>
            </div>
          @endforeach
        </div>
      </div>
    @endif
    <section id="services" class="section section-height-3 bg-primary border-0 m-0 appear-animation"
             data-appear-animation="fadeIn">
      <div class="container my-3">


        <div class="row counters counters-sm py-4 mt-5">
          <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
            <div class="counter">
              <i class="icons icon-user text-color-light"></i>
              <strong class="text-color-light font-weight-extra-bold" data-to="2020" data-append="+">0</strong>
              <label class="text-4 text-color-light mt-1">Alunos capacitados</label>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
            <div class="counter">
              <i class="icons icon-badge text-color-light"></i>
              <strong class="text-color-light font-weight-extra-bold" data-to="5.816">0</strong>
              <label class="text-4 text-color-light mt-1">Treinamentos ministrados</label>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
            <div class="counter">
              <i class="icons icon-graph text-color-light"></i>
              <strong class="text-color-light font-weight-extra-bold" data-to="69.040">0</strong>
              <label class="text-4 text-color-light mt-1">Horas de treinamento ministradas</label>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="counter">
              <i class="icons icon-cup text-color-light"></i>
              <strong class="text-color-light font-weight-extra-bold" data-to="9.4">0</strong>
              <label class="text-4 text-color-light mt-1">Média da satisfação de nossos alunos</label>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--
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
-->
<!--
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
    <section class="section bg-quaternary border-0 m-0 d-none">
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
                  <p
                    class="text-color-light font-weight-semibold mb-0">{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->addressFormatted()}}</p>
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
                  <a href="tel:{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->phone}}"
                     class="text-color-light font-weight-semibold text-decoration-none">{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->phone}}</a>
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
                      <a href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->facebook}}"
                         target="_blank"
                         class="text-color-light font-weight-semibold" title="Facebook">
                        <i class="mr-1 fab fa-facebook-f"></i> FACEBOOK</a>
                    </span>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->twitter_x)
                    <span class="social-icons-twitter pl-3"><a
                        href="{{\Vinsystems\DataPersistence\Models\SystemSetting::instance()->twitter_x}}"
                        target="_blank" class="text-color-light font-weight-semibold" title="Twitter"><i
                          class="mr-1 fab fa-twitter"></i> TWITTER</a>
                      </span>
                  @endif
                  @if(\Vinsystems\DataPersistence\Models\SystemSetting::instance()->linkedin)
                    <span class="social-icons-instagram pl-3"><a
                        href="\Vinsystems\DataPersistence\Models\SystemSetting::instance()->linkedin" target="_blank"
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
  -->
  <div class="container">
    <div class="row py-4 my-5 justify-content-center">
      <h2 class="font-weight-bold mb-1">CLIENTES</h2>
      <div class="col py-3">
        <div class="owl-carousel owl-theme mb-0"
             data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/cUcTb1gGt2cYCexap1H6eMIaN8EJM8ABUWpADntY.webp"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/1Woo5qs42s8nUwkumW6g1iwlAGEG7fBry6lFKgMU.png"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/QERWw7nuxOfqL3ZkQIIDz7NdoueFQYh3zGyyPvIC.png"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/jFwjDEAI605lYegEMATf7NlbBvUC2uLcbHwtp6wF.jpg"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/vlYTdjpcStAPaOEbzbNJLnjvWbCtu0DSxoCLDZpN.png"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/znPBWhmsnE8Nx4T05i3ncUjXioxyZ29dJ4fPphXU.png"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/w5HpBDbyweL8NjedSYgzHcBTWZKRNmqBs0g06IX1.png"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/vPZ6poRU983YwJFMuCoabee3XH1MtXToHx78mWLJ.png"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/7ve8q9KXM3vVLCs92YsG1q5X3bXhOGvW2MMPHj4d.png"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/CB8FAuGW92R9bLsqmWgKfEVR1wbeWEXUJquB4UkL.png"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/5keBRJOjssnPqtq85lnXlrl4znobOJMRAlpzWFkK.png"
                 alt="">
          </div>
          <div>
            <img class="img-fluid custom-img-size"
                 src="https://d203srxv6bj3eh.cloudfront.net/codice/1/iRCkabPWwBRZzb8VwuGSW2g1mcnWvXBQPzEtrL9t.png"
                 alt="">
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container" id="contato">
    <div class="row mb-5">
      <div class="col-lg-4">

        <div class="overflow-hidden mb-3">
          <h4 class="pt-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"
              data-plugin-options="{'accY': -200}">Entre em <strong>Contato</strong></h4>
        </div>
        <div class="overflow-hidden mb-3 d-none">
          <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400"
             data-plugin-options="{'accY': -200}">Para qualquer informação, dúvida ou comentário, por favor ligue ou
            envie mensagem pelo WhatsApp.</p>
        </div>
        <div class="overflow-hidden">
          <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600"
             data-plugin-options="{'accY': -200}">Para qualquer informação, dúvida ou comentário, por favor ligue ou
            envie mensagem pelo WhatsApp.</p>
        </div>

      </div>
      <div class="col-lg-4 offset-lg-1 appear-animation" data-appear-animation="fadeIn"
           data-appear-animation-delay="800" data-plugin-options="{'accY': -200}">

        <h4 class="pt-5">Nosso <strong>Escritório</strong></h4>
        <ul class="list list-icons list-icons-style-3 mt-2">
          <li><i class="fas fa-phone top-6"></i> <strong>Telefones:</strong> (22) 9 9893 4813</li>
          <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">pilarassessor@gmail.com</a>
          </li>
          <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Endereço:</strong> Rua Armando Freire Pinheiro Nº 84,
            Antiga Rua W8 - Mirante da Lagoa - Macaé - Rio de Janeiro - CEP: 27925070
          </li>
        </ul>

      </div>
      <div class="col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000"
           data-plugin-options="{'accY': -200}">

        <h4 class="pt-5">Horário de <strong>Atendimento</strong></h4>
        <ul class="list list-icons list-dark mt-2">
          <li><i class="far fa-clock top-6"></i> Segunda - Sexta - 8:00 às 17:00</li>
          <li><i class="far fa-clock top-6"></i> Sábado - 8:00 às 12:00</li>
          <li><i class="far fa-clock top-6"></i> Domingo - Fechado</li>
        </ul>

      </div>
    </div>
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

</body>
</html>
