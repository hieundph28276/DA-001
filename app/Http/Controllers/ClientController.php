<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $banner = DB::table('banners')
        ->select('image')
        ->whereNull('deleted_at')
        ->get();
        // kiểm tra xem có gửi dữ liệu form POST và có tham số "name" hay không
        if ($request->post() && $request->name) {
            $phone = DB::table('phones')
                ->select('id', 'name', 'image', 'price', 'description')
                ->where('name', 'like', '%' . $request->name . '%')
                ->get();
        } else {
            // kiểm tra xem có thám số query "category_id" hay không
            $categoryID = $request->input('category_id');
            if ($categoryID) {
                // Nếu có category_id, thực hiện lấy các sản phẩm thuộc danh mục
                $phone = Phone::where('category_id', $categoryID)->get();
                if ($phone->isEmpty()) {
                    return redirect()->route('index')->with('error', 'không có sản phẩm nào được tìm thấy');
                }
            } else {
                // Nếu không có category_id, hiển thị toàn bộ danh sách sản phẩm
                $phone = Phone::all();
            }
        }
        $category = Category::all();

        return view('client.home', compact('phone', 'category', 'banner'));
    }
    public function detail($id)
    {
        $phone = Phone::find($id);
        // dd($phone);
        return view('client.detail-view', compact('phone'));
    }
    // public function search(Request $request){
    //     return view();
    // }
    // dd(1211);
    // $phone = DB::table('phones')
    // ->whereNull('deleted_at')
    // ->get();
    // $category = DB::table('category')
    // ->whereNull('deleted_at')
    // ->get();
    // if($request->post() && $request->name){
    //     $phone = DB::table('phones')
    //     ->select('id','name', 'image', 'price', 'description')
    //     ->where('name', 'like' , '%'.$request->name.'%') 
    //     ->get();
    // }
    // if($request->has('category_id')){
    //     $categoryId = $request->input('category_id');
    //     $category = Category::find($categoryId);
    //     $phone = $category->phone;
    // }
}
