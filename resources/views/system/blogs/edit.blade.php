@extends('system.layout')

@section('content')

       @include('system.message')

    <!-- main body -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form class="form" action="{{route('blogs.update', $blogs->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $blogs->id }}">
                        <input type="hidden" name="old_thumbnail" value="{{ $blogs->thumbnail }}">
                        <input type="hidden" name="old_image" value="{{ $blogs->image }}">

                        <div class="form-group">
                            <div class="text-center">
                                <img src="{{asset($blogs->thumbnail)}}"
                                     class="rounded-circle  h-25 w-25" alt="image slider">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Thumbnail</label>
                            <label id="projectinput6" class="file center-block">
                                <input type="file" id="file" name="thumbnail">
                                <span class="file-custom"></span>
                            </label>
                            @error('thumbnail') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Title </label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $blogs->title }}" required>
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $blogs->name }}" required>
                                    @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <img src="{{asset($blogs->image)}}"
                                         class="rounded-circle h-25 w-25" alt="image slider">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <label id="projectinput5" class="file center-block">
                                    <input type="file" id="file" name="image">
                                    <span class="file-custom"></span>
                                </label>
                                @error('image') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea name="desc" class="form-control" id="desc" rows="5">{!! $blogs->desc !!}</textarea>
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