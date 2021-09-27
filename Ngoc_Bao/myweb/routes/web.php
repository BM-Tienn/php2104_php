<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;


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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/home-page', [HomeController::class, 'index'])
    ->name('home-page');

Route::get('/about-ms', function() {
    return view('my-directory.about-ms');
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

Route::get('/product-single-ms/{id?}', [ProductController::class, 'show'])
    ->name('product-single-ms');

Route::get('/shop-ms', [ProductController::class, 'shop'])
    ->name('shop-ms');

Route::get('/wishlist-ms', [ProductController::class, 'wishlist'])
    ->name('wishlist-ms');

Route::get('/categories/{id}', [CategoryController::class, 'show'])
    ->name('category.show');

/*Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');*/


/* profile user 
*  only admin can see user
*/
Route::get('/profile',[ProfileController::class,'index'])
    ->name('profile.index');

Route::get('/profile-single-ms/{id?}',[ProfileController::class,'show'])
    ->name('profile-single-ms.show');

/* blog for client  */
Route::get('/blogs',[BlogController::class,'index'])
    ->name('blogs.index');

Route::get('/blog-single-ms/{id?}',[BlogController::class,'show'])
    ->name('blog-single-ms');


/* admin manager product */

Route::resource('products',AdminProductController::class)
    ->middleware('auth');


Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
});

