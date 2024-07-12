@php
  $templateData = templateData(\Vinsystems\DataPersistence\Models\Custom\VinAppHelper::isProduction());
  $products = templateProductsRecent();
@endphp

@extends('ui-views::frontend.templates.template-1.layout')
@section('content')
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
@endsection
