<!doctype html>
<html class="no-js" lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>开源php网站,个人平时学习的一些知识整理</title>
<meta name="keywords" content="网站seo知识学习,网站开发技巧,编程技巧技术">
<meta name="description" content="个人php学习只是整理,php,html,linux,nginx,网站搭建,seo优化,网络推广">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- google fonts -->







<!-- all css here -->
<!-- bootstrap v3.3.6 css -->
<link rel="stylesheet" href="{{ asset('index/css/bootstrap.min.css') }}">
<!-- animate css -->
<link rel="stylesheet" href="{{ asset('index/css/animate.css') }}">
<!-- jquery-ui.min css -->
<link rel="stylesheet" href="{{ asset('index/css/jquery-ui.min.css') }}">
<!-- meanmenu css -->
<link rel="stylesheet" href="{{ asset('index/css/meanmenu.min.css') }}">
<!-- RS slider css -->
<link rel="stylesheet" type="text/css" href="{{ asset('index/lib/rs-plugin/css/settings.css') }}" media="screen" />
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{ asset('index/css/owl.carousel.css') }}">
<!-- font-awesome css -->
<link rel="stylesheet" href="{{ asset('index/css/font-awesome.min.css') }}">
<!-- style css -->
<link rel="stylesheet" href="{{ asset('index/css/style.css') }}">
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('index/css/responsive.css') }}">
<!-- modernizr css -->
<script src="{{ asset('index/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<!-- Add your site or application content here -->
<!-- header-top-area start -->
<div class="header-top-area hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-4">
                <div class="welcome">
                    <span class="phone">Phone: +12345 67890</span> <span class="hidden-sm">/</span>
                    <span class="email hidden-sm">Email: 2581133606@qq.com</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8">
                <div class="top-menu">
                    <ul id="currency">
                        <li><a href="#">技能种类 <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="#">php</a></li>
                                <li><a href="#">linux</a></li>
                                <li><a href="#">laravel</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="#">编程主页</a></li>
                        <li><a href="#">PHP开发</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-top-area end -->
<div class="sticky-wrapper">
    <header>            
        <!-- header-bottom-area start -->            
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <a href=""><img src="{{ asset('index/img/logo/logo.png') }}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-5 col-xs-6 hidden-xs">
                        <div class="header-search">
                            <select>
                                <option value="0">laravel</option>
                                <option value="1">php基础学习</option>
                                <option value="2">linux基础知识学习</option>
                                <option value="0">云服务器的搭建购买</option>
                                <option value="0">Computer &amp; Office</option>
                                <option value="0">Consumer Electronics</option>
                                <option value="0">Jewelry &amp; Accessories</option>
                                <option value="0">Home &amp; Garden</option>
                                <option value="0">Luggage &amp; Bags</option>
                                <option value="0">Shoes</option>
                                <option value="0">Mother &amp; Kids</option>
                                <option value="0">Sports &amp; Entertainment</option>
                                <option value="0">Health &amp; Beauty</option>
                                <option value="0">Watches</option>
                                <option value="0">Toys &amp; Hobbies</option>
                                <option value="0">Weddings &amp; Events</option>
                                <option value="0">Novelty &amp; Special Use</option>
                                <option value="0">Automobiles &amp; Motorcycles</option>
                                <option value="0">Lights &amp; Lighting</option>
                                <option value="0">Furniture</option>
                                <option value="0">Industry &amp; Business</option>
                                <option value="0">Electronic Components &amp; Supplies</option>
                                <option value="0">Office &amp; School Supplies</option>
                                <option value="0">Electrical Equipment &amp; Supplies</option>
                                <option value="0">Gifts &amp; Crafts</option>
                                <option value="0">Home Improvement</option>
                                <option value="0">Food</option>
                                <option value="0">Travel and Coupons</option>
                                <option value="0">Security &amp; Protection</option>
                                <option value="0">In All Categories</option>
                            </select>
                            <input type="text" placeholder="search product..." />
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 float-right account-wrap">
                        <!-- Header shopping cart -->
                        <div class="my-account-holder float-right">                
                            <div class="total-cart my-account-title" data-toggle="my-cart">
                                <div class="user-icon float-left">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="float-left cart-link">
                                    <a href="#">2 Item(s)</a>
                                </div>
                                <div class="clearfix"></div>  
                                <ul>
                                    <li>
                                        <div class="cart-img">
                                            <a href="#"><img src="img/cart/total-cart.jpg" alt="" /></a>                                                
                                        </div>
                                        <div class="cart-info">
                                            <h4><a href="#">Vestibulum suscipit</a></h4>
                                            <span>£165.00 <span>x 1</span></span>
                                        </div>
                                        <div class="del-icon">
                                            <i class="fa fa-times-circle"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-img">
                                            <a href="#"><img src="img/cart/total-cart.jpg" alt="" /></a>                                                
                                        </div>
                                        <div class="cart-info">
                                            <h4><a href="#">Vestibulum suscipit</a></h4>
                                            <span>£165.00 <span>x 1</span></span>
                                        </div>
                                        <div class="del-icon">
                                            <i class="fa fa-times-circle"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-text">Subtotal: </div>
                                        <div class="subtotal-price">£300.00</div>
                                    </li>
                                     <li>
                                        <a href="#" class="button float-right">Checkout</a>                                         
                                    </li>
                                </ul>                   
                            </div>
                        </div>
                        <!-- Header shopping cart -->
                        <div class="my-account-holder float-right">                
                            <div class="my-account-title">
                                <div class="user-icon float-left">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>                                   
                                <div class="clearfix"></div>                     
                            </div>
                        </div>
                         <div class="my-account-holder float-right">                
                            <div class="my-account-title">
                                <div class="user-icon float-left">
                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                </div>                                   
                                <div class="clearfix"></div>                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom-area end -->

        <!-- main-menu-area start -->
        <div class="main-menu-area hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ asset('/')}}">开发网首页</a></li>
                                    <li><a href="{{ asset('/about') }}">关于编程站点</a></li>
                                    <li><a href="{{ asset('/shoplist') }}">编程知识点</a></li>
                                    <li><a href="{{ asset('/single') }}">如何做好开发要点</a></li>
                                    <li><a href="{{ asset('/contact') }}">联系开源php网</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        <!-- main-menu-area end -->
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">Home2</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->           
    </header>
</div>




        @yield('content')




<!-- footer start -->
<footer>
        <!-- footer-top-area start -->
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <!-- footer-widget start -->
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <img src="{{ asset('/index/img/logo/logo-2.png') }}" alt="" />
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. .</p>
                            <div class="widget-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget end -->
                    <!-- footer-widget start -->
                    <div class="col-lg-3 col-md-3 hidden-sm">
                        <div class="footer-widget">
                            <h3>Our services</h3>
                            <ul class="footer-menu">
                                <li><a href="#">Shipping & Returns</a></li>
                                <li><a href="#">Secure Shopping</a></li>
                                <li><a href="#">International Shipping</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer-widget end -->
                    <!-- footer-widget start -->
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <h3>Our services</h3>
                            <ul class="footer-menu">
                                <li><a href="#">Shipping & Returns</a></li>
                                <li><a href="#">Secure Shopping</a></li>
                                <li><a href="#">International Shipping</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer-widget end -->
                    <!-- footer-widget start -->
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <h3>联系开源php网</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="fa fa-map-marker"> </i>
                                    orgphp.club地址:中国上海
                                </li>
                                <li>
                                    <i class="fa fa-envelope"> </i> 
                                    Email: 2581133606@qq.com
                                </li>
                                <li>
                                    <i class="fa fa-phone"> </i>
                                    Phone: +8615601852720 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer-widget end -->
                </div>
            </div>
        </div>
        <!-- footer-top-area end -->
        <!-- footer-bottom-area start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="copyright">
                            <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="">开源PHP网,网站开发,网络推广知识学习</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="payment-img">
                            <img src="img/payment.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom-area end -->
    </footer>
<!-- footer end -->
<!-- all js here -->
<!-- jquery latest version -->
<script src="{{ asset('index/js/vendor/jquery-1.12.0.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('index/js/bootstrap.min.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('index/js/owl.carousel.min.js') }}"></script>
<!-- jquery-ui js -->
<script src="{{ asset('index/js/jquery-ui.min.js') }}"></script>
<!-- RS-Plugin JS -->
<script type="{{ asset('index/text/javascript') }}" src="{{ asset('index/lib/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="{{ asset('index/text/javascript') }}" src="{{ asset('index/lib/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('index/lib/rs-plugin/rs.home.js') }}"></script>
<!-- meanmenu js -->
<script src="{{ asset('index/js/jquery.meanmenu.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('index/js/wow.min.js') }}"></script>
<!-- plugins js -->
<script src="{{ asset('index/js/plugins.js') }}"></script>
<!-- main js -->
<script src="{{ asset('index/js/main.js') }}"></script>
</body>
<!-- Mirrored from themepure.net/tf/tp-shop-preview/tp-shop/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 13 Apr 2016 11:24:56 GMT -->
</html>



