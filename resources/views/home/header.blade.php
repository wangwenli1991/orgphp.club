<!doctype html>
<html class="no-js" lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>php学习，基础编程知识整理，开源PHP网</title>
<meta name="keywords" content="php学习网，网站开发学习，网络推广技术，如何做网站，网站制作到推广">
<meta name="description" content="本站为自己整理的基础只是的整理，平时的一些经验进行分享，总结的一些学习方法和技巧">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico in bANNER="image/x-icon" href="img/favicon.ico">
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
                    <span class="phone">php学习购买电话: 156-0185-2720</span> <span class="hidden-sm">/</span>
                    <span class="email hidden-sm">Email: 2581133606@qq.com</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8">
                <div class="top-menu">
                    <ul id="currency">
                        <li><a href="#">学习列表 <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="#">linux</a></li>
                                <li><a href="#">mysql</a></li>
                                <li><a href="#">php</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="#">laravel</a></li>
                        <li><a href="#">wordpress</a></li>
                        <li><a href="#">discuz</a></li>
                        <li><a href="#">网站模板</a></li>
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
                                <option value="0">php</option>
                                <option value="1">linux</option>
                                <option value="2">mysql</option>
                                <option value="0">nginx</option>
                                <option value="0">windows</option>
                                <option value="0">ubuntu</option>
                                <option value="0">laravel</option>
                            </select>
                            <input type="text" placeholder="查询php学习型号" />
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
                                            <a href="#"><img src="{{ asset('index/img/cart/total-cart.jpg') }}" alt="" /></a>                                                
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
                                            <a href="#"><img src="{{ asset('index/img/cart/total-cart.jpg') }}" alt="" /></a>                                                
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
                                    <li><a href="{{ asset('') }}">开源php网首页</a></li>
                                    <li><a href="{{ asset('/about') }}">关于开源php网</a></li>
                                    <li><a href="{{ asset('/shoplist') }}">所有知识点列表</a></li>
                                    <li><a href="{{ asset('/single') }}">单个知识点讲解</a></li>
                                    <li><a href="{{ asset('/contact') }}">主动联系本站</a></li>
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
                                    <li><a href="index.html">Home</a></li>
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
                            <h3>CONTACT US</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="fa fa-map-marker"> </i>
                                    Addresss: 123 Pall Mall, London England
                                </li>
                                <li>
                                    <i class="fa fa-envelope"> </i> 
                                    Email: admin@themepure.net
                                </li>
                                <li>
                                    <i class="fa fa-phone"> </i>
                                    Phone: +8801912 199981  
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
                            <p>Copyright &copy; 2019.php从入门到精通-开源php网 All rights reserved.<a target="_blank" href="">php如何学习，网站开发怎么学习</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="payment-img">
                            <img src="{{ asset('index/img/payment.png') }}" alt="" />
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
<script type="text/javascript" src="{{ asset('index/lib/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('index/lib/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
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



