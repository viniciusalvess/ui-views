@php
  $frontendMenus = templateMenus('Frontend');
@endphp
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
              <a href="{{route('welcome')}}">
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
                        <a class="dropdown-item dropdown-toggle active" href="{{route('welcome')}}">
                          @lang('Home')
                        </a>
                      </li>
                      <li class="dropdown dropdown-full-color dropdown-light">
                        <a class="dropdown-item dropdown-toggle" href="{{route('template-blog')}}">
                          @lang('Blog')
                        </a>
                      </li>

{{--                      <li class="dropdown dropdown-full-color dropdown-light">--}}
{{--                        <a class="dropdown-item dropdown-toggle" href="#">--}}
{{--                          Shop--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                          <li class="dropdown-submenu">--}}
{{--                            <a class="dropdown-item" href="#">Single Product</a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                              <li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>--}}
{{--                              <li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>--}}
{{--                              <li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a>--}}
{{--                              </li>--}}
{{--                              <li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and--}}
{{--                                  Right Sidebar</a></li>--}}
{{--                            </ul>--}}
{{--                          </li>--}}
{{--                          <li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>--}}
{{--                          <li class="dropdown-submenu">--}}
{{--                            <a class="dropdown-item" href="#">3 Columns</a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                              <li><a class="dropdown-item" href="shop-3-columns-full-width.html">Full Width</a></li>--}}
{{--                              <li><a class="dropdown-item" href="shop-3-columns-sidebar-left.html">Left Sidebar</a>--}}
{{--                              </li>--}}
{{--                              <li><a class="dropdown-item" href="shop-3-columns-sidebar-right.html">Right Sidebar </a>--}}
{{--                              </li>--}}
{{--                            </ul>--}}
{{--                          </li>--}}
{{--                          <li class="dropdown-submenu">--}}
{{--                            <a class="dropdown-item" href="#">2 Columns</a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                              <li><a class="dropdown-item" href="shop-2-columns-full-width.html">Full Width</a></li>--}}
{{--                              <li><a class="dropdown-item" href="shop-2-columns-sidebar-left.html">Left Sidebar</a>--}}
{{--                              </li>--}}
{{--                              <li><a class="dropdown-item" href="shop-2-columns-sidebar-right.html">Right Sidebar </a>--}}
{{--                              </li>--}}
{{--                              <li><a class="dropdown-item" href="shop-2-columns-sidebar-left-and-right.html">Left and--}}
{{--                                  Right Sidebar</a></li>--}}
{{--                            </ul>--}}
{{--                          </li>--}}
{{--                          <li class="dropdown-submenu">--}}
{{--                            <a class="dropdown-item" href="#">1 Column</a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                              <li><a class="dropdown-item" href="shop-1-column-full-width.html">Full Width</a></li>--}}
{{--                              <li><a class="dropdown-item" href="shop-1-column-sidebar-left.html">Left Sidebar</a>--}}
{{--                              </li>--}}
{{--                              <li><a class="dropdown-item" href="shop-1-column-sidebar-right.html">Right Sidebar </a>--}}
{{--                              </li>--}}
{{--                              <li><a class="dropdown-item" href="shop-1-column-sidebar-left-and-right.html">Left and--}}
{{--                                  Right Sidebar</a></li>--}}
{{--                            </ul>--}}
{{--                          </li>--}}
{{--                          <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>--}}
{{--                          <li><a class="dropdown-item" href="shop-login.html">Login</a></li>--}}
{{--                          <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>--}}
{{--                        </ul>--}}
{{--                      </li>--}}

                      @if($frontendMenus->count() > 0)
                        @foreach($frontendMenus as $m)
                          @if($m->children()->count() > 0)
                            <li class="dropdown dropdown-full-color dropdown-light">
                              @if($m->use_static_page)
                                <a class="dropdown-item dropdown-toggle" href="{{route('template-page', ['slug' => $m->staticPage->slug])}}">{{$m->name}}</a>
                              @elseif($m->url)
                                <a class="dropdown-item dropdown-toggle" href="{{$m->url}}">{{$m->name}}+</a>
                              @else
                                <a>{{$m->name}}</a>
                              @endif

                              <ul class="dropdown-menu">
                                @foreach($m->children as $c)
                                  <li>
                                    @if($c->use_static_page)
                                      <a class="dropdown-item" href="{{route('template-page', ['slug' => $c->staticPage->slug])}}">{{$c->name}}</a>
                                    @else
                                      <a class="dropdown-item" href="{{$c->url}}">{{$c->name}}</a>
                                    @endif
                                  </li>
                                @endforeach
                              </ul>
                            </li>
                          @else
                            @if($m->use_static_page)
                              <a class="dropdown-item" href="{{route('template-page', ['slug' => $m->staticPage->slug])}}">{{$m->name}}</a>
                            @else
                              <a class="dropdown-item" href="{{$m->url}}">{{$m->name}}</a>
                            @endif
                          @endif
                        @endforeach
                      @endif
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
