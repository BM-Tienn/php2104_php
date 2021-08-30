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



require __DIR__.'/auth.php';

Route::get('/param/{id}/param2/{id2?}', function (Request $request, $id, $id2 = 200) {
    dd($request->all());
    return view('welcome', ['id' => $id, 'id2' => $id2]);
});

Route::get('/myview', function () {
    return view('myview');
})->name('myview');

Route::post('test', function(Request $request) {
    dd($request->all());
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/myview', function () {
        return view('myview');
    })->name('myview');
});

Route::name('admin.')->prefix('admin')->middleware(['admin'])->group(function () {

    Route::get('products', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('users', function () {
        return view('myview');
    })->name('myview');
});

Route::get('/home-page', function() {
    if (View::exists('index')) {
        return view('index');
    }

    return view('home-page');
})->name('home-page');

Route::get('/child-page', function() {
    return view('my-directory.child-page');
})->name('child-page');
