<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\Environment\Runtime;

class CategoryController extends Controller
{
    public function index(Request $request){
        $category = DB::table('category')
        ->select('id','name')
        ->whereNull('deleted_at')
        ->get();
        return view('admin/category.index', compact('category'));
    }
       public function add(CategoryRequest $request){
        if($request->post()){
            $category = Category::create($request->except('_token'));
            if($category->id){
                Session::flash('success', 'Category added successfully');
                return redirect()->route('route_category_add');
            }
        }       
        // dd($category); z  
        return view('admin/category.add');
    }
    public function  edit(CategoryRequest $request,$id) {
        //cách 1
//        $student = DB::table('students')
//            ->where('id',$id)->first();
        //cách 2
        $category = Category::find($id);
        if ($request->isMethod('POST')) {
           $result = Category::where('id',$id)
               ->update($request->except('_token'));
           if ($result) {
               Session::flash('success','sửa  thành công sinh viên');
               return redirect()->route('route_category_edit',['id'=>$id]);
           }
        }
        return view('admin/category.edit',compact('category'));
    }
    public function delete($id){
        Category::where('id',$id)->delete();
        return redirect()->route('route_category_index');
    }
}