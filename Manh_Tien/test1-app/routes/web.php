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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/you_name/{name?}', function ($name = 'Tien') {
    return 'hello ' . $name;
});

require __DIR__.'/auth.php';

use Illuminate\Http\Request;

Route::get('/form', function(){
    return view('view');
});
//route form get
Route::get('/formget', function (Request $request) {
    return view('view', ['data' => $request->all()]);
});
//route form post
Route::post('/formpost', function (Request $request) {
    return view('view', ['data' => $request->all()]);
});
//group 
Route::group(['admin'], function() {
    Route::get('/select', function () {
        return 'select database';
    });
    Route::get('/edit', function () {
        return 'Edit database';
    });
    Route::get('/delete', function () {
        return 'Delete database';
    });
});
Route::get('/view', function() {
    return view('view');
});



Route::post('/test2', function (Request $request) {
    echo view('view2', ['request'=> $request->input('name')]);
});

//Route::redirect('/here', '/there');  //chuyển từ trang trước ra sau

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/user/{id}', function (Request $request, $id) {//nhập id tùy chọn ở sau  có thể có hoặc ko
    return 'User '.$id;
});

Route::get('/users/{name?}', function ($name = 'John') {//nhập tên tùy chọn ở sau  có thể có hoặc ko
    return $name;
});

Route::get('/userss/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');//kiểm tra nếu đkiện sai thì báo lỗi


Route::get('/greeting', function () {
   return view('greeting', ['name' => 'James']);
}); 

Route::get('/parameters/{id}', function ($id) {
    return 'Parameter ' . $id;
})->name('param');


//route view component
Route::get('/home-page', function() {
    if (View::exists('index')) {
        return view('index');
    }
    return view('home-page');
})->name('home-page');

Route::get('/service-page', function() {
    return view('my-layouts-page.service-page');
})->name('service-page');

Route::get('/about-page', function() {
    return view('my-layouts-page.about-page');
})->name('about-page');

Route::get('/contact-page', function() {
    return view('my-layouts-page.contact-page');
})->name('contact-page');

//themes page
Route::get('/theme-home-page', function() {
    if (View::exists('index')) {
        return view('index');
    }
    return view('theme-home-page');
})->name('theme-home-page');

Route::get('/theme-contact-page', function() {
    return view('my-theme-page.contact-page');
})->name('theme-contact-page');

Route::get('/theme-groceries-page', function() {
    return view('my-theme-page.groceries-page');
})->name('theme-groceries-page');

Route::get('/theme-household-page', function() {
    return view('my-theme-page.household-page');
})->name('theme-household-page');

Route::get('/theme-personalcare-page', function() {
    return view('my-theme-page.personalcare-page');
})->name('theme-personalcare-page');

Route::get('/theme-packagedfoods-page', function() {
    return view('my-theme-page.packagedfoods-page');
})->name('theme-packagedfoods-page');

Route::get('/theme-beverages-page', function() {
    return view('my-theme-page.beverages-page');
})->name('theme-beverages-page');

Route::get('/theme-gourmet-page', function() {
    return view('my-theme-page.gourmet-page');
})->name('theme-gourmet-page');

Route::get('/theme-offers-page', function() {
    return view('my-theme-page.offers-page');
})->name('theme-offers-page');


Route::get('/theme-login-page', function() {
    return view('my-theme-page.login-page');
})->name('theme-login-page');

Route::get('/theme-registered-page', function() {
    return view('my-theme-page.registered-page');
})->name('theme-registered-page');

Route::get('/theme-products-page', function() {
    return view('my-theme-page.products-page');
})->name('theme-products-page');

Route::get('/theme-single-page', function() {
    return view('my-theme-page.single-page');
})->name('theme-single-page');

Route::get('/theme-faq-page', function() {
    return view('my-theme-page.faq-page');
})->name('theme-faq-page');

Route::get('/theme-checkout-page', function() {
    return view('my-theme-page.checkout-page');
})->name('theme-checkout-page');

Route::get('/theme-short-codes-page', function() {
    return view('my-theme-page.short-codes-page');
})->name('theme-short-codes-page');

Route::get('/theme-about-page', function() {
    return view('my-theme-page.about-page');
})->name('theme-about-page');
