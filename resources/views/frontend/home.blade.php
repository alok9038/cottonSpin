@extends('layouts.base')
@section('content')
    <!-- home slider start -->
    <section id="up" class="pos-rel section-bg-dark-1 js-home-slider fullscreen-slider">
        <!-- swiper-wrapper start -->
        <div class="swiper-wrapper">
            <!-- swiper-slide start -->
            <div class="swiper-slide">
                <!-- slide-bg -->
                <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url(https://omaxcotspin.com/img/Women_Empeworment.webp)"></div>
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
                <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url(https://omaxcotspin.com/img/farmers.webp)"></div>
                <!-- bg-overlay -->
                <div class="bg-overlay-black"></div>

                <!-- content start -->
                <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                    <div class="container small text-center padding-top-bottom-120">
                        <h2 class="headline-xl">
                            <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-02">We’r Provided</span>
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
                <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url({{ asset('slider/sewa.webp') }})"></div>
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
    <!-- home slider end -->

    <!-- about us start -->
    {{-- <section id="down" class="pos-rel section-bg-dark-2">
        <!-- pos-rel start -->
        <div class="pos-rel padding-top-bottom-120">
            <!-- flex-container start -->
            <div class="container flex-container padding-bottom-70">
                <!-- column start -->
                <div class="six-columns padding-bottom-20">
                    <!-- title start -->
                    <h2 class="column-l-r-margin-10 headline-m js-scrollanim">
                        <span class="hidden-box d-block">
                                <span class="anim-slide">
                                    We Are <span class="text-color-red">Creative</span>
                        </span>
                        </span>
                        <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-01 text-color-red">People</span>
                        </span>
                    </h2>
                    <!-- title end -->
                </div>
                <!-- column end -->

                <!-- column start -->
                <div class="six-columns padding-bottom-20">
                    <div class="column-l-r-margin-10">
                        <p class="body-text-s anim-text-reveal js-scrollanim">Pitchfork vaporware hella, vice next level art party subway tile swag portland. Cliche authentic photo booth, seitan sartorial iPhone brooklyn bicycle rights whatever small batch selvage affogato yuccie adaptogen vinyl. Sartorial
                            franzen tacos cardigan, offal gluten-free pour-over snackwave plaid four dollar toast. Messenger bag keffiyeh church-key, synth iPhone pabst leggings ethical. PBR&B cred hot chicken pork belly.</p>

                        <!-- list start -->
                        <ul class="list text-color-dadada margin-top-30 js-scrollanim">
                            <li class="list__item red dot hidden-box">
                                <div class="subhead-xxs anim-slide">Graphic Design</div>
                            </li>
                            <li class="list__item red dot hidden-box">
                                <div class="subhead-xxs anim-slide tr-delay-01">User Interface Design</div>
                            </li>
                            <li class="list__item red dot hidden-box">
                                <div class="subhead-xxs anim-slide tr-delay-02">User Experience Design</div>
                            </li>
                            <li class="list__item red dot hidden-box">
                                <div class="subhead-xxs anim-slide tr-delay-03">Web Design</div>
                            </li>
                            <li class="list__item red dot hidden-box">
                                <div class="subhead-xxs anim-slide tr-delay-04">Motion Design</div>
                            </li>
                            <li class="list__item red dot hidden-box">
                                <div class="subhead-xxs anim-slide tr-delay-05">Front-end Development</div>
                            </li>
                            <li class="list__item red dot hidden-box">
                                <div class="subhead-xxs anim-slide tr-delay-06">Back-end Development</div>
                            </li>
                        </ul>
                        <!-- list end -->
                    </div>
                </div>
                <!-- column end -->
            </div>
            <!-- flex-container end -->

            <!-- js-infinite-slider start -->
            <div class="js-infinite-slider about-slider hidden-box">
                <!-- swiper-wrapper start -->
                <div class="swiper-wrapper">
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <img src="assets/images/about/about_slider/people-holding-their-phones-3184435.jpg" alt="About us">
                    </div>
                    <!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <img src="assets/images/about/about_slider/fashion-people-woman-girl-3979213.jpg" alt="About us">
                        <img class="padding-top-20" src="assets/images/about/about_slider/men-writing-on-board-3184633.jpg" alt="About us">
                    </div>
                    <!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <img src="assets/images/about/about_slider/man-people-desk-laptop-3931391.jpg" alt="About us">
                    </div>
                    <!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <img src="assets/images/about/about_slider/photo-of-man-using-smartphone-3183191.jpg" alt="About us">
                    </div>
                    <!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <img src="assets/images/about/about_slider/fashion-woman-girl-cute-3979116.jpg" alt="About us">
                        <img class="padding-top-20" src="assets/images/about/about_slider/fashion-man-people-school-3799830.jpg" alt="About us">
                    </div>
                    <!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <img src="assets/images/about/about_slider/women-using-computers-3184348.jpg" alt="About us">
                    </div>
                    <!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <img src="assets/images/about/about_slider/man-wearing-purple-long-sleeved-shirt-looking-at-the-ipad-3184326.jpg" alt="About us">
                    </div>
                    <!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <img src="assets/images/about/about_slider/women-s-white-framed-sunglasses-2690323.jpg" alt="About us">
                        <img class="padding-top-20" src="assets/images/about/about_slider/fashion-man-sunglasses-people-3965233.jpg" alt="About us">
                    </div>
                    <!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <img src="assets/images/about/about_slider/fashion-woman-girl-cute-3979104.jpg" alt="About us">
                    </div>
                    <!-- swiper-slide end -->
                </div>
                <!-- swiper-wrapper end -->
            </div>
            <!-- js-infinite-slider end -->
        </div>
        <!-- pos-rel end -->
    </section> --}}
    <!-- about us end -->

    <!-- portfolio start -->
    <section class="pos-rel section-bg-light-2" data-midnight="black">
        <!-- pos-rel start -->
        <div class="pos-rel padding-top-bottom-120">
            <!-- title start -->
            <h2 class="headline-xxxl text-color-black text-center hidden-box js-scrollanim">
                <span class="anim-slide">
                        Recent <span class="text-color-red">Works</span>
                </span>
            </h2>
            <!-- title end -->

            <!-- filter-buttons start -->
            <div class="list list_row list_center list_margin-30px padding-top-90 js-filter-button-box js-scrollanim">
                <button class="list__item js-filter-button anim-fade js-pointer-small js-filter-button-active" data-filter="*">
                        <span class="flip-btn text-color-black" data-text="Everything">Everything</span>
                    </button>
                <button class="list__item js-filter-button anim-fade tr-delay-01 js-pointer-small" data-filter=".marketing">
                        <span class="flip-btn text-color-black" data-text="Cotton">Cotton</span>
                    </button>
                <button class="list__item js-filter-button anim-fade tr-delay-02 js-pointer-small" data-filter=".photoshoot">
                        <span class="flip-btn text-color-black" data-text="Products">Products</span>
                    </button>
                <button class="list__item js-filter-button anim-fade tr-delay-03 js-pointer-small" data-filter=".branding">
                        <span class="flip-btn text-color-black" data-text="Fabric">Fabric</span>
                    </button>
            </div>
            <!-- filter-buttons end -->

            <!-- js-isotope-filter-grid-box start -->
            <div class="js-isotope-filter-grid-box container full">
                <!-- empty grid -->
                <div class="js-isotope-filter-grid-item empty-grid-1px-33-50-none"></div>
                <div class="js-isotope-filter-grid-item empty-grid-200px-33-none"></div>
                <div class="js-isotope-filter-grid-item empty-grid-100px-33-50-none"></div>

                <!-- grid-item start -->
                <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item branding">
                    <a href="project_beauty-lab.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
                        <div class="anim-img-scale anim-img-scale_hover js-img-scale">
                            <img class="anim-img-scale__inner" src="{{ asset('product/p1.jpg') }}" alt="project">
                        </div>
                        <div class="margin-top-10 js-scrollanim">
                            <span class="hidden-box d-block">
                                    <span class="subhead-xxs text-color-red anim-slide">Branding</span>
                            </span>
                            <h3 class="hidden-box">
                                <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Beauty lab</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- grid-item end -->

                <!-- grid-item start -->
                <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
                    <a href="#" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
                        <div class="anim-img-scale anim-img-scale_hover js-img-scale">
                            <img class="anim-img-scale__inner" src="{{ asset('product/p2.jpg') }}" alt="project">
                        </div>
                        <div class="margin-top-10 js-scrollanim">
                            <span class="hidden-box d-block">
                                    <span class="subhead-xxs text-color-red anim-slide">Cotton</span>
                            </span>
                            <h3 class="hidden-box">
                                <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Sneakers</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- grid-item end -->

                <!-- grid-item start -->
                <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
                    <a href="#" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
                        <div class="anim-img-scale anim-img-scale_hover js-img-scale">
                            <img class="anim-img-scale__inner" src="{{ asset('product/p3.jpg') }}" alt="project">
                        </div>
                        <div class="margin-top-10 js-scrollanim">
                            <span class="hidden-box d-block">
                                    <span class="subhead-xxs text-color-red anim-slide">Cotton</span>
                            </span>
                            <h3 class="hidden-box">
                                <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Knit cap</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- grid-item end -->

                <!-- grid-item start -->
                <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
                    <a href="#" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
                        <div class="anim-img-scale anim-img-scale_hover js-img-scale">
                            <img class="anim-img-scale__inner" src="{{ asset('product/p4.jpg') }}" alt="project">
                        </div>
                        <div class="margin-top-10 js-scrollanim">
                            <span class="hidden-box d-block">
                                    <span class="subhead-xxs text-color-red anim-slide">Photoshoot</span>
                            </span>
                            <h3 class="hidden-box">
                                <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Pexels</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- grid-item end -->

                <!-- grid-item start -->
                <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
                    <a href="#" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
                        <div class="anim-img-scale anim-img-scale_hover js-img-scale">
                            <img class="anim-img-scale__inner" src="{{ asset('product/p5.jpg') }}" alt="project">
                        </div>
                        <div class="margin-top-10 js-scrollanim">
                            <span class="hidden-box d-block">
                                    <span class="subhead-xxs text-color-red anim-slide">Cotton</span>
                            </span>
                            <h3 class="hidden-box">
                                <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Drone</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- grid-item end -->

                <!-- grid-item start -->
                <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
                    <a href="project_blue-ridge.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
                        <div class="anim-img-scale anim-img-scale_hover js-img-scale">
                            <img class="anim-img-scale__inner" src="{{ asset('product/p6.jpg') }}" alt="project">
                        </div>
                        <div class="margin-top-10 js-scrollanim">
                            <span class="hidden-box d-block">
                                    <span class="subhead-xxs text-color-red anim-slide">Cotton</span>
                            </span>
                            <h3 class="hidden-box">
                                <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Blue ridge</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- grid-item end -->

                <!-- grid-item start -->
                <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
                    <a href="#" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
                        <div class="anim-img-scale anim-img-scale_hover js-img-scale">
                            <img class="anim-img-scale__inner" src="{{ asset('product/p7.jpg') }}" alt="project">
                        </div>
                        <div class="margin-top-10 js-scrollanim">
                            <span class="hidden-box d-block">
                                    <span class="subhead-xxs text-color-red anim-slide">Photoshoot</span>
                            </span>
                            <h3 class="hidden-box">
                                <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Hoop earrings</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- grid-item end -->

                <!-- grid-item start -->
                <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
                    <a href="#" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
                        <div class="anim-img-scale anim-img-scale_hover js-img-scale">
                            <img class="anim-img-scale__inner" src="{{ asset('product/p8.jpg') }}" alt="project">
                        </div>
                        <div class="margin-top-10 js-scrollanim">
                            <span class="hidden-box d-block">
                                    <span class="subhead-xxs text-color-red anim-slide">Photoshoot</span>
                            </span>
                            <h3 class="hidden-box">
                                <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Black eyes</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- grid-item end -->

                <!-- grid-item start -->
                <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item branding">
                    <a href="#" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
                        <div class="anim-img-scale anim-img-scale_hover js-img-scale">
                            <img class="anim-img-scale__inner" src="{{ asset('product/p9.jpg') }}" alt="project">
                        </div>
                        <div class="margin-top-10 js-scrollanim">
                            <span class="hidden-box d-block">
                                    <span class="subhead-xxs text-color-red anim-slide">Branding</span>
                            </span>
                            <h3 class="hidden-box">
                                <span class="headline-xxxs text-color-black anim-slide tr-delay-02">The ordinary</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- grid-item end -->
            </div>
            <!-- js-isotope-filter-grid-box end -->
        </div>
        <!-- pos-rel end -->
    </section>
    <!-- portfolio end -->

    <style>
        .hover-box{
            align-items: center
        }
    </style>
    <!-- team start -->
    <section class="pos-rel section-bg-dark-2">
        <!-- pos-rel start -->
        <div class="pos-rel padding-top-bottom-120">
            <!-- title start -->
            <h2 class="headline-xxl text-center js-scrollanim hidden-box">
                <span class="anim-slide">
                        Gallery
                </span>
            </h2>
            <!-- title end -->

            <!-- js-3-view-slider start -->
            <div class="js-3-view-slider padding-top-bottom-90 hidden-box pos-rel">
                <!-- swiper-wrapper start -->
                <div class="swiper-wrapper js-slider-scroll-anim" style="display: flex; justify-content:center; align-items:center">
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <!-- anim-img-scale start -->
                        <div class="anim-img-scale hover-box">
                            <img class="anim-img-scale__inner" style="border-radius: 15px" src="{{ asset('gallery/g1.jpg') }}" alt="Jason Hardeman">
                        </div>
                        <!-- anim-img-scale end -->

                        <!-- content start -->
                        <div class="margin-top-20 margin-left-20">
                            <h4 class="subhead-m anim-text-double-fill tr-delay-01" data-text="title">title</h4><br>
                            {{-- <p class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Creative director">Creative director</p> --}}
                        </div>
                        <!-- content end -->
                    </div>
                    <div class="swiper-slide">
                        <!-- anim-img-scale start -->
                        <div class="anim-img-scale hover-box">
                            <img class="anim-img-scale__inner" style="border-radius: 15px" src="{{ asset('gallery/g2.jpg') }}" alt="Jason Hardeman">
                        </div>
                        <!-- anim-img-scale end -->

                        <!-- content start -->
                        <div class="margin-top-20 margin-left-20">
                            <h4 class="subhead-m anim-text-double-fill tr-delay-01" data-text="title">title</h4><br>
                            {{-- <p class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Creative director">Creative director</p> --}}
                        </div>
                        <!-- content end -->
                    </div>
                    <div class="swiper-slide">
                        <!-- anim-img-scale start -->
                        <div class="anim-img-scale hover-box">
                            <img class="anim-img-scale__inner" style="border-radius: 15px" src="{{ asset('gallery/g3.jpg') }}" alt="Jason Hardeman">
                        </div>
                        <!-- anim-img-scale end -->

                        <!-- content start -->
                        <div class="margin-top-20 margin-left-20">
                            <h4 class="subhead-m anim-text-double-fill tr-delay-01" data-text="title">title</h4><br>
                            {{-- <p class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Creative director">Creative director</p> --}}
                        </div>
                        <!-- content end -->
                    </div>
                    <div class="swiper-slide">
                        <!-- anim-img-scale start -->
                        <div class="anim-img-scale hover-box">
                            <img class="anim-img-scale__inner" style="border-radius: 15px" src="{{ asset('gallery/g4.jpg') }}" alt="Jason Hardeman">
                        </div>
                        <!-- anim-img-scale end -->

                        <!-- content start -->
                        <div class="margin-top-20 margin-left-20">
                            <h4 class="subhead-m anim-text-double-fill tr-delay-01" data-text="title">title</h4><br>
                            {{-- <p class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Creative director">Creative director</p> --}}
                        </div>
                        <!-- content end -->
                    </div>

                    <!-- swiper-slide start -->
                    <div class="swiper-slide" style="display: flex; justify-content:center; align-items:center">
                        <!-- anim-img-scale start -->
                        <div class="anim-img-scale hover-box" style="border-radius: 50%; height: 100px; width:100px; background-color:rgb(255, 255, 255); display: flex; justify-content:center;">
                            {{-- <img class="anim-img-scale__inner" src="assets/images/team/team_slider/photo-of-woman-leaning-on-wall-2936815.jpg" alt="Ashley Keller"> --}}
                            <a href="{{ route('gallery') }}">
                                <div style="height: 50px; width:50px; background-color:white">
                                    <img src="{{ asset('arrow.png') }}" alt="">
                                </div>
                            </a>

                        </div>
                        <!-- anim-img-scale end -->
                    </div>
                    <!-- swiper-slide end -->
                </div>
                <!-- swiper-wrapper end -->

                <!-- swiper-button-prev start -->
                <div class="swiper-button-prev-box">
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- swiper-button-prev end -->
                <!-- swiper-button-next start -->
                <div class="swiper-button-next-box">
                    <div class="swiper-button-next"></div>
                </div>
                <!-- swiper-button-next end -->

                <!-- swiper-pagination start -->
                <div class="pagination-box">
                    <div class="swiper-pagination counter-pagination"></div>
                </div>
                <!-- swiper-pagination end -->
            </div>
            <!-- js-3-view-slider end -->
        </div>
        <!-- pos-rel end -->
    </section>
    <!-- team end -->

    <!-- clients start -->
    <section class="pos-rel section-bg-dark-1">
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- container start -->
            <div class="padding-top-bottom-120 container">
                <!-- title start -->
                <h2 class="headline-l js-scrollanim">
                    <span class="hidden-box d-block">
                            <span class="anim-slide">
                                <span class="text-color-red">Our Clients</span>
                    </span>
                    </span>
                    <span class="hidden-box d-block">
                            <span class="anim-slide tr-delay-01">We’ve Worked</span>
                    </span>
                    <span class="hidden-box d-block">
                            <span class="anim-slide tr-delay-02">With</span>
                    </span>
                </h2>
                <!-- title end -->

                <!-- clients-lines start -->
                <div class="clients-lines padding-top-90">
                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo1.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo1.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo2.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo2.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo3.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo3.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo4.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo4.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo5.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo5.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo6.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo6.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo7.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo7.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo11.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo11.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo12.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo12.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo13.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo13.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <div class="clients-lines__column">
                        <div class="clients-lines__inner hover-box pos-rel">
                            <img class="client-logo client-hover-out pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo8.webp" alt="clients logo">
                            <img class="client-logo client-hover-in pos-abs pos-center-center" src="https://omaxcotspin.com/img/logos/client-logo8.webp" alt="clients logo">
                        </div>
                    </div>
                    <!-- clients-lines__column end -->

                    <!-- clients-lines__column start -->
                    <a href="#" class="clients-lines__column js-pointer-large">
                        <div class="clients-lines__inner hover-box pos-rel js-scrollanim">
                            <div class="padding-left-right-20 subhead-xxs text-center pos-abs pos-center-center">
                                <span class="anim-text-double-fill" data-text="This spot">This spot</span><br>
                                <span class="anim-text-double-fill tr-delay-02" data-text="awaits">awaits</span><br>
                                <span class="anim-text-double-fill tr-delay-04" data-text="You">You</span>
                            </div>
                            <div class="border-left-anim in-10px red"></div>
                            <div class="border-top-anim in-10px red"></div>
                            <div class="border-right-anim in-10px red"></div>
                            <div class="border-bottom-anim in-10px red"></div>
                        </div>
                    </a>
                    <!-- clients-lines__column end -->
                </div>
                <!-- clients-lines end -->
            </div>
            <!-- container end -->
        </div>
        <!-- pos-rel end -->
    </section>
    <!-- clients end -->

    <!-- testimonials start -->
    <section class="pos-rel section-bg-light-1" data-midnight="black">
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- padding-top-bottom-120 start -->
            <div class="padding-top-bottom-120 width-100perc">
                <!-- title start -->
                <h2 class="headline-xxl text-color-black text-center hidden-box">
                    <span class="anim-slide js-scrollanim">Testimonials</span>
                </h2>
                <!-- title end -->

                <!-- js-2-view-slider start -->
                <div class="js-2-view-slider padding-top-bottom-90 hidden-box pos-rel">
                    <!-- swiper-wrapper start -->
                    <div class="swiper-wrapper js-slider-scroll-anim">
                        <!-- swiper-slide start -->
                        <div class="swiper-slide slide-scale-anim">
                            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
                                <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat
                                    kogi. Cloud bread cardigan messenger bag raw.</p>
                                <!-- anim-img-scale start -->
                                <div class="anim-img-scale testimonials-author border-radius-50perc">
                                    <img class="anim-img-scale__inner" src="assets/images/testimonials/woman-wearing-white-and-black-shirt-1388888.jpg" alt="author">
                                </div>
                                <!-- anim-img-scale end -->
                                <div class="margin-top-20 text-center">
                                    <span class="headline-xxxs text-color-black">Lucille Hatcher</span><br>
                                    <span class="subhead-xxs text-color-888888">Investor</span>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide slide-scale-anim">
                            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
                                <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Pitchfork vaporware hella, vice next level art party subway tile swag portland. Cliche authentic photo booth, seitan sartorial iPhone brooklyn bicycle rights whatever small batch selvage affogato yuccie adaptogen vinyl.
                                    Sartorial franzen tacos cardigan, offal gluten-free pour-over.</p>
                                <!-- anim-img-scale start -->
                                <div class="anim-img-scale testimonials-author border-radius-50perc">
                                    <img class="anim-img-scale__inner" src="assets/images/testimonials/man-standing-near-building-white-black-turtleneck-shirt-874158.jpg" alt="author">
                                </div>
                                <!-- anim-img-scale end -->
                                <div class="margin-top-20 text-center">
                                    <span class="headline-xxxs text-color-black">Edward Jordan</span><br>
                                    <span class="subhead-xxs text-color-888888">Cytotechnologist</span>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide slide-scale-anim">
                            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
                                <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Chambray enamel pin synth shabby chic palo santo. Franzen 90's man bun wayfarers, put a bird on it twee four loko roof party shabby chic kale chips photo booth salvia mixtape lumbersexual. Pug kickstarter hammock unicorn,
                                    cardigan ennui celiac roof party. Ramps pitchfork direct.</p>
                                <!-- anim-img-scale start -->
                                <div class="anim-img-scale testimonials-author border-radius-50perc">
                                    <img class="anim-img-scale__inner" src="assets/images/testimonials/informal-young-woman-listening-to-music-near-grunge-wall-3771823.jpg" alt="author">
                                </div>
                                <!-- anim-img-scale end -->
                                <div class="margin-top-20 text-center">
                                    <span class="headline-xxxs text-color-black">Mary Ross</span><br>
                                    <span class="subhead-xxs text-color-888888">Fashion designer</span>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide slide-scale-anim">
                            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
                                <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Copper mug vexillologist +1 prism iPhone fashion axe portland. Hella quinoa woke blog af umami tacos freegan vinyl snackwave microdosing. Fanny pack direct trade XOXO drinking vinegar. Live-edge kinfolk master cleanse
                                    brooklyn meh organic man braid. Actually humblebrag sriracha.</p>
                                <!-- anim-img-scale start -->
                                <div class="anim-img-scale testimonials-author border-radius-50perc">
                                    <img class="anim-img-scale__inner" src="assets/images/testimonials/photography-of-guy-wearing-yellow-hoodie-1183266.jpg" alt="author">
                                </div>
                                <!-- anim-img-scale end -->
                                <div class="margin-top-20 text-center">
                                    <span class="headline-xxxs text-color-black">Dwight Bell</span><br>
                                    <span class="subhead-xxs text-color-888888">Banquet manager</span>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide slide-scale-anim">
                            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
                                <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Bushwick tumeric slow-carb photo booth letterpress franzen kombucha tumblr listicle cronut waistcoat mustache. Jean shorts tilde swag cray. Microdosing heirloom wayfarers YOLO, church-key tattooed cred blue bottle viral
                                    lyft tacos retro. Bespoke drinking vinegar single-origin.</p>
                                <!-- anim-img-scale start -->
                                <div class="anim-img-scale testimonials-author border-radius-50perc">
                                    <img class="anim-img-scale__inner" src="assets/images/testimonials/man-standing-on-stairs-1254502.jpg" alt="author">
                                </div>
                                <!-- anim-img-scale end -->
                                <div class="margin-top-20 text-center">
                                    <span class="headline-xxxs text-color-black">Brian Amos</span><br>
                                    <span class="subhead-xxs text-color-888888">Health educator</span>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide end -->
                    </div>
                    <!-- swiper-wrapper end -->

                    <!-- swiper-button-prev start -->
                    <div class="swiper-button-prev-box">
                        <div class="swiper-button-prev black"></div>
                    </div>
                    <!-- swiper-button-prev end -->
                    <!-- swiper-button-next start -->
                    <div class="swiper-button-next-box">
                        <div class="swiper-button-next black"></div>
                    </div>
                    <!-- swiper-button-next end -->

                    <!-- swiper-pagination start -->
                    <div class="pagination-box">
                        <div class="swiper-pagination counter-pagination black"></div>
                    </div>
                    <!-- swiper-pagination end -->
                </div>
                <!-- js-2-view-slider end -->
            </div>
            <!-- padding-top-bottom-120 end -->
        </div>
        <!-- pos-rel end -->
    </section>
    <!-- testimonials end -->

    <!-- video content start -->
    <div class="pos-rel bg-img-cover height-100vh" style="background-image:url({{ asset('thumbnail.png') }})">
        <div class="bg-overlay-black"></div>
        <div class="pos-rel height-100perc">
            <a href="https://omaxcotspin.com/videos/compressed/Story_of_Omax.mp4" class="play-button js-popup-youtube js-pointer-large">
                    <span class="play-button__inner"></span>
                </a>
        </div>
    </div>
    <!-- video content end -->

    <!-- latest news start -->
    <section class="pos-rel section-bg-light-2" data-midnight="black">
        <!-- pos-rel start -->
        <div class="pos-rel padding-top-bottom-120">
            <!-- container start -->
            <div class="container small">
                <!-- title start -->
                <h2 class="headline-xxl text-color-black text-center hidden-box">
                    <span class="anim-slide js-scrollanim">
                            From the <span class="text-color-red">Blog</span>
                    </span>
                </h2>
                <!-- title end -->

                <!-- blog-entry start -->
                <article class="flex-container flex-align-center padding-top-60">
                    <div class="six-columns padding-top-30">
                        <a href="#" class="d-block hover-box anim-img-reveal js-scrollanim js-pointer-large js-animsition-link">
                            <div class="anim-img-reveal__hidden">
                                <div class="anim-img-reveal__scale">
                                    <img class="img-hover-scale" src="{{ asset('product/p9.jpg') }}" alt="Post">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="six-columns padding-top-30">
                        <div class="column-l-margin-40 anim-fade js-scrollanim">
                            <ul class="list list_row list_margin-30px">
                                <li class="list__item">
                                    <a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">By: Nancy Newton</a>
                                </li>
                                <li class="list__item">
                                    <a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">In: Art</a>
                                </li>
                                <li class="list__item">
                                    <a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">2020, March 2</a>
                                </li>
                            </ul>
                            <a href="#" class="margin-top-bottom-30 d-block js-pointer-large js-animsition-link">
                                <h3 class="headline-xxxs text-color-black">
                                    Home decor and furniture<br> stores near me
                                </h3>
                                <p class="body-text-xs margin-top-20 text-color-black">Plaid retro migas venmo lo-fi ethical artisan fingerstache seitan you probably haven't heard of them fam keffiyeh...</p>
                            </a>
                            <a href="#" class="skew-btn js-pointer-large js-animsition-link">
                                    <span class="skew-btn__box">
                                        <span class="skew-btn__content text-color-black">Continue reading</span>
                                        <span class="skew-btn__arrow black"></span>
                                    </span>
                                </a>
                        </div>
                    </div>
                </article>
                <!-- blog-entry end -->

                <!-- blog-entry start -->
                <article class="flex-container reverse flex-align-center padding-top-60">
                    <div class="six-columns padding-top-30">
                        <div class="column-r-margin-40 anim-fade js-scrollanim">
                            <ul class="list list_row list_margin-30px">
                                <li class="list__item">
                                    <a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">By: Jeffery Reder</a>
                                </li>
                                <li class="list__item">
                                    <a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">In: Culture</a>
                                </li>
                                <li class="list__item">
                                    <a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">2020, March 15</a>
                                </li>
                            </ul>
                            <a href="post_good-morning.html" class="margin-top-bottom-30 d-block js-pointer-large js-animsition-link">
                                <h3 class="headline-xxxs text-color-black">
                                    Good morning!<br> Have a nice day
                                </h3>
                                <p class="body-text-xs margin-top-20 text-color-black">Plaid retro migas venmo lo-fi ethical artisan fingerstache seitan you probably haven't heard of them fam keffiyeh...</p>
                            </a>
                            <a href="post_good-morning.html" class="skew-btn js-pointer-large js-animsition-link">
                                    <span class="skew-btn__box">
                                        <span class="skew-btn__content text-color-black">Continue reading</span>
                                        <span class="skew-btn__arrow black"></span>
                                    </span>
                                </a>
                        </div>
                    </div>
                    <div class="six-columns padding-top-30">
                        <a href="post_good-morning.html" class="d-block hover-box anim-img-reveal js-scrollanim js-pointer-large js-animsition-link">
                            <div class="anim-img-reveal__hidden">
                                <div class="anim-img-reveal__scale">
                                    <img class="img-hover-scale" src="{{ asset('product/p3.jpg') }}" alt="Post">
                                </div>
                            </div>
                        </a>
                    </div>
                </article>
                <!-- blog-entry end -->

                <!-- blog-entry start -->
                <article class="flex-container flex-align-center padding-top-60">
                    <div class="six-columns padding-top-30">
                        <a href="#" class="d-block hover-box anim-img-reveal js-scrollanim js-pointer-large js-animsition-link">
                            <div class="anim-img-reveal__hidden">
                                <div class="anim-img-reveal__scale">
                                    <img class="img-hover-scale" src="{{ asset('product/p7.jpg') }}" alt="Post">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="six-columns padding-top-30">
                        <div class="column-l-margin-40 anim-fade js-scrollanim">
                            <ul class="list list_row list_margin-30px">
                                <li class="list__item">
                                    <a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">By: Nick Hufnagel</a>
                                </li>
                                <li class="list__item">
                                    <a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">In: Design</a>
                                </li>
                                <li class="list__item">
                                    <a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">2020, April 7</a>
                                </li>
                            </ul>
                            <a href="#" class="margin-top-bottom-30 d-block js-pointer-large js-animsition-link">
                                <h3 class="headline-xxxs text-color-black">
                                    Home recording studio<br> interior design
                                </h3>
                                <p class="body-text-xs margin-top-20 text-color-black">Plaid retro migas venmo lo-fi ethical artisan fingerstache seitan you probably haven't heard of them fam keffiyeh...</p>
                            </a>
                            <a href="#" class="skew-btn js-pointer-large js-animsition-link">
                                    <span class="skew-btn__box">
                                        <span class="skew-btn__content text-color-black">Continue reading</span>
                                        <span class="skew-btn__arrow black"></span>
                                    </span>
                                </a>
                        </div>
                    </div>
                </article>
                <!-- blog-entry end -->
            </div>
            <!-- container end -->
        </div>
        <!-- pos-rel end -->
    </section>
    <!-- latest news end -->
{{-- </main> --}}
@endsection
