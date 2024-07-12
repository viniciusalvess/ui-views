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
