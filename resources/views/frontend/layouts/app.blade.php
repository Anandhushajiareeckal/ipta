<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Darpan | Home</title>
    <link rel="apple-touch-icon" href="https://rstheme.com/">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/hover-min.css') }}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/meanmenu.min.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
    <!-- lightbox css -->
    <link href="{{ asset('assets/frontend/css/lightbox.min.css') }}" rel="stylesheet">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/inc/custom-slider/css/nivo-slider.css') }}"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/inc/custom-slider/css/preview.css') }}" type="text/css"
        media="screen" />
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ asset('assets/frontend/js/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="home">
    <!--Preloader area Start here-->
    @include('frontend.layouts.preloader')
    <!--Preloader area end here-->

    <!--Header area start here-->
    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')

    <!-- Start scrollUp  -->
    <div id="return-to-top">
        <span>Top</span>
    </div>
    <!-- End scrollUp  -->

    <!-- Footer Area Section End Here -->

    <!-- all js here -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ asset('assets/frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.js') }}"></script>

    <!-- jquery.counterup js -->
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <!-- jquery light box -->
    <script src="{{ asset('assets/frontend/js/lightbox.min.js') }}"></script>
    <!-- Nivo slider js -->
    <script src="{{ asset('assets/frontend/inc/custom-slider/js/jquery.nivo.slider.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/frontend/inc/custom-slider/home.js') }}" type="text/javascript"></script>
    <!-- main js -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,ml,hi'
        }, 'google_translate_element');
    }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>


</html>
