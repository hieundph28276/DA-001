@extends ('templates.layout')
@section('content')
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
@endsection