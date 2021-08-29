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


Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
});

Route::get('/view', function() {
    return view('view');
});

Route::get('/test', function (Request $request) {
    return view('view', ['request'=> $request->all()]);
});

Route::get('/view2', function () {
    if (View::exists('emails.customer')) {
        return view('view2', ['name' => 'Tien']);
    }

    if (View::exists('emails.customer') == false) {
        return view('view2', ['name' => 'James']);
    }

    
});

use Illuminate\Support\Facades\View;

Route::get('/views', function () {
    return view('view2')
                ->with('name', 'Victoria')
                ->with('occupation', 'Astronaut');
});

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