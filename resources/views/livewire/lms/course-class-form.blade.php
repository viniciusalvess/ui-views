<form id="kt_account_profile_details_form" class="form" wire:submit.prevent="submit">
  <x-field-separator label="{{__('Main')}}"/>
  @if((!$sectionId) || ($showSectionField))
  <div class="page-box-select-section-in-class">
    <x-select-simple-field label="Section" name="courseClass.course_section_id" required="true" :items="$sections"/>
  </div> 
  @endif
  <div class="page-box-main-fields">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <x-text-field label="Class Name" name="courseClass.name" required="true"/>
      </div>
      <div class="col-sm-12 col-md-6">
        <x-text-field label="Class Name Alt" name="courseClass.name_alt" required="false"/>
      </div>

      <div class="col-sm-12 col-md-6">
        <x-text-field label="Description" name="courseClass.description" required="false"/>
      </div>

      <div class="col-sm-12 col-md-6">
        <x-text-field label="Duration" name="courseClass.duration" required="false"/>
      </div>

      <div class="col-sm-12 col-md-4">
        <x-text-field label="Code" name="courseClass.code" required="false"/>
      </div>
      {{--    <div class="col">--}}
      {{--      <x-text-field label="Sort Order" name="courseClass.sort_order" required="false"/>--}}
      {{--    </div>--}}


      {{--    <div class="col">--}}
      {{--      <x-text-field label="Sort order" name="courseClass.sort_order" required="false"/>--}}
      {{--    </div>--}}
      <div class="col-sm-12 col-md-4">      
        <x-checkbox-field label="Make this class free" name="courseClass.free" required="false"/>
      </div>

      <div class="col-sm-12 col-md-4">
        <x-checkbox-field label="Deactivate this class" name="courseClass.inactive" required="false"/>
      </div>
    </div>
  </div>

  <div class="page-box-uploads">
    <x-field-separator label="Uploads"/>
    <div class="row">
      <div class="col">
        <x-file-field name="file" label="File" :pictureTemp="$file" value="{{$courseClass->file}}"/>
      </div>
      <div class="col">
        <x-file-field name="video" label="Video" :pictureTemp="$video" value="{{$courseClass->video}}"
                      accept="video/mp4,video/x-m4v,video/*"/>
      </div>
      <div class="col">
        <x-file-field name="document" label="Document" :pictureTemp="$document" value="{{$courseClass->document}}"/>
      </div>
    </div>
  </div>
  <div class="page-box-external-video">
    <x-field-separator label="External Video"/>
    <div class="row">
      <div class="col-4">
        <x-select-simple-field label="Type" name="courseClass.video_provider" required="false" :items="$videoProviders"/>
      </div>
      <div class="col-4">
        <x-checkbox-field label="Use External Video" name="courseClass.use_link" required="false"/>
      </div>
      <div class="col-sm-12 col-md-12">
        <x-text-field label="Video URL" name="courseClass.link" required="false"/>
      </div>
      {{--    <div class="col-12">--}}
      {{--      <x-text-area-field label="Embedded Script" name="courseClass.link" required="false"/>--}}
      {{--    </div>--}}
    </div>
</div>
  <br>
  @if($courseClass->id)
  <div class="page-box-content">
    <x-field-separator label="{{__('Page Content')}}"/>
    <div class="row">
      <div class="col">
        <a class="btn btn-primary btn-sm" href="{{route('admin-page-editor', ['id' => $courseClass->staticPage->id])}}"
           target="_blank">@lang('Edit Content')</a>
      </div>
    </div>
    <br>
  </div>
  @endif

  {{--  <x-rich-text-field label="Content" name="courseClass.content"/>--}}

  <x-field-separator label=""/>
  {{--  <div class="d-flex justify-content-end py-6">--}}
  {{--    @canany([COURSES_CLASSES_CREATE_PERM, COURSES_CLASSES_UPDATE_PERM])--}}
  {{--      <x-submit-field/>--}}
  {{--    @endcanany--}}
  {{--  </div>--}}

  <div class="hstack gap-3 mt-10 mb-20">

    @if($courseClass->id)
      <a class="btn btn-primary btn-sm" href="{{route('admin-lms-course-preview',
        ['courseId' => $courseClass->section->course_id, 'sectionId' => $courseClass->course_section_id, 'classId' => $courseClass->id])}}"
        target="_blank">@lang('View Class')</a>
    @endif

    <div class="p-2 ms-auto"></div>

    @canany([COURSES_CLASSES_CREATE_PERM, COURSES_CLASSES_UPDATE_PERM])
      <x-submit-field/>
    @endcanany
  </div>

  <x-submit-feedback/>
</form>
