@extends('layouts.base')

@section('title')
    {{ $post->title }}
@endsection

@section('breadcrumb')
    <li><a href="{{ route('posts') }}">News & Articles</a></li>
    <li>{{ $post->title }}</li>
@endsection

@section('footerConcat' , true)


@section('body')
    <!-- About Section  -->
    <div id="about-2" class="about-section section-padding pb-60">
        <div class="container">
            <div class="row align-items-center">
                @if($post->image)
                <div class="col-xl-12 col-lg-12 order-2 order-xl-1">
                    <div class="about-img-wrap mb-10 text-center">
                        <div class="image-one wow fadeInUp" data-wow-delay=".2s">
                            <img src="{{ $post->image ? asset('storage/'.$post->image) : null }}" alt="{{ $post->title }}" style="border-radius: 15px;">
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-xl-12 col-lg-12 order-1 order-xl-2">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <h6>{{ $post->subTitle . ' |  Created at:'. $post->created_at->diffForHumans() }}</h6>
                            <h2>{{ $post->title }}</h2>
                        </div>
                        <p>{!! nl2br(($post->content)) !!}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

