@extends('layouts.web.master')

@section('title')
    About-US - Atech
@endsection

@section('content')

  @foreach($sliders as $slider)
  <div class="breadcaump-area pt--400 pt_lg--300 pt_md--250 pt_sm--200 pb--100 breadcaump-title-bar breadcaump-title-white" style="background-image: url('{{ asset($slider->image) }}');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcaump-inner text-center">
                      <h2 class="heading">A B O U T - U S</h2>
                      <div class="breadcrumb-insite">
                          {{-- <ul class="core-breadcaump">
                              <li><a href="index.html">Home</a></li>
                              <li><a href="elements.html">Elements</a></li>
                              <li class="current">Grid Classic</li>
                          </ul> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endforeach

  <!-- Start Testimonial Area -->
  <div class="brook-testimonial-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--6">
    <div class="container">
      <div class="row">
        <!-- Start Single Testimonial -->
          @foreach($testimonials as $testimonial)
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up mt-3">
            <div class="testimonial testimonial_style--1">
              <div class="content">
                      <p class="bk_pra">{!! $testimonial->desc !!}</p>
                    <div class="testimonial-info">
                          <div class="post-thumbnail">
                              <img src="{{ $testimonial->image }}" alt="client image">
                          </div>
                          <div class="clint-info">
                              <h6>{{ $testimonial->name }}</h6>
                              <span>{{ $testimonial->title }}</span>
                          </div>
                      </div>
                      <div class="testimonial-quote">
                          <span class="fa fa-quote-right"></span>
                      </div>
                  </div>
              </div>
            </div>
          @endforeach
        <!-- End Single Testimonial -->
      </div>
    </div>
  </div>
  <!-- End Testimonial Area -->



@endsection

@section('script')
@endsection