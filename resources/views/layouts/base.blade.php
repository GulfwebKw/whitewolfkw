<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>{{ $setting->title }} @hasSection('title')  | @yield("title") @endif</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield("head")
    <!--Favicon-->
    <link rel="icon" href="{{ asset('storage/'.$setting->logo) }}" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="{{ asset('assets/css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="{{ asset('assets/css/fontAwesomePro.css') }}" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Bar Filler CSS -->
    <link href="{{ asset('assets/css/barfiller.css') }}" rel="stylesheet">
    <!-- Magnific Popup Video -->
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <!-- Nice Select  -->
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <!-- Back to Top -->
    <link href="{{ asset('assets/css/backToTop.css') }}" rel="stylesheet">
    <!-- Metis Menu -->
    <link href="{{ asset('assets/css/metismenu.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    @yield("headScript")
</head>



<body>

<!-- Pre-Loader -->
<div id="loader"></div>
<!--<div class="cursor"></div>-->

<!-- Header Area  -->
<div class="header-area absolute-header">
    <div id="header-sticky">
        <div class="navigation">
            <div class="container">
                <div class="header-inner-box">
                    <!-- Logo -->
                    <div class="logo">
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('storage/'.$setting->logo) }}" height="150" width="150" class="img-fluid" alt="{{ $setting->title }}"></a>
                    </div>
                    <!-- Main Menu  -->
                    <div class="main-menu d-none d-lg-block">
                        <ul>
                            <li class="active"><a class="navlink" href="{{ url('/') }}">Home</a> </li>
                            <li><a class="navlink" href="#">About us</a>
                                <ul class="sub-menu">
                                    @foreach($navbar_pages as $navbar_page)
                                        <li><a href="{{ route('page' , ['Page' => $navbar_page->slug]) }}">{{ $navbar_page->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a class="navlink" href="{{ route('services') }}">Services</a>
                                <ul class="sub-menu">
                                    @foreach($navbar_services as $navbar_service)
                                        <li><a href="{{ route('service' , ['Service' => $navbar_service->slug]) }}">{{ $navbar_service->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a class="navlink" href="{{ route('infrastructures') }}">Infrastructure</a>
                                <ul class="sub-menu">
                                    @foreach($navbar_infrastructures as $navbar_infrastructure)
                                        <li><a href="{{ route('infrastructure' , ['Infrastructure' => $navbar_infrastructure->slug]) }}">{{ $navbar_infrastructure->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a class="navlink" href="{{ route('posts') }}">News and Articles</a></li>

                            <li><a class="navlink" href="contact.html">Contact us</a>
                        </ul>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-nav-bar d-block col-sm-1 col-6 d-lg-none">
                        <div class="mobile-nav-wrap">
                            <div id="hamburger">
                                <i class="las la-bars"></i>
                            </div>
                            <!-- mobile menu - responsive menu  -->
                            <div class="mobile-nav">
                                <button type="button" class="close-nav">
                                    <i class="las la-times-circle"></i>
                                </button>
                                <nav class="sidebar-nav">
                                    <ul class="metismenu" id="mobile-menu">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a class="has-arrow" href="#">About us</a>
                                            <ul class="sub-menu">
                                                @foreach($navbar_pages as $navbar_page)
                                                    <li><a href="{{ route('page' , ['Page' => $navbar_page->slug]) }}">{{ $navbar_page->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a class="has-arrow" href="{{ route('services') }}">Services</a>
                                            <ul class="sub-menu">
                                                @foreach($navbar_services as $navbar_service)
                                                    <li><a href="{{ route('service' , ['Service' => $navbar_service->slug]) }}">{{ $navbar_service->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a class="has-arrow" href="{{ route('infrastructures') }}">Infrastructure</a>
                                            <ul class="sub-menu">
                                                @foreach($navbar_infrastructures as $navbar_infrastructure)
                                                    <li><a href="{{ route('infrastructure' , ['Infrastructure' => $navbar_infrastructure->slug]) }}">{{ $navbar_infrastructure->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li><a href="{{ route('posts') }}">News and Articles</a></li>

                                        <li><a href="contact.html">Contact us</a></li>

                                    </ul>
                                </nav>
                                <div class="action-bar">
                                    <a href="mailto:{{ $setting->email }}"><i class="las la-envelope"></i>{{ $setting->email }}</a>
                                    <a href="tel:{{ str_replace(' ', '' , $setting->phone) }}"><i class="fal fa-phone"></i>{{ $setting->phone }}</a>
                                    <a href="contact.html" class="theme-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@hasSection('breadcrumb')
<!-- Hero Area -->
<div class="breadcrumb-area bread-bg">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="breadcrumb-title">
                    <h1>@yield("title")</h1>
                </div>
                <ul class="breadcrumbs">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    @yield("breadcrumb")
                </ul>
                <div class="breadcrumb-icon">
                    <i class="las la-angle-down"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@hasSection('body')
    @yield("body")
@endif

@hasSection('footerConcat')
<div class="cta-section section-padding pt-50 pb-50 theme-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="cta-title">
                    <div class="section-title">
                        <h2 class="text-white">We make creative solutions.</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 text-md-end">
                <div class="cta-btn">
                    <a href="contact.html" class="white-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="footer-up">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('storage/'.$setting->logo) }}" class="img-fluid" height="200" width="200" alt="{{ $setting->title }}">
                    </a>
                    <!-- <p>We provide the best techniques <br> to deliver superior performance. -->
                    <!-- </p> -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Office</h5>
                    <p>
                        {{ $setting->officeAddress }}
                    </p>
                    <div class="pobox">
                        <p><span class="text-white">Po Box:</span> {{ $setting->poBox }}</p>
                    </div>
                    <div class="company-email">
                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                    </div>
                    <div class="phone-number">
                        <p><a href="tel:{{ str_replace(' ', '' , $setting->phone) }}">{{ $setting->phone }}</a></p>
                    </div>

                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 com-sm-12">
                    <h5>Quick Links</h5>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                            @if($navbar_pages->first())
                            <a href="{{ route('page' , ['Page' => $navbar_pages->first()->slug]) }}">{{ $navbar_pages->first()->title }}</a>
                            @endif
                            <a href="{{ route('services') }}">Services</a>
                            <a href="{{ route('infrastructures') }}">Infrastructure</a>
                            <a href="{{ route('posts') }}"> News and Articles</a>
                            <a href="contact.html"> Contact us</a>
                        </li>
                    </ul>
                </div>
                <!--<div class="col-lg-3 col-md-6 col-sm-12">-->
                <!--    <h5>Get in Touch</h5>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <div class="social-area">-->
                <!--                <a href="#"><i class="lab la-facebook-f"></i>Facebook</a>-->
                <!--                <a href="#"><i class="lab la-instagram"></i>Instagram</a>-->
                <!--                <a href="#"><i class="lab la-linkedin-in"></i>linkedin</a>-->
                <!--                <a href="#"><i class="la la-skype"></i>Skype</a>-->
                <!--            </div>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</div>-->

            </div>
        </div>
    </div>
</footer>

<!-- Footer Bottom Area -->

<div class="footer-bottom">
    <div class="container">
        <div class="row justify-content-center align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p class="copyright-line">©{{ now()->format('Y') }} {{ $setting->title }}. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- Popper JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Wow JS -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Way Points JS -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<!-- Counter Up JS -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Slick Slider JS -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<!-- Isotope JS -->
<script src="{{ asset('assets/js/isotope-3.0.6-min.js') }}"></script>
<!-- Nice Select JS -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!-- Back To Top JS -->
<script src="{{ asset('assets/js/backToTop.js') }}"></script>
<!-- Metis Menu JS -->
<script src="{{ asset('assets/js/metismenu.js') }}"></script>
<!-- Progress Bar JS -->
<script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
<!-- Appear JS -->
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<!-- Odometer JS -->
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<!-- Zoom Js -->
<script src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
@yield("footerScript")
</body>
</html>
