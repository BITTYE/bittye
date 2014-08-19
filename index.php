<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/font.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <!--css plugin-->
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link rel="stylesheet" href="css/jquery.nouislider.css"/>
    <link rel="stylesheet" href="css/jquery.popupcommon.css"/>

    <link rel="stylesheet" href="css/style.css"/>
    
    
    <!--[if IE 9]>
    <link rel="stylesheet" href="../css/ie9.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="../css/ie8.css"/>
    <![endif]-->

    <link rel="stylesheet" href="css/res-menu.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="../js/html5.js"></script>
        <![endif]--><script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53961033-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<body class=""><!--<div class="alert_w_p_u"></div>-->
<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
        <?php include 'header.php';?>
        <?php include 'mobile-nav.php';?>
        <div class="top-area">
            <div class="mod-head-slide">
                <div class="grid_frame">
                    <div class="wrap-slide">
                        <p class="ta-c"><img src="images/ajax-loader.gif" alt="loading"></p>
                        <div id="sys_head_slide" class="head-slide flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="images/ex/01_banner.jpg" alt=""/>
                                </li>
                                <li>
                                    <img src="images/ex/02_banner.jpg" alt=""/>
                                </li>
                                <li>
                                    <img src="images/ex/03_banner.jpg" alt=""/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'filter.php';?>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-grp-coupon block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            New Coupons
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$2.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">Save $1.50 on two</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$5.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon dismiss" href="#">Dismiss Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$7.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                    </div>
                </div><!--end block: New Coupons-->
                <div class="mod-grp-coupon block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            Featured Coupons
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$12.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">VIEW COUPON CODE</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$17.50 off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon dismiss" href="#">17GH0097</a>
                            </div>
                            <i class="stick-lbl trust-brand-y"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$3.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl trust-brand-b"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$7.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$2.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$11.50 off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$12.00 Off</div>
                                <div class="coupon-brand">SunMart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon dismiss" href="#">Dismiss Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$4.5 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                    </div>
                    <a class="grid_6 btn btn-orange btn-load-more" href="#">Load more coupon</a>
                </div><!--end block: Featured Coupons-->
                <div class="mod-email-newsletter clearfix">
                    <div class="grid_12">
                        <div class="wrap-form clearfix">
                            <div class="left-lbl">
                                <div class="big-lbl">newsletter</div>
                                <div class="sml-lbl">Don't miss a chance!</div>
                            </div>
                            <div class="wrap-email">
                                <label for="sys_email_newsletter">
                                    <input type="email" id="sys_email_newsletter" placeholder="Enter your email here"/>
                                </label>
                            </div>
                            <button class="btn btn-orange btn-submit-email" type="submit">SUBSCRIBE NOW</button>
                        </div>
                    </div>
                </div><!--end: .mod-email-newsletter-->
                <div class="mod-brands block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            POPULAR BRANDS (129)
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-brand clearfix">
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                    </div>
                </div><!--end: .mod-brand -->
            </div>
        </div>
        <footer class="mod-footer">
            <div class="footer-top">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="grid_3">
                            <div class="company-info">
                                <img src="images/logo-gray.png" alt="bittye"/>
                                <p class="rs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
                                <p class="rs">
                                    1200 Balh Blah Avenue <br />
                                    Hanoi, Vietnam 12137
                                </p>
                            </div>
                        </div>
                        <div class="grid_3">
                            <div class="block social-link">
                                <h3 class="title-block">Follow us</h3>
                                <div class="block-content">
                                    <ul class="rs">
                                        <li>
                                            <i class="fa fa-facebook-square fa-2x"></i>
                                            <a href="#" target="_blank">Our Facebook page</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-twitter-square fa-2x"></i>
                                            <a href="#" target="_blank">Follow our Tweets</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-pinterest-square fa-2x"></i>
                                            <a href="#" target="_blank">Follow our Pin board</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--end: Follow us -->
                        <div class="grid_3">
                            <div class="block intro-video">
                                <h3 class="title-block">Intro Video</h3>
                                <div class="block-content">
                                    <div class="wrap-video" id="sys_wrap_video">
                                        <div class="lightbox-video">
                                                <a class="html5lightbox" href="http://player.vimeo.com/video/36932496" title=""><i class="btn-play"></i><img src="images/video-img.png" alt=""></a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: Intro Video -->
                        <div class="grid_3">
                            <div class="block blog-recent">
                                <h3 class="title-block">Latest blog</h3>
                                <div class="block-content">
                                    <div class="entry-item flex">
                                        <a class="thumb-left" href="#">
                                            <img src="images/ex/04-15.jpg" alt="$TITLE"/>
                                        </a>
                                        <div class="flex-body"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing eli</a></div>
                                    </div>
                                    <div class="entry-item flex">
                                        <a class="thumb-left" href="#">
                                            <img src="images/ex/04-16.jpg" alt="$TITLE"/>
                                        </a>
                                        <div class="flex-body"><a href="#">Ut wisi enim ad minim veniam, quis nostrud</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: blog-recent -->
                    </div>
                </div>
            </div><!--end: .foot-top-->
            <div class="foot-copyright">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="left-link">
                            <a href="#">Home</a>
                            <a href="#">Term of conditions</a>
                            <a href="#">Privacy</a>
                            <a href="#">Support</a>
                            <a href="#">Contact</a>
                        </div>
                        <div class="copyright">
                            Copyright &copy; 2014 by www.bittye.com
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.nouislider.js"></script>
<script type="text/javascript" src="js/jquery.popupcommon.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>
<!--//js for responsive menu-->
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/mlpushmenu.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<!--[if lte IE 9]>
<script type="text/javascript" src="../js/jquery.placeholder.js"></script>
<script type="text/javascript" src="../js/create.placeholder.js"></script>
<![endif]-->
<!--[if lte IE 8]>
<script type="text/javascript" src="../js/ie8.js"></script>
<![endif]-->

</body>

</html>