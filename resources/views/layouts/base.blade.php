@include('frontend.include.header')
    <!-- navigation end -->

    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">
        @yield('content')
    </main>
    <!-- main end -->

    <!-- footer start -->
    <footer class="fixed-footer pos-rel bg-img-cover js-fixed-footer" style="background-image:url(https://omaxcotspin.com/img/ftr-bg.jpg)">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- container start -->
            <div class="container padding-top-bottom-120">
                <!-- footer-logo start -->
                <div class="footer-logo footer-logo-desktop-hidden padding-bottom-90">
                    <img class="footer-logo__img" src="assets/images/logo/logo-white.png" alt="logo">
                </div>
                <!-- footer-logo end -->

                <!-- flex-container start -->
                <div class="flex-container flex-align-center">
                    <!-- column start -->
                    <div class="eight-columns">
                        <h4 class="column-l-r-margin-10 headline-l footer-title">
                            The <span class="text-color-red">Best<br>Agency</span> for<br>Your Businnes
                        </h4>
                    </div>
                    <!-- column end -->
                    <!-- column start -->
                    <div class="four-columns footer-nav-mobile-padding">
                        <ul class="column-l-r-margin-10 footer-nav-list js-footer-hover-box">
                            <li>
                                <a href="{{ route('homepage') }}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" class="footer-nav__btn js-pointer-small js-footer-hover-link">About</a>
                            </li>
                            <li>
                                <a href="{{ route('privacy_policy') }}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('terms_of_use') }}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Terms of Use</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- column end -->
                </div>
                <!-- flex-container end -->

                <!-- flex-container start -->
                <div class="flex-container flex-justify-center padding-top-30">
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60 footer-email">
                        <div class="column-l-r-margin-10">
                            <div class="headline-xxxxs">Email</div>
                            <div class="margin-top-10">
                                <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">email@omax_agency.com</a><br>
                                <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">email@omax_job.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60 footer-address">
                        <div class="column-l-r-margin-10">
                            <div class="headline-xxxxs">Address</div>
                            <div class="margin-top-10">
                                <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">
										PO Box 223158 Oliver Street<br>
										East Victoria 2006 UK
									</a>
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60 footer-phone">
                        <div class="column-l-r-margin-10">
                            <div class="headline-xxxxs">Phone</div>
                            <div class="margin-top-10">
                                <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+23 8 8532 7834</a><br>
                                <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+23 8 9635 7335</a>
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
                <!-- flex-container end -->

                <!-- footer-social start -->
                <ul class="footer-social-desktop-hidden list list_center padding-top-90">
                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="Facebook">Facebook</a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="Dribbble">Dribbble</a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="Instagram">Instagram</a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="Youtube">Youtube</a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="Behance">Behance</a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="Twitter">Twitter</a>
                    </li>
                </ul>
                <!-- footer-social end -->

                <!-- footer-copyright start -->
                <div class="footer-copyright text-center pos-abs pos-bottom-center">
                    <p class="copyright-style">
                        &copy; Copyright 2022 Ultracures Technologies Pvt limited.
                    </p>
                </div>
                <!-- footer-copyright end -->
            </div>
            <!-- container end -->
        </div>
        <!-- pos-rel end -->
    </footer>
    <!-- footer end -->

    <!-- scripts -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>
</body>

</html>
