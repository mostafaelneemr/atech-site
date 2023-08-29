@extends('system.layout')
<style>
    .red-star{
        color: red;
    }
</style>
@section('content')
    <!--begin::Row-->
    <div class="card card-custom gutter-b">

        <div class="card-body">

            {!! Form::open(['route' => isset($result) ? ['system.staff.update',$result->id]:'system.staff.store','files'=>true, 'method' => isset($result) ?  'PATCH' : 'POST','class'=> 'k-form','id'=> 'main-form','onsubmit'=> 'submitMainForm();return false;']) !!}
            <div class="k-portlet__body">

                <div id="form-alert-message"></div>



                <div class="form-group row">
                    @if(isset($result))
                        <input type="hidden" name="id" value="{{$result->id}}">
                    @endif

                    @foreach($fields as $key=>$field)

                        @php
                            $type = $field['type'];
                        @endphp
                        @if($type == 'text')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    <input autocomplete="off" type="text" name="{{$key}}" value="{{isset($field['value']) ? $field['value'] : $field['default_value']}}" class="form-control {{$key}}-form-input {{$field['class']}}" id="{{$field['id']}}">
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>

                            </div>
                        @endif
                        @if($type == 'number')

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    <input autocomplete="off" type="number" name="{{$key}}" value="{{isset($field['value']) ? $field['value'] : $field['default_value']}}" class="form-control {{$key}}-form-input {{$field['class']}}" id="{{$field['id']}}">
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>
                            </div>
                        @endif
                        @if($type == 'textarea')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    <textarea autocomplete="off"  name="{{$key}}" id="{{$field['id']}}"  class="form-control {{$key}}-form-input {{$field['class']}}">{{isset($field['value']) ? $field['value'] : $field['default_value']}}</textarea>
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>

                            </div>
                        @endif

                        @if($type == 'select')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    {!! Form::$type($key,isset($field['default_value']) ?  [''=>'']+$field['default_value'] : [''=>''],isset($field['value']) ? $field['value'] : null,['class'=>'form-control '.$key.'-form-input '.$field['class'],'id'=>$field['id'],'autocomplete'=>'off']) !!}
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>

                            </div>
                        @endif
                        @if($type == 'multi-select')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    {!! Form::$type($key,isset($field['default_value']) ? $field['default_value'] : null,isset($field['value']) ? $field['value'] : null,['class'=>'form-control '.$key.'-form-input '.$field['class'],'id'=>$field['id'],'autocomplete'=>'off','multiple' => true]) !!}
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>

                            </div>
                        @endif
                        @if($type == 'checkbox')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    @if(!empty($field['default_value']))
                                        @foreach($field['default_value'] as $default_values)
                                            <input type="checkbox" name="{{$key}}[]" @if(isset($field['value']) && $field['value'] ==$default_values ) checked @endif id="{{$field['id']}}" class="form-control {{$key}}-form-input {{$field['class']}}">
                                        @endforeach
                                    @endif
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>

                            </div>
                        @endif
                        @if($type == 'radio')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    @if(!empty($field['default_value']))
                                        @foreach($field['default_value'] as $default_values)
                                            <input type="radio" name="{{$key}}" @if(isset($field['value']) && $field['value'] ==$default_values ) checked @endif id="{{$field['id']}}" class="form-control {{$key}}-form-input {{$field['class']}}" >
                                            <span></span>
                                        @endforeach
                                    @endif
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>

                            </div>
                        @endif
                        @if($type == 'file')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    <input autocomplete="off" type="file" name="{{$key}}" id="{{$field['id']}}" class="form-control {{$key}}-form-input {{$field['class']}}">
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>

                            </div>
                        @endif
                        @if($type == 'date')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    <input autocomplete="off" type="text" name="{{$key}}" value="{{isset($field['value']) ? $field['value'] : $field['default_value']}}" class="form-control {{$key}}-form-input {{$field['class']}} datepicker ">
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>
                            </div>
                        @endif  @if($type == 'datetime')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__($field['display_as'])}}<span class="red-star">{{in_array($key,$required)?'*':''}}</span></label>
                                    <input autocomplete="off" type="date" name="{{$key}}" value="{{isset($field['value']) ? $field['value'] : $field['default_value']}}" class="form-control {{$key}}-form-input {{$field['class']}} datetimepicker">
                                    <div class="invalid-feedback" id="{{$key}}-form-error"></div>
                                </div>
                            </div>

                        @endif  @if($type == 'hidden')
                            <input  type="hidden" name="{{$key}}" value="{{isset($field['value']) ? $field['value'] : $field['default_value']}}" class="form-control {{$key}}-form-input {{$field['class']}} ">
                        @endif
                    @endforeach





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
@section('footer')
    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script type="text/javascript">



        function submitMainForm(){
            var formData = new FormData($('#main-form')[0]);
            formSubmit(
                '{{isset($result) ? route($route_name).'?func=update':route($route_name).'?func=store'}}',
                formData,
                function ($data) {
                      window.location = $data.data.url;
                },
                function ($data){
                    $("html, body").animate({ scrollTop: 0 }, "fast");
                    pageAlert('#form-alert-message','error',$data.message);
                }
            );
        }
        $('select').select2({
            placeholder: "{{__('Select')}}",
            allowClear: true
        });
    </script>
@endsection
