<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index(Request $request){
        $banner = DB::table('banners')
        ->whereNull('deleted_at')
        ->get();
        return view('admin/banner.index', compact('banner'));
    }
    public function add(Request $request){
        if($request->isMethod('POST')){
            $param = $request->except('_token');
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $param['image'] = uploadFile('banner',$request->file('image'));
            }
            $banner = Banner::create($param);
            if($banner->id){
                Session::flash('success', 'Thêm mới thành công');
                return redirect()->route('route_banner_add');
            }
        }
        return view('admin/banner.add');
    }
    public function edit(Request $request,$id){
        $banner = Banner::find($id);
        if($request->post()){
            $params = $request->except('_token');
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $resultDl = Storage::delete('/public/'.$banner->image);
                if ($resultDl) {
                    $params['image'] = uploadFile('banner', $request->file('image'));
                }
            }
            else{
                $params['image'] = $banner->image;
            }
           $result = Banner::where('id',$id)
            ->update($params);
        if ($result) {
            Session::flash('success','sửa  thành công banner');
            return redirect()->route('route_banner_edit',['id'=>$id]);
        }
     }
    return view('admin/banner.edit', compact('banner'));
    
    }
    public function delete($id){
        Banner::where('id',$id)->delete();
        Session::flash('success', 'Phone has been deleted');
        return redirect()->route('route_banner');
    }
    // public function delete($id){
    //     Banner::where('id',$id)->delete();
    //     Session::flash('success','Bạn đã xóa thành công');
    //     return redirect()->route('route_banner');
    // }
}