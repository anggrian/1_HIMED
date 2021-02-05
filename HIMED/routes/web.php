<?php

use App\Http\Controllers\HomeController;
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
//     return view('Frontend.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('page');

// Route::resource('/', HomeController::class);

// Route For Login & Register
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'getLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->middleware('guest');
Route::get('/register', [AuthController::class, 'getRegister'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/home', [AuthController::class, 'index'])->middleware('auth')->name('home');
// 

use App\Http\Controllers\PageController;

Route::resource('tentang', PageController::class);
Route::get('layanan', [PageController::class, 'layanan'])->name('service');
// 

use App\Http\Controllers\FeatureController;

Route::resource('fitur', FeatureController::class);
// Route::get('/register', [AuthController::class, 'getRegister'])->middleware('guest')->name('register');
Route::post('/fitur', [FeatureController::class, 'store'])->name('fitur');

// 

use App\Http\Controllers\PackageController;

Route::resource('paket', PackageController::class);
// 

use App\Http\Controllers\AccountController;

Route::resource('akun', AccountController::class);
// Route::get('akun', [PageController::class, 'layanan'])->name('service');
