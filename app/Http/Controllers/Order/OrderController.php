<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
// use App\Mail\OrderConfirmation;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('POST'))
            // dd(12121);
            // Lưu thông tin giỏ hàng và tổng giá vào session
            $cartItems = Cart::where('user_id', Auth::id())->get();
        $totalPrice = 0;
        foreach ($cartItems as $cart) {
            $totalPrice += $cart->price * $cart->quantity;
        }

        $request->session()->put('cartItems', $cartItems);
        $request->session()->put('totalPrice', $totalPrice);
        // dd($cartItems);
        return view('client/cart.order');
    }
    public function placeOrder(Request $request)
    {
        // lấy thông tin người dùng
        $userId = Auth::id();
        if ($request->isMethod('POST')) {
            // Lấy thông tin giỏ hàng từ session
            // $cartItems = session()->get('cartItems');
            $totalPrice = session()->get('totalPrice');

            // Lưu thông tin đơn hàng vào cơ sở dữ liệu
            $order = Order::create([
                'user_id' => $userId,
                'name' => $request->name,
                'address' => $request->address,
                'house' => $request->house,
                'street' => $request->street,
                'district' => $request->district,
                'commune' => $request->commune,
                'phone' => $request->phone,
                'email' => $request->email,
                'status' => 0,
                'totalPrice' => $totalPrice,
                'notes' => $request->notes,

            ]);
            // Gửi email xác nhận đơn hàng cho người dùng
            // Mail::to($request->email)->send(new OrderConfirmation($order));
            // Lưu thông tin từng sản phẩm trong giỏ hàng vào bảng OrderItem
            $orderId = $order->id;
            $cartItems = session()->get('cartItems');
            foreach ($cartItems as $item) {
                // dd(12121);
                OrderItem::create([
                    'order_id' => $orderId, // Cung cấp giá trị cho trường order_id
                    'phone_name' => $item->name,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                    // Thêm các cột thông tin khác của sản phẩm nếu cần thiết
                ]);
                // dd($cartItems);
            }

            // $orderId = $order->id;
            // dd($orderId);

            // Xóa các bản ghi trong bảng 'cart' có user_id tương ứng
            Cart::where('user_id', Auth::id())->delete();
            return redirect()->route('route_order_check_out');
        }
    }
}
