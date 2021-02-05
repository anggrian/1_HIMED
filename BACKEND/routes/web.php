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
    return view('web/index');
});


// Route For Login & Register
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'getLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->middleware('guest');

Route::get('/register', [AuthController::class, 'getRegister'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/home', [AuthController::class, 'index'])->middleware('auth')->name('home');


use App\Http\Controllers\PageController;

Route::resource('about', PageController::class);


use App\Http\Controllers\AccountController;

Route::resource('account', AccountController::class);


use App\Http\Controllers\PackageController;

Route::resource('package', PackageController::class);


use App\Http\Controllers\FeatureController;

Route::resource('feature', FeatureController::class);
