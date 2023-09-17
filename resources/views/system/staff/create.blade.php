@extends('system.layout')
@section('content')
    <!--begin::Row-->
    <div class="card card-custom gutter-b">

        <div class="card-body">

                {!! Form::open(['route' => isset($result) ? ['system.staff.update',$result->id]:'system.staff.store','files'=>true, 'method' => isset($result) ?  'PATCH' : 'POST','class'=> 'k-form','id'=> 'main-form','onsubmit'=> 'submitMainForm();return false;']) !!}
                    <div class="k-portlet__body">

                        <div id="form-alert-message"></div>



                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>{{__('First Name')}}<span class="red-star">*</span></label>
                                    {!! Form::text('firstname',isset($result) ? $result->firstname : null,['class'=>'form-control','id'=>'firstname-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="firstname-form-error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label>{{__('Last Name')}}<span class="red-star">*</span></label>
                                    {!! Form::text('lastname',isset($result) ? $result->lastname : null,['class'=>'form-control','id'=>'lastname-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="lastname-form-error"></div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>{{__('E-mail')}}<span class="red-star">*</span></label>
                                    {!! Form::email('email',isset($result) ? $result->email : null,['class'=>'form-control','id'=>'email-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="email-form-error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label>{{__('Mobile')}}<span class="red-star">*</span></label>
                                    {!! Form::text('mobile',isset($result) ? $result->mobile : null,['class'=>'form-control','id'=>'mobile-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="mobile-form-error"></div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>{{__('Password')}} @if(!isset($result)) * @endif</label>
                                    {!! Form::password('password',['class'=>'form-control','id'=>'password-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="password-form-error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label>{{__('Confirm password')}} @if(!isset($result)) * @endif</label>
                                    {!! Form::password('password_confirmation',['class'=>'form-control','id'=>'password_confirmation-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="password_confirmation-form-error"></div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>{{__('Gender')}}<span class="red-star">*</span></label>
                                    {!! Form::select('gender',['male'=>__('Male'),'female'=>__('Female')],isset($result) ? $result->gender : null,['class'=>'form-control','id'=>'gender-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="gender-form-error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label>{{__('Birth Date')}}<span class="red-star">*</span></label>
                                    {!! Form::text('birthdate',isset($result) ? $result->birthdate : null,['class'=>'form-control datepicker','id'=>'birthdate-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="birthdate-form-error"></div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>{{__('National ID')}}<span class="red-star">*</span></label>
                                    {!! Form::text('national_id',isset($result) ? $result->national_id : null,['class'=>'form-control','id'=>'national_id-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="national_id-form-error"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>{{__('Address')}}<span class="red-star">*</span></label>
                                    {!! Form::textarea('address',isset($result) ? $result->address : null,['class'=>'form-control','id'=>'address-form-input','autocomplete'=>'off','rows'=> 3]) !!}
                                    <div class="invalid-feedback" id="address-form-error"></div>
                                </div>
                            </div>



                            <div class="form-group row">

                                <div class="col-md-6">
                                    <label>{{__('Job Title')}}<span class="red-star">*</span></label>
                                    {!! Form::text('job_title',isset($result) ? $result->job_title : null,['class'=>'form-control','id'=>'job_title-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="job_title-form-error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label>{{__('Status')}}<span class="red-star">*</span></label>
                                    {!! Form::select('status',['active'=>__('Active'),'in-active'=>__('In-Active')],isset($result) ? $result->status : null,['class'=>'form-control','id'=>'status-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="status-form-error"></div>
                                </div>

                            </div>


                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label>{{__('Permission Group')}}<span class="red-star">*</span></label>
                                    {!! Form::select('permission_group_id',array_column($PermissionGroup->toArray(),'name','id'),isset($result) ? $result->permission_group_id : null,['class'=>'form-control','id'=>'permission_group_id-form-input','autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="permission_group_id-form-error"></div>
                                </div>

                            </div>


                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>{{__('Avatar')}}<span class="red-star">*</span></label>
                                {!! Form::file('avatar',['class'=>'form-control','id'=>'avatar-form-input','autocomplete'=>'off']) !!}
                                <div class="invalid-feedback" id="avatar-form-error"></div>
                            </div>

                        </div>



                        <div class="form-group row">
                                <div class="col-md-12">
                                    <label>{{__('Description')}}</label>
                                    {!! Form::textarea('description',isset($result) ? $result->description : null,['class'=>'form-control','id'=>'description-form-input','autocomplete'=>'off','rows'=> 3]) !!}
                                    <div class="invalid-feedback" id="description-form-error"></div>
                                </div>
                            </div>


                    <div class="k-portlet__foot">
                        <div class="k-form__actions">
                            <div class="row" style="float: right;">
                                    <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                            </div>
                        </div>
                    </div>



            </div>
                {!! Form::close() !!}
        </div>
    </div>

@endsection
@section('script')
    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        function submitMainForm(){
            formSubmit(
                '{{isset($result) ? route('system.staff.update',$result->id):route('system.staff.store')}}',
                $('#main-form').serialize(),
                function ($data) {
                    window.location = $data.data.url;
                },
                function ($data){
                    $("html, body").animate({ scrollTop: 0 }, "fast");
                    pageAlert('#form-alert-message','error',$data.message);
                }
            );
        }

    </script>
@endsection
