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

Route::get('/', [HomeController::class, 'index'])->name('page');

// Login & Register
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'getLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->middleware('guest');
Route::get('/register', [AuthController::class, 'getRegister'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/home', [AuthController::class, 'index'])->middleware('auth')->name('home');


use App\Http\Controllers\FeatureController;

Route::resource('fitur', FeatureController::class);
Route::post('/fitur', [FeatureController::class, 'store'])->name('fitur');
Route::delete('fitur/{fitur}', [FeatureController::class, 'destroy'])->name('delete_fitur');
Route::patch('fitur/{fitur}', [FeatureController::class, 'update']);


use App\Http\Controllers\PackageController;

Route::resource('paket', PackageController::class);
Route::post('paket', [PackageController::class, 'store'])->name('paket');


use App\Http\Controllers\AccountController;

Route::resource('akun', AccountController::class);
Route::post('akun', [AccountController::class, 'account'])->name('akun');


// tentang
use App\Http\Controllers\AboutController;

Route::post('tentang', [AboutController::class, 'store'])->name('tentang');
Route::get('tentang', [AboutController::class, 'index'])->name('tentang');
Route::delete('tentang/{tentang}', [AboutController::class, 'destroy'])->name('delete');



// layanan
use App\Http\Controllers\ServiceController;

Route::get('layanan', [ServiceController::class, 'index'])->name('layanan');
Route::post('layanan', [ServiceController::class, 'store'])->name('layanan');
Route::delete('layanan/{layanan}', [ServiceController::class, 'destroy'])->name('delete');




// profil
use App\Http\Controllers\ProfileController;

Route::get('profil', [ProfileController::class, 'index'])->name('profil');
