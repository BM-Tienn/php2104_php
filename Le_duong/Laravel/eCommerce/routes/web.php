<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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

// Route home 
Route::get('/home',function () {
    if(View::exists('home')) {
        return view('home');
    }
    return view('pages.404');
});

// Route product page
Route::get('/product',function () {
    if(View::exists('pages.product')) {
        return view('pages.product');
    }
});

// Route contact page
Route::get('/contact',function () {
    if ((!View::exists('pages.contact')) && (!View::exists('pages.coming'))) {
        return view('pages.404');  
    }
    else if (View::exists('pages.contact')) {
        return view('pages.contact');
    }
    return view('pages.coming');
    
});

// Route about page
Route::get('/about',function () {
    if ((!View::exists('pages.about')) && (!View::exists('pages.coming'))) {
        return view('pages.404');  
    }
    else if (View::exists('pages.about')) {
        return view('pages.about');
    }
    return view('pages.coming');
});
require __DIR__.'/auth.php';
