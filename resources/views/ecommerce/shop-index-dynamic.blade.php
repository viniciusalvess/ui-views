@extends('layouts.base-layout-public')
@section('content-public')
    {{-- {!! $pageHtml !!}--}}



    <main>

        <!-- =======================
      Main Banner START -->
        <section class="pt-0 position-relative overflow-hidden h-700px h-sm-600px h-lg-700px rounded-top-4 mx-2 mx-md-4" style="background-image:url(assets/images/bg/03.jpg); background-position: center; background-size: cover;">
            <div class="bg-overlay bg-dark opacity-5"></div>
            <!-- SVG decoration for curve -->
            <figure class="position-absolute bottom-0 left-0 w-100 d-md-block mb-n3 z-index-9">
                <svg class="fill-body" width="100%" height="150" viewBox="0 0 500 150" preserveAspectRatio="none">
                    <path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
                </svg>
            </figure>
            <!-- SVG decoration -->
            <figure class="position-absolute top-0 start-50 translate-middle-x z-index-9 mt-5">
                <svg  width="29px" height="29px">
                    <path class="fill-orange" d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z"></path>
                </svg>
            </figure>

            <div class="container z-index-9 position-relative">
                <!-- SVG decoration -->
                <figure class="position-absolute bottom-0 end-0 z-index-9 ms-5 mb-5">
                    <svg width="23px" height="23px">
                        <path class="fill-primary" d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z"></path>
                    </svg>
                </figure>

                <div class="row py-0 py-md-5 align-items-center text-center text-sm-start">
                    <div class="col-sm-10 col-lg-8 col-xl-6 all-text-white my-5 mt-md-0">
                        <div class="py-0 py-md-5 my-5">

                            <!-- Badge with content -->
                            <div class="d-inline-block bg-white px-3 py-2 rounded-pill mb-3">
                                <p class="mb-0 text-dark"><span class="badge text-bg-success rounded-pill me-1">New</span>	One to one video call using web browser</p>
                            </div>

                            <!-- Title -->
                            <h1 class="text-white display-5">GESTÃO, QUALIDADE  <span class="text-warning">E SEGURANÇA PARA SUA EMPRESA.</span></h1>
                            <p class="text-white">Demesne far-hearted suppose venture excited see had has. Dependent on so extremely delivered by. Yet no jokes worse her why.</p>

                            <div class="d-sm-flex align-items-center mt-4">
                                <!-- Button -->
                                <a href="#" class="btn btn-primary me-2 mb-4 mb-sm-0">Get Started</a>
                                <!-- Video button -->
                                <div class="d-flex align-items-center justify-content-center py-2 ms-0 ms-sm-4">
                                    <a data-glightbox data-gallery="office-tour" href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-round btn-white-shadow text-danger me-7 mb-0 overflow-visible">
                                        <i class="fas fa-play"></i>
                                        <h6 class="mb-0 ms-3 text-white fw-normal position-absolute start-100 top-50 translate-middle-y">Watch video</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Main Banner END -->


        <livewire:ecommerce.shop-product-grid/>
        <livewire:ecommerce.shop-event-list/>
    </main>
    @push('scripts')

        <script src="{{asset('lms/assets/js/functions.js')}}"></script>
    @endpush
@endsection
