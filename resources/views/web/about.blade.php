@extends('layouts.web.master')

@section('title') About-US - Atech @endsection

@section('style')
    <style>
        .testimabout{
            background-image: url('{{asset('test.jpg')}}');
            background-repeat: no-repeat; 
            background-size: cover; 
            background-position: center center;
        }
    </style>

<style>
    .testimonial_style--1:hover{
        background-color: #222933 !important
    }
    #quote{
        color: #222933;
    }

</style>
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

  <!-- Start Testimonial Area -->
  <div class="brook-testimonial-area testimabout ptb--100 ptb-md--80 ptb-sm--60" >
    <div class="container">
      <div class="row">
        <!-- Start Single Testimonial -->
          @foreach($testimonials as $testimonial)
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up mt--60">
            <div class="testimonial testimonial_style--1">
              <div class="content">
                      <p class="bk_pra">{!! $testimonial->desc !!}</p>
                    <div class="testimonial-info">
                          <div class="post-thumbnail">
                              <img src="{{ $testimonial->image }}" alt="testimonial image">
                          </div>
                          <div class="clint-info">
                              <h6>{{ $testimonial->name }}</h6>
                              <span>{{ $testimonial->title }}</span>
                          </div>
                      </div>
                      <div class="testimonial-quote">
                          <span class="fa fa-quote-right" id="quote"></span>
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
  

      <!-- Start Counterup Area -->
      <div class="brook-counterup-area poss_relative wavify-activation ptb--80 ptb-md--80 ptb-sm--60 bg_color--1">
        
        <div class="wavify-wrapper">
            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
                data-wavify-height="140" data-wavify-background="rgb(196,220,250)" data-wavify-amplitude="80"
                data-wavify-bones="4">
                <path d="M 0 141.71042689406383 C 237.875 148.50471572578806 237.875 148.50471572578806 475.75 145.107571309926 C 713.625 141.71042689406383 713.625 141.71042689406383 951.5 165.82491752026056 C 1189.375 189.9394081464571 1189.375 189.9394081464571 1427.25 193.5786122514483 C 1665.125 197.21781635643944 1665.125 197.21781635643944 1903 165.82491752026056 L 1903 7389 L 0 7389 Z"
                    fill="rgba(255,226,217,0.5)"></path>
            </svg>

            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
                data-wavify-height="140" data-wavify-background="#C4DCFA" data-wavify-amplitude="80"
                data-wavify-bones="3">
                <path d="M 0 147.22020568980648 C 317.16666666666663 183.65559797623268 317.16666666666663 183.65559797623268 634.3333333333333 165.43790183301957 C 951.4999999999999 147.22020568980648 951.4999999999999 147.22020568980648 1268.6666666666665 200.09089320557024 C 1585.833333333333 252.96158072133412 1585.833333333333 252.96158072133412 1903 183.26276877337258 L 1903 7389 L 0 7389 Z"
                    fill="#f5f5f5"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="bk-title--default text-start brook-section-title-business">
                        <h5>{{ setting('title_brand') }}</h5>
                        <h3 class="fw-200">{{ setting('header_brand') }}</h3>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Start Single Counter -->
                @foreach($clients as $client)
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="brook-counter text-center">
                        <div class="icon">
                            <img src="{{asset($client->image)}}" alt="Client Image">
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Counter -->
            </div>
            
        </div>
    </div>
    <!-- End Counterup Area -->

@endsection

@section('script')
@endsection