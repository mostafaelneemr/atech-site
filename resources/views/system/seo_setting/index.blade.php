@extends('system.layout')

@section('content')
    <form class="form-horizontal" action="{{ route('seosetting.update', $seosetting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ __('SEO Settings') }}</h5>
                    </div>

                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label" for="name">{{  __('Title English') }}</label>
                            <div class="col-md-8">
                                <input type="text" id="title" name="title" value="{{ $seosetting->title }}"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{  __('Keyword English') }}</label>
                            <div class="col-md-8">
                                <input type="text" id="kt_tagify_1" value="{{ $seosetting->keyword }}"
                                    class="form-control tagify" name="keyword[]"
                                    placeholder="{{  ('Keyword English') }}" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label" for="name">{{  __('Author English') }}</label>
                            <div class="col-md-8">
                                <input type="text" id="author" name="author" value="{{ $seosetting->author }}"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label" for="revisit">{{  __('Revisit After') }}</label>
                            <div class="col-md-7">
                                <input type="number" min="0" step="1" value="{{ $seosetting->revisit }}"
                                    placeholder="{{  ('Revisit After') }}" name="revisit" class="form-control" required >
                            </div>
                            <label class="col-md-2 col-from-label" for="revisit">{{  __('Days') }}</label>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label" for="sitemap">{{  __('Sitemap Link') }}</label>
                            <div class="col-md-8">
                                <input type="text" id="sitemap" name="sitemap" value="{{ $seosetting->sitemap_link }}"
                                    class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label"
                                for="name">{{  __('Description English') }}</label>
                            <div class="col-md-8">
                                <textarea class="form-control" rows="4" name="description"
                                    required>{{ $seosetting->description }}</textarea>
                            </div>
                        </div>

                        <!--===================================================-->
                        <!--End Horizontal Form-->

                    </div>
                </div>
               
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{  __('SEO Blogs Settings') }}</h5>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="blog_meta_title_en">{{  __('Meta Title ') }}</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $seosetting->blog_meta_title }}"
                                    class="form-control" name="blog_meta_title" placeholder="{{  ('Meta Title') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="blog_meta_description_en">{{  __('Meta Description ') }}</label>
                            <div class="col-md-9">
                                <textarea name="blog_meta_description_en" rows="5"
                                    class="form-control">{{ $seosetting->blog_meta_description }}</textarea>
                            </div>
                        </div>
                       
                    </div>
                   
                </div>

            </div>
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{  __('SEO All Brands Settings') }}</h5>
                    </div>

                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="brands_meta_title">{{  __('Meta Title En') }}</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $seosetting->brands_meta_title }}" class="form-control"
                                    name="brands_meta_title" placeholder="{{  ('Meta Title ') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="brands_meta_description">{{  __('Meta Description ') }}</label>
                            <div class="col-md-9">
                                <textarea name="brands_meta_description" rows="5"
                                    class="form-control">{{ $seosetting->brands_meta_description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{  __('SEO Project Settings') }}</h5>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="project_meta_title_en">{{  __('Meta Title ') }}</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $seosetting->project_meta_title }}"
                                    class="form-control" name="project_meta_title" placeholder="{{  ('Meta Title') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="project_meta_description_en">{{  __('Meta Description ') }}</label>
                            <div class="col-md-9">
                                <textarea name="project_meta_description_en" rows="5"
                                    class="form-control">{{ $seosetting->project_meta_description }}</textarea>
                            </div>
                        </div>
                       
                    </div>
                   
                </div>
                
            </div>
        </div>
        <div class="mb-3 text-right">
            <button type="submit" name="button" class="btn btn-primary">{{  __('Save') }}</button>
        </div>

    </form>

@endsection

@section('script')
    <script src="{{asset('assets/js/pages/crud/forms/widgets/tagify.js')}}"></script>
@endsection
