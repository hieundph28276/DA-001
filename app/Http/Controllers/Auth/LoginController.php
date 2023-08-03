<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('POST')){
            // dd(12312);
            // $this->middleware('CheckRole.handle'); 
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                // dd(123);
                // Nếu đăng nhập thành công, lưu thông tin user vào session
                $user = Auth::user();
                $request->session()->put('user', $user);// $user là đối tượng User đã đăng nhập
                
                $role = auth()->user()->role;
                if($role == 0){
                    // dd(12121);
                    return redirect()->route('index');
                }else{
                    return redirect()->route('route_phone_index');
                }  
            }
            else{
                // dd(123);
                Session::flash('error', 'Sai mật khẩu hoặc email');
                return redirect()->route('login');
            }
        }
        return view('auth.login');
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
    public function add(Request $request){
        // $register = Register::find($id);
        if($request->isMethod('POST')){
            // Lấy toàn bộ dữ liệu trong form đăng ký mà chúng ta gửi lên
            $params = $request->except('_token');
            // Mã hóa mật khẩu người dùng cung cấp
            $params['password'] = Hash::make($request->password);
            // tạo bản ghi đăng ký
            $register = Register::create($params);
            if($register){
                Session::flash('success', 'Đăng ký thành công');
                return redirect()->route('login');
            }
        }
        return view('auth.add');
    }
    // public function add(Register $request){
    //     if($request->post()){
    //         $register = Register::create($request->except('_token'));
    //         if($register->id){
    //             Session::flash('success', 'Category added successfully');
    //             return redirect()->route('login');
    //         }
    //     }       
    //     // dd($category); z  
    //     return view('admin/category.add');
    // }
}