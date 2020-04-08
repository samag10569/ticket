{{--
<section class="about-us-countdown-area section-padding-100-0" id="about">
<div class="container">
    <div class="row align-items-center">
        <!-- About Content -->
        <div class="col-12 col-md-6">
            <div class="about-content-text mb-80">
                <h6 class="wow fadeInUp" data-wow-delay="300ms">About Conference</h6>
                <h3 class="wow fadeInUp" data-wow-delay="300ms">Welcome to the Project Management</h3>
                <p class="wow fadeInUp" data-wow-delay="300ms">The Project Management is a platform to learn expert techniques for building successful project teams, creating efficient plans and implementing effective tracking measures to ensure your projects come in on deadline and on budget. In one fast-paced, well-designed day, we’ll cover all the essential elements of project management.</p>
                <a href="#" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Interested <i class="zmdi zmdi-long-arrow-right"></i></a>
            </div>
        </div>

        <!-- About Thumb -->
        <div class="col-12 col-md-6">
            <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                <img src="{{asset('assets/img/bg-img/2.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Counter Up Area -->
<div class="countdown-up-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-3">
                <!-- Countdown Text -->
                <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <h6>Conference Date</h6>
                    <h4>Count Every Second Until the Event</h4>
                </div>
            </div>

            <div class="col-12 col-md-9">
                <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <div id="clock"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}


<section class="mt-5">
    <div class="container-fluid" >
       <div class="d-flex justify-content-between">
           <div>
               <h4 class="pr-2"><i class="fa fa-film" aria-hidden="true"></i> آخرین فیلم‌های روز سینمای ایران</h4>
           </div>
           <div>
             <a class="btn confer-btn" href="{{route('m_events')}}">فیلم‌های بیشتر</a>
           </div>
       </div>

    <div class="row pl-2 pr-2 pb-5" >
        <div class="col pt-3 hvr-pop" style="max-height:25%" >
            <a href="{{route('single_event')}}">    <img src="{{asset('assets/img/feature-movies/African Violet.jpg')}}" style="width:100%;height:100%" alt=""></a>
            <h5 class="pt-2" style="text-align:center;">بنفشه آفریقایی</h5>
        </div>
        <div class="col pt-3 hvr-pop" >
         <a href="{{route('single_event')}}">  <img src="{{asset('assets/img/feature-movies/Macerated Nimrod _ poster by The 3X4.jpg')}}"  style="width:100%;height:100%"  alt=""></a>
            <h5 class="pt-2" style="text-align:center;">ماجرای نیمروز</h5>
        </div>
        <div class="col pt-3 hvr-pop" >
            <img src="{{asset('assets/img/feature-movies/Pig _ poster by Erfan Behkar.jpg')}}" style="width:100%;height:100%"  alt="">
            <h5 class="pt-2" style="text-align:center;">خوک</h5>
        </div>
        <div class="col pt-3 hvr-pop" ><img src="{{asset('assets/img/feature-movies/Poster by Mohammad Hossein Houshmandi.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">درخت گردو</h5>
        </div>
        <div class="col pt-3 hvr-pop" ><img src="{{asset('assets/img/feature-movies/jahan.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">جهان با من برقص</h5>
        </div>
    </div>

    <div class="row pt-3 pb-5">
        <div class="col hvr-pop">
            <img src="{{asset('assets/img/feature-movies/Rahman 1400 _ poster by Mohammad Rouholamin.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">رحمان 1400 </h5>
        </div>
        <div class="col hvr-pop">
            <img src="{{asset('assets/img/feature-movies/Subdued  Poster by Mohammad Rouholamin.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">رگ خواب</h5>
        </div>
        <div class="col hvr-pop">
            <img src="{{asset('assets/img/feature-movies/Twenty-one Days Later  Poster by Mohammad….jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">بیست و یک روز بعد</h5>
        </div>
        <div class="col hvr-pop">
            <img src="{{asset('assets/img/feature-movies/When the Moon Was Full - poster by Shafabakhsh.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">شبی که ماه کامل شد</h5>
        </div>
        <div class="col pt-3 hvr-pop" ><img src="{{asset('assets/img/feature-movies/motreb.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">مطرب</h5>
        </div>
    </div>
    </div>
</section>
