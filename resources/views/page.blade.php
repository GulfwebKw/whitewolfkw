@extends('layouts.base')

@section('title')
    {{ $page->title }}
@endsection

@section('breadcrumb')
    <li>{{ $page->title }}</li>
@endsection

@section('footerConcat' , true)


@section('body')
    <!-- About Section  -->
    <div id="about-2" class="about-section section-padding pb-60">
        <div class="container">
            @include('layouts.'.$page->template , ['image_1' => $page->image1 ? asset('storage/'.$page->image1) : null,'image_2' => $page->image2 ? asset('storage/'.$page->image2) : null,'title' => $page->title,'subTitle' => $page->subTitle,'content' => $page->content])
        </div>
    </div>
@endsection

