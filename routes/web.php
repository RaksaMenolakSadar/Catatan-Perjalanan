<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// route view

Route::get('/', function () {
    return view('homepage', [
        'title' =>'homepage'
    ]);
});

Route::get('/catatan', function () {
    return view('catatan', [
        'title' =>'catatan'
    ]);
});

Route::get('/isi', function () {
    return view('isi', [
        'title' =>'isi data'
    ]);
});

// route register

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// route login

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// route logout

Route::post('/logout', [LoginController::class, 'logout']);