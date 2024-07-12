@extends('ui-views::frontend.templates.template-1.layout')
@section('content')
  <div class="container mt-5 mb-5">
    @if($page->isSummerNote())
      {!! $page->content !!}
    @else
      <p>@lang('This page can only display SummerNote static page type')</p>
    @endif
  </div>
@endsection
