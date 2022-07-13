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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/short_dashboard', [App\Http\Controllers\ShortUrlController::class, 'shortDashboard'])->name('short_dashboard');
Route::post('/short', [App\Http\Controllers\ShortUrlController::class, 'short'])->name('short.url');
Route::get('/result', [App\Http\Controllers\ShortUrlController::class, 'result'])->name('result');
