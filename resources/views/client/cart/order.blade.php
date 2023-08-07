@extends ('client/templates.layout')
@section ('cart')
<!-- breadcrumbs start -->
<div class="breadcrumbs-area breadcrumb-bg ptb-100">
    <div class="container">
        <div class="breadcrumbs text-center">
            <h2 class="breadcrumb-title">checkout page</h2>
            <ul>
                <li>
                    <a class="active" href="/">Home</a>
                </li>
                <li>checkout</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- checkout area start -->
<div class="checkout-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="returning-customer">
                    <h3><i class="fa fa-user"></i> Returning customer? <span><a href="/login">Click here to login</a></span></h3>
                </div>

                <div class="billing-details-area">
                    <h2>Billing details</h2>
                    <form id="myForm" action="{{ route('route_order_place_order') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="billing-input">
                                    <label>
                                        First Name
                                        <span class="required">*</span>
                                    </label>
                                    <input placeholder="" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="billing-input">
                                    <label>
                                        First Name
                                        <span class="required">*</span>
                                    </label>
                                    <input placeholder="" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="billing-input">
                                    <label>
                                        Address
                                        <span class="required">*</span>
                                    </label>
                                    <input placeholder="Street address" type="text" name="address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="billing-input">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text" name="house">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="billing-input">
                                    <label>
                                        City
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" name="street">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="billing-input">
                                    <label>
                                        County
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" name="district">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="billing-input">
                                    <label>
                                        commune
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" name="commune">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="billing-input">
                                    <label>
                                        Postcode / Zip
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="billing-input">
                                    <label>
                                        Phone
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="billing-input">
                                    <label>
                                        Email Address
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="billing-input">
                                    <input id="cbox" type="checkbox">
                                    <label for="cbox">Create an account?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="billing-input">
                                    <label>
                                        Order Notes
                                        <span class="required">*</span>
                                    </label>
                                    <textarea name="notes" id="checkout-mess" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-5">
                <div class="customer-coupon">
                    <h3>Have a coupon? <span id="coupon">Click here to enter your code</span></h3>
                    <div id="have-coupon" class="coupon-checkout-content">
                        <div class="coupon-info">

                            <p class="checkout-coupon">
                                <label>
                                    Coupon code
                                    <span class="required">*</span>
                                </label>
                                <input type="text">
                                <input class="coupon-submit" type="" value="Apply Coupon">
                            </p>

                        </div>
                    </div>
                </div>

                <div class="your-order-payment">
                        <div class="your-order">
                            <h2>Your Order</h2>
                            <ul>
                                @foreach( session('cartItems') as $item)
                                <li>{{$item->name}} <span>{{ $item->price * $item->quantity}}.VNĐ</span></li>
                                @endforeach
                                <li>Subtotal <span>{{session('totalPrice')}}.VNĐ</span></li>
                                <li>Shipping <span>24500.VNĐ</span></li>
                                <li class="order-total">Order Total <span>{{session('totalPrice')+24500}}.VNĐ</span></li>
                            </ul>
                    </div>
                    <div class="your-payment">
                        <h2>payment method</h2>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Direct Bank Transfer
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Cheque Payment
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    PayPal
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                <!-- <a href="#" onclick="document.getElementById('myForm').submit()" value="Place order">Place order</a> -->
                                    <input  onclick="document.getElementById('myForm').submit()" type="submit" value="Place order" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout area end -->
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