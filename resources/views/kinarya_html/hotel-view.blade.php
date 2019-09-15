<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Exploore | Hotel View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="csrf-token" content="{{ csrf_token() }}">
                <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
        <!-- FONT CSS-->
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/font/font-icon/font-awesome/css/font-awesome.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/font/font-icon/font-flaticon/flaticon.css')}}">
        <!-- LIBRARY CSS-->
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/bootstrap/css/bootstrap.min.css')}}">
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
        <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
        @yield('style')
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
                            <li class="dropdown active"><a href="hotel-result.html" class="main-menu"><span class="text">packages</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
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
                                            <li class="dropdown active"><a href="javascript:void(0)" class="main-menu"><span class="text">packages</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
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
                        <section class="page-banner hotel-view">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <ol class="breadcrumb">
                                            <li><a href="index.html" class="link home">Home</a></li>
                                            <li><a href="hotel-result.html" class="link">Hotel</a></li>
                                            <li class="active"><a href="#" class="link">matel Hotel</a></li>
                                        </ol>
                                        <div class="clearfix"></div>
                                        <h2 class="captions">MATEL HOTEL</h2>
                                        <div class="price"><span class="text">from</span><span class="number">30</span><sup class="unit">$</sup></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="hotel-view-main padding-top padding-bottom">
                                <div class="container">
                                    <div class="journey-block">
                                        <h3 class="title-style-2">MATEL HOTEL <span> (sale off 30%)</span></h3>
                                        <div class="wrapper-journey">
                                            <div class="item feature-item"><i class="icon-journey flaticon-people-3"></i>
                                                <p class="text">Fitness center</p>
                                            </div>
                                            <div class="item feature-item"><i class="icon-journey flaticon-cup"></i>
                                                <p class="text">Coffee shop</p>
                                            </div>
                                            <div class="item feature-item"><i class="icon-journey flaticon-food-2"></i>
                                                <p class="text">Restaurant</p>
                                            </div>
                                            <div class="item feature-item"><i class="icon-journey flaticon-people-4"></i>
                                                <p class="text">Baby care</p>
                                            </div>
                                            <div class="item feature-item"><i class="icon-journey flaticon-man"></i>
                                                <p class="text">Service room</p>
                                            </div>
                                            <div class="item feature-item"><i class="icon-journey flaticon-technology"></i>
                                                <p class="text">Wifi free</p>
                                            </div>
                                        </div>
                                        <div class="overview-block clearfix">
                                            <h3 class="title-style-3">Hotel Overview</h3>
                                            <div class="timeline-container">
                                                <div class="timeline timeline-hotel-view">
                                                    <div class="timeline-block">
                                                        <div class="timeline-title"> <span>Luxury Room</span></div>
                                                        <div class="timeline-point"><i class="fa fa-circle-o"></i></div>
                                                        <div class="timeline-content">
                                                            <div class="row">
                                                                <div class="timeline-custom-col">
                                                                    <div class="image-hotel-view-block">
                                                                        <div class="slider-for group1">
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-2.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-2.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                        </div>
                                                                        <div class="slider-nav group1">
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-2.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-3.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-4.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-5.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-5.png" alt=""></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-custom-col image-col hotels-layout">
                                                                    <div class="content-wrapper">
                                                                        <div class="content">
                                                                            <div class="title">
                                                                                <div class="price"><sup>$</sup><span class="number">30</span></div>
                                                                                <p class="for-price">for person per night</p>
                                                                            </div>
                                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                                                                            <div class="group-btn-tours"><a href="#" class="left-btn btn-book-tour">book now</a></div>
                                                                        </div>
                                                                        <ul class="list-info list-unstyled">
                                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-eye"></i><span class="number">234</span></a></li>
                                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-heart"></i><span class="number">156</span></a></li>
                                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-comment"></i><span class="number">19</span></a></li>
                                                                            <li><a href="#" class="link"><i class="icons fa fa-share-alt"></i></a></li>
                                                                            <li><a href="#" class="link"><i class="icons fa fa-map-marker"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-custom-col full timeline-book-block">
                                                                    <div class="find-widget find-hotel-widget widget new-style">
                                                                        <h4 class="title-widgets">BOOK ROOM</h4>
                                                                        <form class="content-widget">
                                                                            <div class="text-input small-margin-top">
                                                                                <div class="input-daterange">
                                                                                    <div class="text-box-wrapper half"><label class="tb-label">Check in</label>
                                                                                        <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                                    </div>
                                                                                    <div class="text-box-wrapper half"><label class="tb-label">Check out</label>
                                                                                        <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="count adult-count text-box-wrapper"><label class="tb-label">Adult</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox"><option selected="selected">1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option></select></div>
                                                                                </div>
                                                                                <div class="count child-count text-box-wrapper"><label class="tb-label">Child</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox"><option selected="selected">0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option></select></div>
                                                                                </div>
                                                                                <div class="first-name text-box-wrapper"><label class="tb-label">Your First Name</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your first name" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="last-name text-box-wrapper"><label class="tb-label">Your Last Name</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your last name" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="email text-box-wrapper"><label class="tb-label">Your Email</label>
                                                                                    <div class="input-group"><input type="email" placeholder="Write your email address" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="phone text-box-wrapper"><label class="tb-label">Your Number Phone</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your number phone" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="place text-box-wrapper"><label class="tb-label">Where are your address?</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your address" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="note text-box-wrapper"><label class="tb-label">Note:</label>
                                                                                    <div class="input-group"><textarea placeholder="Write your note" rows="3" name="content" class="tb-input"></textarea></div>
                                                                                </div><button type="submit" data-hover="SEND REQUEST" class="btn btn-slide"><span class="text">BOOK Now</span><span class="icons fa fa-long-arrow-right"></span></button></div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-block">
                                                        <div class="timeline-title"> <span>General Room</span></div>
                                                        <div class="timeline-point"><i class="fa fa-circle-o"></i></div>
                                                        <div class="timeline-content">
                                                            <div class="row">
                                                                <div class="timeline-custom-col">
                                                                    <div class="image-hotel-view-block">
                                                                        <div class="slider-for group2">
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-2.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-2.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                        </div>
                                                                        <div class="slider-nav group2">
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-2.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-3.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-4.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-5.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-5.png" alt=""></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-custom-col image-col hotels-layout">
                                                                    <div class="content-wrapper">
                                                                        <div class="content">
                                                                            <div class="title">
                                                                                <div class="price"><sup>$</sup><span class="number">30</span></div>
                                                                                <p class="for-price">for person per night</p>
                                                                            </div>
                                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                                                                            <div class="group-btn-tours"><a href="#" class="left-btn btn-book-tour">book now</a></div>
                                                                        </div>
                                                                        <ul class="list-info list-unstyled">
                                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-eye"></i><span class="number">234</span></a></li>
                                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-heart"></i><span class="number">156</span></a></li>
                                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-comment"></i><span class="number">19</span></a></li>
                                                                            <li><a href="#" class="link"><i class="icons fa fa-share-alt"></i></a></li>
                                                                            <li><a href="#" class="link"><i class="icons fa fa-map-marker"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-custom-col full timeline-book-block">
                                                                    <div class="find-widget find-hotel-widget widget new-style">
                                                                        <h4 class="title-widgets">BOOK ROOM</h4>
                                                                        <form class="content-widget">
                                                                            <div class="text-input small-margin-top">
                                                                                <div class="input-daterange">
                                                                                    <div class="text-box-wrapper half"><label class="tb-label">Check in</label>
                                                                                        <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                                    </div>
                                                                                    <div class="text-box-wrapper half"><label class="tb-label">Check out</label>
                                                                                        <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="count adult-count text-box-wrapper"><label class="tb-label">Adult</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox"><option selected="selected">1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option></select></div>
                                                                                </div>
                                                                                <div class="count child-count text-box-wrapper"><label class="tb-label">Child</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox"><option selected="selected">0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option></select></div>
                                                                                </div>
                                                                                <div class="first-name text-box-wrapper"><label class="tb-label">Your First Name</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your first name" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="last-name text-box-wrapper"><label class="tb-label">Your Last Name</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your last name" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="email text-box-wrapper"><label class="tb-label">Your Email</label>
                                                                                    <div class="input-group"><input type="email" placeholder="Write your email address" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="phone text-box-wrapper"><label class="tb-label">Your Number Phone</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your number phone" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="place text-box-wrapper"><label class="tb-label">Where are your address?</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your address" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="note text-box-wrapper"><label class="tb-label">Note:</label>
                                                                                    <div class="input-group"><textarea placeholder="Write your note" rows="3" name="content" class="tb-input"></textarea></div>
                                                                                </div><button type="submit" data-hover="SEND REQUEST" class="btn btn-slide"><span class="text">BOOK Now</span><span class="icons fa fa-long-arrow-right"></span></button></div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-block">
                                                        <div class="timeline-title"> <span>Family Room</span></div>
                                                        <div class="timeline-point"><i class="fa fa-circle-o"></i></div>
                                                        <div class="timeline-content">
                                                            <div class="row">
                                                                <div class="timeline-custom-col">
                                                                    <div class="image-hotel-view-block">
                                                                        <div class="slider-for group3">
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-2.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-2.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/img-1.png" alt=""></div>
                                                                        </div>
                                                                        <div class="slider-nav group3">
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-1.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-2.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-3.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-4.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-5.png" alt=""></div>
                                                                            <div class="item"><img src="assets/images/hotel-view/thumb-5.png" alt=""></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-custom-col image-col hotels-layout">
                                                                    <div class="content-wrapper">
                                                                        <div class="content">
                                                                            <div class="title">
                                                                                <div class="price"><sup>$</sup><span class="number">30</span></div>
                                                                                <p class="for-price">for person per night</p>
                                                                            </div>
                                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                                                                            <div class="group-btn-tours"><a href="#" class="left-btn btn-book-tour">book now</a></div>
                                                                        </div>
                                                                        <ul class="list-info list-unstyled">
                                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-eye"></i><span class="number">234</span></a></li>
                                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-heart"></i><span class="number">156</span></a></li>
                                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-comment"></i><span class="number">19</span></a></li>
                                                                            <li><a href="#" class="link"><i class="icons fa fa-share-alt"></i></a></li>
                                                                            <li><a href="#" class="link"><i class="icons fa fa-map-marker"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-custom-col full timeline-book-block">
                                                                    <div class="find-widget find-hotel-widget widget new-style">
                                                                        <h4 class="title-widgets">BOOK ROOM</h4>
                                                                        <form class="content-widget">
                                                                            <div class="text-input small-margin-top">
                                                                                <div class="input-daterange">
                                                                                    <div class="text-box-wrapper half"><label class="tb-label">Check in</label>
                                                                                        <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                                    </div>
                                                                                    <div class="text-box-wrapper half"><label class="tb-label">Check out</label>
                                                                                        <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="count adult-count text-box-wrapper"><label class="tb-label">Adult</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox"><option selected="selected">1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option></select></div>
                                                                                </div>
                                                                                <div class="count child-count text-box-wrapper"><label class="tb-label">Child</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox"><option selected="selected">0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option></select></div>
                                                                                </div>
                                                                                <div class="first-name text-box-wrapper"><label class="tb-label">Your First Name</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your first name" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="last-name text-box-wrapper"><label class="tb-label">Your Last Name</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your last name" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="email text-box-wrapper"><label class="tb-label">Your Email</label>
                                                                                    <div class="input-group"><input type="email" placeholder="Write your email address" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="phone text-box-wrapper"><label class="tb-label">Your Number Phone</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your number phone" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="place text-box-wrapper"><label class="tb-label">Where are your address?</label>
                                                                                    <div class="input-group"><input type="text" placeholder="Write your address" class="tb-input"></div>
                                                                                </div>
                                                                                <div class="note text-box-wrapper"><label class="tb-label">Note:</label>
                                                                                    <div class="input-group"><textarea placeholder="Write your note" rows="3" name="content" class="tb-input"></textarea></div>
                                                                                </div><button type="submit" data-hover="SEND REQUEST" class="btn btn-slide"><span class="text">BOOK Now</span><span class="icons fa fa-long-arrow-right"></span></button></div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="map-block">
                                    <div class="map-info">
                                        <h3 class="title-style-2">Contact Us</h3>
                                        <p class="address"><i class="fa fa-map-marker"></i> 333 Moo 10, Chert Wudthakas Road, Srikan, Don Mueang, Bangkok, Thailand</p>
                                        <p class="phone"><i class="fa fa-phone"></i> 910-740-6026</p>
                                        <p class="mail">
                                            <a href="mailto:domain@expooler.com"> <i class="fa fa-envelope-o"></i>domain@expooler.com</a>
                                        </p>
                                        <div class="footer-block"><a class="btn btn-open-map">Open Map</a></div>
                                    </div>
                                    <div id="googleMap"></div>
                                </div>
                                <div class="container">
                                    <div class="special-offer margin-top70">
                                        <h3 class="title-style-2">special offer</h3>
                                        <div class="special-offer-list">
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link"><img src="assets/images/footer/offer-17.jpg" alt="" class="img-responsive"></a>
                                                    <div class="title-wrapper"><a href="tour-view.html" class="title">alpha</a><i class="icons flaticon-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link"><img src="assets/images/footer/offer-18.jpg" alt="" class="img-responsive"></a>
                                                    <div class="title-wrapper"><a href="tour-view.html" class="title">otipus</a><i class="icons flaticon-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link"><img src="assets/images/footer/offer-19.jpg" alt="" class="img-responsive"></a>
                                                    <div class="title-wrapper"><a href="tour-view.html" class="title">sunrise</a><i class="icons flaticon-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link"><img src="assets/images/footer/offer-20.jpg" alt="" class="img-responsive"></a>
                                                    <div class="title-wrapper"><a href="tour-view.html" class="title">carisbean</a><i class="icons flaticon-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link"><img src="assets/images/footer/offer-17.jpg" alt="" class="img-responsive"></a>
                                                    <div class="title-wrapper"><a href="tour-view.html" class="title">alpha</a><i class="icons flaticon-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link"><img src="assets/images/footer/offer-18.jpg" alt="" class="img-responsive"></a>
                                                    <div class="title-wrapper"><a href="tour-view.html" class="title">otipus</a><i class="icons flaticon-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link"><img src="assets/images/footer/offer-19.jpg" alt="" class="img-responsive"></a>
                                                    <div class="title-wrapper"><a href="tour-view.html" class="title">sunrise</a><i class="icons flaticon-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link"><img src="assets/images/footer/offer-20.jpg" alt="" class="img-responsive"></a>
                                                    <div class="title-wrapper"><a href="tour-view.html" class="title">carisbean</a><i class="icons flaticon-circle"></i></div>
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
        <script src="assets/js/pages/hotel-view.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
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