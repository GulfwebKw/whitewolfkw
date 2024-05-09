<div class="row align-items-center">
    <div class="col-xl-7 col-lg-7">
        <div class="about-content-wrap mr-10">
            <div class="section-title">
                <h6>{{ $subTitle }}</h6>
                <h2>{{ $title }}</h2>
            </div>
            <p>{!! nl2br(($content)) !!}</p>
        </div>
    </div>
    <div class="col-xl-5 col-lg-5">
        <div class="about-img-wrap mt-10">
            @if($image_1)
            <div class="image-one wow fadeInUp" data-wow-delay=".2s">
                <img src="{{ $image_1 }}" height="300" width="500" class="img-fluid" alt="{{ $title }}">
            </div>
            @endif
            @if($image_2)
            <div class="image-2 wow fadeInUp" data-wow-delay=".4s">
                <img src="{{ $image_2 }}" height="300" alt="{{ $title }}">
            </div>
            @endif
        </div>
    </div>
</div>
