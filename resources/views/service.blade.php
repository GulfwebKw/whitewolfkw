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
    @include('layouts.'.$service->template , ['image_1' => $service->image1 ? asset('storage/'.$service->image1) : null,'image_2' => $service->image2 ? asset('storage/'.$service->image2) : null,'title' => $service->title,'subTitle' => $service->subTitle,'content' => $service->content])
@endsection

