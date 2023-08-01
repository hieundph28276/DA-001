<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['GET', 'POST'], '/', [App\Http\Controllers\ClientController::class, 'index'])
    ->name('index');
// Route::match(['GET','POST'],'/search',[App\Http\Controllers\ClientController::class, 'index'])->name('route_search');
Route::get('/detail/{id}', [App\Http\Controllers\ClientController::class, 'detail'])
    ->name('route_detail');

// Route::get('/test', function(){
//    return view('client.detail-view');
// });
// --------------------------login--------------------------------------
Route::match(['GET', 'POST'], '/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])
    ->name('login');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])
    ->name('logout');
Route::match(['GET', 'POST'], '/login/add', [App\Http\Controllers\Auth\LoginController::class, 'add'])
    ->name('login_add');
Route::middleware(['auth', 'check.role:1'])->group(function () {
    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])
        ->name('route_category_index');
    Route::match(['GET', 'POST'], '/category/add', [App\Http\Controllers\CategoryController::class, 'add'])
        ->name('route_category_add');
    Route::match(['GET', 'POST'], '/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])
        ->name('route_category_edit');
    Route::get('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])
        ->name('route_category_delete');
    //------------------ phones -------------------
    Route::get('/phone', [App\Http\Controllers\PhoneController::class, 'index'])
        ->name('route_phone_index');
    Route::match(['GET', 'POST'], '/phone/add', [\App\Http\Controllers\PhoneController::class, 'add'])
        ->name('route_phone_add');
    Route::match(['GET', 'POST'], '/phone/edit/{id}', [\App\Http\Controllers\PhoneController::class, 'edit'])
        ->name('route_phone_edit');
    Route::get('/phone/delete/{id}', [App\Http\Controllers\PhoneController::class, 'delete'])
        ->name('route_phone_delete');
    // --------------Banners----------------
    Route::get('banner', [App\Http\Controllers\BannerController::class, 'index'])
        ->name('route_banner');

    Route::match(['GET', 'POST'], 'banner/add', [App\Http\Controllers\BannerController::class, 'add'])
        ->name('route_banner_add');
    Route::match(['GET', 'POST'], 'banner/edit/{id}', [App\Http\Controllers\BannerController::class, 'edit'])
        ->name('route_banner_edit');
    Route::get('banner/delete/{id}', [App\Http\Controllers\BannerController::class, 'delete'])
        ->name('route_banner_delete');
});
Route::get('cart', [App\Http\Controllers\CartController::class, 'cart']);


// Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class, 'detail'])->name('route_detail');
// Route::get('/product',[App\Http\Controllers\ProductController::class, 'index']);
// Route::match(['GET','POST'],'/product/add',[App\Http\Controllers\ProductController::class, 'add'])
// ->name('route_product_add');
// Route::match(['GET','POST'],'/product/edit/{id}',[App\Http\Controllers\ProductController::class, 'edit'])
// ->name('route_product_edit');