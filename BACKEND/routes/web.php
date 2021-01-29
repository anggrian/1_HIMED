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
// Route bawaan 
Route::get('/', function () {
    return view('login');
});

// Route Auth
use App\Http\Controllers\AuthController;
// Route For Login
Route::get('/login', [AuthController::class, 'getLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->middleware('guest');

Route::get('/register', [AuthController::class, 'getRegister'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->middleware('guest');
// Route for Landing page first
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

use App\Http\Controllers\PageController;

Route::get('/home', [PageController::class, 'index'])->middleware('auth')->name('home');

Route::resource('halaman', PageController::class);
// Route Halaman

// Route Fitur
use App\Http\Controllers\FiturController;

Route::resource('fitur', FiturController::class);

// Route Akun
use App\Http\Controllers\AkunController;

Route::resource('akun', AkunController::class);
// Route::resource('account', AkunController::class);
// Route::get('/account', [AkunController::class, 'account']);
