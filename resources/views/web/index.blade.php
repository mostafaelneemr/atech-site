@extends('layouts.web.master')

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
@endsection


@section('content')

    <!-- Start Portfolio Caption -->
    <div class="bk-portfolio-with-caption-area pt--120 pt_md--80 pt_sm--60 pb--50 pb_md--30 pb_sm--20 bg_color--1 poss_relative bk-masonary-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brook-section-title text-center mb--60">
                        <h3 class="heading heading-h3">Our works</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="messonry-button text-center mb--70">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All</span><span
                                class="filter-counter">6</span></button>
                        <button data-filter=".cat--1"><span class="filter-text">Decoration</span> <span class="filter-counter">3</span></button>
                        <button data-filter=".cat--2"><span class="filter-text">Kitchen</span> <span class="filter-counter">2</span></button>
                        <button data-filter=".cat--3"><span class="filter-text">Living Room</span> <span class="filter-counter">4</span></button>
                        <button data-filter=".cat--4"><span class="filter-text">Photography</span> <span class="filter-counter">5</span></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-grid-metro6 mesonry-list">

                        <div class="resizer"></div>
                        <!-- Start Single Portfolio -->
                        <div class="portfolio-33-33 cat--1 cat--4">
                            <div class="portfolio with-caption">
                                <div class="thumb video-with-thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('website/assets/img/architecture/work1.jpg')}}" alt="portfolio images">
                                    </a>

                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5"><a href="portfolio-details.html">Apartments</a></h5>
                                        <p class="bk_pra">Perth, Australia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->

                        <!-- Start Single Portfolio -->
                        <div class="portfolio-33-33 cat--2 cat--4">
                            <div class="portfolio with-caption">
                                <div class="thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('website/assets/img/architecture/work2.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5"><a href="portfolio-details.html">Kitchen</a></h5>
                                        <p class="bk_pra">Berlin, Germany</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->

                        <!-- Start Single Portfolio -->
                        <div class="portfolio-33-33 cat--1 cat--3">
                            <div class="portfolio with-caption">
                                <div class="thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('website/assets/img/architecture/work3.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5"><a href="portfolio-details.html">Chair furniture</a></h5>
                                        <p class="bk_pra">Sydney, Australia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->

                        <!-- Start Single Portfolio -->
                        <div class="portfolio-33-33 cat--1 cat--3 cat--4">
                            <div class="portfolio with-caption">
                                <div class="thumb video-with-thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('website/assets/img/architecture/work4.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5"><a href="portfolio-details.html">Modern decoration</a></h5>
                                        <p class="bk_pra">Barcelona, Spain</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->

                        <!-- Start Single Portfolio -->
                        <div class="portfolio-33-33 cat--2 cat--3 cat--4">
                            <div class="portfolio with-caption">
                                <div class="thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('website/assets/img/architecture/work5.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5"><a href="portfolio-details.html">Spa residence</a></h5>
                                        <p class="bk_pra">Wellington, New Zealand</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->

                        <!-- Start Single Portfolio -->
                        <div class="portfolio-33-33 cat--3 cat--4">
                            <div class="portfolio with-caption">
                                <div class="thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('website/assets/img/architecture/work6.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5"><a href="portfolio-details.html">Lamp decoration</a></h5>
                                        <p class="bk_pra">Zurich, Switzerland</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->
                    </div>
                </div>
            </div>
         </div>
      </div>
    <!-- End Portfolio Caption -->


    <!-- Start Testimonial Area -->
    <div class="brook-testimonial-area ptb--120 ptb-md--80 ptb-sm--60 bg_color--5 slick-arrow-hover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb--30">
                    <div class="brook-element-carousel slick-arrow-center slick-dots-bottom" data-slick-options='{
                            "spaceBetween": 15, 
                            "slidesToShow": 3, 
                            "slidesToScroll": 1, 
                            "arrows": true, 
                            "infinite": true,
                            "dots": true,
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
                        <div class="testimonial testimonial_style--1">
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
    <!-- End Testimonial Area -->


    <!-- Start Portfolio Area -->
    <div class="brook-portfolio-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1 basic-thine-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--30">
                    <div class="brook-section-title text-center">
                        <h3 class="heading heading-h3">Some of our Certificates </h3>
                    </div>
                </div>
    
                @foreach($certificates as $certificate)
                <div class="col-lg-4 col-sm-6 col-12 move-up wow">
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



                <!-- Start Blog Grid Area -->
                <div class="bk-blog-grid-area ptb--130 ptb-md--80 ptb-sm--60 bg_color--5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-xl-6 col-sm-12 col-12">
                                <div class="brook-section-title">
                                    <h2 class="heading heading-h2">Blog Updates</h2>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-6 col-sm-12 col-12">
                                <div class="blog-btn text-md-end text-start view-more-btn heding-color font-700 mt_sm--30">
                                    <a href="#"><span>View all posts</span><span class="btn-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Start Single Blog -->
                            @foreach($blogs as $blog)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt--70">
                                <div class="blog-grid blog-grid--modern blog-standard blog-yellow-color">
                                    <div class="post-thumb">
                                        <a href="{{url('blog/' . $blog->slug)}}">
                                            <img src="{{ $blog->thumbnail }}" alt="Multipurpose template">
                                        </a>
                                    </div>
                                    <div class="post-content text-center">
                                        <div class="post-inner">
                                            <div class="post-meta mb--10">
                                                <div class="post-date">{{ $blog->created_at }}</div>
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



    <!-- Start Brand Area -->
    <div class="bk-brand-area bg_color--1 ptb--80 ptb-md--80 ptb-sm--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-wrapper">
                        <div class="brand__list brand-default brand-style--1">
                            <div class="brook-element-carousel" data-slick-options='{
                                "spaceBetween": 15, 
                                "slidesToShow": 5, 
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
                                    alt="logo image"></a>
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

    @include('web.call')
@endsection