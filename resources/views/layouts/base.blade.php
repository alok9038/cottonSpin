
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jinna Gik">
    <meta name="description" content="UMAYA Template is a uniquely HTML5 template develop in HTML with a modern look.">
    <meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

    <title>UMAYA</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <!-- preloader-loading start -->
    <div class="preloader__logoload-box">
        <img class="preloader__logo" src="assets/images/logo/logo-white.png" alt="logo">
        <div class="preloader__pulse"></div>
    </div>
    <!-- preloader-loading end -->

    <!-- pointer start -->
    <div class="pointer js-pointer" id="js-pointer">
        <i class="pointer__inner fas fa-long-arrow-alt-right"></i>
        <i class="pointer__inner fas fa-search"></i>
        <i class="pointer__inner fas fa-link"></i>
    </div>
    <!-- pointer end -->

    <!-- to top btn start -->
    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
			<span class="scroll-to-btn__box">
				<span class="scroll-to-btn__arrow"></span>
			</span>
		</a>
    <!-- to top btn end -->

    <!-- scroll down btn start -->
    <a href="#down" class="scroll-to-btn to-down js-headroom js-midnight-color js-smooth-scroll js-pointer-large js-scroll-btn">
			<span class="scroll-to-btn__box">
				<span class="scroll-to-btn__arrow"></span>
			</span>
		</a>
    <!-- scroll down btn end -->

    <!-- header start -->
    <header class="fixed-header">
        <!-- logo start -->
        <div class="header-logo js-midnight-color js-headroom">
            <div class="hidden-box">
                <a href="index.html" class="header-logo__box js-pointer-large js-animsition-link">
						<img class="header-logo__img white" src="assets/images/logo/logo-white.png" alt="logo">
						<img class="header-logo__img black" src="assets/images/logo/logo-black.png" alt="logo">
					</a>
            </div>
        </div>
        <!-- logo end -->

        <!-- menu-icon start -->
        <div class="menu-icon js-menu-open-close js-pointer-large js-midnight-color js-headroom">
            <div class="menu-icon__box">
                <span class="menu-icon__inner"></span>
                <span class="menu-icon__close"></span>
            </div>
        </div>
        <!-- menu-icon end -->

        <!-- header-contact start -->
        <div class="header-contact js-midnight-color js-headroom">
            <div class="header-contact__flex">
                <div class="header-contact__anim">
                    <a href="#" class="header-contact__btn vertical-text center js-pointer-large">
							<span class="vertical-text__inner"><i class="far fa-comment-dots"></i> Get in touch</span>
						</a>
                </div>
            </div>
        </div>
        <!-- header-contact end -->

        <!-- header-social start -->
        <div class="header-social after-preloader-anim js-midnight-color js-headroom">
            <ul class="list list_center list_margin-20px hidden-box">
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="#" class="anim-slide js-pointer-small">
								<i class="fab fa-facebook-f"></i>
							</a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="#" class="anim-slide tr-delay-02 js-pointer-small">
								<i class="fab fa-twitter"></i>
							</a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="#" class="anim-slide tr-delay-04 js-pointer-small">
								<i class="fab fa-instagram"></i>
							</a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="#" class="anim-slide tr-delay-06 js-pointer-small">
								<i class="fab fa-behance"></i>
							</a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="#" class="anim-slide tr-delay-08 js-pointer-small">
								<i class="fab fa-dribbble"></i>
							</a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="#" class="anim-slide tr-delay-10 js-pointer-small">
								<i class="fab fa-youtube"></i>
							</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- header-social end -->
    </header>
    <!-- header end -->

    <!-- navigation start -->
    <nav class="nav-container pos-rel js-dropdown-active-box">
        <!-- pos-rel start -->
        <div class="pos-rel height-100perc">
            <!-- dropdown close btn start -->
            <div class="dropdown-close">
                <div class="dropdown-close__inner js-dropdown-close js-pointer-large">
                    <span class="dropdown-close__arrow"></span>
                </div>
            </div>
            <!-- dropdown close btn end -->

            <!-- js-nav-slider-bg start -->
            <div class="js-nav-slider-bg">
                <!-- swiper-wrapper start -->
                <div class="swiper-wrapper">
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg" style="background-image:url(assets/images/projects/speakers/revolt-BMest61rcqs-unsplash.jpg)"></div>
                        <div class="bg-overlay-black"></div>
                    </div>
                    <!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg" style="background-image:url(assets/images/projects/sneakers/revolt-164_6wVEHfI-unsplash.jpg)"></div>
                        <div class="bg-overlay-black"></div>
                    </div>
                    <!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg" style="background-image:url(assets/images/projects/black-bike/josh-nuttall-pIwu5XNvXpk-unsplash.jpg)"></div>
                        <div class="bg-overlay-black"></div>
                    </div>
                    <!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg" style="background-image:url(assets/images/projects/pexels/woman-in-black-sexy-top-2825034.jpg)"></div>
                        <div class="bg-overlay-black"></div>
                    </div>
                    <!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg" style="background-image:url(assets/images/projects/furniture/goashape-RvyJGaoaWrs-unsplash.jpg)"></div>
                        <div class="bg-overlay-black"></div>
                    </div>
                    <!-- swiper-slide end -->
                </div>
                <!-- swiper-wrapper end -->
            </div>
            <!-- js-nav-slider-bg end -->

            <!-- menu-box start -->
            <ul class="menu-box">
                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-dropdown-open">
                    <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Home">Home</span>
						</a>

                    <!-- dropdown start -->
                    <ul class="menu-box dropdown js-dropdown">
                        <li class="nav-btn-box">
                            <a href="home_creative-agency.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Creative agency">Creative agency</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="home_interior-design.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Interior design">Interior design</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="home_corporate.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Corporate">Corporate</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="home_freelancer.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Freelancer">Freelancer</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="home_musician.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Musician">Musician</span>
								</a>
                        </li>
                    </ul>
                    <!-- dropdown end -->
                </li>
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-dropdown-open">
                    <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Pages">Pages</span>
						</a>

                    <!-- dropdown start -->
                    <ul class="menu-box dropdown js-dropdown">
                        <li class="nav-btn-box">
                            <a href="pages_about-us.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="About us">About us</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="pages_who-we-are.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Who we are">Who we are</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="pages_what-we-do.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="What We Do">What We Do</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="pages_agency.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Agency">Agency</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="pages_services.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Services">Services</span>
								</a>
                        </li>
                    </ul>
                    <!-- dropdown end -->
                </li>
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-dropdown-open">
                    <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Portfolio">Portfolio</span>
						</a>

                    <!-- dropdown start -->
                    <ul class="menu-box dropdown js-dropdown">
                        <li class="nav-btn-box">
                            <a href="portfolio_parallax.html" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Parallax">Parallax</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_parallax-2.html" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Parallax 2">Parallax 2</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_freemode.html" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Freemode">Freemode</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_columns.html" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Columns">Columns</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_columns-parallax.html" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Columns parallax">Columns parallax</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_fade.html" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Fade">Fade</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_fade-horizontal.html" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Fade horizontal">Fade horizontal</span>
								</a>
                        </li>
                    </ul>
                    <!-- dropdown end -->
                </li>
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-dropdown-slider-open">
                    <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Projects">Projects</span>
						</a>

                    <!-- dropdown start -->
                    <div class="dropdown js-dropdown">
                        <!-- js-nav-slider start -->
                        <div class="js-nav-slider">
                            <!-- swiper-wrapper start -->
                            <ul class="swiper-wrapper">
                                <!-- swiper-slide start -->
                                <li class="nav-btn-box swiper-slide">
                                    <div class="hidden-box">
                                        <a href="project_drone.html" class="nav-btn small js-animsition-link js-pointer-large">
												<span class="nav-btn__inner" data-text="Speakers">Speakers</span>
											</a>
                                    </div>
                                </li>
                                <!-- swiper-slide end -->
                                <!-- swiper-slide start -->
                                <li class="nav-btn-box swiper-slide">
                                    <div class="hidden-box">
                                        <a href="project_drone.html" class="nav-btn small js-animsition-link js-pointer-large">
												<span class="nav-btn__inner" data-text="Sneakers">Sneakers</span>
											</a>
                                    </div>
                                </li>
                                <!-- swiper-slide end -->
                                <!-- swiper-slide start -->
                                <li class="nav-btn-box swiper-slide">
                                    <div class="hidden-box">
                                        <a href="project_drone.html" class="nav-btn small js-animsition-link js-pointer-large">
												<span class="nav-btn__inner" data-text="Black Bike">Black Bike</span>
											</a>
                                    </div>
                                </li>
                                <!-- swiper-slide end -->
                                <!-- swiper-slide start -->
                                <li class="nav-btn-box swiper-slide">
                                    <div class="hidden-box">
                                        <a href="project_drone.html" class="nav-btn small js-animsition-link js-pointer-large">
												<span class="nav-btn__inner" data-text="Pexels">Pexels</span>
											</a>
                                    </div>
                                </li>
                                <!-- swiper-slide end -->
                                <!-- swiper-slide start -->
                                <li class="nav-btn-box swiper-slide">
                                    <div class="hidden-box">
                                        <a href="project_drone.html" class="nav-btn small js-animsition-link js-pointer-large">
												<span class="nav-btn__inner" data-text="Furniture">Furniture</span>
											</a>
                                    </div>
                                </li>
                                <!-- swiper-slide end -->
                            </ul>
                            <!-- swiper-wrapper end -->

                            <!-- swiper-button-prev start -->
                            <div class="swiper-button-prev-box">
                                <div class="dropdown-slider-controls">
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                            <!-- swiper-button-prev end -->
                            <!-- swiper-button-next start -->
                            <div class="swiper-button-next-box">
                                <div class="dropdown-slider-controls">
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <!-- swiper-button-next end -->

                            <!-- swiper-pagination start -->
                            <div class="pagination-box">
                                <div class="dropdown-slider-controls">
                                    <div class="swiper-pagination counter-pagination"></div>
                                </div>
                            </div>
                            <!-- swiper-pagination end -->
                        </div>
                        <!-- js-nav-slider end -->
                    </div>
                    <!-- dropdown end -->
                </li>
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-dropdown-open">
                    <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Blog">Blog</span>
						</a>

                    <!-- dropdown start -->
                    <ul class="menu-box dropdown js-dropdown">
                        <li class="nav-btn-box">
                            <a href="blog_sidebar.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Sidebar">Sidebar</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="blog_grid.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Grid">Grid</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="blog_sliders.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Sliders">Sliders</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="blog_filter.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Filter">Filter</span>
								</a>
                        </li>
                    </ul>
                    <!-- dropdown end -->
                </li>
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="contact.html" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Contact">Contact</span>
						</a>
                </li>
                <!-- nav-btn-box end -->
            </ul>
            <!-- menu-box end -->

            <!-- nav-information start -->
            <div class="nav-information">
                <!-- nav-email start -->
                <div>
                    <div class="hidden-box d-inline-block">
                        <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Email</div>
                    </div>
                    <div class="nav-fade-anim js-nav-anim margin-top-10">
                        <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">email@umaya_agency.com</a><br>
                        <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">email@umaya_job.com</a>
                    </div>
                </div>
                <!-- nav-email end -->

                <!-- nav-address start -->
                <div>
                    <div class="hidden-box d-inline-block">
                        <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Address</div>
                    </div>
                    <div class="nav-fade-anim js-nav-anim margin-top-10">
                        <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">
								PO Box 223158 Oliver Street<br>
								East Victoria 2006 UK
							</a>
                    </div>
                </div>
                <!-- nav-address end -->

                <!-- nav-phone start -->
                <div>
                    <div class="hidden-box d-inline-block">
                        <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Phone</div>
                    </div>
                    <div class="nav-fade-anim js-nav-anim margin-top-10">
                        <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+23 8 8532 7834</a><br>
                        <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+23 8 9635 7335</a>
                    </div>
                </div>
                <!-- nav-phone end -->
            </div>
            <!-- nav-information end -->

            <!-- nav-copyright start -->
            <div class="nav-copyright text-right">
                <p class="copyright-style nav-fade-anim js-nav-anim">
                    &copy; Copyright 2020 UMAYA. Template by <a href="#" class="text-weight-700 js-pointer-small">Jinna Gik</a>
                </p>
            </div>
            <!-- nav-copyright end -->
        </div>
        <!-- pos-rel end -->
    </nav>
    <!-- navigation end -->

    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">
        @yield('content')
    </main>
    <!-- main end -->

    <!-- footer start -->
    <footer class="fixed-footer pos-rel bg-img-cover js-fixed-footer" style="background-image:url(assets/images/backgrounds/man-holding-videocamera-standing-in-studio-3379943.jpg)">
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
                                <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Home</a>
                            </li>
                            <li>
                                <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">About</a>
                            </li>
                            <li>
                                <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Services</a>
                            </li>
                            <li>
                                <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Portfolio</a>
                            </li>
                            <li>
                                <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Blog</a>
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
                                <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">email@umaya_agency.com</a><br>
                                <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">email@umaya_job.com</a>
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
                        &copy; Copyright 2020 UMAYA. Template by <a href="#" class="text-weight-700 js-pointer-small">Jinna Gik</a>
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
