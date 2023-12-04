@extends('system.layout')

@section('content')

       @include('system.message')

    <!-- main body -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form class="form" action="{{route('teams.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Image</label>
                            <label id="projectinput5" class="file center-block">
                                <input type="file" id="file" name="image" onChange="imageUrl(this)" required>
                                <span class="file-custom"></span>
                            </label>
                            @error('image') <span class="text-danger">{{$message}}</span> @enderror
                            <img src="" id="image" >
                        </div>

                        <div class="form-body">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Name </label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                    @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Title </label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label>facebook link</label>
                                    <input type="text" name="link_one" class="form-control @error('link_one') is-invalid @enderror" value="{{ old('link_one') }}">
                                    @error('link_one') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label>twitter link</label>
                                    <input type="text" name="link_two" class="form-control @error('link_two') is-invalid @enderror" value="{{ old('link_two') }}">
                                    @error('link_two') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label>instagram link</label>
                                    <input type="text" name="link_three" class="form-control @error('link_three') is-invalid @enderror" value="{{ old('link_three') }}">
                                    @error('link_three') <div class="alert alert-danger">{{ $message }}</div> @enderror
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

<script type="text/javascript">
    function imageUrl(input) {
        if(input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e){
                $('#image').attr('src',e.target.result).width(100).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection