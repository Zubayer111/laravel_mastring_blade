<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zubayer Efty</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset("/")}}assests/favicon.png" type="image/x-icon">
    <!-- fontawesome cdn start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- fontawesome cdn end -->

    <!-- css styles start -->
    <link rel="stylesheet" href="{{asset("/")}}assests/css/global.css">
    <link rel="stylesheet" href="{{asset("/")}}assests/css/style.css">
    <link rel="stylesheet" href="{{asset("/")}}assests/css/responsive.css">
    <!-- css styles end -->
    <!-- aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <!-- header section start -->
    @include("header.header")
    <section id="home" class="section">
        <div class="container">
            <div class="home-wrapper flex justify-between align-center">
                <div class="home-col flex fld-col">
                    <span class="fns-20 clr-2 bold" data-aos="fade-up-left" data-aos-duration="2000">Hello,</span>
                    <h1 class="clr-1 bold-x" data-aos="fade-up" data-aos-duration="2000">I'm Md. Zubayer Efty</h1>
                    <p class="fns-25 clr-1" data-aos="fade-up-right" data-aos-duration="2000">a Laravel websites & web applications developer.
                    </p>
                    <a href="#contact" data-aos="fade-up-left" data-aos-duration="2000"
                        class="btn-1 fns-25 bold hv-c-clr-1 clr-2">Hire Me</a>
                </div>
                <div class="home-col flex justify-center">
                    <div class="home-img" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="3000">
                        <p>PureWeb</p>
                        <img data-aos="flip-right" data-aos-duration="3000" data-aos-delay="2000" src="{{asset("/")}}assests/images/home-image.png" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield("body")
    
    @include("footer.footer")

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- jquery-scrollwatch-cdn -->
    <script src="{{asset("/")}}assests/js/scrollwatch.js"></script>
    <!-- custom jquery -->
    <script src="{{asset("/")}}assests/js/app.js"></script>
    <!-- aos libray -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>