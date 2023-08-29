@extends('system.layout')
@section('header')
    <link href="{{asset('assets/custom/user/profile-v1.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="card card-custom gutter-b">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table   table-striped table-hover">


                            <tbody>
                            @foreach($data as $key=>$value)

                                <tr>
                                    @if(array_key_exists($key,$display_as))
                                        <td class="font-weight-bold">{{$display_as[$key]}}</td>
                                    @else
                                        <td class="font-weight-bold">{{ucfirst(str_replace('_', ' ',  $key))}}</td>
                                    @endif

                                    <td class="table-center">
                                        @if(isset($change_field_type[$key]) && $change_field_type[$key] == 'file' && !empty($value) )
                                            @php $ex = explode('.',$value); @endphp
                                            @if(in_array($ex[1],['jpg','png','jepg']))
                                                <img src="{{asset($value)}}" style="object-fit: contain;width: 50% ;height: 100px"/>
                                            @else
                                                <a href="{{asset($value)}}" target="_blank">{{__('View')}}</a>
                                            @endif
                                        @else
                                            {{$value}}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>





    <!-- end:: Content -->
@endsection


