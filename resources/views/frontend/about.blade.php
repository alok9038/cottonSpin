@extends('layouts.base')
@section('content')
    <style>
        .body-text-xs{
            font-size: 18px
        }
    </style>
    <!-- main start -->
        <section id="up" class="lines-section pos-rel anim-lines section-bg-dark-1">
            <!-- lines-container start -->
            <video class="video-tag desktop" autoplay style="object-fit: cover; height:100vh; width:100%" id="bestcotton_vidD" muted="muted" loop="">
                <source src="{{ asset('video/about/about.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>

        
        <!-- page head start -->
        <section class="lines-section pos-rel anim-lines section-bg-dark-1">
            <div class="container medium" style="width:calc(100% - 200px)!important">

                
                
                <article class="flex-container flex-align-center padding-top-bottom-60">
                    <div class="six-columns padding-top-30">
                        <a href="post_dont-panic.html" class="d-block hover-box anim-img-reveal js-scrollanim js-pointer-large js-animsition-link js-scrollanim-active">
                            <div class="anim-img-reveal__hidden">
                                <div class="anim-img-reveal__scale">
                                    <img class="img-hover-scale" style="border-radius: 25px" src="{{ asset('about-us.webp') }}" alt="Post">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="six-columns padding-top-10">
                        <div class="column-l-margin-40 anim-fade js-scrollanim js-scrollanim-active">
                                <p class="body-text-xs margin-top-20">Omax cotspin Pvt. Ltd. is one of the fastest growing Textile companies in International markets managed by highly skilled professionals, innovators, qualified & experienced dedicated Leaders and workforce.</p>
                                <p class="body-text-xs margin-top-20">Company is located at Dhrangadhra, Gujarat which is one of the best cotton growing areas in India, with all the modern integrated facilities in 30 acres of land with 1,00,000 spindle age capacity. We have installed the latest state of the art machines from World leaders to produce the highest quality of cotton yarn. We strive to be a premier provider of yarn to the globe and a partner of choice for our customers. Omax Cotspin Pvt. Ltd. is a leading supplier in the international market and exports to the most valued clients in Bangladesh, Turkey, Europe, China, Singapore, Hong Kong etc.</p>
                        </div>
                    </div>
                </article><!-- blog-entry end -->

                <article class="flex-container flex-align-center padding-top-bottom-60">
                    
                    <div class="six-columns padding-top-10">
                        <div class="column-l-margin-40 anim-fade js-scrollanim js-scrollanim-active">
                                <p class="body-text-xs margin-top-20">We are screened & chosen by our overseas customers on the basis of plant & machineries, State of Art Technologies, Technical up-gradations, selection of raw materials, Lab equipments, Quality systems, Certifications, Consistency in Quality, Skills of our workforce, Competitive Prices & over all commitments.</p>
                                <p class="body-text-xs margin-top-20">We work in tandem with our overseas customer in product development, setting up processing techniques, selecting raw materials, Logistics & documentation to avoid any difficulty at their end and to meet the requisite products.</p>
                        </div>
                    </div>
                    <div class="six-columns padding-top-30">
                        <a href="post_dont-panic.html" class="d-block hover-box anim-img-reveal js-scrollanim js-pointer-large js-animsition-link js-scrollanim-active">
                            <div class="anim-img-reveal__hidden">
                                <div class="anim-img-reveal__scale">
                                    <img class="img-hover-scale" style="border-radius: 25px" src="{{ asset('about/about-us2.webp') }}" alt="Post">
                                </div>
                            </div>
                        </a>
                    </div>
                </article><!-- blog-entry end -->
            </div>
        </section>
        
        <section class="lines-section pos-rel section-bg-dark-2">
            <!-- lines-container start -->
            <div class="lines-container pos-rel flex-min-height-100vh">
                <!-- padding-top-bottom-120 start -->
                <div class="padding-top-bottom-120 width-100perc">
                    <!-- title start -->
                    <h2 class="headline-xxl text-center hidden-box js-scrollanim js-scrollanim-active">
                        <span class="anim-slide">The Management</span>
                    </h2><!-- title end -->

                    <!-- js-3-view-slider start -->
                    <div class="js-3-view-slider padding-top-bottom-90 hidden-box pos-rel slider-gradient-l-r swiper-container-initialized swiper-container-horizontal">
                        <!-- swiper-wrapper start -->
                        <div class="swiper-wrapper js-slider-scroll-anim js-slider-scroll-anim-active" style="transition-duration: 0ms; transform: translate3d(409.667px, 0px, 0px);">
                            <!-- swiper-slide start -->
                            <div class="swiper-slide swiper-slide-active" style="width: 409.667px;">
                                <!-- anim-img-scale start -->
                                <div class="anim-img-scale testimonials-author">
                                    <img class="anim-img-scale__inner" src="{{ asset('about/mr-arunbhai.webp') }}" alt="author">
                                </div><!-- anim-img-scale end -->
                                <div class="margin-left-right-20">
                                    <div class="margin-top-20 text-right">
                                        <span class="subhead-m anim-text-double-fill tr-delay-01" data-text="Mr. Arjun J.Patel">Mr. Arjun J.Patel</span><br>
                                        {{-- <span class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Investor">Investor</span> --}}
                                    </div>
                                    <p class="margin-top-60 quote quote_top body-text-s">A Vibrant Business man having experience of more than 25 years in manufacturing sector specialized in Organizational skills, Export management, Strategic planning & decision for business development. He is responsible of overall organization setup plant & equipment’s. He play’s key role in Omax Cot spin Pvt. Ltd. to setup entire project of spinning segment. As the director of the company, he is in charge of the overall Management of Omax Cot spin Pvt. Ltd. including strategic decision, making planning & marketing function.</p>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" style="width: 409.667px;">
                                <!-- anim-img-scale start -->
                                <div class="anim-img-scale testimonials-author">
                                    <img class="anim-img-scale__inner" src="{{ asset('about/mr-jayeshbhai.webp') }}" alt="author">
                                </div><!-- anim-img-scale end -->
                                <div class="margin-left-right-20">
                                    <div class="margin-top-20 text-right">
                                        <span class="subhead-m anim-text-double-fill tr-delay-01" data-text="Mr. Arjun J.Patel">Mr. Jayesh H.Patel</span><br>
                                        {{-- <span class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Investor">Investor</span> --}}
                                    </div>
                                    <p class="margin-top-60 quote quote_top body-text-s">Jayesh belongs to a well-known cotton business family in Gujarat. A successful entrepreneur with 20 years of vast experience in Cotton Spinning, Ginning, Marketing & Procurement, running a 75 thousand state of art Spindle Spinning Unit and a 150 DR Ginning unit in the last 15 Years. His passion for the Textile manufacturing sector has been awarded and recognized by many good brands like H&M, IKEA C&A. He is the key person for the marketing of Omax at Domestic & International Markets.</p>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" style="width: 409.667px;">
                                <!-- anim-img-scale start -->
                                <div class="anim-img-scale testimonials-author">
                                    <img class="anim-img-scale__inner" src="{{ asset('about/mr-jay.webp') }}" alt="author">
                                </div><!-- anim-img-scale end -->
                                <div class="margin-left-right-20">
                                    <div class="margin-top-20 text-right">
                                        <span class="subhead-m anim-text-double-fill tr-delay-01" data-text="Mr. Arjun J.Patel">Mr. Jay B.Patel</span><br>
                                        {{-- <span class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Investor">Investor</span> --}}
                                    </div>
                                    <p class="margin-top-60 quote quote_top body-text-s">A young and dynamic entrepreneur from a well-known business family in Gujarat. A pioneer leading the Company forward through his extraordinary entrepreneur skills and innovative way of working. His primary focus is on developing new ventures as forward integration to the existing business. He has already started two new ventures: Indian Archers (Apparel brand) and Leamax (printing and dyeing company).</p>
                                    
                                </div>
                            </div>
                        </div><!-- swiper-wrapper end -->

                        <!-- swiper-button-prev start -->
                        <div class="swiper-button-prev-box">
                            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                        </div><!-- swiper-button-prev end -->
                        <!-- swiper-button-next start -->
                        <div class="swiper-button-next-box">
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                        </div><!-- swiper-button-next end -->

                        <!-- swiper-pagination start -->
                        <div class="pagination-box">
                            <div class="swiper-pagination counter-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-bullets-dynamic" style="width: 155px;"><span class="swiper-pagination-bullet swiper-pagination-bullet-active swiper-pagination-bullet-active-main" tabindex="0" role="button" aria-label="Go to slide 1" style="left: 62px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next" tabindex="0" role="button" aria-label="Go to slide 2" style="left: 62px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next-next" tabindex="0" role="button" aria-label="Go to slide 3" style="left: 62px;"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4" style="left: 62px;"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5" style="left: 62px;"></span></div>
                        </div><!-- swiper-pagination end -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div><!-- js-3-view-slider end -->
                </div><!-- padding-top-bottom-120 end -->
            </div><!-- lines-container end -->
        </section>

        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <!-- container start -->
                <div class="padding-top-bottom-120 container">
                    <!-- title start -->
                    <h2 class="headline-l js-scrollanim js-scrollanim-active">
                        <span class="hidden-box d-block">
                                <span class="anim-slide">
                                    <span class="text-color-red" style="text-align: center">Our Partners</span>
                        </span>
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
                            <div class="clients-lines__inner hover-box pos-rel js-scrollanim js-scrollanim-active">
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
        <!-- partners end -->

    <!-- footer start -->
@endsection
