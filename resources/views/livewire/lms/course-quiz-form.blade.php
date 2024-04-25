<form id="kt_account_profile_details_form" class="form" wire:submit.prevent="submit">
{{--    <x-field-separator label="{{__('Main')}}"/>--}}
  @if((!$sectionId) || ($showSectionField))
  <div class="page-box-select-section-in-class">
    <x-select-simple-field label="Section" name="courseQuiz.course_section_id" required="true" :items="$sections"/>
  </div>  
  @endif
  <div class="page-box-main-fields">
    <div class="row">
    <div class="col-sm-12 col-md-4">
      <x-text-field label="Name" name="courseQuiz.name" required="true"/>
    </div>
    <div class="col-sm-12 col-md-4 quiz-type-field">
      <x-select-simple-field label="Quiz Type" name="courseQuiz.course_quiz_type_id" required="true" :items="$quizTypes"/>
    </div>
    <div class="col-sm-12 col-md-4">
      <x-text-field label="Description" name="courseQuiz.description" required="false"/>
    </div>

    <div class="col-sm-12 col-md-3">
      <x-datetime-field label="Start date" name="courseQuiz.start_date" required="false"/>
    </div>
    <div class="col-sm-12 col-md-3">
      <x-datetime-field label="End date" name="courseQuiz.end_date" required="false"/>
    </div>
    <div class="col-sm-12 col-md-4 code-field">
      <x-text-field label="Code" name="courseQuiz.code" required="false"/>
    </div>
{{--    <div class="col-sm-12 col-md-3">--}}
{{--      <x-text-field label="Sort order" name="courseQuiz.sort_order" required="false"/>--}}
{{--    </div>--}}
        <div class="col-sm-12 col-md-3 allow-retake-field">
          <x-checkbox-field label="Allow retake" name="courseQuiz.allow_retake" required="false"/>
        </div>
<div class="col-sm-12 col-md-3 inactive-field">
      <x-checkbox-field label="Inactive" name="courseQuiz.inactive" required="false"/>
    </div>
  </x-field-container>

  <x-field-separator label="Uploads"/>
  <x-field-container>
    <div class="col">
      <x-file-field name="file" label="File" :pictureTemp="$file" value="{{$courseQuiz->file}}"/>
    </div>
    <div class="col">
      <x-file-field name="video" label="Video" :pictureTemp="$video" value="{{$courseQuiz->video}}" accept="video/mp4,video/x-m4v,video/*"/>
    </div>
    <div class="col">
      <x-file-field name="document" label="Document" :pictureTemp="$document" value="{{$courseQuiz->document}}"/>
    </div>
  </x-field-container>


  <br>
  @if($courseQuiz->id)
    <x-field-separator label="{{__('Page Content')}}"/>
    <div class="row">
      <div class="col">
        <a href="{{route('admin-page-editor', ['id' => $courseQuiz->staticPage->id])}}" target="_blank">@lang('Edit Content')</a>
      </div>
    </div>
    <br>
  @endif
{{--  <x-rich-text-field label="Content" name="courseQuiz.content"/>--}}

  @isset($courseQuiz->id)
    <p class="h6">@lang('Questions') <span><button class="btn btn-link btn-sm" wire:click.prevent="refreshQuestions"><i
            class="bi bi-arrow-clockwise"></i> @lang('Refresh')</button></span></p>
    <div class="d-flex flex-row bd-highlight mb-3">
      <button type="button" class="btn btn-primary btn-sm" wire:click="addQuestion" wire:loading.attr="disabled"><i
          class="bi bi-plus"></i> @lang('Add Question')</button>
    </div>
    <div class="accordion" id="accordionQuestions" wire:ignore.self>
      @foreach($questions as $quest)
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-question-{{$courseQuiz->id.'-'.$quest->id}}" aria-expanded="false"
                    aria-controls="collapse-question-{{$loop->index}}" wire:ignore.self>
              @lang('Question') - {{$loop->index + 1}} | {{$quest->question}}
            </button>
          </h2>
          <div id="collapse-question-{{$courseQuiz->id.'-'.$quest->id}}" class="accordion-collapse collapse"
               data-bs-parent="#accordionQuestions" wire:ignore.self>
            <div class="accordion-body">
              <div class="row">
{{--                @include('components.form.TextAreaInput', ['name' => "questions.$loop->index.question", 'label' => 'Question - '.$loop->iteration, 'col' => 3])--}}
                <x-text-area-field label="{{__('Question')}} - {{$loop->iteration}}" name="questions.{{$loop->index}}.question"/>
                {{--                @include('components.form.SelectSimpleInput', ['name' => "questions.$loop->index.type", 'label' => 'Type', 'col' => 3, 'items' => $questionTypes])--}}
                <div class="col-2">
                  <button class="btn btn-primary" type="button"
                          wire:click="refreshQuestions" style="margin-top: 32px"
                          wire:loading.attr="disabled">@lang('Save Question')</button>
                </div>
                <div class="col-1">
                  <div wire:loading>
                    <div class="spinner-grow spinner-grow-sm" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-row bd-highlight mb-3">
                @if(sizeof($questions) > 1)
                  <button type="button" class="btn btn-link text-danger" wire:click="removeQuestion({{$quest->id}})"><i
                      class="bi bi-trash"></i>
                    @lang('Remove Question')
                  </button>
                @endif
              </div>

              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">@lang('Alternatives')</h6>

                    <div class="table-responsive">
                      <table class="table table-sm table-bordered">
                        <thead>
                        <tr>
                          <th scope="col">@lang('Alternatives')</th>
                          <th scope="col">@lang('Correct Answer')</th>
                          <th scope="col">@lang('Delete')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quest->alternatives as $alt)
                          <tr>
                            <td>
{{--                              @include('components.form.TextAreaInput', ['name' => "questions.".$loop->parent->index.".alternatives.$loop->index.answer", 'label' => '', 'col' => 12])--}}
                              <x-text-area-field label="{{__('Alternative')}} - {{$loop->iteration}}" name="questions.{{$loop->parent->index}}.alternatives.{{$loop->index}}.answer"/>
                            </td>
                            <td>
{{--                              @include('components.form.CheckBoxInput', ['name' => "questions.".$loop->parent->index.".alternatives.$loop->index.correct", 'label' => '', 'col' => 1])--}}
                              <x-checkbox-field label="" name="questions.{{$loop->parent->index}}.alternatives.{{$loop->index}}.correct" required="false"/>
                            </td>
                            <td>
                              <x-confirm-button clickAction="removeAlternative({{$alt->id}})" showConfirmDlg="1" showPrompt="0" />
                            </td>

                          </tr>
                        @endforeach

                        </tbody>
                      </table>
                    </div>

                    <button class="btn btn-link btn-sm" wire:click.prevent="addAlternative({{$quest->id}})"><i
                        class="bi bi-plus"></i> @lang('Add Alternative')</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endisset

  <x-field-separator label=""/>
  <div class="d-flex justify-content-end py-6">
    @canany([COURSES_QUIZZES_CREATE_PERM, COURSES_QUIZZES_UPDATE_PERM])
      <x-submit-field/>
    @endcanany
  </div>

  <x-submit-feedback/>
</form>
