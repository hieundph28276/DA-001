@extends ('client/templates.layout')
@section ('cart')
<!-- breadcrumbs start -->
<div class="breadcrumbs-area breadcrumb-bg ptb-100">
    <div class="container">
        <div class="breadcrumbs text-center">
            <h2 class="breadcrumb-title">shop list</h2>
            <ul>
                <li>
                    <a class="active" href="/">Home</a>
                </li>
                <li>shop list</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- login area end -->
<div class="shop-page-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="blog-sidebar">
                    <div class="single-sidebar">
                        <h3 class="sidebar-title">Choose Price</h3>
                        <div class="price-filter">
                            <div id="slider-range"></div>
                            <div class="price-slider-amount">
                                <input type="text" id="amount" name="price" />
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <h3 class="sidebar-title">Category</h3>
                        <div class="sidebar-list">
                            <ul>
                                <li><input type="checkbox"> <a href="#">Dresses (7)</a></li>
                                <li><input type="checkbox"> <a href="#">Accessories (9)</a></li>
                                <li><input type="checkbox"> <a href="#">Tops (3)</a></li>
                                <li><input type="checkbox"> <a href="#">Handbags (1)</a></li>
                                <li><input type="checkbox"> <a href="#">Watches (7)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <h3 class="sidebar-title">Choose color</h3>
                        <div class="sidebar-list">
                            <ul>
                                <li><input type="checkbox"> <a href="#">red (8)</a></li>
                                <li><input type="checkbox"> <a href="#">green (5)</a></li>
                                <li><input type="checkbox"> <a href="#">blue (2)</a></li>
                                <li><input type="checkbox"> <a href="#">black (6)</a></li>
                                <li><input type="checkbox"> <a href="#">Pink (7)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <h3 class="sidebar-title">Our Brand</h3>
                        <div class="sidebar-list">
                            <ul>
                                <li><input type="checkbox"> <a href="#">Nike (8)</a></li>
                                <li><input type="checkbox"> <a href="#">Religion (2)</a></li>
                                <li><input type="checkbox"> <a href="#">Diesel (5)</a></li>
                                <li><input type="checkbox"> <a href="#">Monki (8)</a></li>
                                <li><input type="checkbox"> <a href="#">Jerin (5)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <h3 class="sidebar-title">Popular Tags</h3>
                        <div class="tag">
                            <ul>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">footwear</a></li>
                                <li><a href="#">kid</a></li>
                                <li><a href="#">View All Tags</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="blog-wrapper shop-page-mrg">
                    <div class="tab-menu-product">
                        <div class="tab-menu-sort">
                            <div class="tab-menu">
                                <ul role="tablist">
                                    <li>
                                        <a href="" data-toggle="tab">
                                            <i class="fa fa-th-large"></i>
                                            Grid
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="" data-toggle="tab">
                                            <i class="fa fa-align-justify"></i>
                                            List
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-sort">
                                <label>Sort By : </label>
                                <select>
                                    <option value="">Position</option>
                                    <option value="">Popularity</option>
                                    <option value="">Price</option>
                                    <option value="">Average rating</option>
                                </select>
                            </div>
                        </div>
                        <div class="tab-product">
                            <div class="tab-content">
                                <div class="tab-pane active mb-10" id="list">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                               @foreach($list as $item)
                                               <div class="single-shop mb-40">
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <div class="shop-list-left">
                                                            <div class="shop-img">
                                                                <a href="#"><img src="assets/img/shop/electronics/9.jpg" alt="" /></a>
                                                                <div class="shop-quick-view">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                                        <i class="pe-7s-look"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="price-up-down">
                                                                    <span class="sale-new">-30%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                                        <div class="shop-list-right">
                                                            <div class="shop-list-all">
                                                                <div class="shop-list-name">
                                                                    <h3><a href="#">Table Lamp</a></h3>
                                                                </div>
                                                                <div class="shop-list-rating">
                                                                    <span class="ratting">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                    </span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nam fringilla augue nec est auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, odio...</p>
                                                                <div class="shop-list-price">
                                                                    <span class="list-price">
                                                                        <span class="new">$120.00</span>
                                                                        <span class="old">$140.00</span>
                                                                    </span>
                                                                </div>
                                                                <div class="shop-list-cart">
                                                                    <div class="shop-group">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-pagination text-center">
                                    <ul>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->
<!-- subscribe area start -->
<div class="subscribe-area gray-bg">
    <div class="container">
        <div class="subscribe-bg ptb-80">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                    <div class="subscribe-from
                                            text-center">
                        <h3>subscribe to our newsletter</h3>
                        <form action="#">
                            <input placeholder="Enter Email" type="email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribe area end -->
@endsection