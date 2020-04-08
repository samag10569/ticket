@extends('layouts.confer.sitemaster')

@section('content')
<!-- Main Area Start -->
<section class="our-speaker-area section-padding-100">
    <div class="container">
        <!-- ==== Poster Area ====== -->
        <div class="row mt-5">
            <!-- Single image Area -->
            <div class="col-11 mfaded d-flex ">
                <div class="col-12 col-sm-6 col-lg-4 mt-4 ">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- event image -->
                        <div class="speaker-single-thumb">
                            <img src="{{asset('assets/img/feature-movies/Macerated Nimrod _ poster by The 3X4.jpg')}}" alt="" style="height: 280px;width:100%;">
                        </div>


                    </div>
                </div>
                <div style="margin-top: 60px; margin-right: 40px;">

                    <p class="mfilmname mt-2" dir="rtl" align="right">نام رویداد</p>
                    <p align="right" class="secsalonname">سه شنبه - ساعت 17</p>
                    <p align="right" class="secsalonname">سینما آزادی - سالن 1</p>

                </div>

            </div>
        </div>
        <!-- ==== End of Poster Area ==== -->
        <!-- === Section image Area -->
        <div class="row my-5 text-center">

            <div class="col-11 border shadow pt-4 ">
                <div class="d-flex">
                    <div>
                        <p align="right" class="p7-3"><i class="zmdi zmdi-triangle-down"
                                style="margin-left: 7px;color:#df42b1;"></i>
                            با کلیک بر روی هر جایگاه صندلی های مربوط به آن نمایش داده می شود.</p>
                    </div>


                </div>

                <hr>

                <img src="{{asset('assets/img/mimg/seats/sections.png')}}" alt="" usemap="#secmap">
                <map name="secmap" id="secmap">
                    <area shape="poly" href="seats"
                        coords="79,51,42,137,90,148,144,156,190,151,225,146,263,136,226,52,188,64,153,70,110,62">
                    <area shape="poly" href="seats"
                        coords="39,149,21,209,74,218,141,225,197,222,246,217,286,208,267,151,212,161,163,167,121,165,76,157">
                </map>
            </div>



        </div>
        <!-- ==== End of section image Area ==== -->

        <!-- === Buy Area === -->
        <div class="more-speaker-btn text-center mt-20  fadeInUp " data-wow-delay="300ms">
            <a href="{{route('section_select')}}" style="color: black;"><button class="btn  mbuy px-3 py-2" style="font-size: 22px;border:none" href="#">
                    خرید بلیط</button></a>
        </div>
        <!-- ==== End of Buy Area =====-->
    </div>
</section>

@endsection
