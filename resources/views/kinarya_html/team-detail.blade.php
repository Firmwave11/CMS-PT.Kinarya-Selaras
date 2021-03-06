<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Exploore | team-detail</title>
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
                                    <li><a href="car-rent-result.html" class="link-page">car rent result</a></li>
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
                <header>
                    <div class="bg-transparent">
                        <div class="header-topbar">
                            <div class="container">
                                <ul class="topbar-left list-unstyled pull-left">
                                    <li><a href="javascript:void(0)" class="country dropdown-text"><span>Country</span><i class="topbar-icon icons-dropdown fa fa-angle-down"></i></a>
                                        <ul class="dropdown-topbar list-unstyled hide">
                                            <li><a href="#" class="link">Vietnam</a></li>
                                            <li><a href="#" class="link">Japan</a></li>
                                            <li><a href="#" class="link">Korea</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" class="language dropdown-text"><span>English</span><i class="topbar-icon icons-dropdown fa fa-angle-down"></i></a>
                                        <ul class="dropdown-topbar list-unstyled hide">
                                            <li><a href="#" class="link">Vietnam</a></li>
                                            <li><a href="#" class="link">Japan</a></li>
                                            <li><a href="#" class="link">Korea</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" class="monney dropdown-text"><span>USD</span><i class="topbar-icon icons-dropdown fa fa-angle-down"></i></a>
                                        <ul class="dropdown-topbar list-unstyled hide">
                                            <li><a href="#" class="link">VND</a></li>
                                            <li><a href="#" class="link">Euro</a></li>
                                            <li><a href="#" class="link">JPY</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="topbar-right pull-right list-unstyled list-inline login-widget">
                                    <li><a href="sign-up.html" class="item">login</a></li>
                                    <li><a href="register.html" class="item">register</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-main">
                            <div class="container">
                                <div class="header-main-wrapper">
                                    <div class="hamburger-menu">
                                        <div class="hamburger-menu-wrapper">
                                            <div class="icons"></div>
                                        </div>
                                    </div>
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="index.html" class="header-logo"><img src="assets/images/logo/logo-color-1.png" alt="" /></a>
                                        </div>
                                    </div>
                                    <nav class="navigation">
                                        <ul class="nav-links nav navbar-nav">
                                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><span class="text">Home</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li><a href="index.html" class="link-page">Homepage default</a></li>
                                                    <li><a href="homepage-02.html" class="link-page">Homepage 02</a></li>
                                                    <li><a href="homepage-03.html" class="link-page">Homepage 03</a></li>
                                                    <li><a href="homepage-04.html" class="link-page">Homepage 04</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html" class="main-menu"><span class="text">about</span></a></li>
                                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><span class="text">Tour</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li><a href="tour-result.html" class="link-page">tour result</a></li>
                                                    <li><a href="tour-view.html" class="link-page">tour view</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><span class="text">packages</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li><a href="hotel-result.html" class="link-page">hotel result</a></li>
                                                    <li><a href="hotel-view.html" class="link-page">hotel view</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><span class="text">blog</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li><a href="blog.html" class="link-page">blog list</a></li>
                                                    <li><a href="blog-detail.html" class="link-page">blog detail</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><span class="text">page</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li><a href="car-rent-result.html" class="link-page">car rent result</a></li>
                                                    <li><a href="car-detail.html" class="link-page">car detail</a></li>
                                                    <li><a href="cruises-result.html" class="link-page">cruises result</a></li>
                                                    <li><a href="cruises-detail.html" class="link-page">cruises detail</a></li>
                                                    <li><a href="team-detail.html" class="link-page">team detail</a></li>
                                                    <li><a href="404.html" class="link-page">page 404</a></li>
                                                    <li><a href="faq.html" class="link-page">faq</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html" class="main-menu"><span class="text">contact</span></a></li>
                                            <li class="button-search">
                                                <p class="main-menu"><i class="fa fa-search"></i></p>
                                            </li>
                                        </ul>
                                        <div class="nav-search hide">
                                            <form><input type="text" placeholder="Search" class="searchbox" /><button type="submit" class="searchbutton fa fa-search"></button></form>
                                        </div>
                                    </nav>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- WRAPPER-->
                <div id="wrapper-content">
                    <!-- MAIN CONTENT-->
                    <div class="main-content">
                        <section class="page-banner bg-team">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <ol class="breadcrumb">
                                            <li><a href="index.html" class="link home">Home</a></li>
                                            <li class="active"><a href="#" class="link">team</a></li>
                                        </ol>
                                        <div class="clearfix"></div>
                                        <h2 class="captions">team</h2></div>
                                </div>
                            </div>
                        </section>
                        <div class="page-main">
                            <div class="section-faq padding-top padding-bottom">
                                <div class="container">
                                    <div class="wrapper-team-detail">
                                        <h3 class="title-style-2">team detail</h3>
                                        <div class="main-team padding-bottom">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-5 padding-col-right">
                                                    <div class="content-team-detail">
                                                        <div class="content-expert">
                                                            <a href="#" class="img-expert"><img src="assets/images/homepage/team-2.jpg" alt="" class="img-responsive img"></a>
                                                            <div class="caption-expert">
                                                                <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me!</a></div>
                                                                <ul class="social list-inline">
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="content-expert">
                                                            <a href="#" class="img-expert"><img src="assets/images/homepage/team-5.jpg" alt="" class="img-responsive img"></a>
                                                            <div class="caption-expert">
                                                                <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me!</a></div>
                                                                <ul class="social list-inline">
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="content-expert">
                                                            <a href="#" class="img-expert"><img src="assets/images/homepage/team-3.jpg" alt="" class="img-responsive img"></a>
                                                            <div class="caption-expert">
                                                                <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me!</a></div>
                                                                <ul class="social list-inline">
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="content-expert">
                                                            <a href="#" class="img-expert"><img src="assets/images/homepage/team-4.jpg" alt="" class="img-responsive img"></a>
                                                            <div class="caption-expert">
                                                                <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me</a></div>
                                                                <ul class="social list-inline">
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                                    <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="content-expert">
                                                            <a href="#" class="img-expert"><img src="assets/images/homepage/team-1.jpg" alt="" class="img-responsive img"></a>
                                                            <div class="caption-expert">
                                                                <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me!</a></div>
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
                                                <div class="col-md-8 col-sm-8 col-xs-7 padding-col-left">
                                                    <div class="wrapper-caption-team">
                                                        <div class="wrapper-team-title"><a href="#" class="team-title">mark letto</a>
                                                            <p class="team-title-small">Manager Tour Guide</p>
                                                            <div class="team-title-andress"><i class="team-icon fa fa-map-marker"></i><a href="#" class="item-andress">New York City, United States</a></div>
                                                        </div>
                                                        <p class="text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                                            duis aute.</p>
                                                        <p class="text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                                            duis aute irure dolor. Consectetur adiiing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                                        <div class="group-list">
                                                            <ul class="list-unstyled about-us-list">
                                                                <li>
                                                                    <p class="text">See around 100 shows per year</p>
                                                                </li>
                                                                <li>
                                                                    <p class="text">Love sharing my knowledge with people from around the world</p>
                                                                </li>
                                                                <li>
                                                                    <p class="text">Have performed Off-Broadway with an Oscar nominee</p>
                                                                </li>
                                                                <li>
                                                                    <p class="text">Know the theatre business from every angle </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title-style-2">teammate</h3>
                                        <div class="wrapper-expert team-profile">
                                            <div class="content-expert">
                                                <a class="img-expert"><img src="assets/images/homepage/about-6.jpg" alt="" class="img-responsive img"></a>
                                                <div class="caption-expert">
                                                    <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me!</a></div>
                                                    <ul class="social list-inline">
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content-expert">
                                                <a class="img-expert"><img src="assets/images/homepage/about-9.jpg" alt="" class="img-responsive img"></a>
                                                <div class="caption-expert">
                                                    <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me!</a></div>
                                                    <ul class="social list-inline">
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content-expert">
                                                <a class="img-expert"><img src="assets/images/homepage/about-7.jpg" alt="" class="img-responsive img"></a>
                                                <div class="caption-expert">
                                                    <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me!</a></div>
                                                    <ul class="social list-inline">
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content-expert">
                                                <a class="img-expert"><img src="assets/images/homepage/about-8.jpg" alt="" class="img-responsive img"></a>
                                                <div class="caption-expert">
                                                    <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me!</a></div>
                                                    <ul class="social list-inline">
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                        <li><a href="#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content-expert">
                                                <a class="img-expert"><img src="assets/images/homepage/about-5.jpg" alt="" class="img-responsive img"></a>
                                                <div class="caption-expert">
                                                    <div class="item-expert"><i class="icon-expert fa fa-comment-o"></i><a href="#" class="title">Talk to me!</a></div>
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
                                </div>
                            </div>
                            <section class="about-tours">
                                <div class="container">
                                    <div class="team-purchase">
                                        <div class="purchase-title">
                                            <h2 class="main-title">Be More Than Just Another Traveler When You <span class="title-yellow">Explooer</span></h2></div>
                                        <p class="text">Discover your next great adventure, become an explorer to get started!</p><a href="#" class="btn btn-maincolor">Purchase now</a></div>
                                </div>
                            </section>
                        </div>
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
        <script src="assets/js/pages/team.js"></script>
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