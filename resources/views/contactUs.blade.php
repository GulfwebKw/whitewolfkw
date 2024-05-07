@extends('layouts.base')

@section('title')
    Contact Us
@endsection


@section('breadcrumb')
    <li>Contact Us</li>
@endsection

@section('body')


    <div class="contact-page">

        <div class="contact-info-wrapper section-padding pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <img src="{{ asset('assets/img/contact/1.png') }}" alt="">
                            </div>
                            <p>{{ $setting->officeAddress }}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <img src="{{ asset('assets/img/contact/2.png') }}" alt="">
                            </div>
                            <p>{{ $setting->email }}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <img src="{{ asset('assets/img/contact/3.png') }}" alt="">
                            </div>
                            <p><a href="tel:{{ str_replace(' ', '' , $setting->phone) }}">{{ $setting->phone }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section mb-50">
            <div class="row">
                <div class="col-md-6">
                    <div class="googleLocation">
                        <div id="map" style="border:0;z-index: 90;height:100vh;width:600px;" ></div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
                    <script>
                        var map = L.map('map').setView([{{ $setting->location['lat'] }}, {{ $setting->location['lng'] }}], 13);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                        }).addTo(map);
                        L.marker([{{ $setting->location['lat'] }}, {{ $setting->location['lng'] }}]).addTo(map)
                            .bindPopup('{{ $setting->title }}')
                            .openPopup();
                    </script>
                </div>
                <div class="col-md-6">
                    <div class="contact-form-wrap gray-bg">
                        <div class="section-title">
                            <h6>Get in Touch</h6>
                            <h2>Send Us Message</h2>
                        </div>
                        <div class="contact-form">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('sendContactUs') }}">
                                @csrf
                                <input type="text" required name="name" value="{{ old('name') }}" placeholder="Name">
                                <input type="email" required name="email" value="{{ old('email') }}" placeholder="Email">
                                <textarea name="message" required id="message" cols="30" rows="10" placeholder="Message">{{ old('message') }}</textarea>
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

