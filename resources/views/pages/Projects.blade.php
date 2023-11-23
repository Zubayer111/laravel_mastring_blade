@extends("app.master")

@section("body")

<section id="portfolio" class="section">
    <!-- container start -->
    <div class="container">
        <!-- section header start -->
        <div class="section-header flex fld-col align-center">
            <h2 class="fns-35 clr-1 t-t-cap" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="200">
                portfolio</h2>
            <div class="line" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="200"></div>
            <div class="line" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="200"></div>
        </div>
        <!-- section header end -->


        <!-- portfolio card-box start -->
        <div class="portfolio-card-container col-3-container flex wrap justify-center">
            <div class="portfolio-card col-3 box-shadow-3 hv-box-shadow-2 flex fld-col align-center"
                data-aos="zoom-in-left" data-aos-duration="2000" data-aos-offset="200">
                <div class="img">
                    <img src="{{asset("assests")}}/images/portfolio-image-1.png" alt="Projects">
                </div>
            </div>
            <div class="portfolio-card col-3 box-shadow-3 hv-box-shadow-2 flex fld-col align-center"
                data-aos="zoom-in-right" data-aos-duration="2000" data-aos-offset="200">
                <div class="img">
                    <img src="{{asset("assests")}}/images/portfolio-image-3.png" alt="Projects">
                </div>
            </div>
            <div class="portfolio-card col-3 box-shadow-3 hv-box-shadow-2 flex fld-col align-center"
                data-aos="fade-right" data-aos-duration="2000" data-aos-offset="200">
                <div class="img">
                    <img src="{{asset("assests")}}/images/portfolio-image-4.png" alt="Projects">
                </div>
            </div>
            <div class="portfolio-card col-3 box-shadow-3 hv-box-shadow-2 flex fld-col align-center"
                data-aos="fade-left" data-aos-duration="2000" data-aos-offset="200">
                <div class="img">
                    <img src="{{asset("assests")}}/images/portfolio-image-5.png" alt="Projects">
                </div>
            </div>
            <div class="display">
                <img src="" alt="Projects">
            </div>
            <div class="display-close-btn fns-35 clr-2 flex align-center justify-center">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <!-- portfolio card-box end -->
    </div>
    <!-- container end -->
</section>

@endsection