@extends('layouts.web.master')

@section('title') project - Atec @endsection

@section('meta_title'){{ $project->title }}@stop

@section('meta_description'){{ $project->description }}@stop

@section('meta_keywords'){{ $project->slug }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $project->title }}">
    <meta itemprop="description" content="{{ $project->description }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $project->title }}">
    <meta name="twitter:description" content="{{ $project->description }}">
    <meta name="twitter:creator" content="@author_handle">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $project->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('project', $project->slug) }}" />
    <meta property="og:description" content="{{ $project->description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
@endsection

@section('content')

    <!-- Start Blog Details -->
    <div class="brook-blog-details-area bg_color--5 pt--110 pb--150">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-12">
                    <div class="blog-details-wrapper">
                        <article class="blog-post standard-post">
                            <!-- Start Header -->
                            <div class="header mb--40 text-center">
                                <h3 class="heading heading-h3 font-32">{{ $project->title }}</h3>
                                <div class="post-meta mt--20">
                                    <div class="post-date">{{ date('d-m-Y', strtotime($project->created_at)) }}</div>
                                    <div class="post-category"><a href="#">Life Style</a></div>
                                </div>
                            </div>
                            <!-- Start Thumbnail -->
                            {{-- <div class="thumbnail mb--60">
                                <img class="w-100" style="width:100%;height:100%" src="{{ asset($blog->thumbnail) }}" alt="Multipurpose">
                            </div> --}}
                            <!-- Start Content -->
                            <div class="content basic-dark2-line-1px pb--50 mb--35">
                                {{-- <div class="inner">
                                    <h5 class="heading heading-h5 line-height-1-95 wow move-up">Even casual
                                        observers know that digital photography has taken the world by storm
                                        and is now the standard by which almost all professional photographers
                                        capture images. The advantages of digital photography over film are
                                        staggering.</h5>
                                    <div class="desc mt--45 mb--50">
                                        <p class="bk_pra wow move-up">Gone are the days of paying for expensive
                                            film cameras, various types of film for different situations and
                                            professional film processing. One of the biggest drawbacks of film?
                                            No instant gratification of knowing what your images look like.</p>
                                    </div>
                                </div> --}}
                                <div class="thumbnail">
                                    <img class="w-100" src="{{ asset($project->image_desc) }}" alt="Multipurpose">
                                </div>
                                <div class="desc mt--45">
                                    <p class="bk_pra wow move-up">{!! $project->desc !!}</p>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Blog Details -->

@endsection