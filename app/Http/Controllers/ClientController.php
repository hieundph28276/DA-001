<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        $phone = DB::table('phones')
        ->whereNull('deleted_at')
        ->get();
        $category = DB::table('category')
        ->whereNull('deleted_at')
        ->get();
        return view('index', compact('phone', 'category'));
    }
}
