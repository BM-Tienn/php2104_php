<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhotoSliderController;
use App\Http\Controllers\PhotoBannerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

//Category
Route::resource('categories',CategoryController::class);

//Slider
Route::resource('slider',PhotoSliderController::class);

//Banner
Route::resource('banner',PhotoBannerController::class);

//Product
Route::resource('products',ProductsController::class);

//Shop
Route::get('/shops',[ShopController::class,'index'])->name('shops');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog_details', function () {
    return view('pages.blog_details');
})->name('blog_details');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/shops_details', function () {
    return view('pages.shops_details');
})->name('shops_details');

Route::get('/shoping_cart', function () {
    return view('pages.shoping_cart');
})->name('shoping_cart');

Route::get('/dashboard', function () {
    return view ('dashboard');
})->name('dashboard');




