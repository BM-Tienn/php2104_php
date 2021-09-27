<?php

use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use Illuminate\Support\Facades\View;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route Parameters

//Required Parameters
Route::get('/userid/{id}', function (Request $request, $id) {
    return 'User '.$id;
});

//Option Parameters
Route::get('/username/{name?}', function (Request $request, $name = null) {
    return 'Hello '.$name;
});

Route::get('/username/{name?}', function (Request $request, $name = 'Guest') {
    return 'Hello '.$name;
});

//Route Group

//Middleware
/* Route::middleware(['admin'])->group(function () {
    
    Route::get('/products', function () {
        return view('dashbroad');
    })->name('dashbroad');

    Route::get('/users', function () {
        return view('users');
    })->name('users');
}); */

//Prefix
Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    Route::resource('products', AdminProductController::class);
});

Route::get('/shopper_fashion/home', function() {
    return view('home-page');
})->name('shopper.home'); 

Route::get('/shopper_fashion/shop/', [ShopController::class, 'shopIndex'])->name('shop.index');

Route::get('/shopper_fashion/product/{id}', [ProductController::class, 'productInfo'])->name('product.info');

Route::get('/shopper_fashion/shop-single', function () {
    return view('shopper-shop-single');
});

Route::get('/shopper_fashion/cart', function () {
    return view('shopper-cart');
});

Route::get('/shopper_fashion/checkout', function () {
    return view('shopper-checkout');
});

Route::get('/shopper_fashion/thankyou', function () {
    return view('shopper-thankyou');
});

Route::get('/shopper_fashion/about', function () {
    return view('shopper-about');
});

Route::get('/shopper_fashion/contact', function () {
    return view('shopper-contact');
});





