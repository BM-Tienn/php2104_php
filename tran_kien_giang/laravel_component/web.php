<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

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

Route::get('/name', function () {
    return ('Well Come To Giang Cá Khô From Ba Vì !!');
});

Route::get('/input-get', function () {
   return view('inputget');
});

Route::get('/user{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/demoget', function (Request $request) {
    return view('outputget',['data'=>$request->all()]);
});

Route::get('/input-post', function () {
   return view('inputpost');
});

Route::post('/demopost', function (Request $request) {
    return view('outputpost',['data'=>$request->all()]);
});

// Route::get('/viewname', function () {
//    return view('myviews.viewname', ['name' => 'Giang !!! ']);
// });

Route::get('/viewdob', function () {
   return view('myviews.viewblade', ['name' => 'Giang !!!']);
});

Route::get('/viewblade', function () {
   return view('myviews.viewblade', $array=['Giang','Hi']);
});

// Route::get('/view-exists', function () {
//     if (View::exists('myviews.viewname')) {

//         echo '<script language="javascript">';
//         echo 'alert("View exists")';  //not showing an alert box.
//         echo '</script>';
//     }
//     else {
//         return view('inputpost');
//     }
// });
// Route::get('/view-composer', function ($view) {
//    return view('myviews.viewname', ['name' => 'Giang !!! ']);
// });
Route::get('/view-component', function () {
   return view('myviews.viewname');
});
Route::get('/home', function () {
   return view('myviews.home');
});
Route::get('/about', function () {
   return view('myviews.about');
});
Route::get('/contact', function () {
   return view('myviews.contact');
});
require __DIR__.'/auth.php';
    