
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="omax">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

    <title>OMAX</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}

    <style>
        @keyframes rotating {
        from {
            -ms-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        }
        .rotating {
        -webkit-animation: rotating 2s linear infinite;
        -moz-animation: rotating 2s linear infinite;
        -ms-animation: rotating 2s linear infinite;
        -o-animation: rotating 2s linear infinite;
        animation: rotating 10s linear infinite;
        }
    </style>
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <!-- preloader-loading start -->
    <div class="preloader__logoload-box">
        <img class=" rotating" src="{{ asset('stamp.png') }}" alt="logo">
        <img class="preloader__logo" style="filter: filter: hue-rotate(90deg)!important;" src="{{ asset('cotton.png') }}" alt="logo">
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
                <a href="{{ route('homepage') }}" class="header-logo__box js-pointer-large js-animsition-link">
						<img class="header-logo__img white" src="https://omaxcotspin.com/img/omax.png" alt="logo">
						<img class="header-logo__img black" src="https://omaxcotspin.com/img/omax.png" alt="logo">
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
                            <a href="{{ route('about') }}" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="About us">About us</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="{{ route('privacy_policy') }}" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Privacy Policy">Privacy Policy</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="{{ route('terms_of_use') }}" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Terms Of Use">Terms Of Use</span>
								</a>
                        </li>
                       
                    </ul>
                    <!-- dropdown end -->
                </li>
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-dropdown-open">
                    <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Product">Product</span>
						</a>

                    <!-- dropdown start -->
                    <ul class="menu-box dropdown js-dropdown">
                        <li class="nav-btn-box">
                            <a href="{{ route('product.range') }}" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Product Range">Product Range</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="{{ route('certifications') }}" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Certifications">Certifications</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="{{ route('sustainability') }}" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Sustainability">Sustainability</span>
								</a>
                        </li>
                    </ul>
                    <!-- dropdown end -->
                </li>
                <!-- nav-btn-box end -->
                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-dropdown-open">
                    <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="People">People</span>
						</a>

                    <!-- dropdown start -->
                    <ul class="menu-box dropdown js-dropdown">
                        <li class="nav-btn-box">
                            <a href="{{ route('social.responsibility') }}" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Social Responsibility">Social Responsibility</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="{{ route('human.resource') }}" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Human Resource">Human Resource</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="{{ route('about') }}" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="About us">About us</span>
								</a>
                        </li>
                    </ul>
                    <!-- dropdown end -->
                </li>
                <li class="nav-btn-box js-dropdown-open">
                    <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Technology">Technology</span>
						</a>

                    <!-- dropdown start -->
                    <ul class="menu-box dropdown js-dropdown">
                        <li class="nav-btn-box">
                            <a href="{{ route('vertical') }}" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Vertical Unit Set-Up">Vertical Unit Set-Up</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="#" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Production Strength">Production Strength</span>
								</a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="{{ route('about') }}" class="nav-btn small js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Quality Assurance">Quality Assurance</span>
								</a>
                        </li>
                    </ul>
                    <!-- dropdown end -->
                </li>
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                {{-- <li class="nav-btn-box js-dropdown-slider-open">
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
                </li> --}}
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="{{ route('gallery') }}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Gallery">Gallery</span>
						</a>
                </li>
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="#" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
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
                    {{-- &copy; Copyright 2020 UMAYA. Template by <a href="#" class="text-weight-700 js-pointer-small">Jinna Gik</a> --}}
                </p>
            </div>
            <!-- nav-copyright end -->
        </div>
        <!-- pos-rel end -->
    </nav>