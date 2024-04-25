<div>
  <form id="kt_account_profile_details_form" class="form" wire:submit.prevent="submit">
  {{-- <x-field-separator label="{{__('Main')}}"/>--}}
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <x-text-field label="Course Name" name="course.name" required="true"/>
      </div>

      <div class="col-sm-12 col-md-12">
        <x-text-field label="Description" name="course.description" required="false"/>
      </div>

      <div class="col-sm-12 col-md-4">
        <x-date-field label="Start date" name="course.start_date" required="false"/>
      </div>
      <div class="col-sm-12 col-md-4">
        <x-date-field label="End date" name="course.end_date" required="false"/>
      </div>
      {{-- 
      <div class="col-sm-12 col-md-4">
        <x-text-field label="Language" name="course.language" required="false"/>
      </div>
      --}}
      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Type" name="course.course_type_id" required="false"
                               :items="$courseTypes"/>
      </div>

      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Category" name="course.course_category_id" required="false"
                               :items="$courseCategories"/>
      </div>
      {{-- 
      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Level" name="course.course_level_id" required="false"
                               :items="$courseLevels"/>
      </div>
      --}}
      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Has Certificate" name="course.certificate" required="false"
                               :items="$certificates"/>
      </div>
      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Grade Map Type" name="course.grade_map_type" required="false" :items="$gradeMaptypes"/>
      </div>

      @if(Auth::user()->super_admin)
        <div class="col-sm-12 col-md-4">
          <x-select-simple-field label="linked Product" name="course.product_id" required="false" :items="$products"/>
        </div>
      @endif

      <div class="col-sm-12 col-md-4">
        <x-decimal-field label="Price" name="productPrice" required="true"/>
      </div>
      
      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Instructor" name="course.user_instructor_id" required="false"
                               :items="$instructors"/>
      </div>

      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Certificate" name="course.course_certificate_id" required="false"
                               :items="$certificateList"/>
      </div>

      {{--    <div class="col">--}}
      {{--      <x-text-field label="Name internal" name="course.name_internal" required="false"/>--}}
      {{--    </div>--}}

      <div class="col-sm-12 col-md-4">
        <x-checkbox-field label="Deactivate this course" name="course.inactive" required="false"/>
      </div>
    </div>
    <div class="page-box-certificate">
      <div label="{{__('Certificate Fields')}}"/>
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <x-text-field label="Name Alt" name="course.name_alt" required="false"/>
        </div>
        <div class="col-sm-12 col-md-3">
          <x-text-field label="Code" name="course.code" required="false"/>
        </div>

        <div class="col-sm-12 col-md-3">
          <x-text-field label="Duration" name="course.duration" required="false"/>
        </div>

        <div class="col-sm-12 col-md-3">
          <x-text-field label="Valid For" name="course.valid_for" required="false"/>
        </div>

        <div class="col-sm-12 col-md-3">
          <x-text-field label="Location" name="course.location" required="false"/>
        </div>
          <div class="row grouping">
            <div class="col-sm-12 col-md-12">
              <x-text-area-field label="Technical Reference" name="course.technical_ref" required="false" rows="1"/>
            </div>

            <div class="col-sm-12 col-md-12">
              <x-text-area-field label="Technical Reference Alt" name="course.technical_ref_alt" required="false" rows="1"/>
            </div>
          </div>
          <div class="row grouping">
            <div class="col-sm-12 col-md-12">
              <x-text-area-field label="Program Content" name="course.program_content" required="false" rows="1"/>
            </div>

            <div class="col-sm-12 col-md-12">
              <x-text-area-field label="Program Content Alt" name="course.program_content_alt" required="false" rows="1"/>
            </div>
          </div>

      </div>
    </div>
    <x-field-separator label="{{__('Uploads')}}"/>
    <div class="row">
      <div class="col">
        <x-file-field name="picture" label="Picture" :pictureTemp="$picture" value="{{$course->picture}}" accept="image/*"/>
      </div>
      {{-- 
      <div class="col">
        <x-file-field name="video" label="Video" :pictureTemp="$video" value="{{$course->video}}" accept="video/mp4,video/x-m4v,video/*"/>
      </div>

      <div class="col">
        <x-file-field name="file" label="File" :pictureTemp="$file" value="{{$course->file}}"/>
      </div>

      <div class="col">
        <x-file-field name="document" label="Document" :pictureTemp="$document" value="{{$course->document}}"/>
      </div>
      --}}
    </div>

    <br>
    @if($course->id)
      <div class="page-box-content">
        <x-field-separator label="{{__('General content about the course')}}"/>
        <div class="row">
          <div class="col">
            <a class="btn btn-primary btn-sm" href="{{route('admin-page-editor', ['id' => $course->staticPage->id])}}" target="_blank">@lang('Edit Content')</a>
          </div>
        </div>
        <br>
      </div>
    @endif
    {{--            <x-rich-text-field label="Content" name="course.content"/>--}}

    <x-field-separator label=""/>
    <div class="d-flex justify-content-end py-6">
      @canany([COURSES_CREATE_PERM, COURSES_UPDATE_PERM])
        <x-submit-field/>
      @endcanany
    </div>

    <x-submit-feedback/>
  </form>

{{--  <div class="accordion" id="accordionExample" wire:ignore.self>--}}
{{--    <div class="accordion-item">--}}
{{--      <h2 class="accordion-header">--}}
{{--        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"--}}
{{--                aria-expanded="true" aria-controls="collapseOne" wire:ignore.self>--}}
{{--          @lang('Main')--}}
{{--        </button>--}}
{{--      </h2>--}}
{{--      <div id="collapseOne" class="accordion-collapse collapse show" wire:ignore.self>--}}
{{--        <div class="accordion-body">--}}
{{--          --}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    @isset($course->id)--}}
{{--      <div class="accordion-item">--}}
{{--        <h2 class="accordion-header">--}}
{{--          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                  data-bs-target="#collapseTwo"--}}
{{--                  aria-expanded="false" aria-controls="collapseTwo" wire:ignore.self>--}}
{{--            @lang('Sections')--}}
{{--          </button>--}}
{{--        </h2>--}}
{{--        <div id="collapseTwo" class="accordion-collapse collapse" wire:ignore.self>--}}
{{--          <div class="accordion-body">--}}
{{--            <div class="row">--}}
{{--              <div class="col">--}}
{{--                <button type="button" class="btn btn-primary btn-sm" wire:click="addSection" wire:key="{{uniqid()}}"><i--}}
{{--                    class="bi bi-plus"></i> {{__('Add Section')}}--}}
{{--                </button>--}}


{{--              </div>--}}
{{--              <div class="col">--}}
{{--                <button class="btn btn-link btn-sm" wire:click.prevent="refreshSections">--}}
{{--                  <i class="bi bi-arrow-clockwise"></i> {{__('Refresh')}}--}}
{{--                </button>--}}
{{--              </div>--}}
{{--              <div class="col">--}}
{{--                <div wire:loading>--}}
{{--                  <div class="spinner-grow spinner-grow-sm" role="status">--}}
{{--                    <span class="visually-hidden">Loading...</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            --}}{{--  <p><button class="btn btn-link" ><small>Refresh</small></button></p>--}}
{{--            <div class="accordion" id="accordionSections"  wire:ignore.self>--}}
{{--              @foreach($sections as $sec)--}}
{{--                <div class="accordion-item text-dark-1 -dark-bg-dark-1">--}}
{{--                  <h2 class="accordion-header">--}}
{{--                    <button class="accordion-button collapsed text-dark-1 -dark-bg-dark-1" type="button"--}}
{{--                            data-bs-toggle="collapse"--}}
{{--                            data-bs-target="#collapse-section-{{$sec->id.'-'.$loop->index}}" aria-expanded="false"--}}
{{--                            aria-controls="collapse-section-{{$sec->id.'-'.$loop->index}}" wire:ignore.self>--}}
{{--                      @lang('Section') - {{$loop->index + 1}} | {{$sec->name}}--}}
{{--                    </button>--}}
{{--                  </h2>--}}
{{--                  <div id="collapse-section-{{$sec->id.'-'.$loop->index}}" class="accordion-collapse collapse"--}}
{{--                       data-bs-parent="#accordionSections" wire:ignore.self>--}}
{{--                    <div class="accordion-body">--}}

{{--                      <div class="row">--}}
{{--                        <div class="col">--}}
{{--                          <x-text-field label="Name" name="sections.{{$loop->index}}.name" required="true"/>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                          <x-text-field label="Description" name="sections.{{$loop->index}}.description"--}}
{{--                                        required="false"/>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                          <button class="btn btn-primary btn-sm" type="button"--}}
{{--                                  wire:click="refreshData()" style="margin-top: 32px"--}}
{{--                                  wire:loading.attr="disabled" wire:key="save-sec{{$sec->id}}">@lang('Save Section')</button>--}}
{{--                        </div>--}}
{{--                      </div>--}}

{{--                      <div class="col-sm-12 col-md-4">--}}
{{--                        <div class="hstack gap-3" style="margin-top: 30px">--}}

{{--                          --}}{{----}}{{--                          <button class="btn btn-link" wire:click.prevent="addSection"><i--}}
{{--                          --}}{{----}}{{--                              class="bi bi-plus"></i> {{__('Add')}}--}}
{{--                          --}}{{----}}{{--                          </button>--}}





{{--                          @if(sizeof($sections) > 1)--}}
{{--                            <button class="btn btn-link text-danger" wire:click.prevent="removeSection({{$sec->id}})" wire:key="remove-sec{{$sec->id}}"><i--}}
{{--                                class="bi bi-trash"></i>--}}
{{--                              {{__('Remove Section')}}--}}
{{--                            </button>--}}
{{--                          @endif--}}

{{--                          <x-modal-button name="remove-btn-sec-{{$sec->id}}"--}}
{{--                                          refreshOnClose="0" btnIcon="bi bi-trash"--}}
{{--                                          btnClass="btn btn-danger btn-sm"--}}
{{--                                          title="{{$sec->name}}" btnTitle="{{__('Remove Section')}}"--}}
{{--                                          wire:key="remove-btn-rem-sec-{{$sec->id}}"--}}
{{--                                          showBtnConfirm="1" showBtnConfirmTitle="{{__('Yes')}}"--}}
{{--                                          confirmEventName="removeSection({{$sec->id}})" btnConfirmClass="btn btn-danger btn-sm"--}}
{{--                                          onCloseClick="refreshSections()"--}}
{{--                          >--}}
{{--                            <div class="row">--}}
{{--                              <p>@lang('Would you like to remove the record: :name', ['name' =>  $sec->name])</p>--}}
{{--                            </div>--}}
{{--                          </x-modal-button>--}}

{{--                          <x-modal-button name="section-class-modal{{$sec->id.'-'.$loop->index}}" refreshOnClose="0"--}}
{{--                                          btnClass="btn btn-success btn-sm"--}}
{{--                                          title="{{__('New Class')}}" btnTitle="+{{__('Add Class')}}"--}}
{{--                                          onCloseClick="refreshSections()"--}}
{{--                          >--}}
{{--                            <div class="row">--}}
{{--                              <livewire:lms.course-class-form sectionId="{{$sec->id}}" redirectOnSave="0" :objId="0"--}}
{{--                                                              wire:key="sec-{{$sec->id.'-'.$loop->index}}-class"/>--}}
{{--                            </div>--}}
{{--                          </x-modal-button>--}}

{{--                          <x-modal-button name="section-quiz-modal{{$sec->id.'-'.$loop->index}}" refreshOnClose="0"--}}
{{--                                          btnClass="btn btn-primary btn-sm"--}}
{{--                                          title="{{__('New Quiz')}}" btnTitle="+{{__('Add Quiz')}}"--}}
{{--                                          onCloseClick="refreshSections()"--}}
{{--                          >--}}
{{--                            <div class="row">--}}
{{--                              <livewire:lms.course-quiz-form sectionId="{{$sec->id}}" redirectOnSave="0" :objId="0"--}}
{{--                                                             wire:key="sec-{{$sec->id.'-'.$loop->index}}-quiz"/>--}}
{{--                            </div>--}}
{{--                          </x-modal-button>--}}

{{--                          --}}{{--                          <a class="btn btn-link text-primary"--}}
{{--                          --}}{{--                             href="{{url('/admin/lms/courseclass/create?sectionId='.$sec->id)}}"--}}
{{--                          --}}{{--                             target="_blank"><i class="bi bi-plus"></i> {{__('Add Class')}}</a>--}}
{{--                          --}}{{--                          <a class="btn btn-link text-primary"--}}
{{--                          --}}{{--                             href="{{url('/admin/lms/coursequiz/create?sectionId='.$sec->id)}}"--}}
{{--                          --}}{{--                             target="_blank"><i class="bi bi-plus"></i> {{__('Add Quiz')}}</a>--}}


{{--                        </div>--}}
{{--                      </div>--}}


{{--                      @if(count($sec->classes) > 0)--}}
{{--                        <div class="col-sm-12 bg-white rounded-16" style="margin-top: 20px">--}}
{{--                          <div class="accordion" id="accordionFlushExample{{$sec->id}}">--}}
{{--                            <div class="accordion-item">--}}
{{--                              <h2 class="accordion-header" id="flush-headingOne{{$sec->id}}">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#flush-collapseOne{{$sec->id}}" aria-expanded="false"--}}
{{--                                        aria-controls="flush-collapseOne{{$sec->id}}">--}}
{{--                                  <span class="text-primary">{{__('Classes')}}</span>--}}
{{--                                </button>--}}
{{--                              </h2>--}}
{{--                              <div id="flush-collapseOne{{$sec->id}}" class="accordion-collapse collapse show"--}}
{{--                                   aria-labelledby="flush-headingOne"--}}
{{--                                   data-bs-parent="#accordionFlushExample{{$sec->id}}">--}}
{{--                                <div class="accordion-body">--}}
{{--                                  <x-modal-button name="section-class-modal{{$sec->id.'-'.$loop->index.'class'}}" refreshOnClose="0"--}}
{{--                                                  btnClass="btn btn-success btn-sm"--}}
{{--                                                  title="{{__('New Class')}}" btnTitle="+{{__('Add Class')}}"--}}
{{--                                                  onCloseClick="refreshSections()"--}}

{{--                                  >--}}
{{--                                    <div class="row">--}}
{{--                                      <livewire:lms.course-class-form sectionId="{{$sec->id}}" redirectOnSave="0" :objId="0"--}}
{{--                                                                      wire:key="sec-{{$sec->id.'-'.$loop->index.'class'}}-class"/>--}}
{{--                                    </div>--}}
{{--                                  </x-modal-button>--}}

{{--                                  <br>--}}
{{--                                  <div class="table-responsive">--}}
{{--                                    <table class="table table-sm table-bordered">--}}
{{--                                      <thead>--}}
{{--                                      <tr>--}}
{{--                                        <th scope="col">{{__('Edit Class')}}</th>--}}
{{--                                        <th scope="col">{{__('Remove')}}</th>--}}
{{--                                        --}}{{--                        <th scope="col">Sort Order</th>--}}
{{--                                        --}}{{--                          <th scope="col">Customer</th>--}}
{{--                                        --}}{{--                          <th scope="col">Identifier</th>--}}
{{--                                      </tr>--}}
{{--                                      </thead>--}}
{{--                                      <tbody>--}}

{{--                                      @foreach($sec->classes->sortBy('sort_order')->values() as $class)--}}
{{--                                        <tr wire:key="trclass-{{$class->id}}">--}}

{{--                                          <td wire:key="tdclassdesc-{{$class->id}}">--}}
{{--                                            <x-modal-button name="section-class-modal-existing{{$class->id}}"--}}
{{--                                                            refreshOnClose="0"--}}
{{--                                                            btnClass="btn btn-link text-success"--}}
{{--                                                            title="{{$class->name}}" btnTitle="{{$class->name}}"--}}
{{--                                                            wire:key="modal-section-{{$sec->id}}-class-{{$class->id}}"--}}
{{--                                                            onCloseClick="refreshSections()"--}}
{{--                                            >--}}
{{--                                              <div class="row">--}}
{{--                                                <livewire:lms.course-class-form sectionId="{{$sec->id}}" :courseClass="$class" redirectOnSave="0" wire:key="sec-class-existing{{$class->id}}-class" :objId="$class->id"/>--}}
{{--                                              </div>--}}
{{--                                            </x-modal-button>--}}
{{--                                          </td>--}}
{{--                                          <td wire:key="tdclassdel-{{$class->id}}">--}}
{{--                                            <x-modal-button name="remove-btn-class-{{$class->id}}"--}}
{{--                                                            refreshOnClose="0" btnIcon="bi bi-trash"--}}
{{--                                                            btnClass="btn btn-link text-danger"--}}
{{--                                                            title="{{$class->name}}" btnTitle="{{__('Remove Class')}}"--}}
{{--                                                            wire:key="remove-btn-class-{{$sec->id}}-{{$class->id}}"--}}
{{--                                                            showBtnConfirm="1" showBtnConfirmTitle="{{__('Yes')}}"--}}
{{--                                                            confirmEventName="removeClass({{$class->id}})" btnConfirmClass="btn btn-danger btn-sm"--}}
{{--                                                            onCloseClick="refreshSections()"--}}
{{--                                            >--}}
{{--                                              <div class="row">--}}
{{--                                                <p>@lang('Would you like to remove the record: :name', ['name' =>  $class->name])</p>--}}
{{--                                              </div>--}}
{{--                                            </x-modal-button>--}}
{{--                                          </td>--}}
{{--                                          --}}{{--                          <td>--}}
{{--                                          --}}{{--                            <button class="btn btn-link" wire:click.prevent="moveClassOrderUp({{$class->id}})"><i class="bi bi-arrow-up"></i></button>--}}
{{--                                          --}}{{--                            <button class="btn btn-link" wire:click.prevent="moveClassOrderDown({{$class->id}})"><i class="bi bi-arrow-down"></i></button>--}}
{{--                                          --}}{{--                            <input class="form-control" type="number" wire:model="order" wire:blur="updateClassSortOrder()"/>--}}
{{--                                          --}}{{--                          </td>--}}
{{--                                          --}}{{--                          <td>{{$receivable->payment_customer}}</td>--}}
{{--                                          --}}{{--                          <td>{{$receivable->payment_identifier}}</td>--}}
{{--                                        </tr>--}}
{{--                                      @endforeach--}}

{{--                                      </tbody>--}}
{{--                                    </table>--}}
{{--                                  </div>--}}

{{--                                </div>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      @endif--}}

{{--                      @if(count($sec->quizzes) > 0)--}}
{{--                        <div class="col-sm-12 bg-white rounded-16" style="margin-top: 20px">--}}
{{--                          <div class="accordion" id="accordionFlushExampleQuiz{{$sec->id}}">--}}
{{--                            <div class="accordion-item">--}}
{{--                              <h2 class="accordion-header" id="flush-headingOneQuiz{{$sec->id}}">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#flush-collapseOneQuiz{{$sec->id}}" aria-expanded="false"--}}
{{--                                        aria-controls="flush-collapseOneQuiz{{$sec->id}}">--}}
{{--                                  <span class="text-primary">{{__('Quizzes')}}</span>--}}
{{--                                </button>--}}
{{--                              </h2>--}}
{{--                              <div id="flush-collapseOneQuiz{{$sec->id}}" class="accordion-collapse collapse show"--}}
{{--                                   aria-labelledby="flush-headingOneQuiz"--}}
{{--                                   data-bs-parent="#accordionFlushExampleQuiz{{$sec->id}}">--}}
{{--                                <div class="accordion-body">--}}
{{--                                  <x-modal-button name="section-quiz-modal{{$sec->id.'-'.$loop->index.'quiz'}}" refreshOnClose="0"--}}
{{--                                                  btnClass="btn btn-primary btn-sm"--}}
{{--                                                  title="{{__('New Quiz')}}" btnTitle="+{{__('Add Quiz')}}"--}}
{{--                                                  onCloseClick="refreshSections()"--}}
{{--                                  >--}}
{{--                                    <div class="row">--}}
{{--                                      <livewire:lms.course-quiz-form sectionId="{{$sec->id}}" redirectOnSave="0" :objId="0"--}}
{{--                                                                     wire:key="sec-{{$sec->id.'-'.$loop->index.'quiz'}}-quiz"/>--}}
{{--                                    </div>--}}
{{--                                  </x-modal-button>--}}
{{--                                  <br>--}}
{{--                                  <div class="table-responsive">--}}
{{--                                    <table class="table table-sm table-bordered">--}}
{{--                                      <thead>--}}
{{--                                      <tr>--}}
{{--                                        <th scope="col">{{__('Edit Quiz')}}</th>--}}
{{--                                        <th scope="col">{{__('Question Count')}}</th>--}}
{{--                                        <th scope="col">{{__('Remove Quiz')}}</th>--}}
{{--                                      </tr>--}}
{{--                                      </thead>--}}
{{--                                      <tbody>--}}
{{--                                      @foreach($sec->quizzes->sortBy('sort_order')->values() as $quiz)--}}
{{--                                        <tr wire:key="trquiz-{{$quiz->id}}">--}}

{{--                                          <td wire:key="tdquizdesc-{{$quiz->id}}">--}}
{{--                                            <x-modal-button name="section-quiz-modal-existing{{$quiz->id}}"--}}
{{--                                                            refreshOnClose="0"--}}
{{--                                                            btnClass="btn btn-link text-primary"--}}
{{--                                                            title="{{$quiz->name}}" btnTitle="{{$quiz->name}}"--}}
{{--                                                            wire:key="modal-section-{{$sec->id}}-quiz-{{$quiz->id}}"--}}
{{--                                                            onCloseClick="refreshSections()"--}}
{{--                                            >--}}
{{--                                              <div class="row">--}}
{{--                                                <livewire:lms.course-quiz-form sectionId="{{$sec->id}}" :courseQuiz="$quiz" redirectOnSave="0" wire:key="sec-existing{{$quiz->id}}-quiz" :objId="$quiz->id"/>--}}
{{--                                              </div>--}}
{{--                                            </x-modal-button>--}}
{{--                                          </td>--}}
{{--                                          <td wire:key="tdclasscount-{{$quiz->id}}">--}}
{{--                                            {{$quiz->questions->count()}}--}}
{{--                                          </td>--}}
{{--                                          <td wire:key="tdclassdel-{{$quiz->id}}">--}}
{{--                                            <x-modal-button name="remove-btn-quiz-{{$quiz->id}}"--}}
{{--                                                            refreshOnClose="0" btnIcon="bi bi-trash"--}}
{{--                                                            btnClass="btn btn-link text-danger"--}}
{{--                                                            title="{{$quiz->name}}" btnTitle="{{__('Remove Quiz')}}"--}}
{{--                                                            wire:key="remove-btn-quiz-{{$sec->id}}-{{$quiz->id}}"--}}
{{--                                                            showBtnConfirm="1" showBtnConfirmTitle="{{__('Yes')}}"--}}
{{--                                                            confirmEventName="removeQuiz({{$quiz->id}})" btnConfirmClass="btn btn-danger btn-sm"--}}
{{--                                            >--}}
{{--                                              <div class="row">--}}
{{--                                                <p>@lang('Would you like to remove the record: :name', ['name' =>  $quiz->name])</p>--}}
{{--                                              </div>--}}
{{--                                            </x-modal-button>--}}

{{--                                          </td>--}}
{{--                                        </tr>--}}
{{--                                      @endforeach--}}

{{--                                      </tbody>--}}
{{--                                    </table>--}}
{{--                                  </div>--}}

{{--                                </div>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      @endif--}}

{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}

{{--                --}}{{--                <div class="col-sm-12">--}}
{{--                --}}{{--                  <hr class="text-primary"/>--}}
{{--                --}}{{--                </div>--}}
{{--                --}}{{--      </div>--}}

{{--              @endforeach--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="accordion-item">--}}
{{--        <h2 class="accordion-header">--}}
{{--          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" wire:ignore.self>--}}
{{--            @lang('Signup Students')--}}
{{--          </button>--}}
{{--        </h2>--}}
{{--        <div id="collapseThree" class="accordion-collapse collapse" wire:ignore.self>--}}
{{--          <div class="accordion-body">--}}
{{--            <div class="row">--}}
{{--              <p class="h6">{{__('Students')}}--}}
{{--                --}}{{--      <span>--}}
{{--                --}}{{--        <button class="btn btn-link btn-sm" wire:click.prevent="refreshSections">--}}
{{--                --}}{{--          <i class="bi bi-arrow-clockwise"></i> Refresh</button>--}}
{{--                --}}{{--      </span>--}}
{{--              </p>--}}


{{--              <div class="col-6">--}}
{{--                <div class="card card-bordered" style="min-height: 300px">--}}
{{--                  <div class="card-body">--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">{{__('Enroll User Manually')}}</h6>--}}
{{--                    <div class="row">--}}
{{--                      <div class="col-9">--}}
{{--                        <x-select-simple-field label="Student" name="userAddId" required="true" :items="$users"/>--}}
{{--                      </div>--}}

{{--                      <div class="col">--}}
{{--                        <button type="button" class="btn btn-secondary btn-sm" style="margin-top: 32px"--}}
{{--                                wire:click="enrollUserManually">--}}
{{--                          {{__('Add User')}}--}}
{{--                        </button>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="col-6">--}}
{{--                <div class="card card-bordered" style="min-height: 300px">--}}
{{--                  <div class="card-body">--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">{{__('Enroll User Import')}}</h6>--}}
{{--                    <div class="row">--}}
{{--                      --}}{{--            @include('components.form.FileUploadInput', ['name' => 'courseUserImportFile', 'label' => __('Import File'), 'col' => 6, 'nameVariable' => $courseUserImportFile, 'value' => $courseUserImportFile, 'isStoragePrivate' => true])--}}
{{--                      <div class="col">--}}
{{--                        <x-file-field name="courseUserImportFile" label="Import File"--}}
{{--                                      :pictureTemp="$courseUserImportFile"--}}
{{--                                      value="{{$courseUserImportFile}}" isPublic="0"/>--}}
{{--                      </div>--}}

{{--                      <div class="col">--}}
{{--                        <button type="button" class="btn btn-secondary btn-sm" style="margin-top: 32px"--}}
{{--                                wire:click="enrollUserImport">--}}
{{--                          {{__('Import')}}--}}
{{--                        </button>--}}
{{--                      </div>--}}
{{--                      <div class="col" style="margin-top: 35px">--}}
{{--                        <a href="{{url(asset('import-templates/course-users-import.csv'))}}" class="card-link">--}}
{{--                          {{__('Download Template')}}</a>--}}
{{--                      </div>--}}

{{--                      <x-submit-feedback/>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--            <h6>@lang('Students Enrolled')</h6>--}}
{{--            <div class="table-responsive" style="max-height: 20rem; overflow: auto">--}}
{{--              <table class="table table-sm table-bordered">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                  <th scope="col">{{__('Name')}}</th>--}}
{{--                  <th scope="col">{{__('Remove Student')}}</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($this->course->students->sortBy('name')->values() as $student)--}}
{{--                  <tr wire:key="trstudent-{{$student->id}}">--}}

{{--                    <td wire:key="tdstudentname-{{$student->id}}">--}}
{{--                      <a class="btn btn-link text-primary"--}}
{{--                         href="{{route('admin-user-profile', ['user' => $student->id])}}" target="_blank"><i--}}
{{--                          class="bi bi-edit"></i> {{$student->name}}</a>--}}
{{--                    </td>--}}
{{--                    <td wire:key="tdstudentdel-{{$student->id}}">--}}
{{--                      <button class="btn btn-link text-danger" wire:click.prevent="removeUser({{$student->pivot->id}})"--}}
{{--                              wire:key="del-student-{{$student->id}}" >--}}
{{--                        <i--}}
{{--                          class="bi bi-trash"></i>--}}
{{--                        {{__('Remove')}}--}}
{{--                      </button>--}}
{{--                    </td>--}}
{{--                  </tr>--}}
{{--                @endforeach--}}

{{--                </tbody>--}}
{{--              </table>--}}
{{--              <p>{{__('Students count')}}: {{$course->students->count()}}</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    @endisset--}}
{{--  </div>--}}


</div>

