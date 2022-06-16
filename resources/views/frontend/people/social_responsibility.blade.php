@extends('layouts.base')
@section('content')
    <style>
        .js-scrollanim-active{
            color: rgb(196, 196, 196)
        }
    </style>
    <!-- main start -->
        <!-- page head start -->
        <section id="up" class="lines-section pos-rel anim-lines section-bg-dark-1">
            <!-- lines-container start -->
            <video class="video-tag desktop" autoplay style="object-fit: cover; height:100vh; width:100%" id="bestcotton_vidD" muted="muted" loop="">
                <source src="{{ asset('video/social/Social Responsbility_Header_C.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>

        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel padding-top-bottom-120">
                <!-- container start -->
                <div class="container">
                    <!-- title start -->
                    <h2 class="headline-xxl text-center hidden-box js-scrollanim js-scrollanim-active">
                        <span class="anim-slide">
                            Social <span class="text-color-red">Responsibility</span>
                        </span>
                    </h2><!-- title end -->

                    <!-- flex-container start -->
                    <div class="flex-container flex-align-center padding-top-80">
                        <div class="one-offset five-columns column-50-100 padding-top-20">
                            <div class="column-r-margin-40">
                                <div class="anim-overlay js-scrollanim js-scrollanim-active">
                                    <img src="{{ asset('social_responsibility/hospital.webp') }}" style="border-radius: 25px" alt="Curtis Schubert">
                                </div>
                            </div>
                        </div>
                        <div class="six-columns column-50-100 padding-top-20">
                            <div class="js-scrollanim js-scrollanim-active">
                                <h4 class="headline-s">
                                    <span class="anim-text-double-fill" data-text="Multi-Specialty Hospital">Multi-Specialty Hospital</span><br>
                                    {{-- <span class="anim-text-double-fill tr-delay-01" data-text="Schubert">Schubert</span> --}}
                                </h4>
                                <p class="subhead-s margin-top-10 anim-text-double-fill invert tr-delay-02" data-text="for local community at dhrangadhra">for local community at dhrangadhra</p>
                            </div>
                        </div>
                    </div><!-- flex-container end -->

                    <!-- flex-container start -->
                    <div class="flex-container flex-align-center padding-top-80">
                        <div class=" one-offset two-columns column-50-100 padding-top-20">
                            <div class="js-scrollanim js-scrollanim-active">
                                <h4 class="headline-s">
                                    <span class="anim-text-double-fill" data-text="Support various schools in rural areas ">Support various schools in rural areas</span><br>
                                </h4>
                            </div>
                        </div>
                        <div class="one-offset nine-columns column-50-100 padding-top-20">
                            <div class="column-r-margin-40">
                                <div class="anim-overlay js-scrollanim js-scrollanim-active">
                                    <img src="{{ asset('social_responsibility/schools.webp') }}" style="border-radius: 25px" alt="schools">
                                </div>
                            </div>
                        </div>
                    </div><!-- flex-container end -->
                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section>

        <section class="lines-section pos-rel anim-lines section-bg-dark-1">
            <!-- lines-container start -->
            <img class="video-tag desktop" src="{{ asset('slider/sewa.webp') }}" style="object-fit: cover; height:100vh; width:100%" id="bestcotton_vidD" muted="muted" loop="">
        </section>

        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel padding-top-bottom-50">
                <!-- container start -->
                <div class="container">
                    <!-- flex-container start -->
                    <div class="flex-container flex-align-center padding-top-80">
                        <div class="one-offset four-columns column-50-100 padding-top-20">
                            <div class="js-scrollanim js-scrollanim-active">
                                <h4 class="headline-s">
                                    access to a <br> Better Market Place without any middle agency    
                                </h4>
                            </div>
                        </div>
                        <div class=" seven-columns column-50-100 padding-top-20">
                            <div class="column-r-margin-40">
                                <div class="anim-overlay js-scrollanim js-scrollanim-active">
                                    <video class="video-tag desktop" autoplay style="object-fit: cover; height:100vh; width:100%; border-radius:25px" id="bestcotton_vidD" muted="muted" loop="">
                                        <source src="{{ asset('video/social/v2.mp4') }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div><!-- flex-container end -->

                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section>
        
@endsection
