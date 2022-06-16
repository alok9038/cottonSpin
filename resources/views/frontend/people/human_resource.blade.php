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
                <source src="{{ asset('video/human_resource/hr.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>

        <section id="down" class="lines-section pos-rel black-lines section-bg-light-1 _mPS2id-t mPS2id-target mPS2id-target-first mPS2id-target-last" data-midnight="black">
            <!-- lines-container start -->
            <div class="lines-container pos-rel black-lines padding-top-bottom-120">

                <!-- flex-container start -->
                <div class="flex-container flex-align-center padding-top-60">
                    <!-- column start -->
                   
                    <div class="four-columns column-50-100 padding-top-20">
                        <!-- hover-box start -->
                        <div class="line-col-l-r-margin-20 hover-box hidden-box pos-rel">
                            <div class="hover-box js-touch-hover-scroll">
                                <!-- img start -->
                                <img class="img-hover-scale in" src="{{ asset('hr/ambulance.webp') }}" alt="Theresa Serrano">
                                <div class="pos-abs pos-left-bottom list list_margin-1px">
                                    <h4 class="list__item">
                                        <span class="hidden-box d-inline-block">
                                            <span class="subhead-xxs text-bg-red padding-right-30 hover-reveal">Ambulance for medical emergency</span>
                                        </span>
                                    </h4>
                                </div><!-- content end -->
                            </div>
                        </div><!-- hover-box end -->
                    </div><!-- column end -->
                    <div class="four-columns column-50-100 padding-top-20">
                        <!-- hover-box start -->
                        <div class="line-col-l-r-margin-20 hover-box hidden-box pos-rel">
                            <div class="hover-box js-touch-hover-scroll">
                                <!-- img start -->
                                <img class="img-hover-scale in" src="{{ asset('hr/Doctor.webp') }}" alt="Theresa Serrano">
                                <div class="pos-abs pos-left-bottom list list_margin-1px">
                                    <h4 class="list__item">
                                        <span class="hidden-box d-inline-block">
                                            <span class="subhead-xxs text-bg-red padding-right-30 hover-reveal">Dedicated <strong>Doctor, Nurse</strong> and
                                                <strong>Dispensary</strong> for employees</span>
                                        </span>
                                    </h4>
                                </div><!-- content end -->
                            </div>
                        </div><!-- hover-box end -->
                    </div><!-- column end -->
                    <div class="four-columns column-50-100 padding-top-20">
                        <!-- hover-box start -->
                        <div class="line-col-l-r-margin-20 hover-box hidden-box pos-rel">
                            <div class="hover-box js-touch-hover-scroll">
                                <!-- img start -->
                                <img class="img-hover-scale in" src="{{ asset('hr/pad.webp') }}" alt="Theresa Serrano">
                                <div class="pos-abs pos-left-bottom list list_margin-1px">
                                    <h4 class="list__item">
                                        <span class="hidden-box d-inline-block">
                                            <span class="subhead-xxs text-bg-red padding-right-30 hover-reveal">Sanitary Pad vending machine for female employees
                                            </span>
                                        </span>
                                    </h4>
                                </div><!-- content end -->
                            </div>
                        </div><!-- hover-box end -->
                    </div><!-- column end -->

                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>

        <section class="lines-section pos-rel anim-lines section-bg-dark-1">
            <!-- lines-container start -->
            <video class="video-tag desktop" autoplay style="object-fit: cover; height:100vh; width:100%" id="bestcotton_vidD" muted="muted" loop="">
                <source src="{{ asset('video/human_resource/v2.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>

        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel padding-top-bottom-50">
                <!-- container start -->
                <div class="container">
                    <!-- flex-container start -->
                    <article class="flex-container flex-align-center padding-top-60">
                        <div class="three-columns padding-top-30" style="display: flex; justify-content:end">
                            <h2 class="text-uppercase btmToTop" style="opacity: 0.64; transform: matrix(0, -1, 1, 0, 0, 0); font-size:30px; textAlign:end">LIFE AT OMAX                            </h2>
                        </div>
                        <div class="nine-columns padding-top-10">
                            <div class="column-l-margin-40 anim-fade js-scrollanim js-scrollanim-active">
                                <video class="video-tag desktop" autoplay="" style="object-fit: cover; height:100vh; width:100%; border-radius:25px" id="bestcotton_vidD" muted="muted" loop="">
                                    <source src="{{ asset('video/human_resource/v3.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </article>

                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section>
  
@endsection
