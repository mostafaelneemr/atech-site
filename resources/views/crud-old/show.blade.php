@extends('system.layout')
@section('header')
    <link href="{{asset('assets/custom/user/profile-v1.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')


    {{--  @foreach($data as $key=>$value)--}}
    {{--      {{dd($key)}}--}}
    {{--  @endforeach--}}



    <table class="table table-hover" style="background: white">
        <tbody>

        @foreach($data as $key=>$value)
            <tr>
                @if(array_key_exists($key,$display_as))
                    <td>{{$display_as[$key]}}</td>
                @else
                    <td>{{ucfirst(str_replace('_', ' ',  $key))}}</td>
                @endif
                @if(array_key_exists($key,$change_field_type) && $change_field_type[$key] =='file')
                    <td>
                        <a href="{{url('storage/'.$value)}}">{{$value}}</a>
                    </td>
                @else
                    <td>{{$value}}</td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>




    <!-- end:: Content -->
@endsection


