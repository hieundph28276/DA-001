<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('POST')){
            // dd(12312);
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                // dd(123);
                return redirect()->route('route_phone_index');
            }else{
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
    public function add(RegisterRequest $request){
        // $register = Register::find($id);
        if($request->post()){
            
            $register = Register::create($request->except('_token'));
            if($register->id){
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
