@extends('layouts.web.master')

@section('title') Atech @endsection

@php
    $title = App\Models\admin\SeoSetting::find(1)->title;
    $description = App\Models\admin\SeoSetting::find(1)->description;

    $meta_title_proj = App\Models\admin\SeoSetting::find(1)->project_meta_title;
    $meta_description_proj = App\Models\admin\SeoSetting::find(1)->project_meta_description;

    $meta_title_brand = App\Models\admin\SeoSetting::find(1)->brands_meta_title;
    $meta_description_brand = App\Models\admin\SeoSetting::find(1)->brands_meta_description;

    $meta_title_blog = App\Models\admin\SeoSetting::find(1)->blog_meta_title;
    $meta_description_blog = App\Models\admin\SeoSetting::find(1)->blog_meta_description;
@endphp

@section('title') Projects - Atech @endsection
@section('meta_title'){{ $title }}@stop
@section('meta_description'){{ $description }}@stop
@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $meta_title_proj }}">
    <meta itemprop="name" content="{{ $meta_title_blog }}">
    <meta itemprop="name" content="{{ $meta_title_brand }}">
    <meta itemprop="description" content="{{ $meta_description_proj }}">
    <meta itemprop="description" content="{{ $meta_description_blog }}">
    <meta itemprop="description" content="{{ $meta_description_brand }}">

    <!-- Twitter Card data -->
    <meta name="twitter:title" content="{{ $meta_title_proj }}">
    <meta name="twitter:title" content="{{ $meta_title_blog }}">
    <meta name="twitter:title" content="{{ $meta_title_brand }}">
    <meta name="twitter:description" content="{{ $meta_description_proj }}">
    <meta name="twitter:description" content="{{ $meta_description_blog }}">
    <meta name="twitter:description" content="{{ $meta_description_brand }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $meta_title_proj }}" />
    <meta property="og:title" content="{{ $meta_title_blog }}" />
    <meta property="og:title" content="{{ $meta_title_brand }}" />
    <meta property="og:description" content="{{ $meta_description_proj }}" />
    <meta property="og:description" content="{{ $meta_description_blog }}" />
    <meta property="og:description" content="{{ $meta_description_brand }}" />
@endsection


@section('style')
    {{-- style slider --}}
    <style>
        .firstdiv{
            margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;
        }
        .secondiv{
            display:none;
        }
        .divtitle{
            z-index: 6; min-width: 1180px; max-width: 1180px; white-space: normal; font-size: 80px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: 0px;
        }
        .btnslider{
            visibility: hidden !important;
        }
    </style>

    <style>
        .videobg{
            background: #F0F4F9;
        }
    </style>

    <style>
        .activeinner{
            height:300px;
        }

        .activeserv{
            color: #4d5e75; font-size: 40px;
        }
    </style>

    <style>
        .portfoliobg{
            background-image: url('{{asset('sbg.jpg')}}');
        }
    </style>

    <style>
        .testimonialbg{
            background-image: url('{{asset('test.jpg')}}');background-repeat: no-repeat; background-size: cover; background-position: center center;
        }

        .testimonialhei{
            height:350px;
        }
    </style>

    <style>
        .blogbg{
            background-color: #F0F4F9;
        }
        .blogflex{
            /* display: flex; */
            min-height: 220px;
        }
        .post-read-more{
            background-color: #222933 !important
        }
    </style>
    
    <style>
        .icon-box .inner:hover{background-color: #222933;color: #fff};
    </style>

    <style>
        .icon-box .inner:hover .content h5.heading {color:#fff};
    </style>

    <style>
        .icon-box .inner:hover .services-icon i{color:#fff};
    </style>

    <style>
        .testimonial_style--1:hover{
            background-color: #222933 !important
        }
        #quote{
            color: #222933;
        }
        body.template-color-26 .slick-dots-bottom .slick-dots li.slick-active button{
            background-color: #222933 !important
        }
    </style>

@endsection

@section('slider')

    <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container firstdiv" data-alias="home-authentic-studio"
         data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
        <div id="rev_slider_8_1" class="rev_slider fullwidthabanner secondiv" data-version="5.4.7">

            <ul>
                <!-- SLIDE  -->
            @foreach($sliders as $slider)
                <li data-slotamount="default,default,default,default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default,default,default,default" data-easeout="default,default,default,default"
                    data-masterspeed="default,default,default,default" data-thumb="img/revoulation/100x50_slider-authentic-studio-slide-02-bg.jpg"
                    data-rotate="0,0,0,0" data-saveperformance="off" data-title="Slide" data-param1=""
                    data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                    data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset($slider->image)}}" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    {{-- <h6 class="tp-caption   tp-resizeme" id="slide-16-layer-26" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-160','-160','-160','-100']" data-fontsize="['20','18','16','14']"
                        data-width="['470','470','400','360']" data-height="none" data-whitespace="normal"
                        data-type="text" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; min-width: 470px; max-width: 470px; white-space: normal; font-size: 18px; line-height: 33px; font-weight: 700; color: #ffffff; letter-spacing: 3px;text-transform:uppercase;">WE
                        {{ $slider->title }} </h6> --}}

                    
                    <!-- LAYER NR. 2 -->
                    {{-- <div class="tp-caption   tp-resizeme" id="slide-16-layer-1" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['0','-28','-28','-10']" data-fontsize="['70','60','45','30']"
                        data-lineheight="['90','67','50','34']" data-width="['1180','817','620','380']"
                        data-height="['none','135','none','none']" data-whitespace="normal" data-type="text"
                        data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 1180px; max-width: 1180px; white-space: normal; font-size: 80px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">
                        {{ $slider->sub_title }}. </div> --}}

                    
                    <!-- LAYER NR. 3 -->
                    {{-- <a class="tp-caption rev-btn   smooth-scroll-link" href="{{ setting('slider_link') }}" target="_self" id="slide-16-layer-24"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['140','140','140','100']" data-width="160" data-height="55"
                        data-whitespace="normal" data-type="button" data-actions='' data-responsive_offset="on"
                        data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(34,34,34);transform:translateY(-3px);"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                        style="z-index: 7; min-width: 160px; max-width: 160px; max-width: 55px; max-width: 55px; white-space: normal; font-size: 16px; line-height: 55px; font-weight: 700; color: #222222; letter-spacing: 0px;background-color:rgb(255,255,255);border-radius:5px 5px 5px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                        {{ setting('slider_button') }} </a> --}}
                    </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom btnslider" ></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
@endsection


@section('content')

    <!-- Start Brand Area -->
    @if (App\Models\admin\Active_section::where('name', 'brand_section')->first()->value == '1')
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
                                        <div><a href="#"><img src="{{ $brand->image }}" alt="brand image"></a> </div>
                                    @endforeach
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- End Brand Area -->


    <!-- Start Video Popup Area -->
    @if (App\Models\admin\Active_section::where('name', 'video_section')->first()->value == '1')
        <div class="brook-video-area videobg bg_color--1 pb--30 pt--30 pb_md--80 pb_sm--60 mt-2">
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
                                    <div class="video-icon second-icon post-read-more"></div>
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
    @endif
    <!-- End Video Popup Area -->


    <!-- Start Activities Boxes -->
    @if (App\Models\admin\Active_section::where('name', 'activies_section')->first()->value == '1')
        <div class="brook-icon-boxes-area poss_relative wavify-activation ptb--80 ptb-md--80 ptb-sm--60 bg_color--5">
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brook-section-title text-center">
                            <h1 class="heading heading-h3">{{ setting('title_ouractive') }}</h1>
                        </div>
                    </div>
                </div>

                <div class="row mt--30">
                    @foreach($activities as $active)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">
                        <div class="icon-box text-center mt--30 ">
                            <div class="inner mh-100 d-inline-block activeinner">
                                <div class="services-icon mb-3 activeserv">
                                    @if ($active->fontawsome)
                                        <i class="{{ $active->fontawsome->name }}"></i>
                                    @else
                                        <!-- Handle the case where there's no related FontAwesome model -->
                                        <i class="default-icon-class"></i>
                                    @endif
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
    @endif
    <!-- End Icon Boxes -->
    

    <!-- Start projects Caption  our works-->
    @if (App\Models\admin\Active_section::where('name', 'project_section')->first()->value == '1')
        <div class="bk-portfolio-with-caption-area pt--50 pt_md--80 pt_sm--60 pb--25 pb_md--30 pb_sm--20 bg_color--1 poss_relative bk-masonary-wrapper portfoliobg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brook-section-title text-center mb--60">
                            <h3 class="heading heading-h3 text-white">{{ setting('title_projects') }}</h3>
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
                            @foreach ($categories as $category)
                                <button data-filter=".cat--{{ $category  }}">
                                    <span class="filter-text text-white">{{ $category }}</span>
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
                            {{-- {{ dd($items) }} --}}
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
    @endif
    <!-- End projects Caption -->


    <!-- Start Certificates Area -->
    @if (App\Models\admin\Active_section::where('name', 'certificate_section')->first()->value == '1')
        <div class="brook-portfolio-area ptb--40 ptb-md--80 ptb-sm--60 bg_color--1 basic-thine-line">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--30">
                        <div class="brook-section-title text-center">
                            <h3 class="heading heading-h3">{{ setting('title_certificate') }}</h3>
                        </div>
                    </div>
                
                    @foreach($certificates as $certificate)
                    <div class="col-lg-4 col-sm-6 col-12 move-up wow" >
                        <div class="portfolio portfolio_style--1 mt--30">
                            <div class="thumb">
                                <img src="{{ $certificate->image }}" alt="certificate Images">
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
    @endif
    <!-- End Certificates Area -->


    <!-- Start Testimonial Area -->
    @if (App\Models\admin\Active_section::where('name', 'testimonial_section')->first()->value == '1')
        <div class="brook-testimonial-area ptb--100 ptb-md--80 ptb-sm--60 testimonialbg">

            <div class="container ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center wow move-up">
                            <h2 class="heading heading-h2 line-height-1-25 text-white">{{ setting('title_testimonial') }}</h2>
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
                                <div class="testimonial testimonial_style--1 mh-100 d-inline-block testimonialhei">
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
                                @endforeach
                                <!-- End Single Testimonial -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- End Testimonial Area -->


    <!-- Start Blog Grid Area -->
    @if (App\Models\admin\Active_section::where('name', 'blog_section')->first()->value == '1')
        <div class="bk-blog-grid-area ptb--80 ptb-md--80 ptb-sm--60 blogbg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-6 col-sm-12 col-12">
                        <div class="brook-section-title">
                            <h2 class="heading heading-h2">{{ setting('title_blog') }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6 col-sm-12 col-12">
                        <div class="blog-btn text-md-end text-start view-more-btn heding-color font-700 mt_sm--30">
                            <a href="{{ route('blogs') }}"><span>View all blogs</span><span class="post-read-more btn-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Single Blog -->
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt--70 ">
                        <div class="blog-grid blog-grid--modern blog-standard blog-yellow-color blogflex">
                            <div class="post-thumb">
                                <a href="{{url('blog/' . $blog->slug)}}">
                                    <img src="{{ $blog->thumbnail }}" alt="Multipurpose template">
                                </a>
                            </div>
                            <div class="post-content text-center">
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
    @endif
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
    @if (App\Models\admin\Active_section::where('name', 'client_section')->first()->value == '1')
        <div class="brook-counterup-area poss_relative wavify-activation ptb--80 ptb-md--80 ptb-sm--60 bg_color--1">

            {{-- <div class="wavify-wrapper">
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
            </div> --}}
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
                                <img src="{{asset($client->image)}}" alt="Clients Image">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Counter -->
                </div>

            </div>
        </div>
        <!-- End Counterup Area -->
    @endif

    @include('web.call')
@endsection


@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

    <!-- JavaScript for filtering -->
    <script>
        $(document).ready(function() {
            // Initialize Isotope
            var $grid = $('.portfolio-grid-metro6').isotope({
                itemSelector: '.portfolio-33-33',
                layoutMode: 'fitRows'
            });
        
            // Category filter button click event
            $('.messonry-button button').on('click', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });
        
            // Change is-checked class on buttons
            $('.messonry-button button').on('click', function() {
                $('.messonry-button button').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });
    </script>

@endsection