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
})->name('');

Route::get('/news', function () {
    return view('news');
});

Route::get('/press', function () {
    return view('press');
});

Route::get('/vvp', function () {
    return view('vvp');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/hujjat', function () {
    return view('hujjat');
});

Route::get('/ruyxat', function () {
    return view('ruyxat');
});

Route::get('/about', function () {
    return view('about');
});
