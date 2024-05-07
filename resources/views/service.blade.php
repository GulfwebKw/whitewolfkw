@extends('layouts.base')

@section('title')
    {{ $service->title }}
@endsection

@section('breadcrumb')
    <li><a href="{{ route('services') }}">Services</a></li>
    <li>{{ $service->title }}</li>
@endsection

@section('footerConcat' , true)


@section('body')
    <!-- About Section  -->
    <div id="about-2" class="about-section section-padding pb-60">
        <div class="container">
            @include('layouts.'.$service->template , ['image_1' => $service->image1 ? asset('storage/'.$service->image1) : null,'image_2' => $service->image2 ? asset('storage/'.$service->image2) : null,'title' => $service->title,'subTitle' => $service->subTitle,'content' => $service->content])
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

@endsection

