@extends('ui-views::frontend.templates.template-1.layout')
@section('content')
  <div class="container mt-5 mb-5">
    <div role="main" class="main">

      <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
          <div class="row">

            <div class="col-md-12 align-self-center p-static order-2 text-center">

              <h1 class="text-dark font-weight-bold text-8">{{$blogPost->title}}</h1>
              <span class="sub-title text-dark">{{$blogPost->description}}</span>
            </div>

            <div class="col-md-12 align-self-center order-1">

              <ul class="breadcrumb d-block text-center">
                <li><a href="{{route('welcome')}}">@lang('Home')</a></li>
                <li class="active">@lang('Blog')</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <div class="container py-4">

        <div class="row">
          <div class="col">
            <div class="blog-posts single-post">

              <article class="post post-large blog-single-post border-0 m-0 p-0">
                @if($blogPost->picture)
                  <div class="post-image ml-0">
                    <a href="{{route('template-blog-post', ['slug' => $blogPost->getSlug()])}}">
                      <img src="{{$blogPost->pictureUrl()}}"
                           class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt=""/>
                    </a>
                  </div>
                @endif

                @if($blogPost->video)
                  <div class="post-image ml-0">
                    <video width="100%" controls>
                      <source src="{{$blogPost->videoUrl()}}">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                @endif

                <div class="post-date ml-0">
                  <span class="day">{{$blogPost->created_at->day}}</span>
                  <span class="month">{{$blogPost->created_at->format('M, y')}}</span>
                </div>

                <div class="post-content ml-0">

                  <h2 class="font-weight-bold"><a
                      href="{{route('template-blog-post', ['slug' => $blogPost->getSlug()])}}">{{$blogPost->title}}</a></h2>

                  <div class="post-meta">
                    <span><i class="far fa-user"></i> @lang('By') <a href="#">{{$blogPost->author?->name}}</a> </span>
                    <span><i class="far fa-folder"></i> <a href="#">{{$blogPost->type?->name}}</a></span>
                  </div>

                  @if($blogPost->staticPage?->isSummerNote())
                    {!! $blogPost->staticPage->content !!}
                  @else
                    <p>@lang('This page can only display SummerNote static page type')</p>
                  @endif
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
