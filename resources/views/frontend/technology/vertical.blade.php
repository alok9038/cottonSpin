@include('frontend.include.header')

    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">
        <!-- pos-rel start -->
        <section class="pos-rel">
            <!-- one-page-slider start -->
            <div class="js-columns-parallax-slider one-page-slider pos-rel">
                <!-- swiper-wrapper start -->
                <div class="swiper-wrapper">
                    <!-- swiper-slide start -->
                    <a href="#" class="swiper-slide hover-box js-animsition-link js-pointer-large">
                        <div class="swiper-parallax-img-box">
                            <video class="video-tag desktop" autoplay style="object-fit: cover; height:100vh; width:100%" id="bestcotton_vidD" muted="muted" loop="">
                                <source src="{{ asset('video/technology/grow.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="bg-overlay-black"></div>
                        <div class="pos-abs pos-left-bottom hover-move-up">
                            <div class="slider-preloader-anim">
                                <h2 class="vertical-text bottom">
                                    <span class="vertical-text__inner headline-m">We Grow</span>
                                </h2>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide hover-box js-animsition-link js-pointer-large">
                        <div class="swiper-parallax-img-box">
                            <video class="video-tag desktop" autoplay style="object-fit: cover; height:100vh; width:100%" id="bestcotton_vidD" muted="muted" loop="">
                                <source src="{{ asset('video/technology/process.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="bg-overlay-black"></div>
                        <div class="pos-abs pos-left-bottom hover-move-up">
                            <div class="slider-preloader-anim">
                                <h2 class="vertical-text bottom">
                                    <span class="vertical-text__inner headline-m">We Process </span>
                                </h2>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide hover-box js-animsition-link js-pointer-large">
                        <div class="swiper-parallax-img-box">
                            <video class="video-tag desktop" autoplay style="object-fit: cover; height:100vh; width:100%" id="bestcotton_vidD" muted="muted" loop="">
                                <source src="{{ asset('video/technology/spin.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="bg-overlay-black"></div>
                        <div class="pos-abs pos-left-bottom hover-move-up">
                            <div class="slider-preloader-anim">
                                <h2 class="vertical-text bottom">
                                    <span class="vertical-text__inner headline-m">We Spin </span>
                                </h2>
                            </div>
                        </div>
                    </a>
                    <!-- swiper-slide end -->
                </div>
                <!-- swiper-wrapper end -->

                <!-- swiper-button-prev start -->
                <div class="swiper-button-prev-box one-page-slider-arrow after-preloader-anim">
                    <div class="anim-fade">
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <!-- swiper-button-prev end -->
                <!-- swiper-button-next start -->
                <div class="swiper-button-next-box one-page-slider-arrow after-preloader-anim">
                    <div class="anim-fade tr-delay-03">
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <!-- swiper-button-next end -->

                <!-- swiper-pagination start -->
                <div class="pagination-box one-page-slider-pagination after-preloader-anim">
                    <div class="anim-fade tr-delay-06">
                        <div class="swiper-pagination counter-pagination"></div>
                    </div>
                </div>
                <!-- swiper-pagination end -->
            </div>
            <!-- one-page-slider end -->
        </section>
        <!-- pos-rel end -->
    </main>
    <!-- main end -->

    <!-- scripts -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>