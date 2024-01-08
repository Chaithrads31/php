
<?php 
 $head_var="coming from header"; 
 require_once('config/init.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $site_title; ?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Eduact HTML Template For Educaton & LMS" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Water+Brush&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/jarallax.css" />
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/nouislider.min.css" />
    <link rel="stylesheet" href="assets/css/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/theme.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-two">
            <nav class="main-menu">
                <div class="container">
                    <div class="main-menu__logo">
                        <a href="index.html">
                            <img src="assets/images/logo.png" width="183" height="48" alt="Eduact">
                        </a>
                    </div><!-- /.main-menu__logo -->
                    <div class="main-menu__nav">
                        <ul class="main-menu__list one-page-scroll-menu">
                           <!-- <li class="dropdown megamenu scrollToLink current">
                                <a href="#home">Home</a>
                                <ul>
                                    <li>
                                        <section class="home-showcase">
                                            <div class="container">
                                                <div class="home-showcase__inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="assets/images/home-showcase/home-showcase-1-1.jpg" alt="eduact">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            Multi Page
                                                                        </a>
                                                                        <a href="index-one-page.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <h3 class="home-showcase__title">Home page 01</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="assets/images/home-showcase/home-showcase-1-2.jpg" alt="eduact">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index-2.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            Multi Page
                                                                        </a>
                                                                        <a href="index-2-one-page.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <h3 class="home-showcase__title">Home page 02</h3>
                                                            </div>
                                                        </div>

                                                       
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </li>
                                </ul>
                            </li>-->
                            <li class="scrollToLink"><a href="#home">Home </a></li>
                            <li class="scrollToLink"><a href="#about">About</a></li>
                            <li class="scrollToLink"><a href="#services">Services</a></li>
                            <li class="scrollToLink"><a href="#course">Course</a></li>
                            <li class="scrollToLink"><a href="#team">Teacher</a></li>
                            <li class="scrollToLink"><a href="#blog">Blog</a></li>
                        </ul>
                    </div><!-- /.main-menu__nav -->
                    <div class="main-menu__right">
                        <a href="#" class="main-menu__toggler mobile-nav__toggler">
                            <i class="fa fa-bars"></i>
                        </a><!-- /.mobile menu btn -->
                        <a href="#" class="main-menu__search search-toggler">
                            <i class="icon-Search"></i>
                        </a><!-- /.search btn -->
                        <!--<a href="login.html" class="main-menu__login">
                            <i class="icon-account-1"></i>
                        </a>!--><!-- /.login btn -->
                       <?php include('includes/call-component.php') ?>
                        <!-- /.info -->
                    </div><!-- /.main-menu__right -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header-two -->

        <div class="stricky-header stricked-menu main-menu main-header-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--Hero Banner Start-->