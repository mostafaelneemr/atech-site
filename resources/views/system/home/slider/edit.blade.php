@extends('system.layout')

@section('title')
    edit slider
@endsection

@section('content')

       @include('system.message')

    <!-- main body -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form class="form" action="{{route('home-slider.update', $sliders->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $sliders->id }}">
                        <input type="hidden" name="old_image" value="{{ $sliders->image }}">

                        <div class="form-group">
                            <div class="text-center">
                                <img src="{{asset($sliders->image)}}"
                                     class="rounded-circle  h-25 w-25" alt="image slider">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>slider image</label>
                            <label class="file center-block">
                                <input type="file" id="file" name="image">
                                <span class="file-custom"></span>
                            </label>
                            @error('image') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>title </label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $sliders->title }}" required>
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>sub title </label>
                                    <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror" value="{{ $sliders->sub_title }}">
                                    @error('sub_title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                            </div>

                            {{-- <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>description </label>
                                    <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" value="{{ $sliders->desc }}">
                                    @error('desc') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                            </div> --}}

                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-warning mr-1" onclick="history.back();"><i class="ft-x"></i>back</button>
                            <button type="submit" class="btn btn-success"><i class="la la-check-square-o"></i>save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
