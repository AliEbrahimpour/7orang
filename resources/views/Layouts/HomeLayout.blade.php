<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

    <!-- Stylesheets
    ============================================= -->

    <link href="<?= url('panel/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= url('panel/css/bootstrap-reset.css') ?>" rel="stylesheet">
    <link href="<?= url('panel/assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= url('panel/css/owl.carousel.css') ?>" type="text/css">
    <link href="<?= url('panel/css/style.css') ?>" rel="stylesheet">
    <link href="<?= url('panel/css/style-responsive.css') ?>" rel="stylesheet" />

    <link href="<?= url('css/style.css') ?>" rel="stylesheet">
    <link href="<?= url('css/style-rtl.css') ?>" rel="stylesheet">
    <link href="<?= url('css/scss/skins/preview/skin-default.scss') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= url('css/owl.carousel.css') ?>" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon
    ============================================= -->
    <link rel="shortcut icon" href="<?= url('images/general-elements/favicon/favicon.png') ?>">

    @yield('style')
</head>

<body>
    <!-- Header
    ============================================= -->
    <header id="header" class="style-1" data-scroll-index="0">

    <div id="header-wrap">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="header-contact-info">
                        <li><i class="fa fa-phone"></i><span>شماره تماس :</span> +201093515252</li>
                        <li><i class="fa fa-envelope"></i><span>پست الکترونیکی:</span> mail@Example.com</li>
                    </ul><!-- .header-contact-info end -->
                    <div class="header-social-icons">
                        <span>شبکه های مجازی :</span>
                        <ul class="social-icons">
                            <li><a class="si-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="si-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="si-telegram" href="#"><i class="fa fa-telegram"></i></a></li>
                            <li><a class="si-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul><!-- .social-icons end -->
                    </div><!-- .header-social-icons -->

                    <div class="logo-and-nav">
                        <a class="logo" href="#">
                            <img width="70px"  src="images/logo.jpg" alt="">
                        </a><!-- .logo end -->

                        <ul id="main-menu" class="main-menu">
                            <li><a data-scroll-nav="0" href="#header">خانه</a></li>
                            <li><a data-scroll-nav="1" href="#featured-projects">سمینار های پیش رو</a></li>
                            <li><a data-scroll-nav="2" href="#our-services">سمینار هار برگزار شده</a></li>
                            <li><a data-scroll-nav="3" href="#our-works">گالری تصاویر</a></li>
                            <li><a data-scroll-nav="4" href="#about-us">درباره ما</a></li>
                            <li><a data-scroll-nav="5" href="#">تماس با ما</a></li>
                        </ul>
                        <div class="mobile-menu-btn hamburger hamburger--slider">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
                        </div><!-- .mobile-menu-btn -->
                        <div class="clearfix"></div>
                        <div id="mobile-menu"></div><!-- #mobile-menu end -->
                    </div><!-- .logo-and-nav end -->

                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->

    </div><!-- #header-wrap end -->

</header><!-- #header end -->

    <!-- Header Sticky
    ============================================= -->
    <header id="header-sticky" class="style-1">
        <div id="header-sticky-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- #header-sticky-wrap end -->
    </header><!-- #header-sticky end -->

    @yield('content')

    <!-- Footer Mini
    ============================================= -->
    <footer id="footer-mini">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights-message">2016 - 2017 © <span>Scour</span>. All rights reserved.</div>
                    <ul class="social-icons">
                        <li><a class="si-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="si-behance" href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a class="si-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul><!-- .social-icons end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->

    </footer><!-- #footer-mini end -->


    <!-- External JavaScripts
	============================================= -->
    <script src="<?= url('panel/js/jquery.nicescroll.js') ?>" type="text/javascript"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jRespond.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/simple-scrollbar.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src='js/jquery.magnific-popup.min.js'></script>
    <script src="js/jquery.waitforimages.min.js"></script>
    <script src="js/jssocials.min.js"></script>
    <script src='js/jquery.validate.min.js'></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_ar.js"></script>
    <script src="js/google-map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1vAzZpKh9vsQvF3e4MeClkyYB-MWtnA&callback=initMap"></script>
    <script src='js/functions.js'></script>
    <script src="<?= url('panel/js/jquery-1.8.3.min.js') ?>"></script>
    <script src="<?= url('panel/js/bootstrap.min.js') ?>"></script>
    <script src="<?= url('panel/js/jquery.scrollTo.min.js') ?>"></script>
    <script src="<?= url('panel/js/jquery.nicescroll.js') ?>" type="text/javascript"></script>
    <script src="<?= url('panel/js/jquery.sparkline.js') ?>" type="text/javascript"></script>
    <script src="<?= url('panel/js/owl.carousel.js') ?>" ></script>
    <script src="<?= url('panel/js/common-scripts.js') ?>"></script>
    <script>

        //owl carousel

        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true

            });
        });

        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

    </script>

    @yield('script')
</body>

</html>