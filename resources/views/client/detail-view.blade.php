@extends ('client/templates.layout')
@section ('content')
<div class="quick-view">
    <div class="container">
        <div class="row">
            <div id="">
                <div class="col-xs-12">
                    <div class="d-table">
                        <div class="d-tablecell">
                            <div class="modal-dialog">
                                <div class="main-view modal-content">
                                    <div class="modal-footer" data-dismiss="modal">
                                        <a href="/">
                                            <span>x</span>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5">
                                            <div class="quick-image">
                                                <div class="single-quick-image tab-content text-center">
                                                    <div class="tab-pane  fade in active" id="sin-pro-1">
                                                        <img src="{{ $phone->image?''.Storage::url($phone->image):''}}" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-2">
                                                        <img src="{{ asset('img/shop/q2.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-3">
                                                        <img src="{{ asset('img/shop/q3.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-4">
                                                        <img src="{{ asset('img/shop/q4.jpg') }}" alt="" />
                                                    </div>
                                                </div>
                                                <div class="quick-thumb">
                                                    <div class="nav nav-tabs">
                                                        <ul>
                                                            <li><a data-toggle="tab" href="#sin-pro-1">
                                                                    <img src="{{ asset('img/shop/q1.jpg') }}" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-2">
                                                                    <img src="{{ asset('img/shop/q2.jpg') }}" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-3">
                                                                    <img src="{{ asset('img/shop/q3.jpg') }}" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-4">
                                                                    <img src="{{ asset('img/shop/q4.jpg') }}" alt="quick view" /> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="quick-right">
                                                <div class="quick-right-text">
                                                    <h3><strong>{{ $phone->name }}</strong></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="amount">
                                                        <h4>{{ $phone->price }} vnđ</h4>
                                                    </div>
                                                    <p>{{ $phone->description }}</p>
                                                    <div class="row m-p-b">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="por-dse responsive-strok clearfix">
                                                                <ul>
                                                                    <li><span>Availability</span><strong>:</strong>
                                                                        In stock</li>
                                                                    <li><span>Condition</span><strong>:</strong>
                                                                        New product</li>
                                                                    <li><span>Category</span><strong>:</strong>
                                                                        <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="por-dse color">
                                                                <ul>
                                                                    <li><span>color</span><strong>:</strong>
                                                                        <a href="#">Red</a> <a href="#">Green</a> <a href="#">Blue</a>
                                                                    </li>
                                                                    <li><span>size</span><strong>:</strong>
                                                                        <a href="#">SL</a> <a href="#">SX</a> <a href="#">M</a> <a href="#">XL</a>
                                                                    </li>
                                                                    <li><span>tag</span><strong>:</strong>
                                                                        <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a>
                                                                    </li>
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
                                                                            <!-- Sử dụng form để gửi số lượng sản phẩm -->
                                                                            <form id="myForm" action="{{ route('add_to_cart') }}" method="POST">
                                                                                @csrf
                                                                                <input class="input-text qty" name="quantity" maxlength="12" value="1" title="Qty" type="text">
                                                                                <input type="hidden" name="phone_id" value="{{ $phone->id }}">
                                                                            </form>
                                                                        </li>
                                                                        <li class="share-btn clearfix hidden-xs">
                                                                            <span>share</span>
                                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-12">
                                                                <div class="por-dse add-to">
                                                                <a onclick="document.getElementById('myForm').submit()">add to cart</a>
                                                                    <!-- <button type="submit" form="add-to-cart-form">add to cart</button> -->
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
@endsection