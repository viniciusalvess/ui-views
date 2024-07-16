@php
  $templateData = templateData(\Vinsystems\DataPersistence\Models\Custom\VinAppHelper::isProduction());
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
  @php
    $fav = \Vinsystems\DataPersistence\Models\SystemSetting::instance()->favicon;
  @endphp
  @if($fav)
    <link rel="shortcut icon" href="{{VinLiveWireHelper::downloadUrl($fav, true)}}"/>
  @else
    <link rel="shortcut icon" href="{{asset('assets/media/vinsystems/favicon.ico')}}"/>
  @endif

{{--  <link rel="shortcut icon" href="{{templateAsset('assets-cdn/default/img/favicon.ico')}}"--}}
{{--        type="image/x-icon"/>--}}
{{--  <link rel="apple-touch-icon" href="{{templateAsset('assets-cdn/default/img/apple-touch-icon.png')}}">--}}

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

  @include('ui-views::frontend.templates.template-1.header')

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
    @yield('content')
  </div>

  @include('ui-views::frontend.templates.template-1.footer')

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
