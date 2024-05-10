<div>
  <form id="kt_account_profile_details_form" class="form" wire:submit.prevent="submit">
  {{-- <x-field-separator label="{{__('Main')}}"/>--}}
    <div class="row page-box-main-fields">
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

      <div class="col-sm-12 col-md-4 page-box-language-field">
        <x-text-field label="Language" name="course.language" required="false"/>
      </div>

      <div class="col-sm-12 col-md-4 page-box-course-type-field">
        <x-select-simple-field label="Course Type" name="course.course_type_id" required="false"
                               :items="$courseTypes"/>
      </div>

      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Category" name="course.course_category_id" required="false"
                               :items="$courseCategories"/>
      </div>

      <div class="col-sm-12 col-md-4 page-box-level-field">
        <x-select-simple-field label="Level" name="course.course_level_id" required="false"
                               :items="$courseLevels"/>
      </div>

      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Has Certificate" name="course.certificate" required="false"
                               :items="$certificates"/>
      </div>
      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Certificate" name="course.course_certificate_id" required="false"
                               :items="$certificateList"/>
      </div>
      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Grade Map Type" name="course.grade_map_type" required="false" :items="$gradeMaptypes"/>
      </div>

      <div class="col-sm-12 col-md-4">
        <x-decimal-field label="Price" name="productPrice" required="true"/>
      </div>

      <div class="col-sm-12 col-md-4">
        <x-select-simple-field label="Instructor" name="course.user_instructor_id" required="false"
                               :items="$instructors"/>
      </div>






      {{--    <div class="col">--}}
      {{--      <x-text-field label="Name internal" name="course.name_internal" required="false"/>--}}
      {{--    </div>--}}

      <div class="col-sm-12 col-md-4">
        <x-checkbox-field label="Block Next Class" name="course.block_next_class" required="false"/>
      </div>
      <div class="col-sm-12 col-md-4">
        <x-checkbox-field label="Deactivate this course" name="course.inactive" required="false"/>
      </div>
    </div>

    @if(Auth::user()->super_admin)
      <x-field-separator label="{{__('Super Admin')}}"/>
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <x-select-simple-field label="linked Product" name="course.product_id" required="false" :items="$products" tooltip="Do not bother with this field. The value of this field is managed by the course automatically"/>
        </div>
      </div>
    @endif

    <div class="page-box-certificate">
      <x-field-separator label="{{__('Certificate Fields')}}"/>
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <x-text-field label="Course Name Alt" name="course.name_alt" required="false"/>
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
    <div class="row page-box-upload-fields">
    <x-field-separator label="{{__('Course Cover')}}"/>
      <div class="col">
        <x-file-field name="picture" label="Picture" :pictureTemp="$picture" value="{{$course->picture}}" accept="image/*"/>
      </div>

      <div class="col page-box-course-video-field">
        <x-file-field name="video" label="Video" :pictureTemp="$video" value="{{$course->video}}" accept="video/mp4,video/x-m4v,video/*"/>
      </div>

      <div class="col page-box-file-field">
        <x-file-field name="file" label="File" :pictureTemp="$file" value="{{$course->file}}"/>
      </div>

      <div class="col page-course-document-field">
        <x-file-field name="document" label="Document" :pictureTemp="$document" value="{{$course->document}}"/>
      </div>

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
    <x-field-separator label=""/>
    <div class="d-flex justify-content-end py-6">
      @canany([COURSES_CREATE_PERM, COURSES_UPDATE_PERM])
        <x-submit-field/>
      @endcanany
    </div>

    <x-submit-feedback/>
  </form>
</div>
