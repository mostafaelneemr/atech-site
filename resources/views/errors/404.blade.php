<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Error 404 || Atech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/icon.png">


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{asset('website/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/revoulation.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/style.min.css')}}">
</head>

<body class="template-color-1 template-font-1">

    <!-- Start PReloader -->
    <div id="page-preloader" class="page-loading clearfix">
        <div class="page-load-inner">
            <div class="preloader-wrap">
                <div class="wrap-2">
                    <div class=""> <img src="{{asset('website/assets/img/icons/brook-preloader.gif')}}" alt="Brook Preloader"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PReloader -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">


        <!-- Page Conttent -->
        <main class="page-content">
            <!-- Start 404 Area -->
            <div class="error-not-found">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="error-inner text-center">
                                <div class="image mb--55">
                                    <img src="{{asset('website/assets/img/icons/image_404.png')}}" alt="Multipurpose imaages">
                                </div>
                                <h3 class="heading heading-h3 text-white">Looks like you are lost.</h3>
                                <div class="error-text mt--20">
                                    <p class="text-white"> It looks like nothing was found at this location. You can either go back to the
                                        last page or go to homepage.</p>
                                    <div class="error-button-group mt--40">
                                        <a class="brook-btn bk-btn-theme btn-sd-size btn-rounded space-between" href="#" onclick="history.back()">Go back</a>
                                        <a class="brook-btn bk-btn-white btn-sd-size btn-rounded space-between" href="{{ route('home') }}">Homepage</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End 404 Area -->

        </main>
        <!--// Page Conttent -->
    </div>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{asset('website/assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('website/assets/js/plugins.min.js')}}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('website/assets/js/revolution.tools.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="{{asset('website/assets/js/revolution.extension.min.js')}}"></script>
    <script src="{{asset('website/assets/js/main.js')}}"></script>
    <script src="{{asset('website/assets/js/revoulation.js')}}"></script>

</body>

</html>