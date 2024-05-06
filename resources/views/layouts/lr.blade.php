<div class="row align-items-center">
    <div class="col-xl-7 col-lg-7">
        <div class="about-content-wrap">
            <div class="section-title">
                <h6>{{ $subTitle }}</h6>
                <h2>{{ $title }}</h2>
            </div>
            <p>{!! nl2br(e($content)) !!}</p>
        </div>
    </div>
    <div class="col-xl-5 col-lg-5">
        <div class="about-img-wrap mt-10">
            @if($image_1)
                <div class="image-one wow fadeInUp" data-wow-delay=".2s">
                    <img src="{{ $image_1 }}" alt="{{ $title }}">
                </div>
            @endif
            @if($image_2)
                <div class="image-two wow fadeInUp" data-wow-delay=".4s">
                    <img src="{{ $image_2 }}" alt="{{ $title }}">
                </div>
            @endif
        </div>
    </div>
</div>
