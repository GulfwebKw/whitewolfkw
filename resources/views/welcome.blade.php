@extends('layouts.base')

@section('title')
    پنل مدیریت
@endsection

@section('body_class')
    dashboard
@endsection


@section('body')
    <div id="home-2" class="homepage-slides owl-carousel">
        @foreach($home->slideshow as $slider)
            <div class="single-slide-item">
                <div class="image-layer" style="background-image: url({{ asset('storage/'.$slider['image']) }});">
                    <!-- <div class="overlay"></div> -->
                </div>
                <div class="hero-area-content">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                                <div class="section-title">
                                    @if($slider['title'])
                                        <h1 style="max-width: 50%;">{{ $slider['title'] }}</h1>
                                    @endif
                                    @if($slider['description'])
                                        <p>{!! nl2br(e($slider['description'])) !!}</p>
                                    @endif
                                </div>
                                @if($slider['link'])
                                    <a href="{{ $slider['link'] }}" class="theme-btn">{{ $slider['button'] }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <!-- About Section  -->
    <div id="about-2" class="about-section section-padding pb-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5 order-2 order-xl-1">
                    <div class="about-img-wrap mb-10">
                        @if($home->aboutUsImage1)
                            <div class="image-one wow fadeInUp" data-wow-delay=".2s">
                                <img src="{{ asset('storage/'.$home->aboutUsImage1) }}" alt="{{ $home->aboutUsTitle }}">
                            </div>
                        @endif
                        @if($home->aboutUsImage2)
                            <div class="d-none d-sm-block image-two wow fadeInUp" data-wow-delay=".4s">
                                <img src="{{ asset('storage/'.$home->aboutUsImage2) }}" alt="{{ $home->aboutUsTitle }}">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 order-1 order-xl-2">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            @if($home->aboutUsTitle)
                                <h2>{{ $home->aboutUsTitle }}</h2>
                            @endif
                        </div>
                        <p>{!! nl2br(e($home->aboutUsContent)) !!}</p>
                        @if($home->aboutUsButtonLink)
                            <a href="{{ $home->aboutUsButtonLink }}"
                               class="theme-btn">{{ $home->aboutUsButtonLabel }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Service Section  -->
    <div id="service-2" class="service-section gray-bg section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="section-title">
                        <h6>What We Offer</h6>
                        <h2>Our Services</h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="service-slider owl-carousel">
                        @foreach($navbar_services as $navbar_service)
                        <div class="single-service-item">
                            <div class="service-icon">
{{--                                <span><i class="flaticon-oil-industry"></i></span>--}}
                                <x-icon name="{{ $navbar_service->icon }}" width="70px"/>
                            </div>
                            <div class="service-title">
                                <h4>{{ $navbar_service->title }}</h4>
                            </div>
                            <a href="{{ route('service' , ['Service' => $navbar_service->slug]) }}" class="service-link">
                                <i class="las la-long-arrow-alt-right"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if($home->ourMissionContent)
    <!-- Mission Section  -->
    <div class="mission-section dark-bg section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 text-center">
                    <div class="section-title">
                        <h6 class="text-white">{{ $home->ourMissionTitle }}</h6>
                        <h3 class="text-white">{!! nl2br(e($home->ourMissionContent)) !!}</h3>
                    </div>
                    <div class="author-info">
                        <h5 class="text-white">{{ $home->ourMissionFrom }}</h5>
                        <h6 class="text-white">{{ $home->ourMissionFromSubHeader}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Feature Section  -->

    <div id="feature-2" class="feature-section dark-bg section-padding pt-0">
        <div class="container">
            <div class="row">
                @foreach($home->ourMissionSlideshow as $slider)
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-feature-item" data-background="{{ asset('storage/'.$slider['image']) }}">
                        <div class="feature-info-wrap">
                            <div class="feature-num">
                                <span>0{{ $loop->iteration }}</span>
                            </div>
                            <div class="feature-title">
                                <h4>{{ $slider['title'] }}</h4>
{{--                                <p>Oil</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @if($home->ourMissionButtonLink)
                    <div class="col-xl-12 text-center mt-60">
                        <a href="{{ $home->ourMissionButtonLink }}"
                           class="theme-btn">{{ $home->ourMissionButtonLabel }}</a>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <!-- Project Section  -->

    <div id="project-2" class="project-section dark-bg section-padding pb-0">
        <div class="row gx-0">

            @foreach($home->ourMissionProductions as $slider)
            <div class="col-xl-3 col-lg-3 col-md-6">
                <a href="{{ $slider['link'] }}" class="single-project-item">
                    <div class="project-bg hoverImg">
                        <figure><img src="{{ asset('storage/'.$slider['image']) }}" alt="{{ $slider['title'] }}"></figure>
                    </div>
                    <div class="project-info">
                        <h5>{{ $slider['title'] }}</h5>
                        <p>Production</p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>



    <!-- Blog Section  -->
    <div id="blog-2" class="blog-section gray-bg section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 text-center">
                    <div class="section-title">
                        <h6>Our News</h6>
                        <h2>Oil & Gas Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="blog-carousel owl-carousel">


                    <a href="#" class="single-blog-item wow fadeInUp" data-wow-delay=".2s">
{{--                        @if($loop->odd)--}}
{{--                            <div class="blog-img hoverImg">--}}
{{--                                <figure><img src="assets/img/blog/2-1.jpg" alt=""></figure>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>Refinery</span>
                            </div>
                            <div class="blog-title">
                                <h4>Oil refining: three ways you can invest</h4>
                            </div>
                            <div class="blog-info">
                                <span>November 30 2023</span>
                                <span>1 comment</span>
                            </div>
                        </div>
{{--                        @if($loop->even)--}}
{{--                            <div class="blog-img hoverImg">--}}
{{--                                <figure><img src="assets/img/blog/2-1.jpg" alt=""></figure>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                    </a>


                </div>
            </div>
        </div>
    </div>

@endsection

