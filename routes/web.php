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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/show', [App\Http\Controllers\HomeController::class, 'show'])->name('home.show');

Route::get('/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blogs.create');
Route::post('/create', [App\Http\Controllers\BlogController::class, 'store'])->name('blogs.store');


