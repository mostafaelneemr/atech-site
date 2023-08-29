<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WeBuild - Bootstrap Coming Soon Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('build/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('build/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('build/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('build/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('build/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: WeBuild
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="{{ route('home') }}"><span>ATECH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <div class="contact-link float-left">
        <a href="{{ route('home') }}" class="scrollto">Home</a>
      </div>
      <div class="contact-link float-right">
        <a href="{{ route('contact') }}" class="scrollto">Contact Us</a>
      </div>

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>ATECH</h1>
      <h2>We're working hard to improve our website and we'll ready to launch after</h2>
      <div class="countdown" data-count="2023/10/3" data-template="%d days %h:%m:%s"></div>
    </div>
  </section><!-- End Hero -->




  <!-- Vendor JS Files -->
  <script src="{{asset('build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('build/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('build/assets/js/main.js')}}"></script>

</body>

</html>