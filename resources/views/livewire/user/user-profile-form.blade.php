<form id="kt_account_profile_details_form" class="form" wire:submit.prevent="submit">
  <div class="card-body p-9">
    <x-field-separator label="Main"/>
    <div class="row mb-6">
      <div class="col-lg-8">
        <x-file-field name="picture" label="Profile Picture" :pictureTemp="$picture" value="{{$user->picture}}"/>
      </div>
    </div>

    <x-field-container>
      <div class="col">
        <x-text-field label="Name" name="user.name" required="true"/>
      </div>
      <div class="col">
        <x-text-field label="Email" name="user.email" required="true"/>
      </div>
    </x-field-container>
    <x-field-container>
      <div class="col">
        <x-text-field label="First Name" name="user.first_name"/>
      </div>
      <div class="col">
        <x-text-field label="Last Name" name="user.last_name"/>
      </div>
      <div class="col">
        <x-text-field label="MI" name="user.mi"/>
      </div>
      <div class="col">
        <x-text-field label="Phone" name="user.phone"/>
      </div>
      <div class="col">
        <x-text-field label="Cellphone" name="user.cellphone"/>
      </div>
      <div class="col">
        <x-text-field label="Job Title" name="user.job_title"/>
      </div>
      <div class="col">
        <x-checkbox-field name="user.has_admin_access" label="Has Admin Access"/>
      </div>
      <div class="col">
        <x-checkbox-field name="user.inactive" label="Inactive"/>
      </div>
    </x-field-container>
    <br><br>
    <x-field-separator label="Personal Documents"/>
    <x-field-container>
      <div class="col">
        <x-text-field label="Ssn Last 4" name="user.last_four"/>
      </div>
      <div class="col">
        <x-text-field label="Card" name="user.card_no"/>
      </div>
      <div class="col">
        <x-text-field label="Document Number" name="user.document_no_public"/>
      </div>
      @if($showEncryptedFields)
        <div class="col">
          <x-text-field label="Ssn" name="user.document_no" tooltip="The value of this field is saved encrypted in the database"/>
        </div>
        <div class="col">
          <x-text-field label="Drivers License" name="user.driver_no" tooltip="The value of this field is saved encrypted in the database"/>
        </div>
      @endif
      <div class="col">
        <button type="button" class="btn btn-link btn-sm text-primary" wire:click="toggleShowEncryptedFields()">{{$showEncryptedFields? __('Hide Sensitive Fields') : __('Show Sensitive Fields')}}</button>
      </div>
    </x-field-container>

    <x-text-area-field name="user.biography" label="Biography"/>

    <x-field-separator label="Address"/>

    <x-field-container>
      <div class="col">
        <x-text-field label="Address" name="user.address"/>
      </div>
      <div class="col">
        <x-text-field label="City" name="user.city"/>
      </div>
      <div class="col">
        <x-select-simple-field label="State" name="user.state" required="false" :items="$states"/>
      </div>
      <div class="col">
        <x-text-field label="Zip" name="user.zip"/>
      </div>
      <div class="col">
        <x-select-simple-field label="Country" name="user.country" required="false" :items="$countries"/>
      </div>
    </x-field-container>
    <br><br><br><br>
    @canany([USERS_CREATE_PERM, USERS_UPDATE_PERM])
      <x-field-separator label="User Lookup Types"/>
      <x-field-container>
        <div class="col role-checkbox-1">
          <x-checkbox-field name="user.instructor" label="Instructor"/>
        </div>
        <div class="col role-checkbox-2">
          <x-checkbox-field name="user.is_student" label="Student"/>
        </div>
        <div class="col role-checkbox-3">
          <x-checkbox-field name="user.is_staff" label="Staff"/>
        </div>
        <div class="col role-checkbox-4">
          <x-checkbox-field name="user.is_member" label="Member"/>
        </div>
        <div class="col role-checkbox-5">
          <x-checkbox-field name="user.is_ecom_client" label="Ecommerce Client"/>
        </div>
        <div class="col role-checkbox-6">
          <x-checkbox-field name="user.is_job_post" label="Job Post"/>
        </div>
      </x-field-container>

      <br><br>

      <div class="row">
        <div class="col-6">
        <x-field-separator label="Permission Roles"/>
        <x-select-multiple-field label="Roles" name="rolesSelectedDto" required="false" :items="$rolesDto"/>
        </div>

        <div class="col-6">
          <x-field-separator label="Associations"/>
          <x-select-simple-field label="Employer" name="user.employer_id" required="false" :items="$employers"/>
        </div>
      </div>

      <br><br>

    @endcanany
    <x-field-separator label="Other"/>
    <x-field-container>
      <div class="col">
        <x-select-simple-field label="Type" name="user.user_type_id" required="false" :items="$types"/>
      </div>
      <div class="col">
        <x-select-simple-field label="Status" name="user.user_status_id" required="false" :items="$statuses"/>
      </div>
      <div class="col">
        <x-select-simple-field label="Class" name="user.user_class_id" required="false" :items="$classes"/>
      </div>
      <div class="col">
        <x-select-simple-field label="Timezone" name="user.timezone" required="true" :items="$timezones"/>
      </div>

      <x-checkbox-field name="user.opt_in_email" label="Opt-in Email"/>
      <x-checkbox-field name="user.opt_in_phone" label="Opt-in Phone"/>
    </x-field-container>

    <x-select-multiple-field label="Skills" name="skillsSelectedDto" required="false" :items="$skills"/>
    <x-select-multiple-field label="Labels" name="labelsSelectedDto" required="false" :items="$labels"/>
    <x-select-multiple-field label="Flags" name="flagsSelectedDto" required="false" :items="$flags"/>

    @if(\Illuminate\Support\Facades\Auth::user()->super_admin)
      <br><br><br><br>
      <x-field-separator label="Super Admin"/>
      <x-field-container>
        <x-date-field name="user.paid_thru" label="Paid Thru"/>
        <x-text-field label="Tenant Domain Original" name="user.domain_original"/>
        <x-text-field label="Tenant Domain Custom" name="user.domain_custom"/>
        <x-text-field label="Origination Number" name="user.origination_number"/>
        <x-checkbox-field name="user.super_admin" label="Super Admin"/>
        @if(!$user->id)
          <x-checkbox-field name="sendRegisteredEmail" label="Send Registered Email"/>
          <x-checkbox-field name="isNewUserTenant" label="Is this user Tenant"/>
          <div class="col">
            <span class="text-danger">@lang('The new password will be: :pass', ['pass' => config('app.userTempPass')])</span>
          </div>
        @endif
      </x-field-container>
      <x-select-multiple-field label="App Modules" name="appModulesSelectedDto" required="false" :items="$appModules"/>
    @endif
  </div>
  <x-submit-field/>
  <x-submit-feedback/>
</form>
