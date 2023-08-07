@extends ('client/templates.layout')
@section ('cart')
<!-- breadcrumbs start -->
<div class="breadcrumbs-area breadcrumb-bg ptb-100">
    <div class="container">
        <div class="breadcrumbs text-center">
            <h2 class="breadcrumb-title">Order Details</h2>
            <ul>
                <li>
                    <a class="active" href="/">Home</a>
                </li>
                <li>Order Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<div class="checkout-area ptb-100">
    <div class="container">
        <div style="text-align: center;">
            <h2>Order Details</h2>
            <p>Order ID: {{ $order->id }}</p>
            <p>Name: {{ $order->name }}</p>
            <p>Address: {{ $order->house }},{{ $order->commune }},{{ $order->district }},{{ $order->street }}</p>
            <p>phone: {{ $order->phone }}</p>
            <p>Email: {{ $order->email }}</p>
            <p>Trạng thái:
                @if($order->status == 0)
                Đang chờ xử lý
                @elseif($order->status == 1)
                đang đóng hàng
                @elseif($order->status == 2)
                Đang vận chuyển
                @elseif($order->status == 3)
                Đang giao hàng
                @else
                Giao hàng không thành công
                @endif
            </p>
            <p>Tổng thành: {{ $order->totalPrice }}.VNĐ</p>
        </div>
        <h2>Order Items</h2>
        <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderItems as $item)
                <tr>
                    <td>{{ $item->phone_name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}.VNĐ</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

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