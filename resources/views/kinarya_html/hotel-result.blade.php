<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Exploore | Hotel Result</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT CSS-->
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/font/font-icon/font-awesome/css/font-awesome.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/font/font-icon/font-flaticon/flaticon.css')}}">
        <!-- LIBRARY CSS-->
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/bootstrap/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/animate/animate.cs')}}'">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/slick-slider/slick.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/slick-slider/slick-theme.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/selectbox/css/jquery.selectbox.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/please-wait/please-wait.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/fancybox/css/jquery.fancybox.css?v=2.1.5')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/fancybox/css/jquery.fancybox-buttons.css?v=1.0.5')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/fancybox/css/jquery.fancybox-thumbs.css?v=1.0.7')}}">
        <!-- STYLE CSS-->
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/css/layout.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/css/components.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/css/responsive.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/css/color.css')}}">
        <!--link(type="text/css", rel='stylesheet', href='assets/css/color-1/color-1.css', id="color-skins")-->
        <link type="text/css" rel="stylesheet" href="#" id="color-skins">
        <script src="{{ asset ('assets/libs/jquery/jquery-2.2.3.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/js-cookie/js.cookie.js')}}"></script>
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
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/nst-slider/css/jquery.nstSlider.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset ('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
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
            </div>
            <!-- WRAPPER CONTENT-->
            <div class="wrapper-content">
                <div id="wrapper-content">
                    <!-- MAIN CONTENT-->
                    <div class="main-content">
                        <section class="page-banner hotel-result">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <ol class="breadcrumb">
                                            <li><a href="index.html" class="link home">Home</a></li>
                                            <li class="active"><a href="#" class="link">Hotel</a></li>
                                        </ol>
                                        <div class="clearfix"></div>
                                        <h2 class="captions">HOTEL</h2></div>
                                </div>
                            </div>
                        </section>
                        <div class="page-main">
                            <div class="clearfix"></div>
                            <div class="hotel-result-main padding-top padding-bottom">
                                <div class="container">
                                    <div class="result-meta">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                            </div>
                                            <div class="col-lg-8 col-md-12">
                                                <div class="result-filter-wrapper">
                                                    <form><label class="result-filter-label">Sort by :</label>
                                                        <div class="selection-bar">
                                                            <div
                                                                class="select-wrapper"><select name="Shortest" class="custom-select selectbox"><option value="" disabled="disabled" selected="selected" hidden="hidden">deals</option><option value="1">deal 1</option><option value="2">deal 2</option></select></div>
                                                        <div
                                                            class="select-wrapper"><select name="Nearby airport" class="custom-select selectbox"><!--option(value="" disabled selected hidden) price--><option value="expensive">expensive</option><option value="cheap">cheap</option></select></div>
                                                <div
                                                    class="select-wrapper"><select name="Time" class="custom-select selectbox"><option value="" disabled="disabled" selected="selected" hidden="hidden">review score</option><option value="5">5 stars</option><option value="4">4 stars</option><option value="3">3 stars</option><option value="2">2 stars</option><option value="1">1 stars</option></select></div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="result-body">
                            <div class="row">
                                <div class="col-md-8 main-right">
                                    <div class="hotel-list">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="hotels-layout">
                                                    <div class="image-wrapper">
                                                        <a href="hotel-view.html" class="link"><img src="assets/images/hotels/hotel-5.jpg" alt="" class="img-responsive"></a>
                                                        <div class="label-sale">
                                                            <p class="text">sale</p>
                                                            <p class="number">35%</p>
                                                        </div>
                                                        <div class="title-wrapper"><a href="hotel-view.html" class="title">sarina hotel</a>
                                                            <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00
 out of 5</strong></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div class="content">
                                                            <div class="title">
                                                                <div class="price"><sup>$</sup><span class="number">30</span></div>
                                                                <p class="for-price">for person per night</p>
                                                            </div>
                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporui incididunt ut labore et dolore magna papi aliqua ut enim ad.</p>
                                                            <div class="group-btn-tours"><a href="hotel-view.html" class="left-btn">book now</a></div>
                                                        </div>
                                                        <ul class="list-info list-unstyled">
                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-eye"></i><span class="number">234</span></a></li>
                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-heart"></i><span class="number">156</span></a></li>
                                                            <li><a href="#" class="link"><i class="icons hidden-icon fa fa-comment"></i><span class="number">19</span></a></li>
                                                            <li><a href="javascript:void(0)" class="link"><i class="icons fa fa-share-alt"></i></a>
                                                                <ul class="share-social-list">
                                                                    <li><a href="#" class="link-social"><i class="icons fa fa-facebook"></i></a></li>
                                                                    <li><a href="#" class="link-social"><i class="icons fa fa-google-plus"></i></a></li>
                                                                    <li><a href="#" class="link-social"><i class="icons fa fa-twitter"></i></a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#" class="link"><i class="icons fa fa-map-marker"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                                </div>
                                            </div>
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
                    </div>
                </div>
            </div>
        </div>
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
                $('.logo-black img').attr('src', '{{ asset ('assets/images/logo/logo-black-')}}' + Cookies.get('color-skin') + '.png');
            }
            else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1'))
            {
                $('.logo .header-logo img , .logo-footer img, .group-logo .img-logo').attr('src', 'assets/images/logo/logo-white-color-1.png');
                $('.logo-black img').attr('src', 'assets/images/logo/logo-black-color-1.png');
            }
        </script>
        <!-- LIBRARY JS-->
        <script src="{{ asset ('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/detect-browser/browser.js')}}"></script>
        <script src="{{ asset ('assets/libs/smooth-scroll/jquery-smoothscroll.js')}}"></script>
        <script src="{{ asset ('assets/libs/wow-js/wow.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/slick-slider/slick.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/selectbox/js/jquery.selectbox-0.2.js')}}"></script>
        <script src="{{ asset ('assets/libs/please-wait/please-wait.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/fancybox/js/jquery.fancybox.js')}}"></script>
        <script src="{{ asset ('assets/libs/fancybox/js/jquery.fancybox-buttons.js')}}"></script>
        <script src="{{ asset ('assets/libs/fancybox/js/jquery.fancybox-thumbs.js')}}"></script>
        <!--script(src="assets/libs/parallax/jquery.data-parallax.min.js")-->
        <!-- MAIN JS-->
        <script src="{{ asset ('assets/js/main.js')}}"></script>
        <!-- LOADING JS FOR PAGE-->
        <script src="{{ asset ('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/nst-slider/js/jquery.nstSlider.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/plus-minus-input/plus-minus-input.js')}}"></script>
        <script src="{{ asset ('assets/js/pages/sidebar.js')}}"></script>
        <script src="{{ asset ('assets/js/pages/result.js')}}"></script>
        <script>
            var logo_str = '{{ asset ('assets/images/logo/logo-black-color-1.png')}}';
            if (Cookies.set('color-skin'))
            {
                logo_str = '{{ asset ('assets/images/logo/logo-black-')}}' + Cookies.set('color-skin') + '.png';
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