<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;


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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.products.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//route ten hien thi loi chao
Route::get('/phuong', function () {
    return view('test'); 
});

//route su dung method 
Route::get('/method', function () {
    return view('form'); 
});
//route get
Route::get('/result_get', function (Request $request) {
    return view('result_get', ['data' => $request->all()]);
});
//route post

Route::post('/result_post', function (Request $request) {
    return view('result_post', ['data' => $request->all()]);
});
//route parameters + name
Route::get('/parameters', function () {
    return view('test');
});
Route::get('/parameters/{id}', function ($id) {
    return 'Parameter ' . $id;
})->name('param');

//route conditional 'where' 
Route::get('/person', function () {
    return view('test');
});
Route::get('/person/{age}', function ($age) {
    return 'The baby`s age is: ' . $age;
})->where('age', '[0-9]');


//view trong folder phuon
Route::get('/phuon', function () {
    return view('phuon.test'); 
});

//kiem tra 1 view co ton tai hay k
Route::get('/checkview', function() {
    if (View::exists('phuon.check')) {
        echo '
<script>alert("File check exist");</script>';
    } else {
        echo '
<script>alert("File check is not exist");</script>';
    }
});

//truyen bien vao view
Route::get('/data', function () {
    return view('phuong')
                ->with('name', 'Phuong')
                ->with('age', 23); 
});

//route group
Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    //show list of products
    Route::get('/products',[AdminProductController::class, 'index'])->name('products.index');
    
    //show single product
    Route::get('/products/{id}', [AdminProductController::class, 'show'])->name('product.show');

    Route::get('/', function () {
        return view('admin.products.home');
    });

    //create product
    Route::get('/create',[AdminProductController::class, 'create'])->name('product.create');
    Route::post('/create',[AdminProductController::class, 'store'])->name('product.store');

    //edit product
    Route::get('/edit/{id}', [AdminProductController::class, 'edit'])->name('product.edit');
    Route::patch('/update/{id}', [AdminProductController::class, 'update'])->name('product.update');

    //delete product
    Route::delete('/destroy/{id}', [AdminProductController::class, 'destroy'])->name('product.destroy');

    //search products
    Route::get('/search',[AdminProductController::class, 'search'])->name('products.search');

    Route::get('/edit', function () {
        return 'Edit product';
    });
    Route::get('/delete', function () {
        return 'Delete product';
    });
});

//
Route::get('/home-page', [HomeController::class, 'index'])->name('home-page'); 

Route::get('/about-ms', function() {
    return view('my-directory.about-ms');
 });
 Route::get('/blog-ms', function() {
    return view('my-directory.blog-ms');
 });
 Route::get('/blog-single-ms', function() {
    return view('my-directory.blog-single-ms');
 });
 Route::get('/cart-ms', function() {
    return view('my-directory.cart-ms');
 });
 Route::get('/checkout-ms', function() {
    return view('my-directory.checkout-ms');
 });
 Route::get('/contact-ms', function() {
    return view('my-directory.contact-ms');
 });
 Route::get('/product-single-ms/{id}', [ProductController::class, 'productSingle'])->name('product-single-ms');
 
 Route::get('/shop-ms',[ProductController::class, 'shop'])->name('shop-ms');

 Route::get('/wishlist-ms', [ProductController::class, 'wishlist'])->name('wishlist-ms');

 Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('category.show');