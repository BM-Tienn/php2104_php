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

//route group
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function () {
        return view('test');
    });
    Route::get('/add', function () {
        return 'Add product';
    });
    Route::get('/edit', function () {
        return 'Edit product';
    });
    Route::get('/delete', function () {
        return 'Delete product';
    });
});
