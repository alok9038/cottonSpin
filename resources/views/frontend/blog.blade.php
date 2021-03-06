@extends('layouts.base')
@section('content')
<section id="up" class="pos-rel section-bg-dark-1 js-home-slider fullscreen-slider">
    <!-- swiper-wrapper start -->
    <div class="swiper-wrapper">
        <!-- swiper-slide start -->
        <div class="swiper-slide">
            <!-- slide-bg -->
            <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url(assets/images/backgrounds/luca-bravo-ujhKqutt3f0-unsplash.jpg)"></div>
            <!-- bg-overlay -->
            <div class="bg-overlay-black"></div>

            <!-- content start -->
            <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                <div class="container small padding-top-bottom-120">
                    <h2 class="headline-xl">
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-02">We Generate</span>
                        </span>
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-03">Creative &</span>
                        </span>
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-04">Novation Ideas</span>
                        </span>
                    </h2>
                    <div class="margin-top-30 anim-fade tr-delay-08">
                        <a href="#" class="border-btn js-pointer-large">
                                <span class="border-btn__inner">Read more</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </a>
                    </div>
                </div>
            </div>
            <!-- content end -->
        </div>
        <!-- swiper-slide end -->

        <!-- swiper-slide start -->
        <div class="swiper-slide">
            <!-- slide-bg -->
            <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url(assets/images/projects/pexels/woman-in-black-sexy-top-2825034.jpg)"></div>
            <!-- bg-overlay -->
            <div class="bg-overlay-black"></div>

            <!-- content start -->
            <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                <div class="container small text-center padding-top-bottom-120">
                    <h2 class="headline-xl">
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-02">We???r Provided</span>
                        </span>
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-03">
                                    <span class="text-color-red">Best</span> Digital
                        </span>
                        </span>
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-04 text-color-red">Services</span>
                        </span>
                    </h2>
                    <div class="margin-top-30 anim-fade tr-delay-08">
                        <a href="#" class="border-btn js-pointer-large">
                                <span class="border-btn__inner">Read more</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </a>
                    </div>
                </div>
            </div>
            <!-- content end -->
        </div>
        <!-- swiper-slide end -->

        <!-- swiper-slide start -->
        <div class="swiper-slide">
            <!-- slide-bg -->
            <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url(assets/images/projects/black-bike/josh-nuttall-pIwu5XNvXpk-unsplash.jpg)"></div>
            <!-- bg-overlay -->
            <div class="bg-overlay-black"></div>

            <!-- content start -->
            <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                <div class="container small padding-top-bottom-120">
                    <h2 class="headline-xl">
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-02">Best Solutions</span>
                        </span>
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-03">& Ideas for</span>
                        </span>
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-04">Your Business</span>
                        </span>
                    </h2>
                    <div class="margin-top-30 anim-fade tr-delay-08">
                        <a href="#" class="border-btn js-pointer-large">
                                <span class="border-btn__inner">Read more</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </a>
                    </div>
                </div>
            </div>
            <!-- content end -->
        </div>
        <!-- swiper-slide end -->
    </div>
    <!-- swiper-wrapper end -->

    <!-- swiper-button-prev start -->
    <div class="swiper-button-prev-box fullscreen-slider-arrow after-preloader-anim">
        <div class="anim-fade">
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <!-- swiper-button-prev end -->
    <!-- swiper-button-next start -->
    <div class="swiper-button-next-box fullscreen-slider-arrow after-preloader-anim">
        <div class="anim-fade tr-delay-06">
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <!-- swiper-button-next end -->

    <!-- swiper-pagination start -->
    <div class="pagination-box fullscreen-slider-pagination after-preloader-anim">
        <div class="anim-fade tr-delay-03">
            <div class="swiper-pagination counter-pagination"></div>
        </div>
    </div>
    <!-- swiper-pagination end -->
</section>

<div class="container vh-100 bg-danger"></div>
@endsection
