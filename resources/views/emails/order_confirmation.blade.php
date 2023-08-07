<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <p>Here is your order confirmation:</p>
    <p>Order ID: {{ $order->id }}</p>
    <p>Order Date: {{ $order->created_at }}</p>
    <!-- Các thông tin đơn hàng khác -->
</body>
</html>