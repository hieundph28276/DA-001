<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        // Lấy giỏ hàng từ session
        $cart = $request->session()->get('cart');
        // dd($cart);

        // Nếu giỏ hàng không tồn tại hoặc rỗng, chuyển hướng về trang trống giỏ hàng
        if (empty($cart)) {
            return redirect()->route('index');
            // Nếu có sản phẩm trong giỏ hàng, hiển thị trang giỏ hàng với danh sách sản phẩm
        }
        return view('client.cart', compact('cart'));
    }
    public function addToCart(Request $request)
    {
        // dd(121212);
        // Lấy thông tin sản phẩm từ request (có thể lấy thông qua id hoặc thông tin sản phẩm khác)
        $product = Phone::find($request->input('product_id'));
        $quantity = $request->input('qty');
        // dd($product);
        // Thêm sản phẩm vào giỏ hàng (có thể lưu vào session hoặc database)
        // Ví dụ lưu vào session:
        $cart = $request->session()->get('cart', []);
        $cart[] = $product;
        $request->session()->put('cart', $cart);

        // Hoặc lưu vào bảng "carts" trong cơ sở dữ liệu

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }
}
