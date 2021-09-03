<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',function () {
    if(View::exists('pages.products')) {
        return view('pages.products');
    }
})->name('products');

Route::get('/product_details',function () {
    if(View::exists('pages.product_details')) {
        return view('pages.product_details');
    }
})->name('product_details');

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
