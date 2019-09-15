<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Exploore | Blog</title>
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
        <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
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
                            <li class="dropdown active"><a href="blog.html" class="main-menu"><span class="text">blog</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
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
                                            <li class="dropdown active"><a href="javascript:void(0)" class="main-menu"><span class="text">blog</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
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
                        <section class="page-banner blog">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <ol class="breadcrumb">
                                            <li><a href="index.html" class="link home">Home</a></li>
                                            <li class="active"><a href="#" class="link">BLOG</a></li>
                                        </ol>
                                        <div class="clearfix"></div>
                                        <h2 class="captions">BLOG</h2></div>
                                </div>
                            </div>
                        </section>
                        <section class="page-main padding-top padding-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 main-left blog-wrapper">
                                        <div class="blog-post">
                                            <div class="blog-image">
                                                <a href="javascript:void(0)" class="link"><img src="assets/images/blog/blog-image-1.jpg" alt="a car on a road" class="img-responsive"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="col-xs-2">
                                                    <div class="row">
                                                        <div class="date">
                                                            <h1 class="day">07</h1>
                                                            <div class="month">JAN</div>
                                                            <div class="year">2016</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-10 content-wrapper"><a href="javascript:void(0)" class="heading">Many people limit themselves what they think they can do.</a>
                                                    <h5 class="meta-info">Posted By : <span>John Smith</span><span class="sep">/</span><span class="view-count fa-custom">56</span><span class="comment-count fa-custom">239</span></h5>
                                                    <p class="preview">Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.
                                                        Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus , tortor mauris condimentum nibh, ut...</p><a href="javascript:void(0)"
                                                        class="btn btn-gray btn-fit btn-capitalize">Read More</a></div>
                                            </div>
                                        </div>
                                        <div class="blog-post">
                                            <div class="blog-video">
                                                <div class="video-thumbnail">
                                                    <div class="video-bg"><img src="assets/images/blog/blog-video-poster-1.jpg" alt="A traveler standing on a rock" class="img-responsive"></div>
                                                    <div class="video-button-play"> <i class="icons fa fa-play"></i></div>
                                                    <div class="video-button-close"></div><iframe src="https://www.youtube.com/embed/moOosWuoDyA?rel=0" allowfullscreen="allowfullscreen" class="video-embed"></iframe></div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="col-xs-2">
                                                    <div class="row">
                                                        <div class="date">
                                                            <h1 class="day">07</h1>
                                                            <div class="month">JAN</div>
                                                            <div class="year">2016</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-10 content-wrapper"><a href="javascript:void(0)" class="heading">Many people limit themselves what they think they can do.</a>
                                                    <h5 class="meta-info">Posted By : <span>John Smith</span><span class="sep">/</span><span class="view-count fa-custom">56</span><span class="comment-count fa-custom">239</span></h5>
                                                    <p class="preview">Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.
                                                        Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus , tortor mauris condimentum nibh, ut...</p><a href="javascript:void(0)"
                                                        class="btn btn-gray btn-fit btn-capitalize">Read More</a></div>
                                            </div>
                                        </div>
                                        <div class="blog-post">
                                            <div class="blog-content">
                                                <div class="col-xs-2">
                                                    <div class="row">
                                                        <div class="date">
                                                            <h1 class="day">06</h1>
                                                            <div class="month">DEC</div>
                                                            <div class="year">2016</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-10 quote-content-wrapper content-wrapper">
                                                    <blockquote class="quote-wrapper fa-custom"><a href="javascript:void(0)" class="quote">Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis a.</a>
                                                        <footer><span class="author">Amber Ivy</span><span class="company">(Grancie Company)</span></footer>
                                                    </blockquote>
                                                    <p class="preview">Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.
                                                        Donec er nulla non metus auctor fringilla est non commodo luctus.</p><a href="javascript:void(0)" class="btn btn-gray btn-fit btn-capitalize">Read More</a></div>
                                            </div>
                                        </div>
                                        <div class="blog-post">
                                            <div class="blog-image">
                                                <a href="javascript:void(0)" class="link"><img src="assets/images/blog/blog-image-1.jpg" alt="a car on a road" class="img-responsive"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="col-xs-2">
                                                    <div class="row">
                                                        <div class="date">
                                                            <h1 class="day">07</h1>
                                                            <div class="month">JAN</div>
                                                            <div class="year">2016</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-10 content-wrapper"><a href="javascript:void(0)" class="heading">Many people limit themselves what they think they can do.</a>
                                                    <h5 class="meta-info">Posted By : <span>John Smith</span><span class="sep">/</span><span class="view-count fa-custom">56</span><span class="comment-count fa-custom">239</span></h5>
                                                    <p class="preview">Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.
                                                        Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus , tortor mauris condimentum nibh, ut...</p><a href="javascript:void(0)"
                                                        class="btn btn-gray btn-fit btn-capitalize">Read More</a></div>
                                            </div>
                                        </div>
                                        <nav class="pagination-list margin-top70">
                                            <ul class="pagination">
                                                <li><a href="#" aria-label="Previous" class="btn-pagination previous"><span aria-hidden="true" class="fa fa-angle-left"></span></a></li>
                                                <li><a href="#" class="btn-pagination active">01</a></li>
                                                <li><a href="#" class="btn-pagination">02</a></li>
                                                <li><a href="#" class="btn-pagination">03</a></li>
                                                <li><a href="#" class="btn-pagination">...</a></li>
                                                <li><a href="#" aria-label="Next" class="btn-pagination next"><span aria-hidden="true" class="fa fa-angle-right"></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-md-4 sidebar-widget">
                                        <div class="col-2">
                                            <div class="search-widget widget">
                                                <form>
                                                    <div class="input-group search-wrapper"><input type="text" placeholder="Search..." class="search-input form-control"><span class="input-group-btn"><button type="submit" class="btn submit-btn"><span class="fa fa-search"></span></button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="col-1">
                                                <div class="recent-post-widget widget">
                                                    <div class="title-widget">
                                                        <div class="title">RECENT POST</div>
                                                    </div>
                                                    <div class="content-widget">
                                                        <div class="recent-post-list">
                                                            <div class="single-widget-item">
                                                                <div class="single-recent-post-widget">
                                                                    <a href="javascript:void(0)" class="thumb img-wrapper"><img src="assets/images/blog/recent-blog-post/post-1.jpg" alt="recent post picture 1"></a>
                                                                    <div class="post-info">
                                                                        <div class="meta-info"><span>Aug 18, 2016</span><span class="sep">/</span><span class="fa-custom view-count">56</span><span class="fa-custom comment-count">239</span></div>
                                                                        <div class="single-rp-preview">Donec ullamcorper nulla non metus nisi auctor fringilla they can do.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-widget-item">
                                                                <div class="single-recent-post-widget">
                                                                    <a href="javascript:void(0)" class="thumb img-wrapper"><img src="assets/images/blog/recent-blog-post/post-2.jpg" alt="recent post picture 2"></a>
                                                                    <div class="post-info">
                                                                        <div class="meta-info"><span>Aug 18, 2016</span><span class="sep">/</span><span class="fa-custom view-count">56</span><span class="fa-custom comment-count">239</span></div>
                                                                        <div class="single-rp-preview">Donec ullamcorper nulla non metus nisi auctor fringilla they can do.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-widget-item">
                                                                <div class="single-recent-post-widget">
                                                                    <a href="javascript:void(0)" class="thumb img-wrapper"><img src="assets/images/blog/recent-blog-post/post-3.jpg" alt="recent post picture 3"></a>
                                                                    <div class="post-info">
                                                                        <div class="meta-info"><span>Aug 18, 2016</span><span class="sep">/</span><span class="fa-custom view-count">56</span><span class="fa-custom comment-count">239</span></div>
                                                                        <div class="single-rp-preview">Donec ullamcorper nulla non metus nisi auctor fringilla they can do.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-widget-item">
                                                                <div class="single-recent-post-widget">
                                                                    <a href="javascript:void(0)" class="thumb img-wrapper"><img src="assets/images/blog/recent-blog-post/post-4.jpg" alt="recent post picture 4"></a>
                                                                    <div class="post-info">
                                                                        <div class="meta-info"><span>Aug 18, 2016</span><span class="sep">/</span><span class="fa-custom view-count">56</span><span class="fa-custom comment-count">239</span></div>
                                                                        <div class="single-rp-preview">Donec ullamcorper nulla non metus nisi auctor fringilla they can do.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-widget-item">
                                                                <div class="single-recent-post-widget">
                                                                    <a href="javascript:void(0)" class="thumb img-wrapper"><img src="assets/images/blog/recent-blog-post/post-5.jpg" alt="recent post picture 5"></a>
                                                                    <div class="post-info">
                                                                        <div class="meta-info"><span>Aug 18, 2016</span><span class="sep">/</span><span class="fa-custom view-count">56</span><span class="fa-custom comment-count">239</span></div>
                                                                        <div class="single-rp-preview">Donec ullamcorper nulla non metus nisi auctor fringilla they can do.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="categories-widget widget">
                                                    <div class="title-widget">
                                                        <div class="title">CATEGORIES</div>
                                                    </div>
                                                    <div class="content-widget">
                                                        <ul class="widget-list">
                                                            <li class="single-widget-item"><a href="javascript:void(0)" class="link"><span class="fa-custom category">Travel</span><span class="count">27</span></a></li>
                                                            <li class="single-widget-item"><a href="javascript:void(0)" class="link"><span class="fa-custom category">Explore</span><span class="count">75</span></a></li>
                                                            <li class="single-widget-item"><a href="javascript:void(0)" class="link"><span class="fa-custom category">Discover</span><span class="count">35</span></a></li>
                                                            <li class="single-widget-item"><a href="javascript:void(0)" class="link"><span class="fa-custom category">Adventure</span><span class="count">34</span></a></li>
                                                            <li class="single-widget-item"><a href="javascript:void(0)" class="link"><span class="fa-custom category">The world</span><span class="count">65</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tags-widget widget">
                                                    <div class="title-widget">
                                                        <div class="title">TAGS</div>
                                                    </div>
                                                    <div class="content-widget"><a href="javascript:void(0)" class="tag">Explore</a><a href="javascript:void(0)" class="tag">Adventure</a><a href="javascript:void(0)" class="tag">Traveler</a><a href="javascript:void(0)" class="tag">Europe</a>
                                                        <a
                                                            href="javascript:void(0)" class="tag">Explore</a><a href="javascript:void(0)" class="tag">Big Your World</a><a href="javascript:void(0)" class="tag">Adventure</a><a href="javascript:void(0)" class="tag">Adventure</a><a href="javascript:void(0)"
                                                                class="tag">Traveler</a><a href="javascript:void(0)" class="tag">Explore</a><a href="javascript:void(0)" class="tag">Dream</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="col-1">
                                                <div class="archives-widget widget">
                                                    <div class="title-widget">
                                                        <div class="title">ARCHIVES</div>
                                                    </div>
                                                    <div class="content-widget">
                                                        <div class="archive-datepicker"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="gallery-widget widget">
                                                    <div class="title-widget">
                                                        <div class="title">FROM GALLERY</div>
                                                    </div>
                                                    <div class="content-widget">
                                                        <ul class="list-unstyled list-inline">
                                                            <li>
                                                                <a href="javascript:void(0)" class="thumb"><img src="assets/images/gallery/gallery-widget-1.jpg" alt="gallery image 1" class="img-responsive"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="thumb"><img src="assets/images/gallery/gallery-widget-2.jpg" alt="gallery image 2" class="img-responsive"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="thumb"><img src="assets/images/gallery/gallery-widget-3.jpg" alt="gallery image 3" class="img-responsive"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="thumb"><img src="assets/images/gallery/gallery-widget-4.jpg" alt="gallery image 4" class="img-responsive"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="thumb"><img src="assets/images/gallery/gallery-widget-5.jpg" alt="gallery image 5" class="img-responsive"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="thumb"><img src="assets/images/gallery/gallery-widget-6.jpg" alt="gallery image 6" class="img-responsive"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="thumb"><img src="assets/images/gallery/gallery-widget-7.jpg" alt="gallery image 7" class="img-responsive"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="thumb"><img src="assets/images/gallery/gallery-widget-8.jpg" alt="gallery image 8" class="img-responsive"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="social-widget widget">
                                                    <div class="title-widget">
                                                        <div class="title">SOCIAL</div>
                                                    </div>
                                                    <div class="content-widget">
                                                        <ul class="list-unstyled list-inline">
                                                            <li>
                                                                <a href="javascript:void(0)" class="social-icon fa fa-facebook"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="social-icon fa fa-twitter"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="social-icon fa fa-pinterest-p"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="social-icon fa fa-google"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="social-icon fa fa-rss"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="social-icon fa fa-facebook"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="social-icon fa fa-facebook"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
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
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/nst-slider/js/jquery.nstSlider.min.js"></script>
        <script src="assets/libs/plus-minus-input/plus-minus-input.js"></script>
        <script src="assets/js/pages/sidebar.js"></script>
        <script src="assets/js/pages/blog.js"></script>
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