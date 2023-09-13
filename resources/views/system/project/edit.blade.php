@extends('system.layout')

@section('content')

       @include('system.message')

    <!-- main body -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form class="form" action="{{route('projects.update', $projects->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $projects->id }}">
                        <input type="hidden" name="oldImage" value="{{ $projects->image }}">
                        <input type="hidden" name="oldImageDesc" value="{{ $projects->image_desc }}">

                        <div class="form-group">
                            <div class="text-center">
                                <img src="{{asset($projects->image)}}"
                                     class="rounded-circle h-25 w-25" alt="image slider">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <label id="projectinput7" class="file center-block">
                                <input type="file" id="file" name="image">
                                <span class="file-custom"></span>
                            </label>
                            @error('image') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-body">
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label>Category </label>
                                    <select name="category" class="form-control" autocomplete="off">
                                        <option value="BMS">{{ __('BMS') }}</option>
                                        <option value="KNX">{{ __('KNX') }}</option>
                                    </select>
                                    @error('category') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Title </label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $projects->title }}" required>
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Type</label>
                                    <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ $projects->type }}" required>
                                    @error('type') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <div class="text-center">
                                    <img src="{{asset($projects->image_desc)}}"
                                         class="rounded-circle h-25 w-25" alt="image desc">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Image To Description</label>
                                <label id="projectinput6" class="file center-block">
                                    <input type="file" id="file" name="image_desc">
                                    <span class="file-custom"></span>
                                </label>
                                @error('image_desc') <span class="text-danger">{{$message}}</span> @enderror
                                <img src="" id="image_desc" >
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea name="desc" class="form-control" id="desc" rows="5">{!! $projects->desc !!}</textarea>
                                    @error('desc') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

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


@section('script')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('desc');
        });
    </script>

@endsection