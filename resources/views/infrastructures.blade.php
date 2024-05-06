@extends('layouts.base')

@section('title' , 'Our Infrastructure')

@section('breadcrumb')
    <li>Infrastructure</li>
@endsection

@section('footerConcat' , true)


@section('body')
    <div class="row gx-5">
        @foreach($navbar_infrastructures as $navbar_infrastructure)
        <div class="col-md-4">
            <div class="service-items card border-0 rounded-0">
                <div class="card-header bg-transparent border-0">
                    <div class="service-icon">
{{--                        <span><i class="flaticon-oil-industry"></i></span>--}}
                        <x-icon name="{{ $navbar_infrastructure->icon }}" width="70px"/>
                    </div>
                </div>
                <div class="card-body">
                    <div class="service-title">
                        <h4>{{ $navbar_infrastructure->title }}</h4>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="{{ route('infrastructure' , ['Infrastructure' => $navbar_infrastructure->slug]) }}" class="service-link">
                        <i class="las la-long-arrow-alt-right"></i>
                    </a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
@endsection

