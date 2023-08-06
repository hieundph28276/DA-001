@extends ('client/templates.layout')
@section ('cart')
<!-- mobile-menu-area end -->
<!-- breadcrumbs start -->
<div class="breadcrumbs-area breadcrumb-bg ptb-100">
    <div class="container">
        <div class="breadcrumbs text-center">
            <h2 class="breadcrumb-title">shopping cart</h2>
            <ul>
                <li>
                    <a class="active" href="/">Home</a>
                </li>
                <li>cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- shopping-cart-area start -->
<div class="cart-area ptb-100">
    <div class="container">
        <form id="myForm" action="{{ route('route_order_index') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-price">images</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-name">remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($cartItems) > 0)
                                @foreach($cartItems as $cart)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="{{ $cart->image?''.Storage::url($cart->image):''}}" style="width:100px" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{ $cart->name }}</a></td>
                                    <td class="product-price"><span class="amount">{{ $cart->price }}.vnđ</span></td>
                                    <td class="product-quantity">
                                        <input value="{{ $cart->quantity }}" type="number">
                                    </td>
                                    <td class="product-subtotal">{{ $cart->price * $cart->quantity}}.vnđ</td>
                                    <td class="product-remove"><a href="{{ route('cart_delete', ['id'=>$cart->id]) }}"><i class="fa fa-times"></i></a></td>
                                </tr>
                                @endforeach
                                @else
                                <p>Giỏ hàng của bạn đang trống.</p>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row tax-coupon-div">
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="tax-coupon-all">
                        <div class="tax-coupon">
                            <ul role="tablist">
                                <li class="active">
                                    <a href="#tax" data-toggle="tab">Shipping and Tax</a>
                                </li>
                                <li>
                                    <a href="#coupon" data-toggle="tab">Discount Coupon </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tax-coupon-details tab-content">
                            <div id="tax" class="shipping-dec tab-pane active">
                                <p>Enter your destination to get a shipping estimate.</p>
                                <!-- <div class="shipping-form">
                                <div class="single-shipping-form">
                                    <label class="required get">
                                        country
                                        <em>*</em>
                                    </label>
                                    <select class="email s-email">
                                        <option value="">United States
                                        </option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands
                                        </option>
                                        <option value="AL">Albania</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican City</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="single-shipping-form">
                                    <label class="required get">State/Province <em>*</em> </label>
                                    <select class="email s-email">
                                        <option value="">Please select region</option>
                                        <option value="1">Alabama</option>
                                        <option value="61">Virginia</option>
                                        <option value="62">Washington</option>
                                        <option value="63">West Virginia</option>
                                        <option value="64">Wisconsin</option>
                                        <option value="65">Wyoming</option>
                                    </select>
                                </div>
                                <div class="single-shipping-form">
                                    <label class="required get">
                                        Zip/Postal Code
                                        <em>*</em>
                                    </label>
                                    <input placeholder="1234567" type="text" required="">
                                </div>
                                <div class="single-shipping-botton">
                                    <button type="submit">
                                        <span>Get a Quote</span>
                                    </button>
                                </div>
                            </div> -->
                            </div>
                            <!-- <div id="coupon" class="coupon-dec tab-pane">
                            <p>Enter your coupon code if you have one.</p>
                            <label class="required get">coupon<em>*</em></label>
                            <input placeholder="coupon code" required="" type="text">
                            <button class="coupon-btn" type="submit">Apply Coupon</button>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="cart-total">
                        @if(count($cartItems)>0)
                        <ul>
                            <li>Subtotal<span>{{ $totalPrice }}.VNĐ</span></li>
                            <li class="cart-black">Total<span>{{ $totalPrice }}.VNĐ</span></li>
                        </ul>
                        @endif
                        <div class="cart-total-btn">
                            <div class="cart-total-btn1 f-left">
                                <a href="#">Proceed to
                                    checkout</a>
                            </div>
                            <div class="cart-total-btn2 f-right">
                                <!-- <button type="submit">thêm mới</button> -->
                                <a href="#" onclick="document.getElementById('myForm').submit()">Confirm Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- shopping-cart-area end -->
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