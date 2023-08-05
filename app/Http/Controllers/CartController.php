<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\CodeUnit\FunctionUnit;

class CartController extends Controller
{
    public function index() {
        $cart = DB::table('carts')->get();
        return view('admin/cart.index', compact('cart'));
    }
    public function cart(Request $request)
    {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (Auth::check()) {
            // Nếu đã đăng nhập, lấy thông tin người dùng
            $userId = Auth::id();

            // Lấy thông tin tất cả sản phẩm trong giỏ hàng của người dùng
            $cartItems = Cart::where('user_id', $userId)->get();
            return view('client.cart', compact('cartItems'));
        } else {
            // Nếu chưa đăng nhập, bạn có thể điều hướng đến trang đăng nhập hoặc thông báo yêu cầu đăng nhập trước khi xem giỏ hàng.
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập trước khi xem giỏ hàng.');
        }
        // return view('client.cart', compact('cart'));
    }
    public function addToCart(Request $request)
    {
        // Xác định điện thoại muốn thêm vào giỏ hàng
        $phoneId = $request->input('phone_id');
        $quantity = $request->input('quantity', 1);

        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (Auth::check()) {
            // Nếu đã đăng nhập, lấy thông tin người dùng
            $userId = Auth::id();
            // Lấy thông tin điện thoại từ CSDL
            $phone = Phone::find($phoneId);
            // dd($phone);
            // Kiểm tra xem điện thoại đã tồn tại trong giỏ hàng hay chưa
            $existingCartItem = Cart::where('user_id', $userId)
                ->where('phone_id', $phoneId)
                ->first();

            if ($existingCartItem) {
                // Nếu đã tồn tại, tăng số lượng điện thoại trong giỏ hàng
                $existingCartItem->quantity += $quantity;
                $existingCartItem->save();
            } else {
                // Nếu chưa tồn tại, thêm mới vào giỏ hàng
                Cart::create([
                    'user_id' => $userId,
                    'phone_id' => $phoneId,
                    'quantity' => $quantity,
                    'name' => $phone->name, // Lưu tên sản phẩm vào giỏ hàng
                    'image' => $phone->image, // Lưu đường dẫn ảnh sản phẩm vào giỏ hàng
                    'price' => $phone->price, // Lưu giá sản phẩm vào giỏ hàng
                ]);
            }

            // Thêm điện thoại vào giỏ hàng thành công
            return redirect()->route('cart')->with('success', 'Điện thoại đã được thêm vào giỏ hàng.');
        } else {
            // Nếu chưa đăng nhập, yêu cầu người dùng đăng nhập trước khi thêm vào giỏ hàng
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập trước khi thêm điện thoại vào giỏ hàng.');
        }
    }
    public function delete($id){
        Cart::where('id', $id)->delete();
        return redirect()->route('cart');
    }
}
