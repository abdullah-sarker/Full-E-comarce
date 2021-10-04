<!DOCTYPE html>
<html lang="en">


<!-- molla/index-2.html  22 Nov 2019 09:55:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-comarce</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('user/assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('user/assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('user/assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('user/assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{asset('user/assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{asset('user/assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('user/assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/responcis.css')}}">
</head>

<body>

    <header class="header">
         @include('user.header')
    </header><!-- End .header -->
        
    <main class="main">
        <!-- <div class="intro-section bg-lighter pt-5 pb-6">
            <div class="container"> -->

    @yield('content')
    
    </main><!-- End .main -->



    <footer class="footer footer-dark">
        @include('user.footer')
    </footer><!-- End .footer -->


    
</body>
     <!-- Plugins JS File -->
     <script src="{{asset('user/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('user/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('user/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('user/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('user/assets/js/main.js')}}"></script>


<!-- molla/index-2.html  22 Nov 2019 09:55:42 GMT -->
</html>