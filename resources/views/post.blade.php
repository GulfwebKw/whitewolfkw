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
            @include('layouts.rr' , ['image_1' => $post->image ? asset('storage/'.$post->image) : null,'image_2' => null,'title' => $post->title,'subTitle' => $post->subTitle . ' |  Created at:'. $post->created_at->diffForHumans(),'content' => $post->content])
        </div>
    </div>
@endsection

