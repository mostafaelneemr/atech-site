@extends('layouts.web.master')

@section('title')
    Contact - Atech
@endsection

@section('content')

    <!-- Start Contact Area -->
    <div class="contact-us-area ">
        <div class="contauner-fluid">
            @include('system.message')
            <div class="row">
                
                
                <div class="col-lg-6 col-md-6 col-12 bg_color--5 pl--270 pt--160 pb--160 pl_lg--50 pl_md--50 pt_md--80 pb_md--80 pl_sm--50 pr_sm--50 pt_sm--80 pb_sm--80">
                    <div class="contact-address-wrapper">
                        <div class="classic-address text-start">
                            <h4 class="heading heading-h4">{{ setting('location_title') }}</h4>
                            <div class="desc mt--15">
                                <p class="bk_pra line-height-2-22">{{ setting('address') }}</p>
                            </div>
                        </div>

                        <div class="classic-address text-start mt--60 ">
                            <h4 class="heading heading-h4">{{ setting('message_title') }}</h4>
                            <div class="desc mt--15 mb--80">
                                <p class="bk_pra line-height-1-87">
                                    <a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a> <br> 
                                    <a href="mailto:{{ setting('second_email') }}">{{ setting('second_email') }}</a> <br> 
                                    <a href="https://wa.me/{{ setting('phone') }}">{{ setting('phone') }}</a><br> 
                                    <a href="#">{{ setting('second_phone') }}</a><br> 
                                </p>
                            </div>
                            <div class="social-share social--transparent">
                                <a href="{{ setting('facebook') }}"><i class="fab fa-facebook"></i></a>
                                <a href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i></a>
                                <a href="{{ setting('linked') }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="{{ setting('dribbble') }}"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 bg_color--5 pt--160 pb--160 pl--60 pr--200 pr_lg--50 pr_md--50 pr_sm--50 pb_md--80 pt_md--80 pl_sm--50 pt_sm--80 pb_sm--80">
                    <div class="contact-form-inner">
                        <div class="brook-title mb--40">
                            <h1 class="heading heading-h4">{{ setting('contact_title') }}</h1>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form" action="{{ route('sendmail') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input name="name" id="name" type="text" placeholder="Name *" required>
                                        @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror

                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <input name="email" id="email" type="email" placeholder="Email *" required>
                                        @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror

                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <input type="text" name="phone" id="phone" placeholder="Phone number" required>
                                        @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror

                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <textarea name="message" id="message" placeholder="Your message" ></textarea>
                                        @error('message') <div class="alert alert-danger">{{ $message }}</div> @enderror

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