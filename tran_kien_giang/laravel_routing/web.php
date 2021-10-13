<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/name', function () {
    return ('Well Come To Giang Cá Khô From Ba Vì !!');
});

Route::get('/input-get', function () {
   return view('inputget');
});

Route::get('/user{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/demo-get', function (Request $request) {
    return view('outputget', ['data'=>$request->all()]);
});

Route::get('/input-post', function () {
   return view('inputpost');
});

Route::post('/demo-post', function (Request $request) {
    return view('outputpost', ['data'=>$request->all()]);
});
require __DIR__.'/auth.php';
    
