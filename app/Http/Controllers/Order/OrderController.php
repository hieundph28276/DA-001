<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('POST'))
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
        return view('client/cart.checkout');
    }
}
