<!DOCTYPE html>
<html lang="en">

<head>
    <title>Exploore | Home Default</title>
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
        if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
            $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '/' + 'color.css');
        }
        else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
            $('#color-skins').attr('href', 'assets/css/color-1/color.css');
        }
    </script>
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
</head>

<body>
    <div class="body-wrapper">
        <!-- MENU MOBILE-->
        <div class="wrapper-mobile-nav">
            <div class="header-topbar">
                <div class="topbar-search search-mobile">
                    <form class="search-form">
                        <div class="input-icon"><i class="btn-search fa fa-search"></i><input type="text"
                                placeholder="Search here..." class="form-control" /></div>
                    </form>
                </div>
            </div>
            <div class="header-main">
                <div class="menu-mobile">
                    <ul class="nav-links nav navbar-nav">
                        <li class="dropdown"><a href="index.html" class="main-menu"><span
                                    class="text">Home</span></a><span class="icons-dropdown"><i
                                    class="fa fa-angle-down"></i></span>
                            <ul class="dropdown-menu dropdown-menu-1">
                                <li><a href="index.html" class="link-page">Homepage default</a></li>
                                <li><a href="homepage-02.html" class="link-page">Homepage 02</a></li>
                                <li><a href="homepage-03.html" class="link-page">Homepage 03</a></li>
                                <li><a href="homepage-04.html" class="link-page">Homepage 04</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html" class="main-menu"><span class="text">about</span></a></li>
                        <li class="dropdown"><a href="tour-result.html" class="main-menu"><span
                                    class="text">Tour</span></a><span class="icons-dropdown"><i
                                    class="fa fa-angle-down"></i></span>
                            <ul class="dropdown-menu dropdown-menu-1">
                                <li><a href="tour-result.html" class="link-page">tour result</a></li>
                                <li><a href="tour-view.html" class="link-page">tour view</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="hotel-result.html" class="main-menu"><span
                                    class="text">packages</span></a><span class="icons-dropdown"><i
                                    class="fa fa-angle-down"></i></span>
                            <ul class="dropdown-menu dropdown-menu-1">
                                <li><a href="hotel-result.html" class="link-page">hotel result</a></li>
                                <li><a href="hotel-view.html" class="link-page">hotel view</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="blog.html" class="main-menu"><span
                                    class="text">blog</span></a><span class="icons-dropdown"><i
                                    class="fa fa-angle-down"></i></span>
                            <ul class="dropdown-menu dropdown-menu-1">
                                <li><a href="blog.html" class="link-page">blog list</a></li>
                                <li><a href="blog-detail.html" class="link-page">blog detail</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="car-rent-result.html" class="main-menu"><span
                                    class="text">page</span></a><span class="icons-dropdown"><i
                                    class="fa fa-angle-down"></i></span>
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
                                        <a href="index.html" class="header-logo"><img
                                                src="assets/images/logo/logo-color-1.png" alt="" /></a>
                                    </div>
                                </div>
                                <!-- NAV -->
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- WRAPPER-->
            @foreach($background as $background)
            <style type="text/css">
    .page-banner.homepage-default {
    height: 100vh;

    background-image: url('{{url('uploads/background/backgroundawal')}}/{{$background-> background_awal}}');
}
    .tours {
    background-image: url('{{url('uploads/background/backgroundtengah')}}/{{$background-> background_tengah}}');
}
    .banner-sale-1 {
    background-image: url('{{url('uploads/background/backgroundtengah')}}/{{$background-> background_tengah}}');
}
    .hotels {
    background-image: url('{{url('uploads/background/backgroundtengah')}}/{{$background-> background_tengah}}');
}

    .videos {
    background-image: url('{{url('uploads/background/backgroundexplore')}}/{{$background-> background_explore}}');
}

    .contact {
    background-image: url('{{url('uploads/background/backgroundakhir')}}/{{$background-> background_akhir}}');
}
    .travelers {
    background-image: url('{{url('uploads/background/backgroundlatar')}}/{{$background-> background_latar}}');
}

    .banner-sale-1 .title-box {
    width: 100%;

    color: rgba(255, 221, 0, .8);
    background-image: url('{{url('uploads/background/backgroundtengah')}}/{{$background-> background_tengah}}');
    background-repeat: repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}
.footer-main {
    font-size: 12px;

    text-align: center;

    color: #8e8e8e;
    background-color: #121212;
    background-image: url('{{url('uploads/background/backgroundakhir')}}/{{$background-> background_akhir}}');
    background-repeat: repeat;
    background-attachment: fixed;
    background-position: center;
    -webkit-background-size: cover;
            background-size: cover;
}


            </style>
            @endforeach
            <div id="wrapper-content">
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <section class="page-banner homepage-default" >
                        <div class="container">
                            <div class="homepage-banner-warpper">
                                <div class="homepage-banner-content">
                                    <div class="group-title">
                                        <h1 class="title">kinarya</h1>
                                        <p class="text">The world you have never seen <span class="boder"></span></p>
                                    </div>
                                    <div class="group-btn"><a href="#" data-hover="CLICK ME" class="btn-click"><span
                                                class="text">go explore now</span><span
                                                class="icons fa fa-long-arrow-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  -->

                    <!-- WE ARE EXPLOORE -->
                    @foreach($tentang as $tentang )
                    <section class="about-us layout-1 padding-top padding-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="group-title">
                                        <div class="sub-title">
                                            <p class="text">{{ $tentang->subtitle }}</p><i class="icons flaticon-people"></i>
                                        </div>
                                        <h2 class="main-title">{{ $tentang->title }}</h2>
                                    </div>
                                    <div class="about-us-wrapper">
                                        <p class="text">{{ $tentang->keterangan }}</p>
                                        <div class="group-button"><a href="tour-result.html"
                                                class="btn btn-maincolor">purchase now</a><a href="about-us.html"
                                                class="btn">read more</a></div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div data-wow-delay="0.5s" class="about-us-image wow zoomIn"><img
                                            src="{{url('uploads/tentang')}}/{{$tentang-> gambar}}" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @endforeach

                    <!-- AWESOMETOURS -->
                    <section class="tours padding-top padding-bottom">
                        <div class="container">
                            <div class="tours-wrapper">
                                <div class="group-title">
                                    <div class="sub-title">
                                        <p class="text">PACK AND GO</p><i class="icons flaticon-people"></i>
                                    </div>
                                    <h2 class="main-title">awesome tours</h2>
                                </div>
                                <div class="tours-content margin-top70">

                                    <div class="tours-list">
                                        @foreach ($tourlist as $tourlist)
                                        <div class="tours-layout">
                                            <div class="image-wrapper">
                                                <a href="tour-view.html" class="link"><img
                                                        src="{{url('uploads/tour')}}/{{$tourlist-> gambar}}"  alt=""
                                                        class="img-responsive"></a>
                                                <div class="title-wrapper"><a href="tour-view.html"
                                                        class="title">{{ $tourlist->nama_tour }}</a><i
                                                        class="icons flaticon-circle"></i></div>
                                                <div class="label-sale">
                                                    <p class="text">sale</p>
                                                    <p class="number">35%</p>
                                                </div>
                                            </div>
                                            <div class="content-wrapper">
                                                <ul class="list-info list-inline list-unstyle">
                                                    <li><a href="#" class="link"><i class="icons fa fa-eye"></i><span
                                                                class="text number">234</span></a></li>
                                                    <li><a href="#" class="link"><i class="icons fa fa-heart"></i><span
                                                                class="text number">234</span></a></li>
                                                    <li><a href="#" class="link"><i
                                                                class="icons fa fa-comment"></i><span
                                                                class="text number">234</span></a></li>
                                                </ul>
                                                <div class="content">
                                                    <div class="title">
                                                        <div class="price"><sup>Rp</sup><span class="number">{{ $tourlist->harga }}</span>
                                                        </div>
                                                        <p class="for-price">{{ $tourlist->waktutour }}</p>
                                                    </div>
                                                    <p class="text">{{ $tourlist->keterangan }}</p>
                                                    <div class="group-btn-tours"><a href="#"
                                                            class="left-btn">book now</a><a href="#"
                                                            class="right-btn">add to list</a></div>
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                    </div><a href="about-us.html" class="btn btn-transparent margin-top70">more
                                        tours</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- GO EXPLORE -->

                    <section class="videos layout-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="video-wrapper padding-top padding-bottom">
                                         @foreach($explore as $explore)
                                        <h5 class="sub-title"><strong>{{$explore->subtitle}}</strong></h5>
                                        <h2 class="title">{{$explore->title}}</h2>
                                        <div class="text">{{$explore->keterangan}}</div><a
                                            href="#" class="btn btn-maincolor">read more</a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="video-thumbnail">
                                        <div class="video-bg"><img src="{{ url('uploads/explore/gambar')}}/{{$explore->gambar}}" alt=""
                                                class="img-responsive"></div>
                                        <div class="video-button-play"> <i class="icons fa fa-play"></i></div>
                                        <div class="video-button-close"></div><iframe
                                            src="{{$explore->link}}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen="allowfullscreen" class="video-embed"></iframe>
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- RECOMMENDED HOTELS -->
                    <section class="hotels padding-top padding-bottom">
                        <div class="container">
                            <div class="hotels-wrapper">
                                <div class="group-title">
                                    <div class="sub-title">
                                        <p class="text">GUARANTEED QUALITY</p><i class="icons flaticon-people"></i>
                                    </div>
                                    <h2 class="main-title">Recommended hotels</h2>
                                </div>
                                <div class="hotels-content margin-top70">
                                    <div class="row hotels-list">
                                        @foreach ($hotel as $hotels)
                                        <div class="col-sm-6">
                                            <div class="hotels-layout">
                                                <div class="image-wrapper">
                                                    <a href="hotel-view.html" class="link"><img
                                                            src="{{ url('uploads/hotel')}}/{{$hotels->gambar}}" alt=""
                                                            class="img-responsive"></a>
                                                    <div class="title-wrapper"><a href="hotel-view.html"
                                                            class="title">{{ $hotels->nama }}</a>
                                                        <div title="Rated{{ $hotels->bintang }} out of 5" class="star-rating"><span
                                                                class="width-{{ $hotels->persenbintang }}"><strong class="rating">{{ $hotels->bintang }}</strong>
                                                                out of 5</span></div>
                                                    </div>
                                                    <div class="label-sale">
                                                        <p class="text">sale</p>
                                                        <p class="number">35%</p>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div class="content">
                                                        <div class="title">
                                                            <div class="price"><sup>$</sup><span
                                                                    class="number">{{ $hotels->harga }}</span></div>
                                                            <p class="for-price">{{ $hotels->keterangan }}</p>
                                                        </div>
                                                        <p class="text">{{ $hotels->keterangan }}</p>
                                                        <div class="group-btn-tours"><a href="hotel-view.html"
                                                                class="left-btn">book now</a></div>
                                                    </div>
                                                    <ul class="list-info list-unstyled">
                                                        <li><a href="#" class="link"><i
                                                                    class="icons hidden-icon fa fa-eye"></i><span
                                                                    class="number">234</span></a></li>
                                                        <li><a href="#" class="link"><i
                                                                    class="icons hidden-icon fa fa-heart"></i><span
                                                                    class="number">156</span></a></li>
                                                        <li><a href="#" class="link"><i
                                                                    class="icons hidden-icon fa fa-comment"></i><span
                                                                    class="number">19</span></a></li>
                                                        <li><a href="javascript:void(0)" class="link"><i
                                                                    class="icons fa fa-share-alt"></i></a>
                                                            <ul class="share-social-list">
                                                                <li><a href="#" class="link-social"><i
                                                                            class="icons fa fa-facebook"></i></a></li>
                                                                <li><a href="#" class="link-social"><i
                                                                            class="icons fa fa-google-plus"></i></a>
                                                                </li>
                                                                <li><a href="#" class="link-social"><i
                                                                            class="icons fa fa-twitter"></i></a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#" class="link"><i
                                                                    class="icons fa fa-map-marker"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div><a href="about-us.html" class="btn btn-transparent margin-top70">more
                                        hotel</a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- HAPPY TRAVELER -->
                    <section class="travelers">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="traveler-wrapper padding-top padding-bottom">
                                        <div class="group-title white">
                                            <div class="sub-title">
                                                <p class="text">RELAX AND ENJOY</p><i class="icons flaticon-people"></i>
                                            </div>
                                            <h2 class="main-title">happy traveler</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="traveler-list">
                                        @foreach ($testimoni as $testimonis)
                                        <div class="traveler">
                                            <div class="cover-image"><img src="{{ url('uploads/testimoni/background')}}/{{$testimonis->background}}"
                                                    alt=""></div>
                                            <div class="wrapper-content">
                                                <div class="avatar"><img src="{{ url('uploads/testimoni/foto')}}/{{$testimonis->foto}}"
                                                        alt="" class="img-responsive"></div>
                                                <p class="name">{{ $testimonis->nama }}</p>
                                                <p class="address">{{ $testimonis->kota }}</p>
                                                <p class="description">{{ $testimonis->testimoni }}</p>
                                            </div>
                                        </div>
                                         @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- NEWS AND UPDATES -->
                    <section class="news padding-top padding-bottom">
                        <div class="container">
                            <div class="news-wrapper">
                                <div class="group-title">
                                    <div class="sub-title">
                                        <p class="text">EXPLORATIONAL STORIES</p><i class="icons flaticon-people"></i>
                                    </div>
                                    <h2 class="main-title">news and updates</h2>
                                </div>
                                <div class="news-content margin-top70">
                                    <div class="news-list">
                                        <div class="new-layout">
                                            <div class="image-wrapper">
                                                <a href="#" class="link"><img src="assets/images/homepage/new-1.jpg"
                                                        alt="" class="img-responsive"></a>
                                                <div class="description">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua ...</div>
                                            </div>
                                            <div class="content-wrapper"><a href="#" class="title">DON’T GIVE IN TO FEAR
                                                    OR HOW TO TRAVEL TO A PLACE YOU KNOW.</a>
                                                <ul class="info list-inline list-unstyled">
                                                    <li><a href="#" class="link">September 17, 2015 </a></li>
                                                    <li><a href="#" class="link">admin</a></li>
                                                </ul>
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam.</p>
                                                <p class="text">Duis aute irure dolor in reprehenderit in voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                    occaecat cupidatat non proident, sunt in culpa. Ut enim ad minim
                                                    veniam, quis trud tionco laboris
                                                    nisi ut aliquip.</p><a href="blog.html"
                                                    class="btn btn-maincolor">read know</a>
                                                <div class="tags">
                                                    <div class="title-tag">tags:</div>
                                                    <ul class="list-inline list-unstyled list-tags">
                                                        <li><a href="blog-detail.html" class="tag">explore</a></li>
                                                        <li><a href="blog-detail.html" class="tag">adventure</a></li>
                                                        <li><a href="blog-detail.html" class="tag">traveler</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-layout">
                                            <div class="image-wrapper">
                                                <a href="#" class="link"><img src="assets/images/homepage/new-2.jpg"
                                                        alt="" class="img-responsive"></a>
                                                <div class="description">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua ...</div>
                                            </div>
                                            <div class="content-wrapper"><a href="#" class="title">365 Days: 20 things I
                                                    Learned from Traveling Around the World</a>
                                                <ul class="info list-inline list-unstyled">
                                                    <li><a href="#" class="link">november 29, 2015 </a></li>
                                                    <li><a href="#" class="link">admin</a></li>
                                                </ul>
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam.</p>
                                                <p class="text">Duis aute irure dolor in reprehenderit in voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                    occaecat cupidatat non proident, sunt in culpa.</p><a
                                                    href="blog.html" class="btn btn-maincolor">read know</a>
                                                <div class="tags">
                                                    <div class="title-tag">tags:</div>
                                                    <ul class="list-inline list-unstyled list-tags">
                                                        <li><a href="blog-detail.html" class="tag">explore</a></li>
                                                        <li><a href="blog-detail.html" class="tag">adventure</a></li>
                                                        <li><a href="blog-detail.html" class="tag">traveler</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-layout">
                                            <div class="image-wrapper">
                                                <a href="#" class="link"><img src="assets/images/homepage/new-3.jpg"
                                                        alt="" class="img-responsive"></a>
                                                <div class="description">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua ...</div>
                                            </div>
                                            <div class="content-wrapper"><a href="#" class="title">My 30 Best Travel
                                                    Tips After 4 Years Traveling The World</a>
                                                <ul class="info list-inline list-unstyled">
                                                    <li><a href="#" class="link">april 1, 2016</a></li>
                                                    <li><a href="#" class="link">admin</a></li>
                                                </ul>
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam.</p>
                                                <p class="text">Duis aute irure dolor in reprehenderit in voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                    occaecat cupidatat non proident, sunt in culpa. Ut enim ad minim
                                                    veniam, quis trud tionco laboris
                                                    nisi ut aliquip.</p><a href="blog.html"
                                                    class="btn btn-maincolor">read know</a>
                                                <div class="tags">
                                                    <div class="title-tag">tags:</div>
                                                    <ul class="list-inline list-unstyled list-tags">
                                                        <li><a href="blog-detail.html" class="tag">explore</a></li>
                                                        <li><a href="blog-detail.html" class="tag">adventure</a></li>
                                                        <li><a href="blog-detail.html" class="tag">traveler</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- EXPLORE DREAM DISCOVER -->
                    @foreach ($promo as $promo)
                    <section class="banner-sale-1">
                        <div class="banner-left">
                            <div class="title-box">
                                <h1 class="title-overlay title-1 padding-top">Explore</h1>
                                <h2 class="title-overlay title-2">Dream</h2>
                                <h3 class="title-overlay title-3 padding-bottom">Discover </h3>
                            </div>
                        </div>
                        
                        <div class="banner-right">
                            <div class="text-salebox">
                                <div class="text-left">
                                    <div class="sale-box">
                                        <div class="sale-box-top">
                                            <h2 class="number">{{$promo->diskon}}</h2><span class="sup-1">%</span><span
                                                class="sup-2">off</span>
                                        </div>
                                        <h2 class="text-sale">sale</h2>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <h5 class="title">{{$promo->judul}}</h5>
                                    <p class="text">{{$promo->keterangan}}</p>
                                    <div class="group-button"><a href="tour-view.html" class="btn btn-maincolor">book
                                            now</a><a href="tour-view.html" class="btn btn-transparent">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </section>
                    @endforeach

                    <!-- A FACT OF EXPLOOER -->
                    <section class="a-fact padding-top padding-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="group-title">
                                        <div class="sub-title">
                                            <p class="text">PROUD NUMBERS</p><i class="icons flaticon-people"></i>
                                        </div>
                                        <h2 class="main-title">a fact of explooer</h2>
                                    </div>
                                    <div class="a-fact-wrapper">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, by injected humour. </p>
                                        <div class="a-fact-list">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="text">1456 flight in the world.</p>
                                                </li>
                                                <li>
                                                    <p class="text">2385 happy customer enjoy jouneys with Explooer.</p>
                                                </li>
                                                <li>
                                                    <p class="text">356 best destinational we explore.</p>
                                                </li>
                                                <li>
                                                    <p class="text">2345 package tours every year.</p>
                                                </li>
                                                <li>
                                                    <p class="text">top 10 best tourism services.</p>
                                                </li>
                                            </ul>
                                        </div><a href="#" class="btn btn-maincolor">read more</a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="a-fact-image-wrapper">
                                        <div class="a-fact-image"><a href="#" class="icons icons-1"><i
                                                    class="fa fa-plane"></i></a><img
                                                src="assets/images/homepage/area-1.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="a-fact-image"><a href="#" class="icons icons-2"><i
                                                    class="fa fa-map-marker"></i></a><img
                                                src="assets/images/homepage/area-2.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="a-fact-image"><a href="#" class="icons icons-3"><i
                                                    class="fa fa-users"></i></a><img
                                                src="assets/images/homepage/area-3.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="a-fact-image"><a href="#" class="icons icons-4"><i
                                                    class="fa fa-suitcase"></i></a><img
                                                src="assets/images/homepage/area-4.png" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- CONTACT US -->
                    <section class="contact style-1">
                        <div class="container">
                            <div class="row">
                                <div class="wrapper-contact-style">
                                    <div data-wow-delay="0.5s" class="contact-wrapper-images wow fadeInLeft"><img
                                            src="{{url('uploads/background/backgroundorang')}}/{{$background-> background_orang}}" alt=""
                                            class="img-responsive"></div>
                                    <div class="col-lg-6 col-sm-7 col-lg-offset-4 col-sm-offset-5">
                                        <div data-wow-delay="0.4s"
                                            class="contact-wrapper padding-top padding-bottom wow fadeInRight">
                                            <div class="contact-box">
                                                <h5 class="title">contact us</h5>
                                                <p class="text">Just pack and go! Let leave your travel plan to travel
                                                    experts!</p>
                                                <form class="contact-form"><input type="text" placeholder="Your Name"
                                                        class="form-control form-input">
                                                    <!--label.control-label.form-label.warning-label(for="") Warning for the above !--><input
                                                        type="email" placeholder="Your Email"
                                                        class="form-control form-input">
                                                    <!--label.control-label.form-label.warning-label(for="") Warning for the above !--><textarea
                                                        placeholder="Your Message"
                                                        class="form-control form-input"></textarea>
                                                    <div class="contact-submit"><button type="submit"
                                                            data-hover="SEND NOW" class="btn btn-slide"><span
                                                                class="text">send message</span><span
                                                                class="icons fa fa-long-arrow-right"></span></button>
                                                    </div>
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
                <div class="footer-main padding-top padding-bottom">
                    <div class="container">
                        <div class="footer-main-wrapper">
                            <a href="index.html" class="logo-footer"><img
                                    src="assets/images/logo/logo-white-color-1.png" alt="" class="img-responsive" /></a>
                            <div class="row">
                                <div class="col-2">
                                    <div class="col-md-3 col-xs-5">
                                        <div class="contact-us-widget widget">
                                            <div class="title-widget">contact us</div>
                                            <div class="content-widget">
                                                @foreach($contactus as $contactus)
                                                <div class="info-list">
                                                    <ul class="list-unstyled">
                                                        <li><i class="icons fa fa-map-marker"></i><a href="#"
                                                                class="link">{{$contactus->lokasi}}</a></li>
                                                        <li><i class="icons fa fa-phone"></i><a href="#"
                                                                class="link">{{$contactus->no_telp}}</a></li>
                                                        <li><i class="icons fa fa-envelope-o"></i><a href="#"
                                                                class="link">{{$contactus->email}}</a></li>
                                                    </ul>
                                                </div>
                                                @endforeach
                                                <div class="form-email">
                                                    <p class="text">Sign up for our mailing list to get latest updates
                                                        and offers.</p>
                                                    <form action="index.html">
                                                        <div class="input-group"><input type="text"
                                                                placeholder="Email address"
                                                                class="form-control form-email-widget" /><span
                                                                class="input-group-btn"><button type="submit"
                                                                    class="btn-email">&#10004;</button></span></div>
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
                                                    @foreach($tourlists as $tourlist1)
                                                    <li><a href="#" class="link">{{$tourlist1->nama_tour}}</a></li>
                                                    @endforeach
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
                                                    @foreach($topdeals as $topdeals)
                                                    <li><a href="#" class="link">{{$topdeals->nama_tour_deals}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="destination-widget widget">
                                            <div class="title-widget">Destination</div>
                                            <div class="content-widget">
                                                <ul class="list-unstyled list-inline">
                                                    @foreach($gambar as $tourlist)
                                                    <li>
                                                        <a href="#" class="thumb"><img
                                                                src="{{url('uploads/tour')}}/{{$tourlist->gambar}}" alt=""
                                                                class="img-responsive" /></a>
                                                    </li>
                                                    @endforeach
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
                                <a href="#" class="link"><img src="assets/images/footer/logo-01.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-02.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-03.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-04.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-05.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-06.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-01.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-02.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-03.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-04.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-05.png" alt=""
                                        class="img-responsive" /></a>
                            </div>
                            <div class="logo-item">
                                <a href="#" class="link"><img src="assets/images/footer/logo-06.png" alt=""
                                        class="img-responsive" /></a>
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
        if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
            $('.logo .header-logo img ,.logo-footer img, .group-logo .img-logo').attr('src', 'assets/images/logo/logo-white-' + Cookies.get('color-skin') + '.png');
            $('.logo-black img').attr('src', 'assets/images/logo/logo-black-' + Cookies.get('color-skin') + '.png');
        }
        else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
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
    <script src="assets/js/pages/home-page.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
        var logo_str = 'assets/images/logo/logo-black-color-1.png';
        if (Cookies.set('color-skin')) {
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