@extends('layouts.web.master')

@section('title')
    Services - Atech
@endsection

@section('content')

  {{-- @foreach($sliders as $slider)
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
                          <ul class="core-breadcaump">
                              <li><a href="index.html">Home</a></li>
                              <li><a href="elements.html">Elements</a></li>
                              <li class="current">Grid Classic</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endforeach --}}


        <!-- Start Activities Boxes -->
        <div class="brook-icon-boxes-area ptb--80 ptb-md--80 ptb-sm--60 bg_color--5">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 mt--70">
                      <div class="brook-section-title text-center">
                          <h3 class="heading heading-h3">Our Activities</h3>
                      </div>
                  </div>
              </div>
              
              <div class="row mt--30">
                  @foreach($activities as $active)
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="icon-box text-center mt--30 ">
                          <div class="inner mh-100 d-inline-block" style="height:300px">
                              <div class="services-icon mb-3" style="color: #4d5e75; font-size: 40px;" >
                                  <i class="{{ $active->icon }}"></i>
                              </div> 
                              <div class="content">
                                  <h5 class="heading heading-h5">{{ $active->title }}</h5>
                                  <p class="bk_pra">{!! $active->desc !!}</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Single Icon Boxes -->
                  @endforeach
    
              </div>
          </div>
      </div>
      <!-- End Icon Boxes -->



@endsection

@section('script')
@endsection