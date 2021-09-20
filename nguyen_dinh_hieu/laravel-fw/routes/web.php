<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as ProductAdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;

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

Route::get('/myview', function() {
    return view('myview');
});

Route::post('/data', function (Request $request) {
    return view('test', ['data' => $request->all()]);
});

Route::get('/view-demo', function() {
    return view('view_demo');
});

// Route::get('/my-view-mvc', function() {
//     return view('view_mvc.my_view_mvc', ['name' => 'Hiếu']);
// });

Route::get('/my-view-mvc', function() {
    if (View::exists('view_mvc.my_view_mvc')) {
        return view('view_mvc.my_view_mvc', ['name' => 'Hiếu']); 
    }else {
        echo '<h1>NOT FOUND</h1>';
    }  
});

// Route::get('/index', function() {
//     return view('mypage.home-page');
// });
Route::get('/index', [CategoryController::class, 'index']);

// Route::get('/shop', function() {
//     return view('mypage.shop');
// });

Route::get('/shop', [ShopController::class, 'shop']);
Route::get('/product-details/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/category/{id}', [CategoryController::class, 'category'])->name('category.show');

Route::get('/product-details', function() {
    return view('mypage.product-details');
});
Route::get('/cart', function() {
    return view('mypage.cart');
});
Route::get('/about', function() {
    return view('mypage.about');
});
Route::get('/blog', function() {
    return view('mypage.blog');
});
Route::get('/blog-details', function() {
    return view('mypage.blog-details');
});
Route::get('/login-shop', function() {
    return view('mypage.login');
});
Route::get('/elements', function() {
    return view('mypage.elements');
});
Route::get('/confirmation', function() {
    return view('mypage.confirmation');
});
Route::get('/checkout', function() {
    return view('mypage.checkout');
});
Route::get('/contact', function() {
    return view('mypage.contact');
});

Route::name('admin.')->prefix("admin")->group(function() {

    Route::resource('products', ProductAdminController::class);

});
