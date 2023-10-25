@extends('system.layout')

@section('content')

       @include('system.message')

    <!-- main body -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form class="form" action="{{route('our-activities.update', $activities->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $activities->id }}">

                        <div class="form-body">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="Selectd">Icon</label>
                                    <select class="form-control" id="fontawsome_id-form-input" name="fontawsome_id">
                                        <option selected disabled>selected </option>
                                        @foreach($fontawsomes as $fontawsome)
                                            <option value="{{$fontawsome->id}}" {{ $fontawsome->id == $activities->fontawsome_id ? 'selected' : '' }}>{{$fontawsome->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('fontawsome_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Title </label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $activities->title }}" required>
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea name="desc" class="form-control" id="desc" rows="5">{!! $activities->desc !!}</textarea>
                                    @error('desc') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label>Sort</label>
                                    <input type="number" class="form-control" name="sort" value="{{ $activities->sort }}" required>
                                    @error('sort') <div class="alert alert-danger">{{ $message }}</div> @enderror
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

    <script type="text/javascript">
        $('select').select2({
            placeholder: "{{__('Select Icon')}}",
            allowClear: true,
            width:"100%",
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('desc');
        });
    </script>

@endsection