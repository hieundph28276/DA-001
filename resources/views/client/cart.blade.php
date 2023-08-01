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
                    <a class="active" href="index.html">Home</a>
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
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12
                                        col-xs-12">
                <form action="#">
                    <div class="table-content
                                                table-responsive">
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
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Headphone</a></td>
                                    <td class="product-price"><span class="amount">$165.00</span></td>
                                    <td class="product-quantity">
                                        <input value="1" type="number">
                                    </td>
                                    <td class="product-subtotal">$165.00</td>
                                    <td class="product-remove"><a href="#"><i class="fa
                                                                        fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/cart/2.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Table lamp</a></td>
                                    <td class="product-price"><span class="amount">$150.00</span></td>
                                    <td class="product-quantity">
                                        <input value="1" type="number">
                                    </td>
                                    <td class="product-subtotal">$150.00</td>
                                    <td class="product-remove"><a href="#"><i class="fa
                                                                        fa-times"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
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
                    <div class="tax-coupon-details
                                                tab-content">
                        <div id="tax" class="shipping-dec tab-pane
                                                    active">
                            <p>Enter your destination to get a shipping estimate.</p>
                            <div class="shipping-form">
                                <div class="single-shipping-form">
                                    <label class="required
                                                                get">
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
                            </div>
                        </div>
                        <div id="coupon" class="coupon-dec tab-pane">
                            <p>Enter your coupon code if you have one.</p>
                            <label class="required get">coupon<em>*</em></label>
                            <input placeholder="coupon code" required="" type="text">
                            <button class="coupon-btn" type="submit">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="cart-total">
                    <ul>
                        <li>Subtotal<span>$315.00</span></li>
                        <li class="cart-black">Total<span>$315.00</span></li>
                    </ul>
                    <div class="cart-total-btn">
                        <div class="cart-total-btn1 f-left">
                            <a href="#">Proceed to
                                checkout</a>
                        </div>
                        <div class="cart-total-btn2 f-right">
                            <a href="#">Confirm Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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