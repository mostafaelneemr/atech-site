@extends('layouts.web.master')

@section('title')
    Atech
@endsection

@section('slider')
    <!-- Start Breadcaump Area -->
    @foreach($sliders as $slider)
    <div class="brook-breadcaump-area fullscreen breadcaump-title-bar breadcaump-title-white d-flex align-items-center pt_md--70 pt_sm--100 pb_sm--50"
        data-black-overlay="6" style="background-image: url('{{ $slider->image }}');background-repeat: no-repeat; background-size: cover; background-position: center center;">

        <div class="container-fluid plr--180 plr_lg--100 plr_md--50 plr_sm--50">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="breadcaump-inner text-start">
                        <h1 class="heading heading-h1 font-60 text-white">{{ $slider->title }}</h1>
                        <div class="bkseparator--25"></div>
                        <div class="title-separator w--200 color-red"></div>
                        <div class="bkseparator--25"></div>
                        <p class="bk_pra font-16 line-height-1-87 text-white">{{ $slider->sub_title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End Breadcaump Area -->


    {{-- <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-authentic-studio"
         data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
        <div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">

            <ul>
                <!-- SLIDE  -->
            @foreach($sliders as $slider)
                <li data-slotamount="default,default,default,default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default,default,default,default" data-easeout="default,default,default,default"
                    data-masterspeed="default,default,default,default" data-thumb="img/revoulation/100x50_slider-authentic-studio-slide-02-bg.jpg"
                    data-rotate="0,0,0,0" data-saveperformance="off" data-title="Slide" data-param1="{{ $loop->iteration }}"
                    data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                    data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset($slider->image)}}" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme mx-5" id="slide-16-layer-1" data-x="['left','center','center','center']"
                    data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                    data-voffset="['0','0','0','0']" data-fontsize="['60','60','45','30']"
                    data-lineheight="['90','67','50','34']" data-width="['1180','817','620','380']"
                    data-height="['none','135','none','none']" data-whitespace="normal" data-type="text"
                    data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                    style="z-index: 6; min-width: 1180px; max-width: 1180px; white-space: normal; font-size: 80px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">{{ $slider->title }} 
                    </div>

                    <!-- LAYER NR. 3 -->
                    <a class="tp-caption rev-btn smooth-scroll-link mx-5" href="{{ setting('slider_link') }}" target="_self" id="slide-16-layer-24"
                       data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                       data-voffset="['140','140','140','100']" data-width="160" data-height="55"
                       data-whitespace="normal" data-type="button" data-actions='' data-responsive_offset="on"
                       data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(34,34,34);transform:translateY(-3px);"}]'
                       data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                       data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                       style="z-index: 7; margin-top:100px;min-width: 160px; max-width: 160px; max-width: 55px; max-width: 55px; white-space: normal; font-size: 16px; line-height: 55px; font-weight: 700; color: #222222; letter-spacing: 0px;background-color:rgb(255,255,255);border-radius:5px 5px 5px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ setting('slider_button') }} </a>

                    </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div> --}}
    <!-- END REVOLUTION SLIDER -->
@endsection


@section('content')

    <!-- Start Brand Area -->
    <div class="bk-brand-area bg_color--1 ptb--50 ptb-md--80 ptb-sm--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-wrapper">
                        <div class="brand__list brand-default brand-style--1">
                            <div class="brook-element-carousel" data-slick-options='{
                                "spaceBetween": 15, 
                                "slidesToShow": 6, 
                                "slidesToScroll": 1, 
                                "arrows": false, 
                                "infinite": true
                            }'
                                data-slick-responsive='[
                                {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                {"breakpoint":577, "settings": {"slidesToShow": 3}},
                                {"breakpoint":481, "settings": {"slidesToShow": 2}}
                            ]'>
    
                            @foreach($brands as $brand)
                                <div class=""><a href="#"><img src="{{ $brand->image }}"
                                    alt="brand image"></a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area -->

    <!-- Start Video Popup Area -->
    <div class="brook-video-area bg_color--1 pb--30 pt--30 pb_md--80 pb_sm--60 mt-2" style="background: #F0F4F9">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="video-with-thumb text-center move-up wow">
                        <div class="thumb">
                            <img src="{{ setting('video_image') }}" alt="video images">
                        </div>
                        <!-- Start Single Popup -->
                        <div class="video-btn position--center">
                            <a class="play__btn" href="{{ setting('video_link') }}">
                                <div class="video-icon second-icon"></div>
                            </a>
                        </div>
                        <!-- End Single Popup -->
                    </div>
                </div>
                <div class="col-lg-5 mt_sm--30 mt_md--30">
                    <div class="video-content move-up wow">
                        <h3 class="heading heading-h3">{{ setting('title_video') }}</h3>
                        <div class="bkseparator--25"></div>
                        <p class="bk_pra">{{ setting('desc_video') }}</p>
                        <div class="bkseparator--40"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Popup Area -->
    
    <!-- Start Portfolio Caption  our works-->
    <div class="bk-portfolio-with-caption-area pt--50 pt_md--80 pt_sm--60 pb--25 pb_md--30 pb_sm--20 bg_color--1 poss_relative bk-masonary-wrapper" style="background-image: url('{{asset('sbg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brook-section-title text-center mb--60">
                        <h3 class="heading heading-h3 text-white">Our works</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="messonry-button text-center mb--70">
                        <button data-filter="*" class="is-checked">
                            <span class="filter-text text-white">All</span>
                            <span class="filter-counter">{{ count($items) }}</span>
                        </button>
                        @foreach ($categories as $key => $category)
                            <button data-filter="cat--{{ $category  }}">
                                <span class="filter-text text-white">{{ $category }}</span>
                                {{-- <span class="filter-counter">{{ $key + 1 }}</span> --}}
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-grid-metro6 mesonry-list">

                        <div class="resizer"></div>
                        
                        <!-- Start Single Portfolio -->
                        
                        @foreach($items as $item)
                        <div class="portfolio-33-33 cat--{{$item->category}}">
                            <div class="portfolio with-caption">
                                <div class="thumb video-with-thumb">
                                    <a href="{{url('project/' . $item->slug)}}">
                                        <img src="{{asset($item->image)}}" alt="portfolio images">
                                    </a>

                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5"><a href="{{url('project/' . $item->slug)}}">{{ $item->title }}</a></h5>
                                        <p class="bk_pra">{{ $item->type }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Portfolio -->

                    </div>
                </div>
            </div>
         </div>
      </div>
    <!-- End Portfolio Caption -->

    <!-- Start Portfolio Area -->
    <div class="brook-portfolio-area ptb--40 ptb-md--80 ptb-sm--60 bg_color--1 basic-thine-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--30">
                    <div class="brook-section-title text-center">
                        <h3 class="heading heading-h3">Some of our Certificates </h3>
                    </div>
                </div>
    
                @foreach($certificates as $certificate)
                <div class="col-lg-4 col-sm-6 col-12 move-up wow" style="border:2px solid #222933">
                    <div class="portfolio portfolio_style--1 mt--30">
                        <div class="thumb">
                            <img src="{{ $certificate->image }}" alt="Portfolio Images">
                        </div>
                        {{-- <div class="port-overlay-info">
                            <div class="hover-action">
                                <h3 class="post-overlay-title"><a href="portfolio-details.html">B-sharp High-end Audio</a></h3>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Portfolio Area -->

    <!-- Start Testimonial Area -->
    <div class="brook-testimonial-area poss_relative wavify-activation ptb--100 ptb-md--80 ptb-sm--60" >

        <div class="wavify-wrapper">
            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
                data-wavify-height="140" data-wavify-background="rgba(255,226,217,0.5)" data-wavify-amplitude="80"
                data-wavify-bones="4">
                <path d="M 0 141.71042689406383 C 237.875 148.50471572578806 237.875 148.50471572578806 475.75 145.107571309926 C 713.625 141.71042689406383 713.625 141.71042689406383 951.5 165.82491752026056 C 1189.375 189.9394081464571 1189.375 189.9394081464571 1427.25 193.5786122514483 C 1665.125 197.21781635643944 1665.125 197.21781635643944 1903 165.82491752026056 L 1903 7389 L 0 7389 Z"
                    fill="rgba(255,226,217,0.5)"></path>
            </svg>

            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
                data-wavify-height="140" data-wavify-background="#FFF3F2" data-wavify-amplitude="80"
                data-wavify-bones="3">
                <path d="M 0 147.22020568980648 C 317.16666666666663 183.65559797623268 317.16666666666663 183.65559797623268 634.3333333333333 165.43790183301957 C 951.4999999999999 147.22020568980648 951.4999999999999 147.22020568980648 1268.6666666666665 200.09089320557024 C 1585.833333333333 252.96158072133412 1585.833333333333 252.96158072133412 1903 183.26276877337258 L 1903 7389 L 0 7389 Z"
                    fill="#f5f5f5"></path>
            </svg>
        </div>

        <div class="container section-pt-xl">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow move-up">
                        <h2 class="heading heading-h2 line-height-1-25">Client's feedback</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial-wrapper mt--50 wow move-up">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb--30">
                    <div class="brook-element-carousel slick-arrow-center slick-dots-bottom" 
                        data-slick-options='{ "spaceBetween": 15,  "slidesToShow": 3, 
                            "slidesToScroll": 1,  "arrows": true,  "infinite": true, "dots": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fas fa-angle-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fas fa-angle-right" }
                        }'
                        data-slick-responsive='[
                            {"breakpoint":770, "settings": {"slidesToShow": 2}},
                            {"breakpoint":577, "settings": {"slidesToShow": 1}},
                            {"breakpoint":481, "settings": {"slidesToShow": 1}}
                        ]'>

                        <!-- Start Single Testimonial -->
                        
                        @foreach($testimonials as $testimonial)
                        <div class="testimonial testimonial_style--1 mh-100 d-inline-block" style="height:350px">
                            <div class="content">
                                <p class="bk_pra">{!! $testimonial->desc !!}</p>
                                <div class="testimonial-info">
                                    <div class="post-thumbnail">
                                        <img src="{{ $testimonial->image }}" alt="clint image">
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
                        @endforeach
                        <!-- End Single Testimonial -->

                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
    <!-- End Testimonial Area -->

    <!-- Start Blog Grid Area -->
    <div class="bk-blog-grid-area ptb--80 ptb-md--80 ptb-sm--60 bg_color--5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-6 col-sm-12 col-12">
                    <div class="brook-section-title">
                        <h2 class="heading heading-h2">Our Insights & Articles</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6 col-sm-12 col-12">
                    <div class="blog-btn text-md-end text-start view-more-btn heding-color font-700 mt_sm--30">
                        <a href="{{ route('blogs') }}"><span>View all blogs</span><span class="btn-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Single Blog -->
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt--70" style="display: flex">
                    <div class="blog-grid blog-grid--modern blog-standard blog-yellow-color">
                        <div class="post-thumb">
                            <a href="{{url('blog/' . $blog->slug)}}">
                                <img src="{{ $blog->thumbnail }}" alt="Multipurpose template">
                            </a>
                        </div>
                        <div class="post-content text-center" style="padding: 31px 30px 10px">
                            <div class="post-inner">
                                <div class="post-meta mb--10">
                                    <div class="post-date">{{ date('d-m-Y', strtotime($blog->created_at)) }}</div>
                                    <div class="post-category"><a href="#">Life Style</a></div>
                                </div>
                                <h5 class="heading heading-h5 line-height-1-39"><a href="{{url('blog/' . $blog->slug)}}">{{ $blog->title }}</a></h5>
                                <a href="{{url('blog/' . $blog->slug)}}" class="post-read-more"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Blog -->
    
            </div>
        </div>
    </div>
    <!-- End Blog Grid Area -->

    {{-- <section class="height-auto pb_sm--0 mt-4" data-skin="black">
        <div class="presentation-slider-wrapper">
            <div class="presentation-inner">
                <div class="inner brand-inner w-100">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="bk-title--default text-start brook-section-title-business">
                                    <h5>Trusted Clients</h5>
                                    <h3 class="fw-200">We are pleased to have many <br> trusted partners.</h3>
                                    <div class="separator"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt--60 mt_md--50 mt_sm--30">
                            <div class="col-lg-12">
                                <div class="brand-wrapper">
                                    <div class="brand__list brand-default brand-style--2 brand-business">
                                        <div class="brand"><a href="#"><img src="img/business-2/brand/client-logo-01.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand" data-wow-delay=".13s"><a href="#"><img src="img/business-2/brand/client-logo-02.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand" data-wow-delay="0.16s"><a href="#"><img src="img/business-2/brand/client-logo-03.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand" data-wow-delay="0.19s"><a href="#"><img src="img/business-2/brand/client-logo-04.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand" data-wow-delay="0.22s"><a href="#"><img src="img/business-2/brand/client-logo-05.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand" data-wow-delay="0.25s"><a href="#"><img src="img/business-2/brand/client-logo-06.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand" data-wow-delay="0.25s"><a href="#"><img src="img/business-2/brand/client-logo-07.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand" data-wow-delay="0.25s"><a href="#"><img src="img/business-2/brand/client-logo-08.png"
                                                    alt="logo image"></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- Start Counterup Area -->
    <div class="brook-counterup-area ptb--80 ptb-md--80 ptb-sm--60 bg_color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="bk-title--default text-start brook-section-title-business">
                        <h5>Trusted Clients</h5>
                        <h3 class="fw-200">We are pleased to have many <br> trusted partners.</h3>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Single Counter -->
                @foreach($clients as $client)
                <div class="col-lg-1 col-md-4 col-sm-6 col-6">
                    <div class="brook-counter text-center">
                        <div class="icon">
                            <img src="{{asset($client->image)}}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Counter -->
            </div>
        </div>
    </div>
    <!-- End Counterup Area -->

    @include('web.call')
@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        var $portfolioItems = $('#portfolio-container').find('.portfolio-33-33');
        
        // Initial filter, show all items
        $portfolioItems.show();
    
        // Filter by category when a button is clicked
        $('.messonry-button').on('click', function () {
            var selectedCategory = $(this).data('filter');
            
            console.log($selectedCategory);
            // Reset active class for buttons
            $('.messonry-button').removeClass('is-checked');
            $(this).addClass('is-checked');
    
            if (selectedCategory === '*') {
                // Show all items
                $portfolioItems.show();
            } else {
                // Hide items that don't match the selected category
                $portfolioItems.hide().filter('.' + selectedCategory).show();
            }
        });
    });
    </script>

@endsection