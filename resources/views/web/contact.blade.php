@extends('layouts.web.master')

@section('title')
    Contact - Atech
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
                        <h2 class="heading">C O N T A C T - U S</h2>
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

    <!-- Start Contact Area -->
    <div class="contact-us-area">
        <div class="contauner-fluid">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12 bg_color--1 pl--270 pt--160 pb--160 pl_lg--50 pl_md--50 pt_md--80 pb_md--80 pl_sm--50 pr_sm--50 pt_sm--80 pb_sm--80">
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


       <!--Google Map Area Start-->
       <div class="google-map-area bg_color--1 section text-center">
        <div class="ht-gmap3" id="htmap2" data-height="500" data-width="100%" data-zoom_enable="" data-zoom="10"
            data-map_type="roadmap" data-map_style="style11">
        </div>
     </div>
     <!--Google Map Area Start-->
@endsection

@section('script')

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGM-62ap9R-huo50hJDn05j3x-mU9151Y"></script>

<!--Google Map Active-->

<script>
    // Start Map 02
    jQuery(document).ready(function ($) {
        var gmMapDiv = $("#htmap2");
        (
            function ($) {
                if (gmMapDiv.length) {

                    var gmHeight = gmMapDiv.attr("data-height");
                    var gmWidth = gmMapDiv.attr("data-width");
                    var gmZoomEnable = gmMapDiv.attr("data-zoom_enable");
                    var gmZoom = gmMapDiv.attr("data-zoom");
                    gmMapDiv.width(gmWidth).height(gmHeight);
                    gmMapDiv.gmap3({
                        action: "init",
                        marker: {
                            values: [{
                                address: "30.06267207678815, 31.34459964458411",
                                data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
                                options: {
                                    icon: "",
                                    visible: false,
                                }
                            }],
                            events: {
                                click: function (marker, event, context) {
                                    if (context.data == 0) {
                                        return;
                                    }
                                    var map = $(this).gmap3("get");
                                    infowindow = $(this).gmap3({
                                        get: {
                                            name: "infowindow"
                                        }
                                    });
                                    if (infowindow) {
                                        infowindow.open(map, marker);
                                        infowindow.setContent(context.data);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: marker,
                                                options: {
                                                    content: context.data
                                                }
                                            }
                                        });
                                    }
                                }
                            }

                        },
                        overlay: {
                            values: [{
                                address: "30.06267207678815, 31.34459964458411",
                                data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
                                options: {
                                    content: '<div><div class="animated-dot">' +
                                        '<div class="middle-dot"></div>' +
                                        '<div class="signal"></div>' +
                                        '<div class="signal2"></div>' + '</div></div>',
                                }
                            }],
                            events: {
                                click: function (overlay, event, context) {
                                    if (context.data == 0) {
                                        return;
                                    }
                                    var map = $(this).gmap3("get");
                                    infowindow = $(this).gmap3({
                                        get: {
                                            name: "infowindow"
                                        }
                                    });
                                    if (infowindow) {
                                        infowindow.open(map, overlay);
                                        infowindow.setContent(context.data);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: overlay,
                                                options: {
                                                    content: context.data
                                                }
                                            }
                                        });
                                    }
                                }
                            }
                        },
                        map: {
                            options: {
                                zoom: parseInt(gmZoom),
                                zoomControl: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                mapTypeControl: false,
                                scaleControl: false,
                                scrollwheel: gmZoomEnable == 'enable' ? true : false,
                                streetViewControl: false,
                                draggable: true,
                                styles: [{
                                        "featureType": "water",
                                        "elementType": "geometry",
                                        "stylers": [{
                                                "color": "#e9e9e9"
                                            },
                                            {
                                                "lightness": 17
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "landscape",
                                        "elementType": "geometry",
                                        "stylers": [{
                                                "color": "#f5f5f5"
                                            },
                                            {
                                                "lightness": 20
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.fill",
                                        "stylers": [{
                                                "color": "#ffffff"
                                            },
                                            {
                                                "lightness": 17
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.stroke",
                                        "stylers": [{
                                                "color": "#ffffff"
                                            },
                                            {
                                                "lightness": 29
                                            },
                                            {
                                                "weight": 0.2
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.arterial",
                                        "elementType": "geometry",
                                        "stylers": [{
                                                "color": "#ffffff"
                                            },
                                            {
                                                "lightness": 18
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.local",
                                        "elementType": "geometry",
                                        "stylers": [{
                                                "color": "#ffffff"
                                            },
                                            {
                                                "lightness": 16
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "poi",
                                        "elementType": "geometry",
                                        "stylers": [{
                                                "color": "#f5f5f5"
                                            },
                                            {
                                                "lightness": 21
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "poi.park",
                                        "elementType": "geometry",
                                        "stylers": [{
                                                "color": "#dedede"
                                            },
                                            {
                                                "lightness": 21
                                            }
                                        ]
                                    },
                                    {
                                        "elementType": "labels.text.stroke",
                                        "stylers": [{
                                                "visibility": "on"
                                            },
                                            {
                                                "color": "#ffffff"
                                            },
                                            {
                                                "lightness": 16
                                            }
                                        ]
                                    },
                                    {
                                        "elementType": "labels.text.fill",
                                        "stylers": [{
                                                "saturation": 36
                                            },
                                            {
                                                "color": "#333333"
                                            },
                                            {
                                                "lightness": 40
                                            }
                                        ]
                                    },
                                    {
                                        "elementType": "labels.icon",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "transit",
                                        "elementType": "geometry",
                                        "stylers": [{
                                                "color": "#f2f2f2"
                                            },
                                            {
                                                "lightness": 19
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "administrative",
                                        "elementType": "geometry.fill",
                                        "stylers": [{
                                                "color": "#fefefe"
                                            },
                                            {
                                                "lightness": 20
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "administrative",
                                        "elementType": "geometry.stroke",
                                        "stylers": [{
                                                "color": "#fefefe"
                                            },
                                            {
                                                "lightness": 17
                                            },
                                            {
                                                "weight": 1.2
                                            }
                                        ]
                                    }
                                ],


                            }
                        }
                    });
                }
            }
        )(jQuery);
    });


    function showMap(lat, long){
        var coord = {lat:lat, lng:long };

        new google.maps.map(document.getElementById("map"), 
            {
                zoom:10,
                center:coord,

            }
        );

        showMap(0,0);
    }
</script>

@endsection