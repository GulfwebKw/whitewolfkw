@extends('layouts.base')

@section('title' , 'Services')

@section('breadcrumb')
    <li>Services</li>
@endsection

@section('footerConcat' , true)


@section('body')
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
                    @foreach($posts as $post)
                    <a href="{{ route('post' , ['Post' => $post->slug]) }}" class="single-blog-item wow fadeInUp" data-wow-delay=".2s">
                        @if( $loop->odd )
                            <div class="blog-img hoverImg">
                                <figure><img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}"></figure>
                            </div>
                        @endif
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>{{ $post->subTitle }}</span>
                            </div>
                            <div class="blog-title">
                                <h4>{{ $post->title }}</h4>
                            </div>
                            <div class="blog-info">
                                <span>{{ $post->created_at->format('F d Y') }}</span>
                            </div>
                        </div>
                        @if( $loop->even )
                        <div class="blog-img hoverImg">
                            <figure><img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}"></figure>
                        </div>
                        @endif
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

