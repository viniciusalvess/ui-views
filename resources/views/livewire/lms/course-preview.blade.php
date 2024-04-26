<div>
  <main>

    <section class="py-0 pb-lg-5">
      <div class="container">
        <div class="row g-3">
          <!-- Course video START -->
          <div class="col-12">
            <div class="video-player rounded-3">
              {{--              poster="assets/images/videos/poster.jpg"--}}

              @if($currentClass?->use_link)
                {{--                <div id="vin-video-plyr" data-plyr-provider="{{$currentClass->video_provider}}"--}}
                {{--                     data-plyr-embed-id="{{$currentClass->video_id}}">--}}
                {{--                  {!! $currentClass->link !!}--}}
                {{--                </div>--}}
                <div id="vin-yt-player"></div>
                {{--                <div id="vin-video-plyr" data-plyr-provider="{{$currentClass->video_provider}}" data-plyr-embed-id="{{$currentClass->video_id}}"></div>--}}
              @else
                @if($currentClass?->video)
                  <video id="vin-video-plyr" controls crossorigin="anonymous" playsinline>
                    <source src="{{$currentClass?->videoUrl()}}" type="video/mp4">
                    {{--                <source src="assets/images/videos/360p.mp4" type="video/mp4" size="360">--}}
                    {{--                <source src="assets/images/videos/720p.mp4" type="video/mp4" size="720">--}}
                    {{--                <source src="assets/images/videos/1080p.mp4" type="video/mp4" size="1080">--}}
                    <!-- Caption files -->
                    {{--                <track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt" default>--}}
                    {{--                <track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt">--}}
                  </video>
                @else
                  {{--                  <h3>@lang('This class has no video')</h3>--}}
                  @script
                  <script>
                    fetch('{{route('admin-lms-course-preview-video-start', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'});
                  </script>
                  @endscript
                @endif
              @endif
            </div>
          </div>
          <!-- Course video END -->

          <!-- Playlist responsive toggler START -->
          <div class="col-12 d-lg-none">
            <button class="btn btn-primary mb-3" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
              <i class="bi bi-camera-video me-1"></i> @lang('Playlist')
            </button>
          </div>
          <!-- Playlist responsive toggler END -->
        </div>
      </div>
    </section>

    {{--    @if($currentClass->document)--}}
    {{--      <section class="pt-0">--}}
    {{--        <div class="container">--}}
    {{--          <div class="row g-lg-5">--}}
    {{--            <embed src="{{VinLiveWireHelper::downloadUrlPresigned($currentClass->document, false)}}#toolbar=0" height="500"--}}
    {{--                   type="application/pdf" >--}}
    {{--          </div>--}}
    {{--        </div>--}}
    {{--      </section>--}}

    {{--      @script--}}
    {{--      <script>--}}
    {{--      fetch('{{route('admin-lms-course-preview-video-end', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'})--}}
    {{--      </script>--}}
    {{--      @endscript--}}
    {{--    @endif--}}

    <section class="pt-0">
      <div class="container">
        <div class="row g-lg-5">
          <!-- Main content START -->
          <div class="col-lg-8">

            <div class="row g-4">

              <!-- Course title START -->
              <div class="col-12">


                <!-- Title -->
                <h1>{{$currentCourse->name}}</h1>
                @if($currentClass && $currentSection)
                  <h3 class="text-dark">{{$currentSection->name.' - '.$currentClass->name}}</h3>
                  <small class="text-primary">
                    {{$currentCourse->getCompletedFullDescriptionCurrentUser()}}
                  </small>

                  @php
                    $stats = $currentCourse->getCompletedStatistics(\Illuminate\Support\Facades\Auth::id());
//                    dd($stats);
                  @endphp
                  <div class="progress progress-sm bg-warning bg-opacity-15">
                    <div class="progress-bar {{$stats['courseCompletePercent'] == 100 ? 'bg-success' : 'bg-primary'}}"
                         role="progressbar" style="width: {{$stats['courseCompletePercent']}}%" aria-valuenow="20"
                         aria-valuemin="0" aria-valuemax="{{$stats['courseCompletedCount']}}">
                      {{$stats['courseCompletePercent']}}%
                    </div>
                  </div>

                @endif

                <!-- Content -->
                <ul class="list-inline mb-5 mt-5">
                  {{--                  <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>--}}
                  <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                      class="fas fa-user-graduate text-success me-2"></i>{{$currentCourse->enrolledCount()}} @lang('Enrolled')
                  </li>
                  <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                      class="fas fa-signal text-success me-2"></i>{{$currentCourse->level ? $currentCourse->level->description: __('All levels')}}
                  </li>

                  {{--                  @if($currentClass->document)--}}
                  {{--                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i--}}
                  {{--                        class="bi bi-cloud-arrow-down text-warning"></i>--}}
                  {{--                      <a href="{{VinLiveWireHelper::downloadUrlPresigned($currentClass->document, false)}}"--}}
                  {{--                         class="d-inline-block ms-2 mb-0 h6" target="_blank">@lang('Download Document')</a>--}}
                  {{--                    </li>--}}
                  {{--                  @endif--}}

                  @if($currentClass->file)
                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="bi bi-download text-warning"></i>
                      <a href="{{VinLiveWireHelper::downloadUrlPresigned($currentClass->file, false)}}"
                         class="d-inline-block ms-2 mb-0 h6" target="_blank">@lang('Download File')</a>
                    </li>
                  @endif

                </ul>
              </div>
              <!-- Course title END -->

              <div class="separator my-5"></div>

              <!-- Instructor detail START -->
              <div class="col-12">
                <div class="d-sm-flex justify-content-sm-between align-items-center">
                  <!-- Avatar detail -->
                  @if($currentCourse->instructor)
                    <div class="d-flex align-items-center">
                      <!-- Avatar image -->
                      <a
                        href="{{\Illuminate\Support\Facades\Auth::user()->canAny([USERS_CREATE_PERM, USERS_UPDATE_PERM]) ? route('admin-user-profile', ['user' => $currentCourse->instructor->id]) : '#'}}">
                        <div class="avatar avatar-lg">
                          <img class="symbol symbol-35px symbol-lg-35px" width="35"
                               src="{{$currentCourse->instructor->pictureUrl()}}" alt="avatar">
                        </div>
                        <div class="ms-3">
                          <h6 class="mb-0"><a
                              href="{{route('admin-user-profile', ['user' => $currentCourse->instructor->id])}}">{{$currentCourse->instructor->name}}</a>
                          </h6>
                          <p class="mb-0 small">{{$currentCourse->instructor->instructor_title}}</p>
                        </div>
                      </a>
                    </div>
                  @endif

                  <!-- Button -->
                  <div class="d-flex mt-2 mt-sm-0">
                    {{--                    <a class="btn btn-danger-soft btn-sm mb-0" href="#">Follow</a>--}}
                    <!-- Share button with dropdown -->
                    <div class="dropdown ms-2">
                      {{--                      <a href="#" class="btn btn-sm mb-0 btn-info-soft small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">--}}
                      {{--                        share--}}
                      {{--                      </a>--}}
                      <!-- dropdown button -->
                      {{--                      <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">--}}
                      {{--                        <li><a  class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>--}}
                      {{--                        <li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>--}}
                      {{--                        <li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>--}}
                      {{--                        <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Copy link</a></li>--}}
                      {{--                      </ul>--}}
                    </div>
                  </div>
                </div>
              </div>
              <!-- Instructor detail END -->

              <!-- Course detail START -->
              <div class="col-12">
                <!-- Tabs START -->
                <ul class="nav nav-tabs nav-line-tabs" id="course-pills-tab" role="tablist">
                  @if($currentClass->document)
                    <li class="nav-item me-2 me-sm-4" role="presentation">
                      <button class="nav-link mb-0 {{$currentClass->document ? 'active' : ''}}" id="course-document-tab"
                              data-bs-toggle="pill"
                              data-bs-target="#course-document-pills-2" type="button" role="tab"
                              aria-controls="course-document-pills-2" aria-selected="false">@lang('Document')</button>
                    </li>
                  @endif

                  <li class="nav-item me-2 me-sm-4" role="presentation">
                    <button class="nav-link mb-0 {{$currentClass->document ? '' : 'active'}}" id="course-class-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#course-class-pills-2" type="button" role="tab"
                            aria-controls="course-class-pills-2" aria-selected="false">@lang('Class Content')</button>
                  </li>


                  <li class="nav-item me-2 me-sm-4" role="presentation">
                    <button class="nav-link mb-0" id="course-pills-tab-1" data-bs-toggle="pill"
                            data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1"
                            aria-selected="true">@lang('Course Overview')</button>
                  </li>
                  {{--                  <!-- Tab item -->--}}
                  {{--                                    <li class="nav-item me-2 me-sm-4" role="presentation">--}}
                  {{--                                      <button class="nav-link mb-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-2" type="button" role="tab" aria-controls="course-pills-2" aria-selected="false">Reviews</button>--}}
                  {{--                                    </li>--}}
                  {{--                  <!-- Tab item -->--}}
                  {{--                  <li class="nav-item me-2 me-sm-4" role="presentation">--}}
                  {{--                    <button class="nav-link mb-0" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-3" type="button" role="tab" aria-controls="course-pills-3" aria-selected="false">FAQs </button>--}}
                  {{--                  </li>--}}
                  {{--                  <!-- Tab item -->--}}
                  {{--                  <li class="nav-item me-2 me-sm-4" role="presentation">--}}
                  {{--                    <button class="nav-link mb-0" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-4" type="button" role="tab" aria-controls="course-pills-4" aria-selected="false">Comment</button>--}}
                  {{--                  </li>--}}
                </ul>
                <!-- Tabs END -->

                <!-- Tab contents START -->
                <div class="tab-content pt-4 px-3" id="course-pills-tabContent">
                  @if($currentClass->document)
                    <div class="tab-pane fade show active" id="course-document-pills-2" role="tabpanel"
                         aria-labelledby="course-document-tab-2">
                      <section class="pt-0">
                        <div class="container">
                          <div class="row g-lg-5">
                            <embed
                              src="{{VinLiveWireHelper::downloadUrlPresigned($currentClass->document, false)}}#toolbar=0"
                              height="1000" type="application/pdf"/>
                          </div>
                        </div>
                      </section>
                    </div>

                    @script
                    <script>
                      fetch('{{route('admin-lms-course-preview-video-end', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'})
                    </script>
                    @endscript
                  @endif

                  <div class="tab-pane fade show {{$currentClass->document ? '' : 'active'}}" id="course-class-pills-2"
                       role="tabpanel"
                       aria-labelledby="course-class-tab-2">
                    @if($currentCourse->staticPage->isSummerNote())
                      {!! $currentCourse->staticPage->content !!}
                    @else
                      <div id="vineditorjs-class" wire:ignore></div>
                    @endif

                  </div>

                  <div class="tab-pane fade" id="course-pills-1" role="tabpanel"
                       aria-labelledby="course-pills-tab-1">
                    @if($currentCourse->staticPage->isSummerNote())
                      {!! $currentCourse->staticPage->content !!}
                    @else
                      <div id="vineditorjs" wire:ignore></div>
                    @endif
                  </div>

                </div>
                <!-- Tab contents END -->
              </div>
              <!-- Course detail END -->
            </div>
          </div>
          <!-- Main content END -->

          <!-- Right sidebar START -->
          <div class="col-lg-4">
            <!-- Responsive offcanvas body START -->
            <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar"
                 aria-labelledby="offcanvasSidebarLabel">
              <div class="offcanvas-header bg-dark">
                <h5 class="offcanvas-title text-white" id="offcanvasSidebarLabel">@lang('Course playlist')</h5>
                <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="offcanvas"
                        data-bs-target="#offcanvasSidebar" aria-label="Close"><i class="bi bi-x-lg"></i></button>
              </div>
              <div class="offcanvas-body p-3 p-lg-0">
                <div class="col-12">
                  <!-- Accordion START -->
                  <h3 class="text-secondary">@lang('Classes')</h3>
                  <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                    @foreach($currentCourse->sections->sortBy('sort_order')->values() as $sec)
                      @php
                        $classesCount = $sec->classes->count();
                        $classesCompletedCount = $sec->getCompletedClassCountForCurrentUser();
                        $completedPercent = $sec->getCompletedClassPercentCurrentUser();
                        $isSectionClassComplete = $classesCount == $classesCompletedCount;
                      @endphp
                      <div class="accordion-item">
                        <h6 class="accordion-header font-base" id="heading-1">
                          <a
                            class="accordion-button fw-bold rounded  {{$sec->id == $sectionId ? '' : 'collapsed'}} d-block {{$isSectionClassComplete ? 'text-success' : 'text-primary'}}"
                            href="#collapse-{{$sec->id}}" data-bs-toggle="collapse"
                            data-bs-target="#collapse-{{$sec->id}}" aria-expanded="true"
                            aria-controls="collapse-{{$sec->id}}">
                            <span class="mb-0">{{$sec->name}}</span>
                            <span
                              class="small d-block mt-1">({{$classesCount}} {{$classesCount == 1 ? __('Lecture'): __('Lectures')}}) ({{$classesCompletedCount}} @lang('Completed'))</span>
                          </a>
                        </h6>
                        <div id="collapse-{{$sec->id}}"
                             class="accordion-collapse collapse {{$sec->id == $sectionId ? 'show' : ''}}"
                             aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                          <div class="accordion-body mt-3">
                            <div class="vstack gap-3">

                              <!-- Progress bar -->
                              <div class="overflow-hidden">
                                <div class="d-flex justify-content-between">
                                  <small class="mb-1">{{$classesCompletedCount}}
                                    /{{$classesCount}} @lang('Completed')</small>
                                  <small class="mb-1 text-end">{{$completedPercent}}%</small>
                                </div>
                                <div
                                  class="progress progress-sm {{$completedPercent == 100 ? 'bg-success' : 'bg-primary'}} bg-opacity-10">
                                  <div
                                    class="progress-bar {{$completedPercent == 100 ? 'bg-success' : 'bg-primary'}} aos"
                                    role="progressbar" data-aos="slide-right" data-aos-delay="200"
                                    data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    style="width: {{$completedPercent}}%" aria-valuenow="{{$classesCompletedCount}}"
                                    aria-valuemin="0" aria-valuemax="{{$classesCount}}">
                                  </div>
                                </div>
                              </div>
                              <hr>

                              @foreach($sec->classes->sortBy('sort_order')->values() as $cl)
                                @php
                                  $isClasCompleted = $cl->isCompletedByCurrentUser();
                                  $isPlaying = $cl->id == $classId;
                                  $isPlayingClass = $isPlaying ? 'text-primary' : ($isClasCompleted ? 'text-success' : '');
                                @endphp
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="position-relative d-flex align-items-center">
                                    <a
                                      href="{{route($watchRouteName, ['courseId' => $currentCourse->id, 'sectionId' => $sec->id, 'classId' => $cl->id])}}"
                                      class="mb-0 stretched-link position-static">
                                      <i class="fas fa-play me-0 {{$isPlayingClass}}"></i>
                                    </a>
                                    @if($isClasCompleted)
                                      <span class="d-inline-block {{$isPlayingClass}} ms-2 mb-0 h6 fw-light">
                                        {{$cl->name}}
                                        <i class="bi bi-check2-all {{$isPlayingClass}}"></i>
                                      </span>
                                    @else
                                      <span
                                        class="d-inline-block {{$isPlayingClass}} ms-2 mb-0 h6 fw-light">{{$cl->name}}</span>
                                    @endif
                                  </div>
                                  {{--                                <p class="mb-0 text-truncate">2m 10s</p>--}}
                                </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>

                  <h3 class="text-secondary mt-5">@lang('Quizzes')</h3>
                  <div class="accordion accordion-icon accordion-bg-light" id="accordionQuizzes">
                    @foreach($currentCourse->sections as $sec)
                      @php
                        $quizzesCount = $sec->quizzes->count();
                        $completedQuizzesCount = $sec->getCompletedQuizCountCurrentUser();
                        $completedQuizzesPercent = $sec->getCompletedQuizPercentCurrentUser();
                        $isSectionQuizComplete = $quizzesCount == $completedQuizzesCount;
                      @endphp

                      @if($quizzesCount == 0)
                        @continue
                      @endif


                      <div class="accordion-item mb-3">
                        <h6 class="accordion-header font-base" id="heading-1">
                          <a
                            class="accordion-button fw-bold rounded  {{$sec->id == $sectionId ? '' : 'collapsed'}} d-block {{$isSectionQuizComplete ? 'text-success' : 'text-primary'}}"
                            href="#collapse-quiz-{{$sec->id}}" data-bs-toggle="collapse"
                            data-bs-target="#collapse-quiz-{{$sec->id}}" aria-expanded="true"
                            aria-controls="collapse-quiz-{{$sec->id}}">
                            <span class="mb-0">{{$sec->name}}</span>
                            <span
                              class="small d-block mt-1">({{$quizzesCount}} {{$quizzesCount == 1 ? __('Lecture'): __('Lectures')}}) ({{$completedQuizzesCount}} @lang('Completed'))</span>
                          </a>
                        </h6>
                        <div id="collapse-quiz-{{$sec->id}}"
                             class="accordion-collapse collapse {{$sec->id == $sectionId ? 'show' : ''}}"
                             aria-labelledby="heading-1" data-bs-parent="#accordionQuizzes">
                          <div class="accordion-body mt-3">
                            <div class="vstack gap-3">
                              <div class="overflow-hidden">
                                <div class="d-flex justify-content-between">
                                  <small class="mb-1">{{$completedQuizzesCount}}
                                    /{{$quizzesCount}} @lang('Completed')</small>
                                  <small class="mb-1 text-secondary text-end">{{$completedQuizzesPercent}}%</small>
                                </div>
                                <div
                                  class="progress progress-sm {{$completedQuizzesPercent == 100 ? 'bg-success' : 'bg-primary'}} bg-opacity-10">
                                  <div
                                    class="progress-bar {{$completedQuizzesPercent == 100 ? 'bg-success' : 'bg-primary'}} aos"
                                    role="progressbar" data-aos="slide-right"
                                    data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    style="width: {{$completedQuizzesPercent}}%;"
                                    aria-valuenow="{{$completedQuizzesPercent}}" aria-valuemin="0"
                                    aria-valuemax="{{$quizzesCount}}">
                                  </div>
                                </div>
                              </div>
                              <hr>

                              @foreach($sec->quizzes as $qz)
                                @php
                                  $isQuizCompleted = $qz->isCompletedByCurrentUser();
                                @endphp


                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="position-relative d-flex align-items-center">
                                    <a href="{{route($quizAssesmentRouteName, ['quizId' => $qz->id])}}"
                                       class="mb-0 stretched-link position-static {{$isQuizCompleted ? 'text-success' : ''}}">
                                      <i class="fas fa-play me-0 {{$isQuizCompleted ? 'text-success' : ''}}"></i>
                                    </a>

                                    {{--                                    @dd($isQuizCompleted)--}}
                                    @if($isQuizCompleted)
                                      <span class="d-inline-block text-success ms-2 mb-0 h6 fw-light">
                                        {{$qz->name}} ({{$qz->type?->name}})
                                        <i class="bi bi-check2-all text-success"></i>
                                      </span>
                                    @else
                                      <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light">{{$qz->name}} ({{$qz->type?->name}})</span>
                                    @endif
                                  </div>
                                  {{--                                <p class="mb-0 text-truncate">2m 10s</p>--}}
                                </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <div class="modal fade" id="nextVideoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
       aria-labelledby="nextVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="nextVideoModalLabel">@lang('Watch next')</h1>
          <button id="modal-close-btn" type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if($nextSectionId && $nextClassId)
            <h3>{{$nextClass->getClassFullDescription()}}</h3>
          @else
            <h3>@lang('Congratulations you have finished watching all classes')</h3>
          @endif
        </div>
        <div class="modal-footer">
          @if($nextSectionId && $nextClassId)
            <a
              href="{{route($watchRouteName, ['courseId' => $courseId, 'sectionId' => $nextSectionId, 'classId' => $nextClassId])}}"
              class="btn btn-primary btn-sm">
              @lang('Go to next class')&nbsp;
              <span id="vCounter" class="mt-10"></span>
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>

</div>

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{asset('lms/assets/vendor/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lms/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lms/assets/vendor/choices/css/choices.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lms/assets/vendor/aos/aos.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lms/assets/vendor/plyr/plyr.css')}}"/>

  <!-- Theme CSS -->
  {{--  <link rel="stylesheet" type="text/css" href="{{asset('lms/assets/css/style.css')}}">--}}
@endpush

@if($courseId && $sectionId && $classId)
  @push('scripts')
    @if($currentClass?->use_link)
      {{--      <div id="vin-video-plyr" data-plyr-provider="{{$currentClass->video_provider}}"--}}
      {{--           data-plyr-embed-id="{{$currentClass->video_id}}">--}}
      {{--        {!! $currentClass->link !!}--}}
      {{--      </div>--}}

      <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;

        function onYouTubeIframeAPIReady() {
          player = new YT.Player('vin-yt-player', {
            height: '600',
            width: '100%',
            videoId: '{{VinStrHelper::extractYoutubeVideId($currentClass->link)}}',
            autoplay: true,
            playerVars: {
              'playsinline': 1
            },
            events: {
              'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
            }
          });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
          fetch('{{route('admin-lms-course-preview-video-start', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'});
          event.target.playVideo();
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;

        let secId = '{{$nextSectionId}}';
        let classId = '{{$nextClassId}}';
        const isCurrentPlaying = secId && classId;

        function onPlayerStateChange(event) {
          console.log('onPlayerStateChange: ', event.data);
          if (event.data == 0) {
            // -1 – unstarted
            // 0 – ended
            // 1 – playing
            // 2 – paused
            // 3 – buffering
            // 5 – video cued

            const myModal = new bootstrap.Modal('#nextVideoModal');
            myModal.show();

            fetch('{{route('admin-lms-course-preview-video-end', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'})
              .then((r) => {
                let secs = 10;
                if (isCurrentPlaying) {
                  interval = setInterval((v) => {
                    document.getElementById("vCounter").innerHTML = secs + 's';
                    secs -= 1;
                  }, 1000);

                  setTimeout(() => {
                    clearInterval(interval);
                    if (!canceledNext) {
                      window.location = '{{route($watchRouteName, ['courseId' => $courseId, 'sectionId' => $nextSectionId, 'classId' => $nextClassId])}}';
                    }
                  }, 10000);

                  $('#modal-close-btn').on('click', function (e) {
                    canceledNext = true;
                  });
                }
              });
          }

          // switch (player.getPlayerState()){
          //
          // }
          // if (event.data == YT.PlayerState.PLAYING && !done) {
          //   setTimeout(stopVideo, 6000);
          //   done = true;
          // }
        }

        function stopVideo() {
          player.stopVideo();
        }
      </script>

    @else
      <script src="{{asset('lms/assets/vendor/choices/js/choices.min.js')}}"></script>
      <script src="{{asset('lms/assets/vendor/aos/aos.js')}}"></script>
      <script src="{{asset('lms/assets/vendor/plyr/plyr.js')}}"></script>

      <!-- Template Functions -->
      <script src="{{asset('lms/assets/js/functions.js')}}"></script>

      <script>
        document.addEventListener('DOMContentLoaded', () => {
          // window.vinPlayer = new Plyr('#vin-video-plyr');
          const player = document.querySelector("#vin-video-plyr");
          let secId = '{{$nextSectionId}}';
          let classId = '{{$nextClassId}}';
          const isCurrentPlaying = secId && classId;
          var interval;
          var canceledNext = false;

          player.addEventListener('play', function (e) {
            // console.log('played sdfsdfsd')
            fetch('{{route('admin-lms-course-preview-video-start', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'});
          });

          player.addEventListener('ended', function (e) {
            const myModal = new bootstrap.Modal('#nextVideoModal');
            myModal.show();

            fetch('{{route('admin-lms-course-preview-video-end', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'})
              .then((r) => {
                let secs = 10;
                if (isCurrentPlaying) {
                  interval = setInterval((v) => {
                    document.getElementById("vCounter").innerHTML = secs + 's';
                    secs -= 1;
                  }, 1000);

                  setTimeout(() => {
                    clearInterval(interval);
                    if (!canceledNext) {
                      window.location = '{{route($watchRouteName, ['courseId' => $courseId, 'sectionId' => $nextSectionId, 'classId' => $nextClassId])}}';
                    }
                  }, 10000);

                  $('#modal-close-btn').on('click', function (e) {
                    canceledNext = true;
                  });
                }
              });
          });

          // player.addEventListener('timeupdate', function(e) {
          //   console.log(e); // if we need to log how long it was watched
          // });

          if (isCurrentPlaying) {
            player.play();
          }
        });
      </script>
    @endif
  @endpush
@endif

@push('scripts')
  @vite('resources/js/vin-editor-js.js')
  @if($currentClass)
    @if($currentClass->staticPage->isEditorJs())
      <script>
        document.addEventListener('livewire:initialized', () => {
          const content = JSON.parse({!! json_encode($currentCourse->staticPage->content) !!});
          initEditorJs('vineditorjs', true, '{{route('admin-upload-files-editorjs', ['public' => $currentCourse->staticPage->public_access])}}', '{{csrf_token()}}', content);
        });
      </script>
    @endif
  @endif
@endpush

@if($currentClass)
  @if($currentClass->staticPage->isEditorJs())
    <script>
      document.addEventListener('livewire:initialized', () => {
        const contentClass = JSON.parse({!! json_encode($currentClass->staticPage->content) !!});
        initEditorJs('vineditorjs-class', true, '{{route('admin-upload-files-editorjs', ['public' => $currentClass->staticPage->public_access])}}', '{{csrf_token()}}', contentClass);
      });
    </script>
  @endif
@endif
