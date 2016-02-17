﻿<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Warmup Delivery</title>
    
       <meta name="keywords" content="Delivery, Bebidas, Rio de Janeiro, App, Aplicativo" />
        <meta name="description" content="Warmup - Seu Delivery de Bebidas no Rio de Janeiro">
      

        <!-- Mobile specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Apple Touch Icons -->
    

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">

        <!-- Stylesheets -->
        <link href="/coming/css/bootstrap.css" rel="stylesheet">
        <link href="/coming/css/font-awesome.min.css" rel="stylesheet">
        <link href="/coming/css/owl.carousel.css" rel="stylesheet">
        <link href="/coming/css/global.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- Begin preloader -->
        <div id="preloader"><div id="status">
            <div id="circleG">
                <div id="circleG_1" class="circleG"></div>
                <div id="circleG_2" class="circleG"></div>
                <div id="circleG_3" class="circleG"></div> 
            </div></div>
        </div>
        <!-- End preloader -->

        <div id="wrap">
            
            <!-- Begin header section -->
          {{--   <header role="banner">
                <div class="container-full">
                    <img src="/coming/images/logo_1.png" alt="Warmup"  height="30">
                    <div class="dropdown-panel">
                        <div class="dropdown-panel-handle"><i class="fa fa-bars"></i>
                            <ul>
                                <li><a href="https://www.facebook.com/warmupdelivery" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </header> --}}
            <!-- End header section -->

            <div id="content-area">

            <!-- Begin countdown section -->
            <section class="panel-countdown">
                <div id="countdown_dashboard">
                    <div class="container">
                       {{--  <div class="row">
                            <div class="col-xs-12">
                                <h4 class='text-center'>Sua nova forma de comprar bebidas</h4>
                                <h1>Em Breve</h1>
                            </div>
                        </div> --}}
                        <div class="row">
                           <div class="countdown">
                                <div class="col-xs-6 col-sm-3 col-md-3 text-center">
                                    <div class="count-container">
                                        <span class="days"></span>
                                        <p class="days_ref"></p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 text-center">
                                    <div class="count-container">
                                        <span class="hours"></span>
                                        <p class="hours_ref"></p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 text-center">
                                    <div class="count-container">
                                        <span class="minutes"></span>
                                        <p class="minutes_ref"></p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 text-center">
                                    <div class="count-container">
                                        <span class="seconds"></span>
                                        <p class="seconds_ref"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                     {{--    <div class="row subscribe">
                            <div class="col-xs-12">
                                <div class="form">
                                    <h2>Subscribe and be the first to know</h2>
                                   <form method="post" action="subscribe.php">
                                        <input type="email" name="email" id="email" class="subscribe-box" required="" />
									    <input type="submit" value="Subscribe" id="submit" class="subscribe-btn">
                                        <!-- Begin loader -->
                                        <div id="loading"><div id="loading-status">
                                            <div id="circleL">
                                                <div id="circleL_1" class="circleL"></div>
                                                <div id="circleL_2" class="circleL"></div>
                                                <div id="circleL_3" class="circleL"></div> 
                                            </div></div>
                                        </div>
                                    <!-- End loader -->
								    </form>
                                </div>
                                <div class="done">
                                <h2>Thank you! You have been subscribed</h2>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
              <div class="logobig">
                            <img src="/coming/images/logo_3.png" alt="">
                        </div>
            <!-- End countdown section -->

            <!-- Begin about section -->
            <section class="panel-about">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>Not your average company</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Donec justo mauris, interdum eget metus consectetur, porttitor imperdiet turpis. Proin lobortis, purus et tempus scelerisque, tellus augue sollicitudin libero, in ullamcorper neque ligula nec nunc. Donec venenatis lacus quis nisi tempus, ac gravida magna cursus. Ut sed dolor cursus, sagittis lorem ornare, placerat enim. Proin dapibus libero et vulputate iaculis. Vivamus at libero ut nisi dapibus porttitor non sit amet tortor.</p>
                            <p>Morbi sed accumsan odio. Fusce mattis, metus sed euismod consectetur, metus neque elementum arcu, vitae laoreet velit libero in quam. Morbi ut justo sem. Aliquam pulvinar metus vel orci mattis sodales. Sed auctor malesuada mollis. Nullam aliquet diam quis neque lobortis varius. In in tincidunt lorem. Nam ut urna ac sem posuere.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End about section -->

            <!-- Begin services section -->
            <section class="panel-services">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>We're here to help</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="owl-slider" class="owl-carousel">
                                <div class="item">
                                <div class="slider-icon-container"><i class="fa fa-heart"></i></div>
                                <h2>Corporate Identity</h2>
                                </div>
                                <div class="item">
                                <div class="slider-icon-container"><i class="fa fa-th"></i></div>
                                <h2>Packaging</h2>
                                </div>
                                <div class="item">
                                <div class="slider-icon-container"><i class="fa fa-desktop"></i></div>
                                <h2>Web design</h2>
                                </div>
                                <div class="item">
                                <div class="slider-icon-container"><i class="fa fa-rocket"></i></div>
                                <h2>Branding</h2>
                                </div>
                                <div class="item">
                                <div class="slider-icon-container"><i class="fa fa-code"></i></div>
                                <h2>SEO</h2>
                                </div>
                                <div class="item">
                                <div class="slider-icon-container"><i class="fa fa-keyboard-o"></i></div>
                                <h2>Hardware</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End countdown section -->

            <!-- Begin contact section -->
            <section class="panel-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>Get in touch</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 col-lg-5">
                                    <div class="contact-icon-container"><i class="fa fa-building-o"></i></div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-7">
                                    <h2>Physical Address</h2>
                                    <address>
                                        <p>
                                            Santa Ana<br />
                                            New Port Square<br />
                                            Building E, Unit 10<br />
                                            8774<br />
                                            United States
                                        </p>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 col-lg-5">
                                    <div class="contact-icon-container"><i class="fa fa-comments-o"></i></div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-7">
                                    <h2>Contact Details</h2>
                                    Tel: (033) 445 6754<br />
                                    Fax: (033) 445 6754
                                    <br /><br />
                                    <a href="mailto:info@visio.com">info@visio.com</a><br />
                                    <a href="mailto:support@visio.com">support@visio.com</a>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </section>
            <!-- End contact section -->

            </div>

        </div>

        <!-- Begin tabs section -->
       <!--  <div class="tab-container">
            <a href="javascript:void(0)" class="col-xs-6 col-sm-3 tab active">
                <span class="tab-detail">
                    <span class="tab-heading">Countdown</span>
                    <i class="fa fa-clock-o"></i>
                </span>
            </a>
            <a href="javascript:void(0)" class="col-xs-6 col-sm-3 tab">
                <span class="tab-detail">
                    <span class="tab-heading">About</span>
                    <i class="fa fa-question"></i>
                </span>
            </a>
            <a href="javascript:void(0)" class="col-xs-6 col-sm-3 tab">
                <span class="tab-detail">
                    <span class="tab-heading">Services</span>
                    <i class="fa fa-cogs"></i>
                </span>
            </a>
            <a href="javascript:void(0)" class="col-xs-6 col-sm-3 tab">
                <span class="tab-detail">
                    <span class="tab-heading">Contact</span>
                    <i class="fa fa-book"></i>
                </span>
            </a>
        </div> -->
        <!-- End tabs section -->
       

        <!-- Scripts -->
        <script src="/coming/js/vendor/jquery-1.9.1.min.js"></script>
        <script src="/coming/js/jquery.backstretch.min.js"></script>
        <script src="/coming/js/jquery.countdown.js"></script>
        <script src="/coming/js/retina-1.1.0.min.js"></script>
        <script src="/coming/js/bootstrap.min.js"></script>
       <script src="/coming/js/owl.carousel.min.js"></script>
        <script src="/coming/js/global.js"></script>
    </body>
</html>