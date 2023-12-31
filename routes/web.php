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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('theme.index');
});

Route::get('/contact-us', function () {
    return view('theme.contact-us');
});

Route::get('/blog', function () {
    return view('theme.blog');
});

Route::get('/about-us', function () {
    return view('theme.about-us');
});

Route::get('/product', function () {
    return view('theme.product');
});

Route::get('/admin', function () {
    return view('backend.index');
});


Route::get('/admin/login', function () {
    return view('backend.login');
});

Route::get('/admin/register', function () {
    return view('backend.register');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
