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
    <link href="/css/fontawesome-all.min.css" rel="stylesheet" />
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
                        <ul id="nav" class="nav navbar-nav ml-auto">
                            <li><a class="current js-scroll-trigger" href="#home">Home</a></li>
                            <li><a class="js-scroll-trigger" href="#services">Services</a></li>
                            <li><a class="js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                            <li><a class="js-scroll-trigger" href="#workflow">Work Flow</a></li>
                            <li><a class="js-scroll-trigger" href="#contact">Contact</a></li>
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
        <section id="home" data-parallax="scroll" data-image-src="/img/j-kelly-brito-416265-unsplash.jpg" class="home-banner-04 full-screen parallax-window bg-center-top bg-cover bg-no-repeat">
            <div class="container">
                <div class="banner-center-text m-auto brand-font">
                    <label class="m-10px-l font-l color-extra-dark-gray wow fadeInLeft font-w-300">top shelf</label>
                    <h1 class="font-alt font-w-500 color-extra-dark-gray m-10px-b wow fadeInLeft" data-wow-delay="0.1s">
                        digital<br> experiences</h1>
                    <p id="type-it" class="m-10px-l font-w-300 color-extra-dark-gray font-25 text-uppercase wow fadeInLeft" data-wow-delay="0.2s"></p>
                </div>
            </div>
        </section>
        <!-- ========== Home Banner End ========== -->

        <!-- ========== Services Start ========== -->
        <section id="services" class="section bg-black">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center m-60px-b">
                        <h4 class="font-alt color-white text-uppercase font-w-600">Services</h4>
                        <p class="w-70 color-medium-gray ml-auto mr-auto display-inline-block sm-w-100">We are Limeade Labs, a -first studio focused on creating digital experiences. We employ all our knowledge to help our clients build their brands through interactivity.</p>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6 md-m-30px-b wow fadeInUp">
                        <div class="feature-box text-center p-25px  box-shadow-light bg-white min-h-100">
                            <img src="/img/icons/animat-pencil.gif">
                            <div class="feature-content">
                                <div class="font-alt font-w-600 color-extra-dark-gray m-5px-b m-15px-t">WEB DESIGN</div>
                                <p>Everything we create is curated to your needs. We do not take shortcuts when it comes to quality work.</p>
                            </div>
                            <div class="feature-overlay bg-extra-dark-gray"></div>
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->

                    <div class="col-12 col-lg-3 col-md-6 md-m-30px-b wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-box text-center p-25px  box-shadow-light bg-white min-h-100">
                            <img src="/img/icons/animat-responsive.gif">
                            <div class="feature-content">
                                <div class="font-alt font-w-600 color-extra-dark-gray m-5px-b m-15px-t">MOBILE DEVELOPMENT</div>
                                <p>We use hybrid development to design and construct apps for both Android & iOS simultaneously.</p>
                            </div>
                            <div class="feature-overlay bg-extra-dark-gray"></div>
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->

                    <div class="col-12 col-lg-3 col-md-6 md-m-30px-b wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-box text-center p-25px  box-shadow-light bg-white min-h-100">
                            <img src="/img/icons/animat-search.gif">
                            <div class="feature-content">
                                <div class="font-alt font-w-600 color-extra-dark-gray m-5px-b m-15px-t">WEB DEVELOPMENT</div>
                                <p>We create web applications aimed for good readability and navigation on tablets and smartphones.</p>
                            </div>
                            <div class="feature-overlay bg-extra-dark-gray"></div>
                        </div>
                        <!-- feature-box -->
                    </div>
                    <!-- col -->

                    <div class="col-12 col-lg-3 col-md-6 md-m-30px-b wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-box text-center p-25px  box-shadow-light bg-white min-h-100">
                            <img src="/img/icons/animat-image.gif">
                            <div class="feature-content">
                                <div class="font-alt font-w-600 color-extra-dark-gray m-5px-b m-15px-t">PHOTOGRAPHY</div>
                                <p>Sometimes the best thing missing is high-quality photography to showcase the great aspects of your company.</p>
                            </div>
                            <div class="feature-overlay bg-extra-dark-gray"></div>
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

        <!-- ========== Portfoli Start ========== -->
        <section id="portfolio" class="section bg-extra-dark-gray pb-5">
            <div class="container wave-padding">

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center m-60px-b">
                        <h4 class="font-alt color-white text-uppercase font-w-600">Portfolio</h4>
                        <!-- <p class="w-70 ml-auto mr-auto display-inline-block sm-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.</p> -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->

                <div class="portfolio-box">
                    <!-- <div class="filter filter-white text-center m-60px-b">
                        <a href="javascript:void(0)" class="control" data-filter="all">All</a>
                        <a href="javascript:void(0)" class="control" data-filter=".illustration">Illustration</a>
                        <a href="javascript:void(0)" class="control" data-filter=".photoshop">Photoshop</a>
                        <a href="javascript:void(0)" class="control" data-filter=".website">Website</a>
                        <a href="javascript:void(0)" class="control" data-filter=".apps">Apps</a>
                    </div> -->
                    <!-- .filter -->

                    <div class="portfolio-filter">
                        <div class="row">
                            <div class="col-12 col-sm-4 col-xs-6 mix illustration wow fadeInUp">
                                <div class="portfolio-col">
                                    <a href="#">
                                        <img src="http://beyarsolutions.com/maria/maria/static/img/portfolio-1.jpg" title="" alt="" />
                                    </a>
                                    <div class="hover text-center">
                                        <p class="font-alt color-extra-dark-gray text-uppercase m-0 font-w-600">Feed by Parlevel</p>
                                        <label class="font-s text-uppercase color-medium-gray">Mobile App for Android/iOS</label>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-sm-4 col-sm-12 -->
                            <div class="col-12 col-sm-4 col-xs-6 mix photoshop wow fadeInUp" data-wow-delay="0.2s">
                                <div class="portfolio-col">
                                    <a href="#">
                                        <img src="http://beyarsolutions.com/maria/maria/static/img/portfolio-2.jpg" title="" alt="" />
                                    </a>
                                    <div class="hover text-center">
                                        <p class="font-alt color-extra-dark-gray text-uppercase m-0 font-w-600">Link by Parlevel</p>
                                        <label class="font-s text-uppercase color-medium-gray">Micro Market / OCS / Vending Customer Portal</label>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-sm-4 col-sm-12 -->
                            <div class="col-12 col-sm-4 col-xs-6 mix illustration wow fadeInUp" data-wow-delay="0.4s">
                                <div class="portfolio-col">
                                    <a href="#">
                                        <img src="http://beyarsolutions.com/maria/maria/static/img/portfolio-3.jpg" title="" alt="" />
                                    </a>
                                    <div class="hover text-center">
                                        <p class="font-alt color-extra-dark-gray text-uppercase m-0 font-w-600">The Parlevel Store</p>
                                        <label class="font-s text-uppercase color-medium-gray">eCommerce Vending Platform</label>
                                    </div>
                                </div>
                            </div>
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
        <section id="workflow" class="section bg-white">
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

        <!-- ========== Contact us Start ========== -->
        <section id="contact" class="section bg-black">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center m-60px-b">
                        <h4 class="font-alt text-uppercase font-w-600 color-white">How About A Chat?</h4>
                        <p class="w-70 ml-auto mr-auto display-inline-block sm-w-100">We provide a free consultation to discover competitive advantages for your business. Contact us today to schedule an appointment.</p>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
                <form>
                    <div class="row wow fadeInUp">
                        <div class="col-12 col-md-6">
                            <input name="name" placeholder="Name *" class="input-big" type="text" />
                        </div>
                        <div class="col-12 col-md-6">
                            <input name="phone" placeholder="Phone" class="input-big" type="text" />
                        </div>
                        <div class="col-12 col-md-6">
                            <input name="email" placeholder="Email*" class="input-big" type="email" />
                        </div>
                        <div class="col-12 col-md-6">
                            <input name="website" placeholder="Website" class="input-big" type="text" />
                        </div>
                        <div class="col-12 col-md-12">
                            <textarea name="comment" placeholder="Describe your project" rows="6" class="textarea-big"></textarea>
                        </div>
                        <div class="col-md-12 text-center m-15px-t">
                            <button type="submit" class="btn btn-theme btn-xl">send message</button>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </div>
            <!-- container -->
        </section>
        <!-- Section -->
        <!-- ========== Contact us End ========== -->

    </main>
    <!-- ========== Main End ========== -->

    <!-- ========== Footer Start ========== -->
    <footer class="pt-4 bg-extra-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 col-sm-6 text-center sm-m-25px-b wow fadeInUp">
                    <i class="far fa-map-pin icon-round-small bg-theme color-white"></i>
                    <p class="font-alt text-uppercase color-white font-w-600 m-15px-t m-5px-b font-14">Contact Address</p>
                    <p class="color-medium-gray">801 Bryan Rd, <br/>Mission, Texas<br/>78572 </p>
                </div>
                <!-- col -->

                <div class="col-12 col-md-3 col-sm-6 text-center sm-m-25px-b wow fadeInUp" data-wow-delay="0.2s">
                    <i class="far fa-envelope-open icon-round-small bg-theme color-white"></i>
                    <p class="font-alt text-uppercase color-white font-w-600 m-15px-t m-5px-b font-14">Let's talk</p>
                    <p class="color-medium-gray">Phone: 210-827-9222</p>
                </div>
                <!-- col -->

                <div class="col-12 col-md-3 col-sm-6 text-center sm-m-25px-b wow fadeInUp" data-wow-delay="0.4s">
                    <i class="far fa-pencil icon-round-small bg-theme color-white"></i>
                    <p class="font-alt text-uppercase color-white font-w-600 m-15px-t m-5px-b font-14">Email Us</p>
                    <p class="color-medium-gray"><a class="color-medium-gray" href="mailto:hello@limeadelabs.com">hello@limeadelabs.com</a><br/></p>
                </div>
                <!-- col -->

                <div class="col-12 col-md-3 col-sm-6 text-center sm-m-25px-b wow fadeInUp" data-wow-delay="0.6s">
                    <div class="div-round-small bg-theme">
                        <img class="bg-theme" src="/img/texas-icon.png" style="width: 40px !important;" />
                    </div>
                    <p class="font-alt text-uppercase color-white font-w-600 m-15px-t m-5px-b font-14">Crafted in Texas</p>
                    <p class="color-medium-gray">Made with <i class="far fa-heart"></i> in Mission, Texas.</p>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
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
    <script src="/js/onepagenav.js"></script>
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

        $(document).ready(function() {
            console.log('ready');
            $('#nav').onePageNav();
        });

        $('.parallax-window').parallax({
            imageSrc: '/img/j-kelly-brito-416265-unsplash.jpg'
        });
    </script>
</body>

</html>
