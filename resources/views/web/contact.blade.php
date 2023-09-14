@extends('layouts.web.master')

@section('title')
    Contact - Atech
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
                        <h2 class="heading">C O N T A C T - U S</h2>
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

    <!-- Start Contact Area -->
    <div class="contact-us-area ">
        <div class="contauner-fluid">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12 bg_color--5 pl--270 pt--160 pb--160 pl_lg--50 pl_md--50 pt_md--80 pb_md--80 pl_sm--50 pr_sm--50 pt_sm--80 pb_sm--80">
                    <div class="contact-address-wrapper">
                        <div class="classic-address text-start">
                            <h4 class="heading heading-h4">Visit our studio at</h4>
                            <div class="desc mt--15">
                                <p class="bk_pra line-height-2-22">{{ setting('address') }}</p>
                            </div>
                        </div>

                        <div class="classic-address text-start mt--60 ">
                            <h4 class="heading heading-h4">Message us</h4>
                            <div class="desc mt--15 mb--80">
                                <p class="bk_pra line-height-2-22"><a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a> <br> 
                                    <a href="https://wa.me/{{ setting('phone') }}">{{ setting('phone') }}</a></p>
                            </div>
                            <div class="social-share social--transparent">
                                <a href="{{ setting('facebook') }}"><i class="fab fa-facebook"></i></a>
                                <a href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i></a>
                                <a href="{{ setting('dribbble') }}"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 bg_color--5 pt--160 pb--160 pl--60 pr--200 pr_lg--50 pr_md--50 pr_sm--50 pb_md--80 pt_md--80 pl_sm--50 pt_sm--80 pb_sm--80">
                    <div class="contact-form-inner">
                        <div class="brook-title mb--40">
                            <h4 class="heading heading-h4">Send us a message</h4>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form" action="http://whizthemes.com/shohel/php/mail.php">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input name="con_name" type="text" placeholder="Name *">
                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <input name="con_email" type="text" placeholder="Email *">
                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <input type="text" placeholder="Phone number">
                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <textarea name="con_message" placeholder="Your message"></textarea>
                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <input type="submit" value="Send message">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact Area -->
@endsection

@section('script')
@endsection