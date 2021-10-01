<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
//route loi chao
Route::get('/greeting', function () {
    return 'xin chao';
});

Route::get('/user/{id?}', function ($id = null) {
    return 'user_id :' . $id;
});

Route::view('welcome', 'welcome');

//route group
Route::name('admin')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // // route method
    // Route::view('/route-view', 'route-view');

    // //route post
    // Route::post('/show-post', function (Request $request) {
    //     return view('show-post', ['show' => $request->all()]);
    //     //dd('show');
    // });

    // //route get
    // Route::get('/show-get', function (Request $request) {
    //     return view('show-get', ['show' => $request->all()]);
    // });

    Route::resource('products', AdminProductController::class);
});

Route::get('/php', function() {
    return response()->json([
     'stuff' => phpinfo()
    ]);
 });


//  Route::get('/home-page', function() {
//     if (view::exists('index')) {
//         return view('index');
//     }

//     return view('home-page');
// })->name('home-page');

Route::get('/home-page', [HomeController::class, 'index'])->name('home-page');

Route::get('/products', [ProductController::class, 'Product'])->name('products.product');

Route::get('/productsdetail/{id}', [ProductDetailController::class, 'ProductDetail'])->name('products.product-detail');

Route::get('/categories/{id}', [CategoryController::class, 'categories'])->name('category.show');

Route::get('/child-page', function() {
    return view('my-directory.child-page');
})->name('child-page');


