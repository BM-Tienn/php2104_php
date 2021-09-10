<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SliderController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/product_details/{id}',[ProductDetailsController::class,'show'])
    ->name('product_details');

Route::get('/upload/product',[PhotosController::class,'create']);
Route::post('/upload/product',[PhotosController::class,'store']);

Route::get('/upload/banner',[BannerController::class,'create']);
Route::post('/upload/banner',[BannerController::class,'store']);

Route::get('/upload/slider',[SliderController::class,'create']);
Route::post('/upload/slider',[SliderController::class,'store']);

Route::get('/admin',function () {
    return view('pages.login');
});

Route::get('/products',function () {
    if(View::exists('pages.products')) {
        return view('pages.products');
    }
})->name('products');

//Route::get('/product_details',function () {
//    if(View::exists('pages.product_details')) {
//        return view('pages.product_details');
//    }
//})->name('product_details');

Route::get('/checkout',function () {
    if(View::exists('pages.checkout')) {
        return view('pages.checkout');
    }
})->name('checkout');

Route::get('/contact',function () {
    if(View::exists('pages.contact')) {
        return view('pages.contact');
    }
})->name('contact');
require __DIR__.'/auth.php';
