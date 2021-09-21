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
})->name('bosh');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/press', function () {
    return view('press');
})->name('press');

Route::get('/vvp', function () {
    return view('vvp');
})->name('vvp');

Route::get('/report', function () {
    return view('report');
})->name('report');

Route::get('/hujjat', function () {
    return view('hujjat')->name('hujjat');
});

Route::get('/ruyxat', function () {
    return view('ruyxat')->name('org');
});

Route::get('/about', function () {
    return view('about')->name('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
