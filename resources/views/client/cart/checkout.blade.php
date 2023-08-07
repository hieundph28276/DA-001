@extends ('client/templates.layout')
@section ('cart')
<!-- breadcrumbs start -->
<div class="breadcrumbs-area breadcrumb-bg ptb-100">
    <div class="container">
        <div class="breadcrumbs text-center">
            <h2 class="breadcrumb-title">My Orders</h2>
            <ul>
                <li>
                    <a class="active" href="/">Home</a>
                </li>
                <li>My Orders</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<div class="checkout-area ptb-100">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên người đặt</th>
                    <th scope="col">Trang thái đơn hàng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Ngày đặt hàng</th>
                    <th scope="col">Xem chi tiết </th>
                </tr>
            </thead>
            <tbody>
                @if ($orders->isEmpty())
                <p>No orders found.</p>
                @else
                <ul>
                    @foreach ($orders as $order)
                    <tr>
                        <th>{{ $order->id }}</th>
                        <td>{{ $order->name }}</td>
                        <td>
                            @if ($order->status == 0)
                            Đang chờ xử lý
                            @elseif ($order->status == 1)
                            Đang đóng hàng
                            @elseif ($order->status == 2)
                            Đang vận chuyển
                            @elseif ($order->status == 3)
                            Đang giao hàng
                            @else
                            Giao hàng không thành công
                            @endif
                        </td>
                        <td>{{ $order->totalPrice }}.VNĐ</td>
                        <td>
                            {{ $order->created_at->format('d/m/Y H:i:s') }}
                        </td>
                        <td>
                            <a href="{{ route('route_order_show', ['id' => $order->id]) }}">View Details</a>
                        </td>
                    </tr>
                    @endforeach
                </ul>
                @endif
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