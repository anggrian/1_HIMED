<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Haspan

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/isi-post/{slug}', [BlogController::class, 'isi_blog'])->name('blog.isi');
Route::get('/list-post','BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}','BlogController@list_category')->name('blog.category');
Route::get('/cari','BlogController@cari')->name('blog.cari');

Route::group(['middleware' => 'auth'], function(){
	Route::resource('/category', CategoryController::class);
	Route::resource('/tag', TagController::class);

	Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
	Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
	Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
	Route::resource('/post', PostController::class);
});



// profil
use App\Http\Controllers\ProfileController;

Route::get('profil', [ProfileController::class, 'index'])->name('profil');
