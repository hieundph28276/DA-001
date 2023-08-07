<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from nahartheme.com/tf/jerin-preview/jerin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 13:20:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Uplon - Welcome</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('css-clien/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="lib-clien/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib-clien/css/preview.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css-clien/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css-clien/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css-clien/menu_elastic.css') }}" />
    <link href="{{ asset ('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js-clien/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <div class="canvas-wrapper">
        <div class="menu-wrap">
            <nav class="menu">
                <div class="icon-list">
                    <h5 class="mt-2">My Account:</h5>
                    @auth
                    <h5 class="mt-2">{{ session('user')->name }}</h5>
                    @endauth
                    @guest
                    <h5>Welcome</h5>
                    @endguest
                    <a href="{{ route('cart') }}"><i class="pe-7s-cart"></i><span>My Cart</span></a>
                    <a href="wishlist.html"><i class="pe-7s-like"></i><span>My Wishlist</span></a>
                    <a href="checkout.html"><i class="pe-7s-check"></i><span>Checkout</span></a>
                    <a href="{{ route('login') }}"><i class="pe-7s-next-2"></i><span>Sign In</span></a>
                    <a href="{{ route('login_add') }}"><i class="pe-7s-add-user"></i><span>Sign Up</span></a>
                    <a href="{{ route('logout') }}"><i class="mdi mdi-logout-variant"></i><span>Logout</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
            <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800"
                    preserveAspectRatio="none">
                    <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z" />
                </svg>
            </div>
        </div>

        <div class="content-wrap">
            <div class="content">
                <!-- header start -->
                <header class="header-area home-style-2">
                    <div class="header-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-3 col-xs-6">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="{{ asset ('images/logo.png') }}" alt="" height="22">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-6">
                                    <div class="cart-menu">
                                        <div class="user user-style-3 f-right">
                                            <a href="#" id="open-button">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </div>
                                        <div class="search-style-2 f-right">
                                            <a class="icon-search-2" href="#">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                            <div class="search2-content">
                                                <form action="{{ route('index') }}" method="POST">
                                                    @csrf
                                                    <div class="search-input-button2">
                                                        <input class="" placeholder="Search" type="text" name="name">
                                                        <button class="search-button2" type="submit">
                                                            <i class="pe-7s-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="shopping-cart f-right">
                                            <a class="top-cart" href="/cart"><i class="pe-7s-cart"></i></a>
                                            <span>01</span>
                                            <ul>
                                                <li>
                                                    <div class="cart-img-price">
                                                        <div class="cart-img">
                                                            <a href="#"><img src="{{ asset('img/cart/1.jpg') }}"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h3><a href="#">Headphone</a> </h3>
                                                            <span class="cart-price">1 x $ 299.00</span>
                                                        </div>
                                                        <div class="cart-del">
                                                            <i class="pe-7s-close-circle"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <p class="total">
                                                        Subtotal:
                                                        <span>$299.00</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="buttons">
                                                        <a class="my-cart" href="cart.html">View Cart</a>
                                                        <a class="checkout" href="{{ route('route_order_check_out') }}">Checkout</a>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-menu f-right">
                                            <nav>
                                                <ul>
                                                    <li><a href="/">home</a>
                                                    </li>
                                                    <!-- <li class="mega-position"><a href="shop-page.html">Women </a>
                                                        <div class="mega-menu mega-4-colm">
                                                            <ul>
                                                                <li class="menu-title uppercase">Clothings</li>
                                                                <li><a href="shop-page.html">Dresses</a></li>
                                                                <li><a href="shop-page.html">Tops</a></li>
                                                                <li><a href="shop-page.html">skirt</a></li>
                                                                <li><a href="shop-page.html">cardigan</a></li>
                                                                <li><a href="shop-page.html">Outerwear</a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="menu-title uppercase">Jewelry</li>
                                                                <li><a href="shop-page.html">ring</a></li>
                                                                <li><a href="shop-page.html">locket</a></li>
                                                                <li><a href="shop-page.html">crown</a></li>
                                                                <li><a href="shop-page.html">wristlet</a></li>
                                                                <li><a href="shop-page.html">bracelet</a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="menu-title uppercase">Shoes</li>
                                                                <li><a href="shop-page.html">Flats</a></li>
                                                                <li><a href="shop-page.html">Boots</a></li>
                                                                <li><a href="shop-page.html">Sneakers</a></li>
                                                                <li><a href="shop-page.html">slipper</a></li>
                                                                <li><a href="shop-page.html">wellington</a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="menu-img">
                                                                    <a href="shop-page.html"><img
                                                                            src="{{ asset('img/shop/1.jpg') }}"
                                                                            alt=""></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="mega-position"><a href="shop-page.html">man </a>
                                                        <div class="mega-menu mega-3-colm">
                                                            <ul>
                                                                <li class="menu-title uppercase">Clothings</li>
                                                                <li><a href="shop-page.html">suit</a></li>
                                                                <li><a href="shop-page.html">shirt </a></li>
                                                                <li><a href="shop-page.html">tie</a></li>
                                                                <li><a href="shop-page.html">coat</a></li>
                                                                <li><a href="#"> jacket</a></li>
                                                                <li><a href="shop-page.html">t-shirt</a></li>
                                                                <li><a href="shop-page.html">trouser</a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="menu-title uppercase">Shoes</li>
                                                                <li><a href="shop-page.html">Flats</a></li>
                                                                <li><a href="shop-page.html">Boots</a></li>
                                                                <li><a href="shop-page.html">Sneakers</a></li>
                                                                <li><a href="shop-page.html">slipper</a></li>
                                                                <li><a href="shop-page.html">wellington</a></li>
                                                                <li><a href="shop-page.html">sanda</a></li>
                                                                <li><a href="shop-page.html">sock</a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="menu-img">
                                                                    <a href="shop-page.html"><img
                                                                            src="{{ asset('img/shop/1.jpg') }}"
                                                                            alt=""></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li> -->
                                                    <li><a href="{{ route('route_shop_pages') }}">shop</a>
                                                        <div class="mega-menu mega-2-colm">
                                                            <ul>
                                                                <li class="menu-title uppercase">Jewelry</li>
                                                                <li><a href="shop-page.html">ring</a></li>
                                                                <li><a href="shop-page.html">locket</a></li>
                                                                <li><a href="shop-page.html">crown</a></li>
                                                                <li><a href="shop-page.html">wristlet</a></li>
                                                                <li><a href="shop-page.html">bracelet</a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="menu-title uppercase">Clothings</li>
                                                                <li><a href="shop-page.html">ring</a></li>
                                                                <li><a href="shop-page.html">locket</a></li>
                                                                <li><a href="shop-page.html">crown</a></li>
                                                                <li><a href="shop-page.html">wristlet</a></li>
                                                                <li><a href="shop-page.html">bracelet</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#">pages</a>
                                                        <ul class="dropdown">
                                                            <li><a href="about-us.html">about us </a></li>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                            <li><a href="login.html">login</a></li>
                                                            <li><a href="register.html">register</a></li>
                                                            <li><a href="contact.html">contact</a></li>
                                                            <li><a href="shop-page.html">shop page</a></li>
                                                            <li><a href="shop-list.html">shop list</a></li>
                                                            <li><a href="single-product.html">single product</a></li>
                                                            <li><a href="404.html">404 page</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog-page.html">blog</a>
                                                        <ul class="dropdown">
                                                            <li><a href="blog-page.html">blog-page</a></li>
                                                            <li><a href="blog-sidebar.html">blog left sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.html">blog right sidebar
                                                                </a></li>
                                                            <li><a href="blog-details.html">blog-details </a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.html">contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- header end -->
                <!-- mobile-menu-area start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a class="active1" href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="index.html">home version 1 </a></li>
                                                    <li><a href="index-2.html">home version 2 </a></li>
                                                    <li><a href="index-3.html">home version 3 </a></li>
                                                </ul>
                                            </li>
                                            <li class="active1"><a class="active1" href="#">Pages</a>
                                                <ul>
                                                    <li><a href="about-us.html">about us </a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="shop-page.html">shop page</a></li>
                                                    <li><a href="shop-list.html">shop list</a></li>
                                                    <li><a href="single-product.html">single product</a></li>
                                                    <li><a href="404.html">404 page</a></li>
                                                </ul>
                                            </li>
                                            <li class="active1"><a class="active1" href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog-page.html">blog-page</a></li>
                                                    <li><a href="blog-sidebar.html">blog left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">blog right sidebar </a></li>
                                                    <li><a href="blog-details.html">blog-details </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="contact.html">Contacts</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile-menu-area end -->
                @yield('cart')
                @yield('content')
                <!-- footer area start -->
                <footer class="footer-area">
                    <div class="container">
                        <div class="footer-top pt-60 pb-30">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <div class="footer-widget mb-30">
                                        <div class="footer-logo">
                                            <a href="/">
                                                <img src="{{ asset ('images/logo.png') }}" alt="" height="22">
                                            </a>
                                        </div>
                                        <div class="widget-info">
                                            <p>
                                                <i class="pe-7s-map-marker"> </i>
                                                <span>
                                                    #14 Nguyên Xá.
                                                    <br>
                                                    <span class="location">Bắc Từ Liêm</span>
                                                </span>
                                            </p>
                                            <p>
                                                <i class="pe-7s-mail"></i>
                                                <span>
                                                    <a href="mailto:contact@company.com">hieu3th@gmail.com</a>
                                                </span>
                                            </p>
                                            <p>
                                                <i class="pe-7s-call"></i>
                                                <span>+001 2233 456 </span>
                                            </p>
                                        </div>
                                        <div class="footer-social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 hidden-sm">
                                    <div class="footer-widget mb-30">
                                        <div class="footer-title">
                                            <h3>Categories</h3>
                                        </div>
                                        <div class="widget-text">
                                            <ul>
                                                <li><a href="#"> Clothing</a></li>
                                                <li><a href="#">Shoes </a></li>
                                                <li><a href="#">bags </a></li>
                                                <li><a href="#">Watches </a></li>
                                                <li><a href="#">Jewelry </a></li>
                                                <li><a href="#"> Clothing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="footer-widget mb-30">
                                        <div class="footer-title">
                                            <h3>services</h3>
                                        </div>
                                        <div class="widget-text">
                                            <ul>
                                                <li><a href="#">About Us </a></li>
                                                <li><a href="#">Returns </a></li>
                                                <li><a href="#">Shipping </a></li>
                                                <li><a href="#">Track Orders </a></li>
                                                <li><a href="#">Contact Us </a></li>
                                                <li><a href="#">Returns </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <div class="footer-widget mb-30">
                                        <div class="footer-title">
                                            <h3>Quick Links</h3>
                                        </div>
                                        <div class="widget-text">
                                            <ul>
                                                <li><a href="#">Login </a></li>
                                                <li><a href="#">register </a></li>
                                                <li><a href="#">Wishlist </a></li>
                                                <li><a href="#">My Cart</a></li>
                                                <li><a href="#">Checkout </a></li>
                                                <li><a href="#">register </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="footer-widget mb-30">
                                        <div class="footer-title">
                                            <h3>Company</h3>
                                        </div>
                                        <div class="widget-text">
                                            <ul>
                                                <li><a href="#">Return Policy </a></li>
                                                <li><a href="#">Privacy Policy </a></li>
                                                <li><a href="#">Product Warranty </a></li>
                                                <li><a href="#">Forum</a></li>
                                                <li><a href="#">Order Tracking </a></li>
                                                <li><a href="#">Privacy Policy </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom ptb-20">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="copyright">
                                        <p>
                                            Copyright © 2018
                                            <a href="#"> themeglass<a>
                                                    . All Rights Reserved.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="payment f-right">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer area end -->
                <!-- quick view start -->
                <!-- <div class="quick-view modal fade in" id=""> -->
                <!-- @include('client/templates.show') -->
                <!-- @yield('detail') -->
                <!-- </div> -->
                <!-- quick view end -->
                @include('client/templates.footer')