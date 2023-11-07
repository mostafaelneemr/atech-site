@extends('layouts.web.master')

@section('title')
    Contact - Atech
@endsection

@section('style')
    <style>
        .bgContact{
            background-color: #222933
        }
        .bgButton{
            background-color: #505e71 !important;
            border: 1px solid #222933 !important;
        }
    </style>
@endsection

@section('content')

    <!-- Start Contact Area -->
    <div class="contact-us-area bgContact">
        <div class="contauner-fluid">
            {{-- @include('system.message') --}}
            <div class="row">
                
                <div class="col-lg-6 col-md-6 col-12 pl--270 pt--160 pb--160 pl_lg--50 pl_md--50 pt_md--80 pb_md--80 pl_sm--50 pr_sm--50 pt_sm--80 pb_sm--80" >
                    <div class="contact-address-wrapper">
                        <div class="classic-address text-start">
                            <h4 class="heading heading-h4 text-white">{{ setting('location_title') }}</h4>
                            <div class="desc mt--15">
                                <p class="bk_pra line-height-2-22 text-white">{{ setting('address') }}</p>
                            </div>
                        </div>

                        <div class="classic-address text-start mt--30 ">
                            <h4 class="heading heading-h4 text-white">{{ setting('message_title') }}</h4>
                            <div class="desc mt--15 mb--80">
                                <p class="bk_pra line-height-1-87">
                                    <a class="text-white" href="mailto:{{ setting('email') }}">{{ setting('email') }}</a> <br> 

                                    @if (App\Models\setting::where('name' , 'second_email')->first()->value != Null)
                                        <a class="text-white" href="mailto:{{ setting('second_email') }}">{{ setting('second_email') }}</a> <br>
                                    @endif 

                                    <a class="text-white" href="https://wa.me/{{ setting('phone') }}">{{ setting('phone') }}</a><br> 
                                    
                                    @if (App\Models\setting::where('name' , 'second_phone')->first()->value != Null)    
                                        <a class="text-white" href="#">{{ setting('second_phone') }}</a><br> 
                                    @endif
                                </p>
                            </div>
                            <div class="social-share social--transparent">
                                <a class="text-white" href="{{ setting('facebook') }}"><i class="fab fa-facebook"></i></a>
                                <a class="text-white" href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                                <a class="text-white" href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i></a>
                                <a class="text-white" href="{{ setting('linked') }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a class="text-white" href="{{ setting('dribbble') }}"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12  pt--160 pb--160 pl--60 pr--200 pr_lg--50 pr_md--50 pr_sm--50 pb_md--80 pt_md--80 pl_sm--50 pt_sm--80 pb_sm--80">
                    <div class="contact-form-inner">
                        <div class="brook-title mb--40">
                            <h1 class="heading heading-h4 text-white">{{ setting('contact_title') }}</h1>
                        </div>

                        @if(Session::has('status'))
                            <div class="alert alert-success">
                                {{Session('status')}}
                            </div>
                        @endif

                        @if(Session::has('errors'))
                            <div class="alert alert-danger">
                                {{Session('errors')}}
                            </div>
                        @endif

                        <div class="contact-form">
                            <form name="contactForm" action="{{route('sendmail')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input name="name" id="name" type="text" placeholder="Name *" required>
                                        @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <input name="email" id="email" type="email" placeholder="Email *" required>
                                        @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <input type="text" id="phone" name="phone" placeholder="Phone number" required>
                                        @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <textarea name="message" id="message" placeholder="Your message"></textarea>
                                    </div>
    
                                    <div class="col-lg-12 mt--30">
                                        <input type="submit" value="Send Message" class="btn bgButton btn-primary" />
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