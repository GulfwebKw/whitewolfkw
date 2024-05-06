@extends('layouts.base')

@section('title')
    {{ $infrastructure->title }}
@endsection

@section('breadcrumb')
    <li><a href="{{ route('infrastructures') }}">Infrastructure</a></li>
    <li>{{ $infrastructure->title }}</li>
@endsection

@section('footerConcat' , true)


@section('body')
    @include('layouts.'.$infrastructure->template , ['image_1' => $infrastructure->image1 ? asset('storage/'.$infrastructure->image1) : null,'image_2' => $infrastructure->image2 ? asset('storage/'.$infrastructure->image2) : null,'title' => $infrastructure->title,'subTitle' => $infrastructure->subTitle,'content' => $infrastructure->content])
@endsection

