@extends('layouts.base')
@section('content')
    <style>
        .js-scrollanim-active{
            color: rgb(196, 196, 196)
        }
        .headline-xxxs{
            -webkit-font-smoothing: antialiased;
            font-size: 33px;
            font-weight: 700
        }
        .body-text-xs{
            font-size: 18px
        }
    </style>
    <!-- main start -->
        <!-- page head start -->
        <section id="up" class="lines-section pos-rel anim-lines section-bg-dark-1">
            <!-- lines-container start -->
            <video class="video-tag desktop" autoplay style="object-fit: cover; height:100vh; width:100%" id="bestcotton_vidD" muted="muted" loop="">
                <source src="{{ asset('subs/Sustainbility_Header_C.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>
        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel padding-top-bottom-120">
                <!-- container start -->
                <div class="container medium" style="width:calc(100% - 200px)!important">
                    <!-- blog-entry start -->
                    <article class="flex-container flex-align-center padding-top-60">
                        <div class="six-columns padding-top-30">
                            <a href="post_dont-panic.html" class="d-block hover-box anim-img-reveal js-scrollanim js-pointer-large js-animsition-link js-scrollanim-active">
                                <div class="anim-img-reveal__hidden">
                                    <div class="anim-img-reveal__scale">
                                        <img class="img-hover-scale" style="border-radius: 25px" src="{{ asset('subs/1.webp') }}" alt="Post">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="six-columns padding-top-10">
                            <div class="column-l-margin-40 anim-fade js-scrollanim js-scrollanim-active">
                                    <h3 class="headline-xxxs">SUSTAINABILITY</h3>
                                    <p class="body-text-xs margin-top-20">Company carries out various campaigns and
                                        training workshops at regular intervals of time,
                                        where the company educates the farmers to
                                        grow better cotton with minimum waste and
                                        harm, by providing a better understanding of the
                                        soil as well as seeds and the proper plantation
                                        methods making agriculture more sustainable,
                                        productive and profitable for the farmers.</p>
                            </div>
                        </div>
                    </article><!-- blog-entry end -->

                    <article class="flex-container flex-align-center padding-top-60">
                        <div class="three-columns padding-top-30" style="display: flex; justify-content:end">
                            <h2 class="text-uppercase btmToTop" style="opacity: 0.64; transform: matrix(0, -1, 1, 0, 0, 0); font-size:30px; textAlign:end">FARMER STORY</h2>
                        </div>
                        <div class="nine-columns padding-top-10">
                            <div class="column-l-margin-40 anim-fade js-scrollanim js-scrollanim-active">
                                <video class="video-tag desktop" autoplay style="object-fit: cover; height:100vh; width:100%; border-radius:25px" id="bestcotton_vidD" muted="muted" loop="">
                                    <source src="{{ asset('subs/Farmers_Story_C.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </article><!-- blog-entry end -->

                    <article class="flex-container flex-align-center padding-top-60">
                        <div class="seven-columns padding-top-30">
                            <a href="post_dont-panic.html" class="d-block hover-box anim-img-reveal js-scrollanim js-pointer-large js-animsition-link js-scrollanim-active">
                                <div class="anim-img-reveal__hidden">
                                    <div class="anim-img-reveal__scale">
                                        <img class="img-hover-scale" style="border-radius: 25px" src="{{ asset('subs/2.webp') }}" alt="Post">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="five-columns padding-top-10">
                            <div class="column-l-margin-40 anim-fade js-scrollanim js-scrollanim-active">
                                    <h3 class="headline-xxxs">GREEN ENERGY</h3>
                                    <p class="body-text-xs margin-top-20">The more we care for Mother Nature; it will care for us. Omax makes power generation with wind and solar energy, which are renewable and pollution-free resource and reduces Carbon footprint.
                                        <strong>15 MW</strong> solar and wind plant</p>
                            </div>
                        </div>
                    </article><!-- blog-entry end -->
                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section>
        
@endsection
