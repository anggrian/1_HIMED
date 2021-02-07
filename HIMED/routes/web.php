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

//Route::resource('tentang', PageController::class);
Route::get('layanan', [PageController::class, 'layanan'])->name('service');
// 

use App\Http\Controllers\FeatureController;

Route::resource('fitur', FeatureController::class);
// Route::get('/register', [AuthController::class, 'getRegister'])->middleware('guest')->name('register');
Route::post('/fitur', [FeatureController::class, 'store'])->name('fitur');
Route::delete('fitur/{fitur}', [FeatureController::class, 'destroy'])->name('delete_fitur');
Route::patch('fitur/{fitur}', [FeatureController::class, 'update']);


use App\Http\Controllers\PackageController;

Route::resource('paket', PackageController::class);
Route::post('paket', [PackageController::class, 'store'])->name('paket');
// 

use App\Http\Controllers\AccountController;

Route::resource('akun', AccountController::class);
// Route::get('akun', [PageController::class, 'layanan'])->name('service');



// tentang
use App\Http\Controllers\AboutController;

Route::post('tentang', [AboutController::class, 'store'])->name('tentang');
Route::get('tentang', [AboutController::class, 'index'])->name('tentang');
Route::delete('tentang/{tentang}', [AboutController::class, 'destroy'])->name('delete');



// layanan
use App\Http\Controllers\ServiceController;

Route::post('layanan', [ServiceController::class, 'store'])->name('layanan');
Route::get('layanan', [ServiceController::class, 'index'])->name('layanan');
Route::delete('layanan/{layanan}', [ServiceController::class, 'destroy'])->name('delete');
