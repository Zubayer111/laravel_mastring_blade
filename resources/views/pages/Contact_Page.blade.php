@extends("app.master")
@section("body")

<section id="contact" class="section">
    <!-- container start -->
    <div class="container">
        <!-- section header start -->
        <div class="section-header flex fld-col align-center">
            <h2 class="fns-35 clr-1 t-t-cap" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="200">
                contact</h2>
            <div class="line" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="200"></div>
            <div class="line" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="200"></div>
        </div>
        <!-- section header end -->


        <!-- contact form start -->
        <div class="contact-form">
            <form action="/">
                <div class="field" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">
                    <input type="text" required>
                    <label class="fns-18 clr-1">Name</label>
                </div>
                <div class="field" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">
                    <input type="text" required>
                    <label class="fns-18 clr-1">Email</label>
                </div>
                <div class="field" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="150">
                    <input type="text" required>
                    <label class="fns-18 clr-1">Subject</label>
                </div>
                <div class="field" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="150">
                    <textarea required></textarea>
                    <label class="fns-18 clr-1">Messages</label>
                </div>
                <button type="submit" class="btn-1 fns-25 bold clr-2" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="120">Hire Me</button>
            </form>
        </div>
        <!-- contact form end -->
    </div>
    <!-- container end -->
</section>
@endsection