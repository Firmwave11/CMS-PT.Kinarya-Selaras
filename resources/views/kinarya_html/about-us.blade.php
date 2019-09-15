<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Exploore | About Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT CSS-->
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
        <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome/css/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-flaticon/flaticon.css">
        <!-- LIBRARY CSS-->
        <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/slick-slider/slick.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/slick-slider/slick-theme.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/please-wait/please-wait.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css?v=2.1.5">
        <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css?v=1.0.5">
        <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-thumbs.css?v=1.0.7">
        <!-- STYLE CSS-->
        <link type="text/css" rel="stylesheet" href="assets/css/layout.css">
        <link type="text/css" rel="stylesheet" href="assets/css/components.css">
        <link type="text/css" rel="stylesheet" href="assets/css/responsive.css">
        <link type="text/css" rel="stylesheet" href="assets/css/color.css">
        <!--link(type="text/css", rel='stylesheet', href='assets/css/color-1/color-1.css', id="color-skins")-->
        <link type="text/css" rel="stylesheet" href="#" id="color-skins">
        <script src="assets/libs/jquery/jquery-2.2.3.min.js"></script>
        <script src="assets/libs/js-cookie/js.cookie.js"></script>
        <script>
            if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1'))
            {
                $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '/' + 'color.css');
            }
            else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1'))
            {
                $('#color-skins').attr('href', 'assets/css/color-1/color.css');
            }
        </script>
    </head>

    <body>
        <div class="body-wrapper">
            <!-- MENU MOBILE-->
            <div class="wrapper-mobile-nav">
                <div class="header-topbar">
                    <div class="topbar-search search-mobile">
                        <form class="search-form">
                            <div class="input-icon"><i class="btn-search fa fa-search"></i><input type="text" placeholder="Search here..." class="form-control" /></div>
                        </form>
                    </div>
                </div>
                <div class="header-main">
                    <div class="menu-mobile">
                        <ul class="nav-links nav navbar-nav">
                            <li class="dropdown"><a href="index.html" class="main-menu"><span class="text">Home</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a href="index.html" class="link-page">Homepage default</a></li>
                                    <li><a href="homepage-02.html" class="link-page">Homepage 02</a></li>
                                    <li><a href="homepage-03.html" class="link-page">Homepage 03</a></li>
                                    <li><a href="homepage-04.html" class="link-page">Homepage 04</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html" class="main-menu"><span class="text">about</span></a></li>
                            <li class="dropdown"><a href="tour-result.html" class="main-menu"><span class="text">Tour</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a href="tour-result.html" class="link-page">tour result</a></li>
                                    <li><a href="tour-view.html" class="link-page">tour view</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="hotel-result.html" class="main-menu"><span class="text">packages</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a href="hotel-result.html" class="link-page">hotel result</a></li>
                                    <li><a href="hotel-view.html" class="link-page">hotel view</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="blog.html" class="main-menu"><span class="text">blog</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a href="blog.html" class="link-page">blog list</a></li>
                                    <li><a href="blog-detail.html" class="link-page">blog detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="car-rent-result.html" class="main-menu"><span class="text">page</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li><a href="car-rent-result.html" class="link-page"> result</a></li>
                                    <li><a href="cruises-result.html" class="link-page">cruises result</a></li>
                                    <li><a href="404.html" class="link-page">page 404</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html" class="main-menu"><span class="text">contact</span></a></li>
                        </ul>
                        <ul class="list-unstyled list-inline login-widget">
                            <li><a href="#" class="item">login</a></li>
                            <li><a href="#" class="item">register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- WRAPPER CONTENT-->
            <div class="wrapper-content">
                <!-- HEADER-->
                
                <!-- WRAPPER-->
                <div id="wrapper-content">
                    <!-- MAIN CONTENT-->
                    <div class="main-content">
                        <section class="page-banner about-us-page">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <ol class="breadcrumb">
                                            <li><a href="index.html" class="link home">Home</a></li>
                                            <li class="active"><a href="#" class="link">about us</a></li>
                                        </ol>
                                        <div class="clearfix"></div>
                                        <h2 class="captions">about us</h2></div>
                                </div>
                            </div>
                        </section>
                        <section class="about-us layout-2 padding-top padding-bottom about-us-4">
                            <div class="container">
                                <div class="row">
                                    <div class="wrapper-contact-style">
                                        <div class="col-lg-6 col-md-8">
                                            <h3 class="title-style-2">Epic journeys</h3>
                                            <div class="about-us-wrapper">
                                                <p class="text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                                    duis aute irure dolor quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute.</p>
                                                <p class="text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                                    duis aute irure dolor.</p>
                                                <div class="group-list">
                                                    <ul class="list-unstyled about-us-list">
                                                        <li>
                                                            <p class="text">First Class Flights</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">5 Star Accommodations</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">Inclusive Packages</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">Latest Model Vehicles</p>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled about-us-list">
                                                        <li>
                                                            <p class="text">Handpicked Hotels</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">Accesibility managment</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">10 Languages available</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">+120 Premium city tours</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-wow-delay="0.4s" class="about-us-image wow zoomInRight"><img src="assets/images/homepage/about-us-4.png" alt="" class="img-responsive"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="videos padding-top padding-bottom page-our-values">
                            <div class="container">
                                <h3 class="title-style-2 white">Our Values</h3>
                                <div class="row">
                                    <div class="our-wrapper">
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-cruise"></i>
                                                <div class="main-our">
                                                    <p class="our-title">We offer daily tours </p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-security-1"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Pygmy Itineraries</p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-direction"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Best price guarantee </p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-food-3"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Eco lodges & tours</p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="our-wrapper">
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-transport-10"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Endangered Wildlife</p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-people-6"></i>
                                                <div class="main-our">
                                                    <p class="our-title">We offer daily tours </p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-man"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Epic journeys </p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-food"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Never lose your deposit</p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur eli</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="our-expert padding-top padding-bottom-50">
                            <div class="container">
                                <h3 class="title-style-2">our explore expert</h3>
                                <div class="wrapper-expert">
                                    <div class="item content-expert">
                                        <a href="#" class="img-expert"><img src="assets/images/homepage/about-5.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="#" class="img-expert"><img src="assets/images/homepage/about-6.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="#" class="img-expert"><img src="assets/images/homepage/about-7.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="#" class="img-expert"><img src="assets/images/homepage/about-8.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="#" class="img-expert"><img src="assets/images/homepage/about-7.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="#" class="img-expert"><img src="assets/images/homepage/about-8.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="about-tours padding-top padding-bottom">
                            <div class="container">
                                <div class="wrapper-tours">
                                    <div class="content-icon-tours">
                                        <div class="content-tours"><i class="icon flaticon-people"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">3750</div>
                                            </div>
                                            <div class="text">Happy Customers</div>
                                        </div>
                                        <div class="content-tours"><i class="icon flaticon-suitcase"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">7740</div>
                                            </div>
                                            <div class="text">Flight To Travel</div>
                                        </div>
                                        <div class="content-tours"><i class="icon flaticon-two"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">850</div>
                                            </div>
                                            <div class="text">Hotel to stay</div>
                                        </div>
                                        <div class="content-tours"><i class="icon flaticon-transport"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">140</div>
                                            </div>
                                            <div class="text">Car Rental</div>
                                        </div>
                                        <div class="content-tours"><i class="icon flaticon-drink"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">8960</div>
                                            </div>
                                            <div class="text">Awesome Tours</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="wrapper-open-position padding-top padding-bottom">
                            <div class="container">
                                <div class="wrapper-position">
                                    <h3 class="title-style-2">open position</h3>
                                    <div class="content-position">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12 main-right">
                                                <div class="content-open">
                                                    <div class="main-position">
                                                        <div class="img-position">
                                                            <a href="#" class="img-open"><img src="assets/images/background/bg-team-open.jpg" alt="" class="img-responsive"></a>
                                                        </div>
                                                        <ul class="list-info list-unstyled">
                                                            <li><a class="link"><i class="icon fa fa-facebook"></i></a></li>
                                                            <li><a class="link"><i class="icon fa fa-twitter"></i></a></li>
                                                            <li><a class="link"><i class="icon fa fa-tumblr"></i></a></li>
                                                            <li><a class="link"><i class="icon fa fa-linkedin"></i></a></li>
                                                            <li><a class="link"><i class="icon fa fa-behance"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="wrapper-text-excel">
                                                        <div class="text-excel"> Business Excellence</div>
                                                        <ul class="list-text list-unstyled">
                                                            <li><a class="link-text"><i class="icon fa fa-angle-double-right"></i><span class="text-title">What we’re looking for:</span></a>
                                                                <p class="text">You will be working on a wide variety of projects, from branding, advertising, web design, and everything in between. Our style is very collaborative and informal so versatility and communication
                                                                    skills are key. You are a Designer with well-rounded design skills, a desire to learn, and a passion for solving problems of all shapes and sizes with thoughtful design.</p>
                                                            </li>
                                                            <li><a class="link-text"><i class="icon fa fa-angle-double-right"></i><span class="text-title">What you get to do everyday:</span></a>
                                                                <ul>
                                                                    <li><span>Create assets for the Zendesk website</span></li>
                                                                    <li><span>Concept ideas around the Zendesk brand</span></li>
                                                                    <li><span>Design and e xecute Zendesk online advertising</span></li>
                                                                    <li><span>Design presentations and printed materials</span></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="group-list group-number">
                                                    <ul class="list-unstyled about-us-list">
                                                        <li><span class="text">Accounting, Finance & Legal</span><span class="text-number">3</span></li>
                                                        <li><span class="text">Creative</span><span class="text-number">1</span></li>
                                                        <li><span class="text">Engineering & Product</span><span class="text-number">4</span></li>
                                                        <li><span class="text">Information Technology</span><span class="text-number">6</span></li>
                                                        <li><span class="text">Marketing & Sale</span><span class="text-number">2</span></li>
                                                        <li><span class="text">Account Management</span><span class="text-number">1</span></li>
                                                        <li><span class="text">Internships</span><span class="text-number">12</span></li>
                                                    </ul>
                                                </div>
                                                <div class="wrapper-llc">
                                                    <div class="llc-title">expooler SAN FRANCISCO LLC</div>
                                                    <div class="text">Create your travel agency, lodge, club, blog or destination website the quick and easy way.</div>
                                                    <ul class="list-llc list-unstyled">
                                                        <li><i class="icon fa fa-map-marker"></i><a href="#" class="item">132, My Street, Kingston, New York </a></li>
                                                        <li><i class="icon fa fa-phone"></i>
                                                            <a href="#" class="item">
                                                                <p class="ph-number">(+1) 369-258-147</p>
                                                                <p class="ph-number">(+1) 369-268-157</p>
                                                            </a>
                                                        </li>
                                                        <li><i class="icon fa fa-envelope-o"></i><a href="#" class="item">recruit@explooer.com</a></li>
                                                    </ul>
                                                </div><a href="#" class="view-more"><span class="more">View our company page</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="about-banner">
                            <div class="container">
                                <h3 class="title-style-2">OUR INVESTORS RELATIONS</h3>
                                <div class="wrapper-banner">
                                    <div class="content-banner">
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-1.png" alt="" class="img-responsive"></a>
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-4.png" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="content-banner">
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-2.png" alt="" class="img-responsive"></a>
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-5.png" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="content-banner">
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-3.png" alt="" class="img-responsive"></a>
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-6.png" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="content-banner">
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-4.png" alt="" class="img-responsive"></a>
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-1.png" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="content-banner">
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-5.png" alt="" class="img-responsive"></a>
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-2.png" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="content-banner">
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-6.png" alt="" class="img-responsive"></a>
                                        <a href="#" class="img-banner"><img src="assets/images/logo/about-banner-3.png" alt="" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="contact style-1">
                            <div class="container">
                                <div class="row">
                                    <div class="wrapper-contact-style">
                                        <div data-wow-delay="0.5s" class="contact-wrapper-images wow fadeInLeft"><img src="assets/images/homepage/contact-people.png" alt="" class="img-responsive"></div>
                                        <div class="col-lg-6 col-sm-7 col-lg-offset-4 col-sm-offset-5">
                                            <div data-wow-delay="0.4s" class="contact-wrapper padding-top padding-bottom wow fadeInRight">
                                                <div class="contact-box">
                                                    <h5 class="title">contact us</h5>
                                                    <p class="text">Just pack and go! Let leave your travel plan to travel experts!</p>
                                                    <form class="contact-form"><input type="text" placeholder="Your Name" class="form-control form-input">
                                                        <!--label.control-label.form-label.warning-label(for="") Warning for the above !--><input type="email" placeholder="Your Email" class="form-control form-input">
                                                        <!--label.control-label.form-label.warning-label(for="") Warning for the above !--><textarea placeholder="Your Message" class="form-control form-input"></textarea>
                                                        <div class="contact-submit"><button type="submit" data-hover="SEND NOW" class="btn btn-slide"><span class="text">send message</span><span class="icons fa fa-long-arrow-right"></span></button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- BUTTON BACK TO TOP-->
                    <div id="back-top"><a href="#top" class="link"><i class="fa fa-angle-double-up"></i></a></div>
                </div>
                <!-- FOOTER-->
                <footer>
                    <div class="subscribe-email">
                        <div class="container">
                            <div class="subscribe-email-wrapper">
                                <div class="subscribe-email-left">
                                    <p class="subscribe-email-title">Subscribe <span class="logo-text">Exploore</span>&nbsp;to get latest offers and deals to day</p>
                                    <p class="subscribe-email-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                                <div class="subscribe-email-right">
                                    <form action="index.html">
                                        <div class="input-group form-subscribe-email"><input type="text" placeholder="Write your email" class="form-control" /><span class="input-group-btn"><button type="submit" class="btn-email">&#8594;</button></span></div>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-main padding-top padding-bottom">
                        <div class="container">
                            <div class="footer-main-wrapper">
                                <a href="index.html" class="logo-footer"><img src="assets/images/logo/logo-white-color-1.png" alt="" class="img-responsive" /></a>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="col-md-3 col-xs-5">
                                            <div class="contact-us-widget widget">
                                                <div class="title-widget">contact us</div>
                                                <div class="content-widget">
                                                    <div class="info-list">
                                                        <ul class="list-unstyled">
                                                            <li><i class="icons fa fa-map-marker"></i><a href="#" class="link">132, My Street, Kingston, New York 12401</a></li>
                                                            <li><i class="icons fa fa-phone"></i><a href="#" class="link">270 - 188 - 6026</a></li>
                                                            <li><i class="icons fa fa-envelope-o"></i><a href="#" class="link">domain@expooler.com</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-email">
                                                        <p class="text">Sign up for our mailing list to get latest updates and offers.</p>
                                                        <form action="index.html">
                                                            <div class="input-group"><input type="text" placeholder="Email address" class="form-control form-email-widget" /><span class="input-group-btn"><button type="submit" class="btn-email">&#10004;</button></span></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-3">
                                            <div class="booking-widget widget text-center">
                                                <div class="title-widget">book now</div>
                                                <div class="content-widget">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#" class="link">Flights</a></li>
                                                        <li><a href="#" class="link">Tours</a></li>
                                                        <li><a href="#" class="link">Packages</a></li>
                                                        <li><a href="#" class="link">Transfer</a></li>
                                                        <li><a href="#" class="link">Car Rent</a></li>
                                                        <li><a href="#" class="link">Cruises</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <div class="explore-widget widget">
                                                <div class="title-widget">explore</div>
                                                <div class="content-widget">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#" class="link">Tour Singapore City</a></li>
                                                        <li><a href="#" class="link">Tour Manila City</a></li>
                                                        <li><a href="#" class="link">Tour New York City</a></li>
                                                        <li><a href="#" class="link">Tour Sanghai City</a></li>
                                                        <li><a href="#" class="link">Tour Hongkong City</a></li>
                                                        <li><a href="#" class="link">Tour Tokyo City</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="col-md-2 col-xs-6">
                                            <div class="top-deals-widget widget">
                                                <div class="title-widget">top deals</div>
                                                <div class="content-widget">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#" class="link">Tour Packages Singapore</a></li>
                                                        <li><a href="#" class="link">Tour Packages Manila</a></li>
                                                        <li><a href="#" class="link">Tour Packages New York</a></li>
                                                        <li><a href="#" class="link">Tour Packages Sanghai</a></li>
                                                        <li><a href="#" class="link">Tour Packages Hongkong</a></li>
                                                        <li><a href="#" class="link">Tour Packages Tokyo</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-6">
                                            <div class="destination-widget widget">
                                                <div class="title-widget">Gallary</div>
                                                <div class="content-widget main-gallery-fancybox">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="gallery-content">
                                                            <a href="assets/images/footer/gallery-01.jpg" data-fancybox-group="gallery" class="wp-gallery glry-relative fancybox thumb"><img src="assets/images/footer/gallery-01.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-01.jpg" data-fancybox-group="gallery" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-01.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-01.jpg" data-fancybox-group="gallery" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-01.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-01.jpg" data-fancybox-group="gallery" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-01.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-01.jpg" data-fancybox-group="gallery" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-01.jpg" alt="" class="img-responsive" /></a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="assets/images/footer/gallery-02.jpg" data-fancybox-group="gallery-1" class="wp-gallery glry-relative fancybox thumb"><img src="assets/images/footer/gallery-02.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-02.jpg" data-fancybox-group="gallery-1" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-02.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-02.jpg" data-fancybox-group="gallery-1" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-02.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-02.jpg" data-fancybox-group="gallery-1" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-02.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-02.jpg" data-fancybox-group="gallery-1" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-02.jpg" alt="" class="img-responsive" /></a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="assets/images/footer/gallery-03.jpg" data-fancybox-group="gallery-2" class="wp-gallery glry-relative fancybox thumb"><img src="assets/images/footer/gallery-03.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-03.jpg" data-fancybox-group="gallery-2" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-03.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-03.jpg" data-fancybox-group="gallery-2" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-03.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-03.jpg" data-fancybox-group="gallery-2" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-03.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-03.jpg" data-fancybox-group="gallery-2" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-03.jpg" alt="" class="img-responsive" /></a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="assets/images/footer/gallery-04.jpg" data-fancybox-group="gallery-3" class="wp-gallery glry-relative fancybox thumb"><img src="assets/images/footer/gallery-04.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-04.jpg" data-fancybox-group="gallery-3" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-04.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-04.jpg" data-fancybox-group="gallery-3" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-04.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-04.jpg" data-fancybox-group="gallery-3" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-04.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-04.jpg" data-fancybox-group="gallery-3" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-04.jpg" alt="" class="img-responsive" /></a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="assets/images/footer/gallery-05.jpg" data-fancybox-group="gallery-4" class="wp-gallery glry-relative fancybox thumb"><img src="assets/images/footer/gallery-05.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-05.jpg" data-fancybox-group="gallery-4" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-05.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-05.jpg" data-fancybox-group="gallery-4" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-05.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-05.jpg" data-fancybox-group="gallery-4" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-05.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-05.jpg" data-fancybox-group="gallery-4" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-05.jpg" alt="" class="img-responsive" /></a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="assets/images/footer/gallery-06.jpg" data-fancybox-group="gallery-5" class="wp-gallery glry-relative fancybox thumb"><img src="assets/images/footer/gallery-06.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-06.jpg" data-fancybox-group="gallery-5" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-06.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-06.jpg" data-fancybox-group="gallery-5" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-06.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-06.jpg" data-fancybox-group="gallery-5" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-06.jpg" alt="" class="img-responsive" /></a>
                                                            <a href="assets/images/footer/gallery-06.jpg" data-fancybox-group="gallery-5" class="wp-gallery glry-absolute fancybox thumb"><img src="assets/images/footer/gallery-06.jpg" alt="" class="img-responsive" /></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hyperlink">
                        <div class="container">
                            <div class="slide-logo-wrapper">
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-01.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-02.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-03.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-04.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-05.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-06.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-01.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-02.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-03.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-04.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-05.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link"><img src="assets/images/footer/logo-06.png" alt="" class="img-responsive" /></a>
                                </div>
                            </div>
                            <div class="social-footer">
                                <ul class="list-inline list-unstyled">
                                    <li><a href="#" class="link facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="link twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="link pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#" class="link google"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                            <div class="name-company">&copy; Designed by SWLABS.</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="theme-setting">
            <div class="theme-loading">
                <div class="theme-loading-content">
                    <div class="dots-loader"></div>
                </div>
            </div><a href="javascript:;" class="btn-theme-setting"><i class="fa fa-tint"></i></a>
            <div class="content-theme-setting">
                <h2 class="title">setting color</h2>
                <ul class="list-unstyled list-inline color-skins">
                    <li data-color="color-1"></li>
                    <li data-color="color-2"></li>
                    <li data-color="color-3"></li>
                    <li data-color="color-4"></li>
                    <li data-color="color-5"></li>
                    <li data-color="color-6"></li>
                    <li data-color="color-7"></li>
                    <li data-color="color-8"></li>
                    <li data-color="color-9"></li>
                    <li data-color="color-10"></li>
                </ul>
            </div>
        </div>
        <script>
            if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1'))
            {
                $('.logo .header-logo img ,.logo-footer img, .group-logo .img-logo').attr('src', 'assets/images/logo/logo-white-' + Cookies.get('color-skin') + '.png');
                $('.logo-black img').attr('src', 'assets/images/logo/logo-black-' + Cookies.get('color-skin') + '.png');
            }
            else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1'))
            {
                $('.logo .header-logo img , .logo-footer img, .group-logo .img-logo').attr('src', 'assets/images/logo/logo-white-color-1.png');
                $('.logo-black img').attr('src', 'assets/images/logo/logo-black-color-1.png');
            }
        </script>
        <!-- LIBRARY JS-->
        <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/libs/detect-browser/browser.js"></script>
        <script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
        <script src="assets/libs/wow-js/wow.min.js"></script>
        <script src="assets/libs/slick-slider/slick.min.js"></script>
        <script src="assets/libs/selectbox/js/jquery.selectbox-0.2.js"></script>
        <script src="assets/libs/please-wait/please-wait.min.js"></script>
        <script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
        <script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
        <script src="assets/libs/fancybox/js/jquery.fancybox-thumbs.js"></script>
        <!--script(src="assets/libs/parallax/jquery.data-parallax.min.js")-->
        <!-- MAIN JS-->
        <script src="assets/js/main.js"></script>
        <!-- LOADING JS FOR PAGE-->
        <script src="assets/js/pages/about-us.js"></script>
        <script>
            var logo_str = 'assets/images/logo/logo-black-color-1.png';
            if (Cookies.set('color-skin'))
            {
                logo_str = 'assets/images/logo/logo-black-' + Cookies.set('color-skin') + '.png';
            }
            window.loading_screen = window.pleaseWait(
            {
                logo: logo_str,
                backgroundColor: '#fff',
                loadingHtml: "<div class='spinner sk-spinner-wave'><div class='rect1'></div><div class='rect2'></div><div class='rect3'></div><div class='rect4'></div><div class='rect5'></div></div>",
            });
        </script>
    </body>

</html>