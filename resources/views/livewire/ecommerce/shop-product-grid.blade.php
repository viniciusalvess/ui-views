<div>
  @if(\Vinsystems\DataPersistence\Models\App\SystemSettingGlobal::forSlugValue('show-shop-product-grid-header', '1'))
  <section class="py-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bg-light p-4 rounded-3 position-relative overflow-hidden">
            <figure class="position-absolute top-0 end-0 mt-5">
              <svg width="566.3px" height="353.7px" viewBox="0 0 566.3 353.7">
                <path stroke="#17a2b8" fill="none"
                      d="M525.1,4c8.1,0.7,14.9,7.2,17.9,14.8c3,7.6,3,16,2.1,24.1c-4.7,44.3-32.1,84.7-69.4,108.9 c-37.4,24.2-83.7,32.8-127.9,27.6c-32.3-3.8-63.5-14.5-95.9-16.6c-21.6-1.4-45.6,2.1-60.1,18.3c-7.7,8.5-11.8,19.6-14.8,30.7 c-7.9,29.5-9,60.8-19.7,89.5c-5.5,14.8-14,29.1-27.1,38c-15.6,10.5-35.6,12-54.2,9.5c-18.6-2.5-36.5-8.6-55-12.1"/>
                <path stroke="#F99D2B" fill="none"
                      d="M560.7,0.2c10,18.3,3.7,41.1-5,60.1c-11.8,25.9-28,50.3-50.2,68.2c-29,23.3-66.3,34-103.2,38.6 c-36.9,4.6-74.3,3.8-111.3,7.2c-22.3,2-45.3,5.9-63.5,19c-26.8,19.2-39,55.3-68.3,70.4c-38.2,19.6-89.7-4.9-125.6,18.8 c-22.6,15-30.7,44.2-33.3,71.2"/>
              </svg>
            </figure>

            <div class="row position-relative align-items-center">
              <div class="col-md-6 px-md-5">
                <h1 class="mb-3">@lang('Welcome to our plataform!')</h1>

                <div class="input-group">
                  <input class="form-control border-0 me-1" wire:model.live.debounce.300s="search" type="search"
                         placeholder="{{__('Search')}}">
                  <button type="button" class="btn btn-primary mb-0 rounded" wire:loading.attr="disabled">
                    @lang('Search Course')

                    <div class="spinner-border spinner-border-sm" role="status" wire:loading>
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </button>
                </div>
              </div>

              <div class="col-md-6 text-center">

             {{-- <img src="{{asset('lms/assets/images/book/book-bg.svg')}}" alt="">--}}
                <img src="https://d3j50bikzu4vbt.cloudfront.net/codice/1/N7tebXT6EnMbXh9iAcXUpzZ1Ksn7h1MfLIrYVtan.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row mb-4 align-items-center">


            <div class="col-md-4">
              <h2 class="mb-0">@lang('All Products')</h2>
            </div>
            <div class="col-md-8 text-end">
              <a href="{{route('shop-products-filter')}}">
                @lang('Filter Products') <i class="bi bi-funnel text-primary"></i>
              </a>
            </div>
          </div>

          <div class="row g-4">
            @forelse($products as $p)
              @include('ui-views::includes.cards.product-card-inc', ['product' => $p])
            @empty
              <h6 class="text-secondary">@lang('No products available')</h6>
            @endforelse
          </div>

          <div class="col-12">
            <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
              {{ $products->links() }}
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
