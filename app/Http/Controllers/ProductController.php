<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request){
        // dd(123);
        $product = DB::table('product')->get();
        return view('admin/product.index', compact('product'));
    }
    public function add(Request $request){
        if($request->post()){
        }
        return view('admin/product.add');
    }
}
