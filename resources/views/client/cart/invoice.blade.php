<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
</head>

<body>
    <h1>Hóa đơn số: {{ $order->id }}</h1>
    <p>Ngày đặt hàng: {{ $order->created_at }}</p>
    <p>Tên người dùng: {{ $order->name }}</p>
    <p>Email: {{ $order->user->email }}</p>

    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($orderItems as $item)
            <tr>
                <td>{{ $item->phone_name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}VNĐ</td>
            </tr>
            
            @endforeach

        </tbody>
        <h4>Tổng tiền: {{ $order->totalPrice}}VNĐ</td></h4>
    </table>
</body>

</html>