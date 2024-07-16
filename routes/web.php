<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/env-variables', function () {
    // Get all environment variables
    $envVariables = $_ENV;
    dd($envVariables); 
    return redirect()->back();
});
Route::get('shopFilter', function()   {
   return view('shopFilter');
});
Route::get('cart', function()   {
    return view('cart');
 });
 Route::resource('admin', \App\Http\Controllers\AdminController::class)->middleware("can:isAdmin");
Auth::routes();
Route::resource('system', \App\Http\Controllers\SystemController::class)->middleware("can:isAdmin");

Route::resource('Category', \App\Http\Controllers\CategoryController::class)->middleware("can:isAdmin");
Route::resource('product', \App\Http\Controllers\productController::class)->middleware("can:isAdmin");
Route::resource('size', \App\Http\Controllers\sizeController::class)->middleware("can:isAdmin");
Route::resource('color', \App\Http\Controllers\colorController::class)->middleware("can:isAdmin");
Route::resource('productImage', \App\Http\Controllers\productImageController::class)->middleware("can:isAdmin");
Route::resource('productDetail', \App\Http\Controllers\productDetailController::class)->middleware("can:isAdmin");
Route::resource('productPrice', \App\Http\Controllers\productPricesController::class)->middleware("can:isAdmin");
Route::resource('homepage', \App\Http\Controllers\homeCategoriesController::class)->middleware("can:isAdmin");
Route::get('shop/{category_id}/show' , [App\Http\Controllers\shopController::class ,'show'])->name('shop.show');
Route::get('home',[App\Http\Controllers\showController::class,'show'])->name('home');
Route::get('/' ,function()  {
    return redirect()->route('home');
});
Route::get('/productView/{id}/show',[App\Http\Controllers\productViews::class,'show'])->name('productView.show');
Route::get('productsView', \App\Livewire\productsView::class);
Route::get('shopFilter', \App\Livewire\ShopFilter::class);
Route::get('detail', \App\Livewire\Detail::class)->middleware("can:isAdmin");

Route::resource('coupons',\App\Http\Controllers\CouponController::class)->middleware("can:isAdmin");
Route::resource('offer',\App\Http\Controllers\OfferController::class)->middleware("can:isAdmin");

Route::get('/cart',[App\Http\Controllers\cartController::class,'index'])->name('cart.index');
Route::post('/cart/addToCart',[App\Http\Controllers\cartController::class,'addToCart'])->name('cart.store');
Route::post('/cart/updateCart',[App\Http\Controllers\cartController::class,'updateCart'])->name('cart.update');
Route::delete('/cart/removeItem',[App\Http\Controllers\cartController::class,'removeItem'])->name('cart.remove');
Route::post('/cart/addCoupon',[App\Http\Controllers\cartController::class,'addCoupon'])->name('cart.coupon');
Route::resource('checkout', \App\Http\Controllers\checkoutController::class);
Route::resource('order', \App\Http\Controllers\ordersController::class)->middleware("can:isAdmin");
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::resource('track', \App\Http\Controllers\TrackController::class);


