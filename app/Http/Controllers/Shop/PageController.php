<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $page = DB::table('phones')
            ->select('name', 'price', 'image')
            ->get();
        return view('client/shop.shop-page', compact('page'));
    }
    public function list()
    {
        $list = DB::table('phones')
            ->select('name', 'price', 'image', 'description')
            ->get();
        return view('client/shop.shop-list', compact('list'));
    }
}
