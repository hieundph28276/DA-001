<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneRequest;
use App\Models\Category;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PhoneController extends Controller
{
    public function index(Request $request){
        $phone = DB::table('phones')
        ->whereNull('deleted_at')
        ->get();
        $category = DB::table('category')
        ->whereNull('deleted_at')
        ->get();
        return view('admin/phone.index', compact('phone', 'category'));
    }
    public function add(PhoneRequest $request){
        $category = DB::table('category')
        ->whereNull('deleted_at')       
        ->get();
        if ($request->isMethod('POST')) { //tồn tại phương thức post/
            //nếu như tồn tại file thì sẽ up file lên
           $params =  $request->except('_token');
           if ($request->hasFile('image') && $request->file('image')->isValid()) {
               $params['image'] = uploadFile('hinh',$request->file('image'));
           }
          $phone = Phone::create($params);
            if ($phone->id){
                Session::flash('success', 'Phone added successfully');
                return redirect()->route('route_phone_add');
            }
        }
        return view('admin/phone.add', compact('category'));
    } 
    public function edit(PhoneRequest $request,$id){
        $category = DB::table('category')
        ->whereNull('deleted_at')
        ->get();
        $phone = Phone::find($id);
            if($request->post()){
                $params = $request->except('_token');
                if($request->hasFile('image') && $request->file('image')->isValid()){
                    $resultDl = Storage::delete('/public/'.$phone->image);
                    if ($resultDl) {
                        $params['image'] = uploadFile('hinh', $request->file('image'));
                    }
                }
                else{
                    $params['image'] = $phone->image;
                }
               $result = Phone::where('id',$id)
                ->update($params);
            if ($result) {
                Session::flash('success','sửa  thành công sinh viên');
                return redirect()->route('route_phone_edit',['id'=>$id]);
            }
         }
        return view('admin/phone.edit', compact('phone','category'));
    }
    public function delete($id){
        Phone::where('id',$id)->delete();
        Session::flash('success', 'Phone has been deleted');
        return redirect()->route('route_phone_index');
    }
}