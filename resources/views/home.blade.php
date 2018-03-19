<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Limeade Labs | Home</title>

    <link href="/css/app.css" type="text/css" rel="stylesheet" />
    <!-- Apps -->
    <script src="/js/fontawesome-all.js"></script>
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <!-- <link href="/css/style.css" rel="stylesheet"> -->

    <!-- Theme css -->
    <link href="/css/common.css" rel="stylesheet">
    <link href="/css/style-main.css" rel="stylesheet">
    <link href="/css/default.css" rel="stylesheet" id="color_theme">

</head>

<body>
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>

    <!-- ========== Header Start ========== -->
    <header class="header header-style-7 navbar-light">
        <div class="container">
            <!-- Nav -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">limeade labs</a>
                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-01" aria-controls="header-01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Mobile Toggle End-->
                    <div id="header-01" class="collapse navbar-collapse top-menu">
                        <!-- Menu Start -->
                        <ul class="nav navbar-nav ml-auto">
                            <li><a class="current" href="#home">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            @auth
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#portfolio">Work Flow</a></li>
                            @endauth
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <!-- Menu End -->
                    </div>

                </div>
            </nav>
            <!-- Nav End -->
        </div>
        <!-- Container -->
    </header>
    <!-- ========== Header End ========== -->

    <!-- ========== Main Start ========== -->
    <main>
        <!-- ========== Home Banner Start ========== -->
        <section id="home" data-parallax="scroll" data-image-src="/img/j-kelly-brito-416265-unsplash.jpg"  class="home-banner-04 full-screen bg-center-top bg-cover bg-no-repeat" style="background-image:url(/img/j-kelly-brito-416265-unsplash.jpg); ">
            <div class="container">
                <div class="banner-center-text m-auto">
                    <label class="m-10px-l font-l text-uppercase color-extra-dark-gray wow fadeInLeft font-w-300">Top Shelf</label>
                    <h1 class="font-alt font-w-500 color-extra-dark-gray m-10px-b wow fadeInLeft" data-wow-delay="0.1s">
                        Development</h1>
                    <p id="type-it" class="m-10px-l font-w-300 color-extra-dark-gray font-25 text-uppercase wow fadeInLeft" data-wow-delay="0.2s"></p>
                </div>
            </div>
        </section>
        <!-- ========== Home Banner End ========== -->

        <!-- ========== Services Start ========== -->
        <section id="services" class="section">
            <div class="container">
                <h4 class="heading-style-6 font-alt">Our Services</h4>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp md-m-30px-b">
                        <div class="feature-box p-25px">
                            <i class="far fa-pencil fa-3x"></i>
                            <div class="feature-content">
                                <div class="font-alt font-w-700 color-extra-dark-gray m-5px-b m-15px-t letter-spacing-3 text-uppercase">Branding</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp md-m-30px-b">
                        <div class="feature-box p-25px">
                            <i class="far fa-code fa-3x"></i>
                            <div class="feature-content">
                                <div class="font-alt font-w-700 color-extra-dark-gray m-5px-b m-15px-t letter-spacing-3 text-uppercase">Web Development</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp md-m-30px-b">
                        <div class="feature-box p-25px">
                            <i class="far fa-chart-area fa-3x"></i>
                            <div class="feature-content">
                                <div class="font-alt font-w-700 color-extra-dark-gray m-5px-b m-15px-t letter-spacing-3 text-uppercase">Graphics</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->

                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp md-m-30px-b">
                        <div class="feature-box p-25px">
                            <i class="far fa-browser fa-3x"></i>
                            <div class="feature-content">
                                <div class="font-alt font-w-700 color-extra-dark-gray m-5px-b m-15px-t letter-spacing-3 text-uppercase">Web Design</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp md-m-30px-b">
                        <div class="feature-box p-25px">
                            <i class="far fa-mobile-alt fa-3x"></i>
                            <div class="feature-content">
                                <div class="font-alt font-w-700 color-extra-dark-gray m-5px-b m-15px-t letter-spacing-3 text-uppercase">Mobile Development</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp md-m-30px-b">
                        <div class="feature-box p-25px">
                            <i class="fal fa-desktop-alt fa-3x"></i>
                            <div class="feature-content">
                                <div class="font-alt font-w-700 color-extra-dark-gray m-5px-b m-15px-t letter-spacing-3 text-uppercase">Strategy</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->

            </div>
            <!-- container -->
        </section>
        <!-- section -->

        <!-- ========== Services End ========== -->

        <!-- ========== Portfolio Start ========== -->
        <section id="portfolio" class="section">
            <div class="container">
                <h4 class="heading-style-6 font-alt">Our Portfolio</h4>

                <div class="portfolio-box">
                    <div class="filter filter-left text-left m-30px-b m-60px-t">
                        <a href="javascript:void(0)" class="control letter-spacing-3" data-filter="all">All</a>
                        <a href="javascript:void(0)" class="control letter-spacing-3" data-filter=".illustration">Illustration</a>
                        <a href="javascript:void(0)" class="control letter-spacing-3" data-filter=".photoshop">Photoshop</a>
                        <a href="javascript:void(0)" class="control letter-spacing-3" data-filter=".website">Website</a>
                        <a href="javascript:void(0)" class="control letter-spacing-3" data-filter=".apps">Apps</a>
                    </div>
                    <!-- .filter -->

                    <div class="portfolio-filter wow fadeInUp" data-wow-delay="0.4s">
                        <div class="row">
                            <div class="col-12 col-md-4 col-sm-6 mix illustration">
                                <div class="portfolio-col">
                                    <a href="#"><img src="http://beyarsolutions.com/maria/maria/static/img/portfolio-1.jpg" title="" alt="" /></a>
                                    <div class="hover text-center">
                                        <p class="font-alt color-extra-dark-gray text-uppercase m-0 font-w-600">Illustration Work</p>
                                        <label class="font-s text-uppercase color-medium-gray">illustration</label>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-sm-4 col-sm-12 -->
                            <div class="col-12 col-md-4 col-sm-6 mix photoshop">
                                <div class="portfolio-col">
                                    <a href="#"><img src="http://beyarsolutions.com/maria/maria/static/img/portfolio-2.jpg" title="" alt="" /></a>
                                    <div class="hover text-center">
                                        <p class="font-alt color-extra-dark-gray text-uppercase m-0 font-w-600">Photoshop Work</p>
                                        <label class="font-s text-uppercase color-medium-gray">photoshop</label>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-sm-4 col-sm-12 -->
                            <div class="col-12 col-md-4 col-sm-6 mix illustration">
                                <div class="portfolio-col">
                                    <a href="#"><img src="http://beyarsolutions.com/maria/maria/static/img/portfolio-3.jpg" title="" alt="" /></a>
                                    <div class="hover text-center">
                                        <p class="font-alt color-extra-dark-gray text-uppercase m-0 font-w-600">Illustration Work</p>
                                        <label class="font-s text-uppercase color-medium-gray">illustration</label>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-sm-4 col-sm-12 -->

                            <div class="col-12 col-md-4 col-sm-6 mix photoshop">
                                <div class="portfolio-col">
                                    <a href="#"><img src="http://beyarsolutions.com/maria/maria/static/img/portfolio-4.jpg" title="" alt="" /></a>
                                    <div class="hover text-center">
                                        <p class="font-alt color-extra-dark-gray text-uppercase m-0 font-w-600">Photoshop Work</p>
                                        <label class="font-s text-uppercase color-medium-gray">photoshop</label>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-sm-4 col-sm-12 -->
                            <div class="col-12 col-md-4 col-sm-6 mix website">
                                <div class="portfolio-col">
                                    <a href="#"><img src="http://beyarsolutions.com/maria/maria/static/img/portfolio-5.jpg" title="" alt="" /></a>
                                    <div class="hover text-center">
                                        <p class="font-alt color-extra-dark-gray text-uppercase m-0 font-w-600">Website Work</p>
                                        <label class="font-s text-uppercase color-medium-gray">Website</label>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-sm-4 col-sm-12 -->
                            <div class="col-12 col-md-4 col-sm-6 mix apps">
                                <div class="portfolio-col">
                                    <a href="#"><img src="http://beyarsolutions.com/maria/maria/static/img/portfolio-6.jpg" title="" alt="" /></a>
                                    <div class="hover text-center">
                                        <p class="font-alt color-extra-dark-gray text-uppercase m-0 font-w-600">Apps Work</p>
                                        <label class="font-s text-uppercase color-medium-gray">App</label>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-sm-4 col-xs-6 -->

                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .portfolio-filter -->

                </div>
                <!-- .portfolio-box -->
            </div>
        </section>
        <!-- ========== Portfolio End ========== -->

        <!-- Work Flow -->
        <section class="section bg-light-gray">
            <div class="container">

                <h4 class="heading-style-6 font-alt">The Work Flow</h4>
                <!-- row -->
                <div class="row m-60px-t">
                    <div class="col-12 col-sm-6 col-md-4 wow fadeInLeft">
                        <div class="feature-box-03 m-25px-b">
                            <div class="feature-head">
                                <i class="font-30 font-normal font-w-300 color-extra-dark-gray m-5px-t m-5px-l">01.</i>
                                <span class="color-medium-gray font-11 text-uppercase letter-spacing-3">Small Title</span>
                                <div class="font-alt font-w-700 text-uppercase letter-spacing-3 color-extra-dark-gray line-height-20">Feature Title</div>
                            </div>
                            <div class="feature-content m-10px-t">
                                <p class="line-height-20">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                            <!-- feature-content -->
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->

                   <div class="col-12 col-sm-6 col-md-4 wow fadeInLeft">
                        <div class="feature-box-03 m-25px-b">
                            <div class="feature-head">
                                <i class="font-30 font-normal font-w-300 color-extra-dark-gray m-5px-t m-5px-l">02.</i>
                                <span class="color-medium-gray font-11 text-uppercase letter-spacing-3">Small Title</span>
                                <div class="font-alt font-w-700 text-uppercase letter-spacing-3 color-extra-dark-gray line-height-20">Feature Title</div>
                            </div>
                            <div class="feature-content m-10px-t">
                                <p class="line-height-20">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                            <!-- feature-content -->
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->

                    <div class="col-12 col-sm-6 col-md-4 wow fadeInLeft">
                        <div class="feature-box-03 m-25px-b">
                            <div class="feature-head">
                                <i class="font-30 font-normal font-w-300 color-extra-dark-gray m-5px-t m-5px-l">03.</i>
                                <span class="color-medium-gray font-11 text-uppercase letter-spacing-3">Small Title</span>
                                <div class="font-alt font-w-700 text-uppercase letter-spacing-3 color-extra-dark-gray line-height-20">Feature Title</div>
                            </div>
                            <div class="feature-content m-10px-t">
                                <p class="line-height-20">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                            <!-- feature-content -->
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </section>
        <!-- Work Flow End -->

        <!-- ========== What Pepole Say Start ========== -->
        <section class="section bg-cover bg-no-repeat bg-center-center" style="background-image:url(http://beyarsolutions.com/maria/maria/static/img/testimonialV2.png);">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-md-5 bg-white-opacity">
                        <h4 class="heading-style-6 font-alt">Testimonial</h4>
                        <div id="testimonials-slider-single" class="owl-carousel wow fadeInUp">
                            <div class="p-30px-l">
                                <i class="fa fa-quote-left color-theme icon-s w-100 display-inline-block v-aling-top m-15px-t m-10px-b"></i>
                                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <p class="font-alt text-uppercase color-theme m-0 letter-spacing-3 font-w-600">Maria Martin</p>
                                <p class="font-alt text-uppercase color-medium-gray font-xs letter-spacing-3">UX Designer</p>
                            </div>
                            <!-- col -->
                        </div>
                        <!-- owl-carousel -->
                    </div> <!-- col -->
                </div> <!-- row -->
            </div>
            <!-- container -->
            <div class="btm-slanty-r border-white"></div>
        </section>
        <!--  Section -->
        <!-- ========== What Pepole Say End ========== -->

        <!-- ========== Contact us Start ========== -->
        <section id="contact" class="section bg-cover bg-no-repeat bg-center-center" style="background-image:url(http://beyarsolutions.com/maria/maria/static/img/contactv2.png);">
            <div class="container">
            <h4 class="heading-style-6 font-alt m-60px-b">Contact Us</h4>
            <div class="row m-40px-t">
              <div class="col-md-6 wow fadeInLeft">
                <form>
                  <div class="row">
                    <div class="col-md-12">
                        <input name="name" placeholder="Name *" class="input-big" type="text">
                    </div>
                    <div class="col-md-12">
                        <input name="phone" placeholder="Phone" class="input-big" type="text">
                    </div>
                    <div class="col-md-12">
                        <input name="email" placeholder="Email*" class="input-big" type="email">
                    </div>
                    <div class="col-md-12">
                        <textarea name="comment" placeholder="Describe your project" rows="3" class="textarea-big"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-theme btn-l">send message</button>
                    </div>
                  </div>
                </form> <!-- form -->
              </div><!-- col -->
            </div> <!-- row -->
          </div>

            <div class="btm-slanty-r border-black"></div>

        </section>
        <!-- Section -->
        <!-- ========== Contact us End ========== -->

    </main>
    <!-- ========== Main End ========== -->

    <!-- ========== Footer Start ========== -->
    <footer>
        <div class="footer-top p-50px-t p-40px-b">
            <div class="container text-center">
                <ul class="social-icons social-icons-small">
                    <li>
                        <a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a class="google" href="#"><i class="fab fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a class="linkedin" href="#"><i class="fab fa-linkedin"></i><span></span></a>
                    </li>
                </ul>
                <p class="m-0 p-25px-t md-p-5px-t letter-spacing-3 text-uppercase color-extra-dark-gray">© 2018 Powered by Maria</p>
            </div>
        </div>
    </footer>
    <!-- ========== Footer End ========== -->

    <script src="/js/app.js"></script>
    <!-- Plugin JS -->

    <script src="/js/parallax.min.js"></script>
    <!-- parallax library -->
    <script src="/js/mixitup.min.js"></script>
    <!-- parallax library -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- owl-carousel -->
    <script src="/js/skill.bars.jquery.js"></script>
    <!-- skill.bars.jquery -->
    <script src="/js/wow.js"></script>
    <!-- typeit-master -->
    <script src="/js/typeit.min.js"></script>
    <!-- End -->

    <!-- Theme Js -->
    <script src="/js/singlepagenavbar.js"></script>
    <!-- for singlepagenav Header -->
    <script src="/js/navbar.js"></script>
    <script src="/js/wow-style.js"></script>

    <script src="/js/custom.js"></script>
    <!-- End -->

    <script type="text/javascript">
        new TypeIt('#type-it', {
            speed: 100,
            loop: false,
            lifeLike: true,
            strings: [
                'Web/Desktop',
                'Mobile (Android & iOS)',
                'UI/UX, Brand Strategy',
            ],
            breakLines: true
        });
    </script>
</body>

</html>