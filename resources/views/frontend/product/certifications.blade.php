@extends('layouts.base')
@section('content')
<!-- CSS only -->
<style>
    .cert img{
        border-radius: 50%;
        height: 120px;
        width: 120px;
    }
    .row{
        display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px
    }
    .col-lg-4{
        -ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;
        position:relative;width:100%;padding-right:15px;padding-left:15px
    }
    .col-lg-6{
        -ms-flex:0 0 50%;flex:0 0 50%;max-width:50%
        position:relative;width:100%;padding-right:15px;padding-left:15px
    }
</style>
<!-- main start -->
        <!-- page head start -->
        <section id="up" class="lines-section pos-rel anim-lines  section-bg-dark-1">
            <!-- lines-container start -->
            <div class="pos-rel flex-min-height-100vh padding-top-50">
                <!-- container start -->
                <div class="container padding-top-bottom-20 margin-top-50 section-bg-light-1"  style="border-radius: 25px">
                    <h2 class="headline-xxs text-color-black hidden-box">
                        <span class="anim-slide js-scrollanim js-scrollanim-active" style="margin-left:20px">Certifications</span>
                    </h2>

                    <!-- flex-container start -->
                    <div class="flex-container padding-top-10" >
                        <!-- column start -->
                        <div class="four-columns column-100-100 padding-top-20">
                            <div class="column-r-margin-40-999 js-scrollanim js-scrollanim-active">
                                <div class="certifications-left">
                                    <div class="certifications-holder" style="height:500px">
                                        <img src="{{ asset('img/certifications-banner.webp') }}" style="object-fit:cover ; height:100%; border-radius:24px; margin-left:20px" alt="Certifications">
                                    </div>
                                </div>
                            </div>
                        </div><!-- column end -->

                        <!-- column start -->
                        <div class="eight-columns column-100-100 padding-top-20" style="justify-content: center; align-items:center ; display:flex">
                            <div class="flex-container m-0">
                                <div class="four-columns bg-white p-1 cert"><img src="{{ asset('img/1.webp') }}" alt="Certifications logo"></div>
                                <div class="four-columns bg-white p-1 cert"><img src="{{ asset('img/2.webp') }}" alt="Certifications logo"></div>
                                <div class="four-columns bg-white p-1 cert"><img src="{{ asset('img/3.webp') }}" alt="Certifications logo"></div>
                                <div class="four-columns bg-white p-1 cert"><img src="{{ asset('img/4.webp') }}" alt="Certifications logo"></div>
                                <div class="four-columns bg-white p-1 cert"><img src="{{ asset('img/5.webp') }}" alt="Certifications logo"></div>
                                <div class="four-columns bg-white p-1 cert"><img src="{{ asset('img/6.webp') }}" alt="Certifications logo"></div>
                                <div class="four-columns bg-white p-1 cert"><img src="{{ asset('img/7.webp') }}" alt="Certifications logo"></div>
                                <div class="four-columns bg-white p-1 cert"><img src="{{ asset('img/8.webp') }}" alt="Certifications logo"></div>
                                <div class="four-columns bg-white p-1 cert"><img src="{{ asset('img/9.webp') }}" alt="Certifications logo"></div>
                            </div>
                        </div><!-- column end -->

                    </div><!-- flex-container end -->
                </div><!-- container end -->
            </div>
        </section>
        <!-- page head end -->

    <!-- footer start -->
@endsection
