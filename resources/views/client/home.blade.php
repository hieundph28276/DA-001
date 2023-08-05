@extends ('client/templates.layout')
@section ('content')
<!-- slider start -->
<section class="hero-slider-container">
    <div class="hero-slider owl-carousel">
        @foreach ($banner as $banner )
        <div class="hero-slider-item hero-slider-item-1">
            <div class="hero-slider-contents">
                <img src="{{ $banner->image?''.Storage::url($banner->image):''}}" alt="">
            </div>
        </div>
        @endforeach
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
<!-- shop area start -->
<div class="portfolio-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>New Collections <i class="fa fa-shopping-cart"></i></h2>
        </div>
        <div class="shop-menu portfolio-left-menu text-center mb-50">
            <a href="/" class="btn">
                <h4 class="section-title">All</h4>
            </a>
            @foreach ($category as $cate)
            <!-- Thêm link cho từng danh mục trỏ tới route tìm kiếm -->
            <a href="{{ route('index', ['category_id' => $cate->id]) }}" class="btn">
                <h4>{{ $cate->name }}</h4>
            </a>
            @endforeach

            <!-- <pre>
            {{ var_dump($category) }}
            </pre> -->
        </div>
        <div class="row portfolio-style-2">
            <div class="grid">
                @foreach($phone as $item)
                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                    <div class="single-shop">
                        <div class="shop-img" style="width: 250px">
                            <a href="{{ route('route_detail', ['id'=>$item->id]) }}">
                                <img src="{{ $item->image?''.Storage::url($item->image):''}}">
                                <!-- <img src="" alt=""> -->
                            </a>
                            <div class="shop-quick-view">
                                <a href="{{ route('route_detail', ['id'=>$item->id]) }}" title="Quick View">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                            <div class="price-up-down">
                                <span class="sale-new">new</span>
                            </div>
                            <div class="button-group">
                                <a href="{{ route('route_detail', ['id'=>$item->id]) }}" title="Add to Cart">
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
                                    <span class="new">{{ $item->price }}vnđ</span>
                                </span>
                            </div>
                            <div class="fix">
                                <span class="f-left">Electronics</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <pre>
            {{ var_dump($phone) }}
            </pre> -->
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
        <!-- <div class="row">
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
        </div> -->
    </div>
</div>
<!-- blog area end -->
@endsection