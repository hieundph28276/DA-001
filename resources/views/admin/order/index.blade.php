@extends ('admin/templates.index')
@section ('content')
<div class="card-box">
    <div class="mb-3">
        <a href="" class="btn btn-primary ">Thêm Mới</a>
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Tài khoản</th>
                    <th>Email</th>
                    <th>Đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Tổng thành</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->user->email }}</td>
                    <td>
                        @foreach ($order->orderItems as $item)
                        <p>Sản phẩm: {{ $item->phone_name }}</p>
                        <p>Số lượng: {{ $item->quantity }}</p>
                        <p>Giá: {{ $item->price }}</p>
                        @endforeach
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->totalPrice }}.VNĐ</td>
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
                    <td>
                    <a href="{{ route('route_order_edit', ['id'=>$order->id]) }}">
                            <button class="btn btn-primary">Sửa</button>
                        </a>
                        <a href="{{ route('route_order_delete', ['id'=>$order->id]) }}">
                            <button class="btn btn-danger">Xóa</button>
                        </a>
                        <a href="{{ route('print_invoice', ['id' => $order->id]) }}" target="_blank">
                            <button class="btn btn-danger">In hóa đơn</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection