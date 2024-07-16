@extends('ui-views::frontend.templates.template-1.layout')
@section('content')
  <div class="container mt-5 mb-5">
    <livewire:app.blog-post-grid-filter isFrontend="1"/>
  </div>
@endsection
