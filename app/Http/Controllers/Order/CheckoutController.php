<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkOut(Request $request)
    {
        $userId = Auth::id();

        // Lấy danh sách đơn hàng của người dùng hiện tại
        $orders = Order::where('user_id', $userId)->get();

        return view('client/cart.checkout', compact('orders'));
    }
    public function show($id)
    {
        // Truy vấn cơ sở dữ liệu để lấy thông tin đơn hàng
        $order = Order::findOrFail($id);
        // Lấy danh sách các sản phẩm trong đơn hàng
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        // dd($orderItems);
        return view('client/cart.orderShow', compact('order', 'orderItems'));
    }
}
