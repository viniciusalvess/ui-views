<form id="kt_account_profile_details_form" class="form" wire:submit.prevent="submit">
  <x-field-separator label="{{__('Main')}}"/>
  <x-field-container>
    @if(!$courseId)
      <div class="col">
        <x-text-field label="Course id" name="courseSection.course_id" required="true"/>
      </div>
    @endif
    <div class="col">
      <x-text-field label="Course Name" name="courseSection.name" required="true"/>
    </div>
      <div class="col-sm-12 col-md-12">
        <x-text-field label="Course Name Alt" name="courseSection.name_alt" required="false"/>
      </div>
    <div class="col">
      <x-text-field label="Description" name="courseSection.description" required="false"/>
    </div>
{{--    <div class="col">--}}
{{--      <x-text-field label="Sort order" name="courseSection.sort_order" required="false"/>--}}
{{--    </div>--}}
    <div class="col">
      <x-checkbox-field label="Deactivate this course" name="courseSection.inactive" required="false"/>
    </div>
  </x-field-container>

  <x-field-separator label=""/>
  <div class="hstack gap-3 mt-10 mb-20">
    <div class="p-2 ms-auto"></div>
    @canany([COURSES_SECTIONS_CREATE_PERM, COURSES_SECTIONS_UPDATE_PERM])
      <x-submit-field/>
    @endcanany
  </div>

  <x-submit-feedback/>
</form>
