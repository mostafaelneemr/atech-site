@extends('system.layout')

@section('content')

       @include('system.message')

    <!-- main body -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form class="form" action="{{route('careers.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-body">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Title<span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>location<span class="text-danger">*</span></label>
                                    <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" required>
                                    @error('location') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Description<span class="text-danger">*</span></label>
                                    <textarea name="desc" class="form-control @error('location') is-invalid @enderror" id="desc" rows="5" required></textarea>
                                    @error('desc') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Requirements<span class="text-danger">*</span></label>
                                    <textarea name="req" class="form-control @error('location') is-invalid @enderror" id="req" rows="5"></textarea>
                                    @error('req') <div class="alert alert-danger">{{ $message }}</div> @enderror
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
            CKEDITOR.replace('req');
        });
    </script>

@endsection