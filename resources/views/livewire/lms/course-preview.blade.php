<div>
  <main>

    <section class="py-0 pb-lg-5">
      <div class="container">
        <div class="row g-3">
          <div class="col-12">
            <div class="video-player rounded-3">
              @if($currentClass?->use_link)
                <div id="vin-video-plyr" data-plyr-provider="{{$currentClass->video_provider}}"
                     data-plyr-embed-id="{{VinStrHelper::extractYoutubeVideId($currentClass->link)}}"></div>
              @else
                @if($currentClass?->video)
                  <video id="vin-video-plyr" crossorigin="anonymous" playsinline
                         data-plyr-config='{ "settings": [""] }'>
                    <source src="{{$currentClass?->videoUrl()}}" type="video/mp4">
                  </video>
                @else
                  @script
                  <script>
                    fetch('{{route('admin-lms-course-preview-video-start', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'});
                    fetch('{{route('admin-lms-course-preview-video-end', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'});
                  </script>
                  @endscript
                @endif
              @endif
            </div>

            @if($currentClass?->hasVideo())
              <br>
              <span>@lang('This class ends in'): <span id="count-down" class="badge text-bg-info"></span></span>
            @endif
          </div>
          <div class="col-12 d-lg-none">
            <button class="btn btn-primary mb-3" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
              <i class="bi bi-camera-video me-1"></i> @lang('Playlist')
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-0">
      <div class="container">
        <div class="row g-lg-5">
          <div class="col-lg-8">

            <div class="row g-4">
              <div class="col-12">

                <h1>{{$currentCourse->name}}</h1>
                @if($currentClass && $currentSection)
                  <h3 class="text-dark">{{$currentSection->name.' - '.$currentClass->name}}</h3>
                  <small class="text-primary">
                    {{$currentCourse->getCompletedFullDescriptionCurrentUser()}}
                  </small>
                  @php
                    $stats = $currentCourse->getCompletedStatistics(\Illuminate\Support\Facades\Auth::id());
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
                  <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                      class="fas fa-user-graduate text-success me-2"></i>{{$currentCourse->enrolledCount()}} @lang('Enrolled')
                  </li>
                  <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                      class="fas fa-signal text-success me-2"></i>{{$currentCourse->level ? $currentCourse->level->description: __('All levels')}}
                  </li>
                  @if($currentClass->file)
                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="bi bi-download text-warning"></i>
                      <a href="{{VinLiveWireHelper::downloadUrlPresigned($currentClass->file, false)}}"
                         class="d-inline-block ms-2 mb-0 h6" target="_blank">@lang('Download File')</a>
                    </li>
                  @endif

                </ul>
              </div>

              <div class="separator my-5"></div>

              <div class="col-12">
                <div class="d-sm-flex justify-content-sm-between align-items-center">
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
                    <div class="dropdown ms-2">
                    </div>
                  </div>
                </div>
              </div>
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
                </ul>

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
                    @if($currentClass->staticPage->isSummerNote())
                      {!! $currentClass->staticPage->content !!}
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
              </div>
            </div>
          </div>

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
                    @foreach($currentCourse->sectionsActive->sortBy('sort_order')->values() as $sec)
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

                              @php
                                $prevHasNoVideo = false;
                                $prevClId = null;
                              @endphp

                              @foreach($sec->classes->sortBy('sort_order')->values() as $cl)
                                @php
                                  $isClasCompleted = $cl->isCompletedByCurrentUser();
                                  $isPlaying = $cl->id == $classId;
                                  $isPlayingClass = $isPlaying ? 'text-primary' : ($isClasCompleted ? 'text-success' : '');
                                  $isBlockNext = ($currentCourse->block_next_class && ($cl->sort_order >= $nextClass?->sort_order));
                                  $isCurrentSection = $cl->course_section_id == $currentSection?->id;
                                  $nextClassHasNoVideo = ((!$nextClass?->hasVideo()) && $nextClass?->id == $cl->id);
                                  $enableLink = ((!$isBlockNext) && ($isCurrentSection)) || ($isClasCompleted) || ($nextClassHasNoVideo || ($prevHasNoVideo && $prevClId == $currentClass?->id));
                                @endphp
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="position-relative d-flex align-items-center">
                                    {{--                                    @dump($isBlockNext, $isClasCompleted)--}}
                                    @if($enableLink)
                                      <a
                                        href="{{route($watchRouteName, ['courseId' => $currentCourse->id, 'sectionId' => $sec->id, 'classId' => $cl->id])}}"
                                        class="mb-0 stretched-link position-static">
                                        <i class="fas fa-play me-0 {{$isPlayingClass}}"></i>
                                      </a>
                                    @endif

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
                                @php
                                  $prevHasNoVideo = (!$cl->hasVideo());
                                  $prevClId = $cl->id;
                                @endphp
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>

                  <h3 class="text-secondary mt-5">@lang('Quizzes')</h3>
                  <div class="accordion accordion-icon accordion-bg-light" id="accordionQuizzes">
                    @foreach($currentCourse->sectionsActive as $sec)
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
                                  $enableQuizLink = ($currentCourse->block_next_class && $currentCourse->completedAllClasses(Auth::id())) || $isQuizCompleted;
                                @endphp

                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="position-relative d-flex align-items-center">
                                    @if($enableQuizLink)
                                      <a href="{{route($quizAssesmentRouteName, ['quizId' => $qz->id])}}"
                                         class="mb-0 stretched-link position-static {{$isQuizCompleted ? 'text-success' : ''}}">
                                        <i class="fas fa-play me-0 {{$isQuizCompleted ? 'text-success' : ''}}"></i>
                                      </a>
                                    @endif

                                    @if($isQuizCompleted)
                                      <span class="d-inline-block text-success ms-2 mb-0 h6 fw-light">
                                        {{$qz->name}} ({{$qz->type?->name}})
                                        <i class="bi bi-check2-all text-success"></i>
                                      </span>
                                    @else
                                      <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light">{{$qz->name}} ({{$qz->type?->name}})</span>
                                    @endif
                                  </div>
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
          {{--          <button id="modal-close-btn" type="button" class="btn-close" data-bs-dismiss="modal"--}}
          {{--                  aria-label="Close"></button>--}}
        </div>
        <div class="modal-body">
          @if($nextSectionId && $nextClassId)
            <h3>{{$nextClass->getClassFullDescription()}}</h3>
          @else
            <h3>@lang('Congratulations you have finished watching all classes')</h3>
            <div class="hstack gap-3">
              <div class="ms-auto"></div>
              <a class="btn btn-primary" href="javascript:window.location.reload(true)">@lang('Ok')</a>
              <div class="ms-auto"></div>
            </div>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.min.css">
@endpush

@if($courseId && $sectionId && $classId)
  @push('scripts')
    <script src="{{asset('lms/assets/vendor/choices/js/choices.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.min.js"></script>

    <script>
      const secondsToMinSecPadded = (time) => {
        const minutes = `${Math.floor(time / 60)}`.padStart(2, "0");
        const seconds = `${time - minutes * 60}`.padStart(2, "0");
        return `${minutes}:${seconds}`;
      };


      document.addEventListener('DOMContentLoaded', () => {
        let secId = '{{$nextSectionId}}';
        let classId = '{{$nextClassId}}';
        const isCurrentPlaying = secId && classId;
        var interval;
        var canceledNext = false;
        let isBlockSeek = '{{$currentCourse->block_next_class}}';
        let ishideProgress = '{{$currentClass->hide_video_progress}}';
        let videoControls = ['play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'];
        if(ishideProgress == 1){
          videoControls = ['play', 'current-time', 'mute', 'volume', 'fullscreen'];
        }

        var timeTracking = {
          watchedTime: 0,
          currentTime: 0
        };
        var lastUpdated = 'currentTime';

        const player = new Plyr('#vin-video-plyr', {
          controls: videoControls,
          autoplay: true
        });

        player.on('play', (e) => {
          fetch('{{route('admin-lms-course-preview-video-start', ['courseId' => $courseId, 'sectionId' => $sectionId, 'classId' => $classId])}}', {method: 'GET'});
        });

        player.on('ended', (e) => {
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

        player.on('timeupdate', () => {
          const timeFmt = secondsToMinSecPadded(parseInt(player.duration - player.currentTime));
          $('#count-down').text(timeFmt);
        });

        if (isCurrentPlaying) {
          player.play();
        }
      });
    </script>
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
