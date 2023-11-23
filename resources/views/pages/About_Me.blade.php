@extends("app.master")

@section("body")

<section id="about" class="section">
    <div class="container">
        <!-- section header start -->
        <div class="section-header flex fld-col align-center">
            <h2 class="fns-35 clr-1 t-t-cap" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="200">about
                me</h2>
            <div class="line" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="200"></div>
            <div class="line" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="200"></div>
        </div>
        <!-- section header end -->


        <!-- about content start -->
        <div class="about-content flex justify-center align-center">
            <div class="about-col flex justify-center">
                <div class="about-img" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">
                    <p>PureWeb</p>
                    <img data-aos="flip-left" data-aos-duration="2000" data-aos-delay="1000" data-aos-offset="150"
                        src="{{asset("/")}}assests/images/about-image.png" alt="About Image">
                </div>
            </div>
            <div class="about-col flex fld-col">
                <h3 class="fns-25 bold clr-1" data-aos="flip-left" data-aos-duration="2000" data-aos-offset="150">
                    Hello I'm Md. Zubayer Efty, a Laravel websites & web applications developer.</h3>
                <p class="fns-20 clr-2" data-aos="flip-up" data-aos-duration="2000" data-aos-offset="150">Over the last 1 year, I have developed and maintained complex Web apps using mainly Laravel. I love writing clean code and talking and writing about it . I build websites/web applications with Laravel, MySql, JavaScript, HTML, CSS, and Bootstrap. My first objective is to complete your tasks well because my first priority is to achieve your 100% satisfaction. Contact me before you do.
                    </p>
                <div class="about-details-box flex fld-col">
                    <div class="about-details-field flex fns-20 clr-2">
                        <span data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">Name:-</span>
                        <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">Zubayer Efty</span>
                    </div>
                    <div class="about-details-field flex fns-20 clr-2">
                        <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">Mail:-</span>
                        <span data-aos="fade-right" data-aos-duration="2000"
                            data-aos-offset="150">mdzubayare39@gmail.com</span>
                    </div>
                    <div class="about-details-field flex fns-20 clr-2">
                        <span data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">Number:-</span>
                        <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">+8801404827959</span>
                    </div>
                    <div class="about-details-field flex fns-20 clr-2">
                        <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">Date of
                            Birth:-</span>
                        <span data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">2003-04-20</span>
                    </div>
                    <div class="about-details-field flex fns-20 clr-2">
                        <span data-aos="fade-right" data-aos-duration="2000"
                            data-aos-offset="150">Nationality:-</span>
                        <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">Bangladesh</span>
                    </div>
                    <div class="about-details-field flex fns-20 clr-2">
                        <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">Address:-</span>
                        <span data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">Jhenidha,Kulna</span>
                    </div>
                </div>
                <div class="about-btn-box flex">
                    <a data-aos="fade-down-right" data-aos-duration="2000" data-aos-offset="150" href="#contact"
                        class="btn-1 fns-25 bold clr-2">Hire Me</a>
                    <a data-aos="fade-up-left" data-aos-duration="2000" data-aos-offset="150" href="#contact"
                        class="btn-2 fns-25 bold clr-2">Download CV</a>
                </div>
            </div>
        </div>
        <!-- about content end -->
    </div>
</section>
<section id="service" class="section">
    <div class="container">
        <!-- section header start -->
        <div class="section-header flex fld-col align-center">
            <h2 class="fns-35 clr-1 t-t-cap" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="200">
                Skills </h2>
            <div class="line" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="200"></div>
            <div class="line" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="200"></div>
        </div>
        <!-- section header end -->

        <!-- service card-box start -->
        <div class="service-card-container col-3-container flex wrap justify-center">
            <div class="service-card col-3"
                data-aos="zoom-in" data-aos-duration="2000" data-aos-offset="200">
                <div class="service-card-inner box-shadow-3 hv-box-shadow-2 flex fld-col align-center">
                    <i class="fas fa-bullhorn fns-35 clr-2 flex align-center justify-center"></i>
                    <h3 class="fns-30 clr-1">HTML</h3>
                    <p class="fns-18 clr-2">Skills 90%</p>
                </div>
            </div>
            <div class="service-card col-3"
                data-aos="zoom-out" data-aos-duration="2000" data-aos-offset="200">
                <div class="service-card-inner box-shadow-3 hv-box-shadow-2 flex fld-col align-center">
                    <i class="fas fa-bullhorn fns-35 clr-2 flex align-center justify-center"></i>
                    <h3 class="fns-30 clr-1">CSS</h3>
                    <p class="fns-18 clr-2">Skills 70%</p>
                </div>
            </div>
            <div class="service-card col-3"
                data-aos="zoom-in-right" data-aos-duration="2000" data-aos-offset="200">
                <div class="service-card-inner box-shadow-3 hv-box-shadow-2 flex fld-col align-center">
                    <i class="fas fa-bullhorn fns-35 clr-2 flex align-center justify-center"></i>
                    <h3 class="fns-30 clr-1">PHP</h3>
                    <p class="fns-18 clr-2">Skills 80%</p>
                </div>
            </div>
            <div class="service-card col-3"
                data-aos="zoom-out-left" data-aos-duration="2000" data-aos-offset="200">
                <div class="service-card-inner box-shadow-3 hv-box-shadow-2 flex fld-col align-center">
                    <i class="fas fa-bullhorn fns-35 clr-2 flex align-center justify-center"></i>
                    <h3 class="fns-30 clr-1">LARAVEL</h3>
                    <p class="fns-18 clr-2">Skills 50%</p>
                </div>
            </div>
        </div>
        <!-- service card-box end -->
    </div>
</section>
@endsection