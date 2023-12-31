<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from nahartheme.com/tf/jerin-preview/jerin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 13:20:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jerin - Minimal eCommerce HTML Template</title>
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
    <script src="{{ asset('js-clien/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <div class="canvas-wrapper">
        <div class="menu-wrap">
            <nav class="menu">
                <div class="icon-list">
                    <h5>Currency:</h5>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">EURO</button>
                        <button type="button" class="btn btn-default">USD</button>
                    </div>
                    <h5 class="mt-2">Language</h5>
                    <a href="#"><img src="{{ asset('img/language/english.png') }}" alt=""><span>English</span></a>
                    <a href="#"><img src="{{ asset('img/language/es.png') }}" alt=""><span>Spanish</span></a>
                    <a href="#"><img src="{{ asset('img/language/fr.png') }}" alt=""><span>French</span></a>
                    <a href="#"><img src="{{ asset('img/language/ge.png') }}" alt=""><span>German</span></a>
                    <h5 class="mt-2">My Account:</h5>
                    <a href="cart.html"><i class="pe-7s-cart"></i><span>My Cart</span></a>
                    <a href="wishlist.html"><i class="pe-7s-like"></i><span>My Wishlist</span></a>
                    <a href="checkout.html"><i class="pe-7s-check"></i><span>Checkout</span></a>
                    <a href="login.html"><i class="pe-7s-next-2"></i><span>Sign In</span></a>
                    <a href="register.html"><i class="pe-7s-add-user"></i><span>Sign Up</span></a>
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
                                        <a href="index.html">
                                            <img src="{{ asset('img/logo/logo-black.png') }}" alt="">
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
                                                <form action="#">
                                                    <div class="search-input-button2">
                                                        <input class="" placeholder="Search" type="search">
                                                        <button class="search-button2" type="submit">
                                                            <i class="pe-7s-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="shopping-cart f-right">
                                            <a class="top-cart" href="cart.html"><i class="pe-7s-cart"></i></a>
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
                                                        <a class="checkout" href="checkout.html">Checkout</a>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-menu f-right">
                                            <nav>
                                                <ul>
                                                    <li><a href="index.html">home</a>
                                                        <ul class="dropdown">
                                                            <li><a href="index.html">home version 1 </a></li>
                                                            <li><a href="index-2.html">home version 2 </a></li>
                                                            <li><a href="index-3.html">home version 3 </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-position"><a href="shop-page.html">Women </a>
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
                                                    </li>
                                                    <li><a href="shop-page.html">shop</a>
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
                <!-- slider start -->
                <section class="hero-slider-container">
                    <div class="hero-slider owl-carousel">
                        <div class="hero-slider-item hero-slider-item-1">
                            <div class="hero-slider-contents">
                                <!-- <div class="container">
                                    <h1 class="title1">Amazing Collections</h1>
                                    <p class="title2">New Arrivals 2018</p>
                                    <a href="#" class="button-hover">SHOP NOW</a>
                                </div> -->
                            </div>
                        </div>

                        <div class="hero-slider-item hero-slider-item-2">
                            <div class="hero-slider-contents">
                                <!-- <div class="container">
                                    <h1 class="title1">Awesome Collections</h1>
                                    <p class="title2">New Arrivals 2018</p>
                                    <a href="#" class="button-hover">SHOP NOW</a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <a href="#" class="hero-slider-nav prev"><i class="fa fa-angle-left"></i></a>
                    <a href="#" class="hero-slider-nav next"><i class="fa fa-angle-right"></i></a>
                </section>
                <!-- slider end -->
                <!-- banner style 2 start -->
                <div class="banner-style-2 pt-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="banner-style-2-img mb-res">
                                    <img src="{{ asset('img/banner/6.jpg') }}" alt="">
                                    <div class="banner-style-2-dec">
                                        <h4>Laser Scann</h4>
                                        <h3>Sale 30% off</h3>
                                        <a href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="banner-style-2-img mb-res">
                                    <img src="{{ asset('img/banner/7.jpg') }}" alt="">
                                    <div class="banner-style-2-dec">
                                        <h4>Table Lamp</h4>
                                        <h3>Vacation Offer</h3>
                                        <a href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="banner-style-2-img">
                                    <img src="{{ asset('img/banner/8.jpg') }}" alt="">
                                    <div class="banner-style-2-dec">
                                        <h4>Artech leo</h4>
                                        <h3>Unlimited offer</h3>
                                        <a href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner style 2 end -->
                <!-- shop area start -->
                <!-- <div class="portfolio-area pt-100 pb-80">
                    <div class="container">
                        <div class="section-title text-center mb-50">
                            <h2>Featured Collections <i class="fa fa-shopping-cart"></i></h2>
                        </div>
                        <div class="shop-menu portfolio-left-menu text-center mb-50">
                            <button class="active" data-filter=".mix1">All </button>
                            <button data-filter=".mix2">Tranding</button>
                            <button data-filter=".mix3">Best sell </button>
                            <button data-filter=".mix4">Popular </button>
                        </div>			
                        <div class="row portfolio-style-2">
                            <div class="grid">
                                <div class="col-md-3 col-sm-6 col-xs-12 grid-item mix2 mix4 mix1 mix3 mb-30">
                                    <div class="single-shop">
                                        <div class="shop-img">
                                            <a href="#"><img src="{{ asset('img/shop/electronics/4.jpg') }}" alt="" /></a>
                                            <div class="shop-quick-view">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                            <div class="button-group">
                                                <a href="#" title="Add to Cart">
                                                    <i class="pe-7s-cart"></i>
                                                    add to cart
                                                </a>
                                                <a class="wishlist" href="#" title="Wishlist">
                                                    <i class="pe-7s-like"></i>
                                                    Wishlist
                                                </a>
                                            </div>
                                        </div>
                                        <div class="shop-text-all">
                                            <div class="title-color fix">
                                                <div class="shop-title f-left">
                                                    <h3><a href="#">PC Headphone</a></h3>
                                                </div>
                                                <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                            </div>
                                            <div class="fix">
                                                <span class="f-left">Electronics</span>
                                            </div>
                                        </div>									
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 grid-item mix1 mix4 mix3 mb-30">
                                    <div class="single-shop">
                                        <div class="shop-img">
                                            <a href="#"><img src="{{ asset('img/shop/electronics/1.jpg') }}" alt="" /></a>
                                            <div class="shop-quick-view">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                            <div class="price-up-down">
                                                <span class="sale-new">sale</span>
                                            </div>
                                            <div class="button-group">
                                                <a href="#" title="Add to Cart">
                                                    <i class="pe-7s-cart"></i>
                                                    add to cart
                                                </a>
                                                <a class="wishlist" href="#" title="Wishlist">
                                                    <i class="pe-7s-like"></i>
                                                    Wishlist
                                                </a>
                                            </div>
                                        </div>
                                        <div class="shop-text-all">
                                            <div class="title-color fix">
                                                <div class="shop-title f-left">
                                                    <h3><a href="#">Table lamp</a></h3>
                                                </div>
                                                <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                            </div>
                                            <div class="fix">
                                                <span class="f-left">Electronics</span>
                                            </div>
                                        </div>									
                                    </div>
                                </div>	
                                <div class="col-md-3 col-sm-6 col-xs-12 grid-item mix1 mix3 mix2 mb-30">
                                    <div class="single-shop">
                                        <div class="shop-img">
                                            <a href="#"><img src="{{ asset('img/shop/electronics/3.jpg') }}" alt="" /></a>
                                            <div class="shop-quick-view">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                            <div class="price-up-down">
                                                <span class="sale-new">-30%</span>
                                            </div>
                                            <div class="button-group">
                                                <a href="#" title="Add to Cart">
                                                    <i class="pe-7s-cart"></i>
                                                    add to cart
                                                </a>
                                                <a class="wishlist" href="#" title="Wishlist">
                                                    <i class="pe-7s-like"></i>
                                                    Wishlist
                                                </a>
                                            </div>
                                        </div>
                                        <div class="shop-text-all">
                                            <div class="title-color fix">
                                                <div class="shop-title f-left">
                                                    <h3><a href="#">Man Watch</a></h3>
                                                </div>
                                                <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                            </div>
                                            <div class="fix">
                                                <span class="f-left">Electronics</span>
                                            </div>
                                        </div>									
                                    </div>
                                </div>				
                                <div class="col-md-3 col-sm-6 col-xs-12 grid-item mix2 mix1 mix4 mb-30">
                                    <div class="single-shop">
                                        <div class="shop-img">
                                            <a href="#"><img src="{{ asset('img/shop/electronics/2.jpg') }}" alt="" /></a>
                                            <div class="shop-quick-view">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                            <div class="button-group">
                                                <a href="#" title="Add to Cart">
                                                    <i class="pe-7s-cart"></i>
                                                    add to cart
                                                </a>
                                                <a class="wishlist" href="#" title="Wishlist">
                                                    <i class="pe-7s-like"></i>
                                                    Wishlist
                                                </a>
                                            </div>
                                        </div>
                                        <div class="shop-text-all">
                                            <div class="title-color fix">
                                                <div class="shop-title f-left">
                                                    <h3><a href="#">Table Fan</a></h3>
                                                </div>
                                                <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                            </div>
                                            <div class="fix">
                                                <span class="f-left">Electronics</span>
                                            </div>
                                        </div>									
                                    </div>						
                                </div>
                            </div>		
                        </div>
                    </div>
                </div> -->
                <!-- shop area end -->
                <!-- <div class="counter-home2">
                    <div class="container">
                        <div class="counter2-all text-center">
                            <img alt="" src="{{ asset('img/banner/9.jpg') }}">
                            <div class="counter-content">
                                <h2>Deal Of The Week</h2>
                                <h4>Special Discount Limited Time Only</h4>
                                <div class="timer">
                                    <div data-countdown="2019/12/20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- shop area start -->
                <div class="portfolio-area pt-100 pb-70">
                    <div class="container">
                        <div class="section-title text-center mb-50">
                            <h2>New Collections <i class="fa fa-shopping-cart"></i></h2>
                        </div>
                        <div class="row portfolio-style-2">
                            <div class="grid">
                                @foreach($phone as $item)
                                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                                    <div class="single-shop">
                                        <div class="shop-img">
                                            <a href="#"><img src="{{ $item->image?''.Storage::url($item->image):''}}"
                                                    alt="" /></a>
                                            <div class="shop-quick-view">
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                            <div class="price-up-down">
                                                <span class="sale-new">sale</span>
                                            </div>
                                            <div class="button-group">
                                                <a href="#" title="Add to Cart">
                                                    <i class="pe-7s-cart"></i>
                                                    add to cart
                                                </a>
                                                <a class="wishlist" href="#" title="Wishlist">
                                                    <i class="pe-7s-like"></i>
                                                    Wishlist
                                                </a>
                                            </div>
                                        </div>
                                        <div class="shop-text-all">
                                            <div class="title-color fix">
                                                <div class="shop-title f-left">
                                                    <h3><a href="#">{{ $item->name }}</a></h3>
                                                </div>
                                                <span class="price f-right">
                                                    <span class="new">{{ $item->price }}</span>
                                                </span>
                                            </div>
                                            <div class="fix">
                                                <span class="f-left">Electronics</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop area end -->
                <!-- blog area start -->
                <div class="blog-area gray-bg pt-100 pb-70">
                    <div class="container">
                        <div class="section-title text-center mb-50">
                            <h2>latest news <i class="fa fa-pencil"></i></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="blog-details mb-30">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                                        <div class="blog-quick-view">
                                            <a href="blog-details.html">
                                                <i class="pe-7s-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-meta">
                                        <h4><a href="blog-details.html">Lorem Ipsum Dolor Ipsum</a></h4>
                                        <ul class="meta">
                                            <li><a href="#">John Doe</a></li>
                                            <li>25 june</li>
                                            <li>3 Comments</li>
                                        </ul>
                                        <p>Lorem Ipsum is that it has a more-or-less normal of letters, as opposed to
                                            using 'Content here, distribution content here..</p>
                                        <a href="blog-details.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="blog-details mb-30">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="{{ asset('img/blog/2.jpg') }}" alt=""></a>
                                        <div class="blog-quick-view">
                                            <a href="blog-details.html">
                                                <i class="pe-7s-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-meta">
                                        <h4><a href="blog-details.html">Grand opening ceremony</a></h4>
                                        <ul class="meta">
                                            <li><a href="#">Mr Rohit</a></li>
                                            <li>25 june</li>
                                            <li>3 Comments</li>
                                        </ul>
                                        <p>Lorem Ipsum is that it has a more-or-less normal of letters, as opposed to
                                            using 'Content here, distribution content here..</p>
                                        <a href="blog-details.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 hidden-sm">
                                <div class="blog-details mb-30">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="{{ asset('img/blog/3.jpg') }}" alt=""></a>
                                        <div class="blog-quick-view">
                                            <a href="blog-details.html">
                                                <i class="pe-7s-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-meta">
                                        <h4><a href="blog-details.html">World wide celebration</a></h4>
                                        <ul class="meta">
                                            <li><a href="#">Mr Rahul</a></li>
                                            <li>25 june</li>
                                            <li>3 Comments</li>
                                        </ul>
                                        <p>Lorem Ipsum is that it has a more-or-less normal of letters, as opposed to
                                            using 'Content here, distribution content here..</p>
                                        <a href="blog-details.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- blog area end -->
                <!-- footer area start -->
                <footer class="footer-area">
                    <div class="container">
                        <div class="footer-top pt-60 pb-30">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <div class="footer-widget mb-30">
                                        <div class="footer-logo">
                                            <a href="index.html">
                                                <img src="{{ asset('img/logo/logo-black.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="widget-info">
                                            <p>
                                                <i class="pe-7s-map-marker"> </i>
                                                <span>
                                                    #183 Scelerisque Road 10.
                                                    <br>
                                                    <span class="location">Luxemburg. Alice</span>
                                                </span>
                                            </p>
                                            <p>
                                                <i class="pe-7s-mail"></i>
                                                <span>
                                                    <a href="mailto:contact@company.com">contact@company.com</a>
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
                <div class="quick-view modal fade in" id="quick-view">
                    <div class="container">
                        <div class="row">
                            <div id="view-gallery">
                                <div class="col-xs-12">
                                    <div class="d-table">
                                        <div class="d-tablecell">
                                            <div class="modal-dialog">
                                                <div class="main-view modal-content">
                                                    <div class="modal-footer" data-dismiss="modal">
                                                        <span>x</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-5">
                                                            <div class="quick-image">
                                                                <div class="single-quick-image tab-content text-center">
                                                                    <div class="tab-pane  fade in active"
                                                                        id="sin-pro-1">
                                                                        <img src="{{ asset('img/shop/q1.jpg') }}"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="tab-pane fade in" id="sin-pro-2">
                                                                        <img src="{{ asset('img/shop/q2.jpg') }}"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="tab-pane fade in" id="sin-pro-3">
                                                                        <img src="{{ asset('img/shop/q3.jpg') }}"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="tab-pane fade in" id="sin-pro-4">
                                                                        <img src="{{ asset('img/shop/q4.jpg') }}"
                                                                            alt="" />
                                                                    </div>
                                                                </div>
                                                                <div class="quick-thumb">
                                                                    <div class="nav nav-tabs">
                                                                        <ul>
                                                                            <li><a data-toggle="tab" href="#sin-pro-1">
                                                                                    <img src="{{ asset('img/shop/q1.jpg') }}"
                                                                                        alt="quick view" /> </a></li>
                                                                            <li><a data-toggle="tab" href="#sin-pro-2">
                                                                                    <img src="{{ asset('img/shop/q2.jpg') }}"
                                                                                        alt="quick view" /> </a></li>
                                                                            <li><a data-toggle="tab" href="#sin-pro-3">
                                                                                    <img src="{{ asset('img/shop/q3.jpg') }}"
                                                                                        alt="quick view" /> </a></li>
                                                                            <li><a data-toggle="tab" href="#sin-pro-4">
                                                                                    <img src="{{ asset('img/shop/q4.jpg') }}"
                                                                                        alt="quick view" /> </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-7">
                                                            <div class="quick-right">
                                                                <div class="quick-right-text">
                                                                    <h3><strong>PC Headphone</strong></h3>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="amount">
                                                                        <h4>$65.00</h4>
                                                                    </div>
                                                                    <p>Lorem Ipsum is simply dummy text of the printing
                                                                        and typesetting industry. Lorem Ipsum has beenin
                                                                        the stand ard dummy text ever since the 1500s,
                                                                        when an unknown printer took a galley of type
                                                                        and scrames bled it make a type specimen book.
                                                                    </p>
                                                                    <div class="row m-p-b">
                                                                        <div class="col-sm-12 col-md-6">
                                                                            <div
                                                                                class="por-dse responsive-strok clearfix">
                                                                                <ul>
                                                                                    <li><span>Availability</span><strong>:</strong>
                                                                                        In stock</li>
                                                                                    <li><span>Condition</span><strong>:</strong>
                                                                                        New product</li>
                                                                                    <li><span>Category</span><strong>:</strong>
                                                                                        <a href="#">Men</a> <a
                                                                                            href="#">Fashion</a> <a
                                                                                            href="#">Shirt</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-6">
                                                                            <div class="por-dse color">
                                                                                <ul>
                                                                                    <li><span>color</span><strong>:</strong>
                                                                                        <a href="#">Red</a> <a
                                                                                            href="#">Green</a> <a
                                                                                            href="#">Blue</a></li>
                                                                                    <li><span>size</span><strong>:</strong>
                                                                                        <a href="#">SL</a> <a
                                                                                            href="#">SX</a> <a
                                                                                            href="#">M</a> <a
                                                                                            href="#">XL</a></li>
                                                                                    <li><span>tag</span><strong>:</strong>
                                                                                        <a href="#">Men</a> <a
                                                                                            href="#">Fashion</a> <a
                                                                                            href="#">Shirt</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dse-btn">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-12">
                                                                                <div class="por-dse clearfix">
                                                                                    <ul>
                                                                                        <li class="share-btn clearfix">
                                                                                            <span>quantity</span>
                                                                                            <input
                                                                                                class="input-text qty"
                                                                                                name="qty"
                                                                                                maxlength="12" value="1"
                                                                                                title="Qty" type="text">
                                                                                        </li>
                                                                                        <li
                                                                                            class="share-btn clearfix hidden-xs">
                                                                                            <span>share</span>
                                                                                            <a href="#"><i
                                                                                                    class="fa fa-facebook"></i></a>
                                                                                            <a href="#"><i
                                                                                                    class="fa fa-twitter"></i></a>
                                                                                            <a href="#"><i
                                                                                                    class="fa fa-google-plus"></i></a>
                                                                                            <a href="#"><i
                                                                                                    class="fa fa-linkedin"></i></a>
                                                                                            <a href="#"><i
                                                                                                    class="fa fa-instagram"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12">
                                                                                <div class="por-dse add-to">
                                                                                    <a href="#">add to cart</a>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- quick view end -->
            </div>
            <!-- content end -->
        </div>
        <!-- content-wrap end -->
    </div>






    <!-- all js here -->
    <script src="{{ asset('js-clien/vendor/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('js-clien/snap.svg-min.js') }}"></script>
    <script src="{{ asset('js-clien/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js-clien/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('js-clien/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js-clien/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js-clien/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js-clien/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js-clien/jquery.validate.min.js') }}"></script>
    <script src="lib-clien/js/jquery.nivo.slider.js"></script>
    <script src="lib-clien/home.js"></script>
    <script src="{{ asset('js-clien/plugins.js') }}"></script>
    <script src="{{ asset('js-clien/main.js') }}"></script>
    <script src="{{ asset('js-clien/classie.js') }}"></script>
    <script src="{{ asset('js-clien/main3.js') }}"></script>
</body>


<!-- Mirrored from nahartheme.com/tf/jerin-preview/jerin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 13:20:56 GMT -->

</html>