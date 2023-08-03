<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $user = DB::table('users')
        ->select('id', 'name', 'email', 'role')
        // ->whereNull('deleted_at')
        ->get();
        return view('admin/user.index', compact('user'));
    }
    public function add(UserRequest $request){
        // dd(1212145);
        if($request->isMethod('POST')){
            // dd(12212);
            $params = $request->except('_token');
            // $params = $request->validated(); 
            // dd($params);
            $params['password'] = Hash::make($request->password);
            $register = Register::create($params);
            dd($register);

            if($register){
                Session::flash('success', 'Đăng ký thành công');
                return redirect()->route('route_user');
            }
        }
        // dd($request);

        return view('admin/user.add');
    }
   
    public function edit(UserRequest $request, $id){
        $user = User::find($id);    
        if ($request->isMethod('POST')) {
            $result = User::where('id',$id)
                ->update($request->except('_token'));
            if ($result) {
                Session::flash('success','sửa  thành công sinh viên');
                return redirect()->route('route_user_edit',['id'=>$id]);
            }
         }
         return view('admin/user.edit', compact('user'));
    }
    public function delete($id) {
        User::where('id',$id)->delete();
        Session::flash('success', 'bạn đã xóa thành công');
        return redirect()->route('route_user');
    }
}
