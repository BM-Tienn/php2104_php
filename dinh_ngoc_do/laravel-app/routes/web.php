<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

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

Route::get('register1', function() {
    return view('registerform');
});

Route::get('/info', function (Request $request) {
    return view('registerinfo', ['data' => $request->all()]);
});

Route::post('/info', function (Request $request) {
    return view('registerinfo', ['data' => $request->all()]);
});

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
Route::middleware(['admin'])->group(function () {
    
    Route::get('/products', function () {
        return view('dashbroad');
    })->name('dashbroad');

    Route::get('/users', function () {
        return view('users');
    })->name('users');
});

//Prefix
Route::prefix('admin.')->group(function () {

    Route::get('/users', function () {
        return view('users');
        //Url like: http://127.0.0.1:8000/admin/users , admin is a prefix in front of users
    })->name('users');
});



