<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;    // home
use App\Http\Controllers\AuthController;    // Login & Register
use App\Http\Controllers\ProfileController; // Profile	| profil
use App\Http\Controllers\ServiceController; // Service	| layanan
use App\Http\Controllers\AboutController;    // About	| tentang
use App\Http\Controllers\AccountController;    // Account	| akun
use App\Http\Controllers\PackageController;    // Package	| paket
use App\Http\Controllers\FeatureController;    // Feature	| fitur

//home
Route::get('/', [HomeController::class, 'index'])->name('page');
Route::get('index', [HomeController::class, 'index'])->name('index');
// Login & Register
Route::get('/login', [AuthController::class, 'getLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->middleware('guest');
Route::get('/register', [AuthController::class, 'getRegister'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/home', [AuthController::class, 'index'])->middleware('auth')->name('home');

Route::group(['middleware' => 'auth'], function () {
    //fitur
    Route::resource('fitur', FeatureController::class);
    Route::post('/fitur', [FeatureController::class, 'store'])->name('fitur');
    Route::delete('fitur/{fitur}', [FeatureController::class, 'destroy'])->name('delete_fitur');
    // Route::patch('fitur/{fitur}', [FeatureController::class, 'update']);
    Route::get('fitur/edit/{id}', [FeatureController::class, 'edit'])->name('fitur.edit');
    Route::put('fitur/update/{id}', [FeatureController::class, 'update'])->name('fitur.update');
    Route::get('frontend/{main_title}', [FeatureController::class, 'frontend_fitur'])->name('frontend.fitur');
    //paket
    // Route::resource('paket', PackageController::class);
    // Route::post('paket', [PackageController::class, 'store'])->name('paket');
    Route::get('paket', [PackageController::class, 'index'])->name('paket');
    Route::post('paket', [PackageController::class, 'store'])->name('paket');
    Route::delete('paket/{paket}', [PackageController::class, 'destroy'])->name('paket.delete');
    Route::get('paket/edit/{id}', [PackageController::class, 'edit'])->name('paket.edit');
    Route::put('paket/update/{id}', [PackageController::class, 'update'])->name('paket.update');


    // tentang
    Route::post('tentang', [AboutController::class, 'store'])->name('tentang');
    Route::get('tentang', [AboutController::class, 'index'])->name('tentang');
    Route::delete('tentang/{tentang}', [AboutController::class, 'destroy'])->name('tentang.delete');
    Route::get('tentang/edit{id}', [AboutController::class, 'edit'])->name('tentang.edit');
    Route::put('tentang/update{id}', [AboutController::class, 'update'])->name('tentang.update');

    // layanan
    Route::get('layanan', [ServiceController::class, 'index'])->name('layanan');
    Route::post('layanan', [ServiceController::class, 'store'])->name('layanan');
    Route::delete('layanan/{layanan}', [ServiceController::class, 'destroy'])->name('layanan.delete');
    Route::get('layanan/edit/{id}', [ServiceController::class, 'edit'])->name('layanan.edit');
    Route::put('layanan/update/{id}', [ServiceController::class, 'update'])->name('layanan.update');

    // profil
    Route::get('profil', [ProfileController::class, 'index'])->name('profil');
    Route::get('profil/lengkapi_data', [ProfileController::class, 'lengkapi_data'])->name('lengkapi_data');
    Route::post('profil/create', [ProfileController::class, 'store'])->name('profil.create');
    Route::get('akun', [ProfileController::class, 'profil_akun'])->name('akun');
});
// FRONTEND
Route::get('About-Us', [AboutController::class, 'frontend_about'])->name('tentang.frontend');
Route::get('layanan/frontend', [ServiceController::class, 'frontend_service'])->name('layanan.frontend');




// Haspan
// // Auth::routes();

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/isi-post/{slug}', [BlogController::class, 'isi_blog'])->name('blog.isi');
Route::get('/list-post', 'BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}', 'BlogController@list_category')->name('blog.category');
Route::get('/cari', 'BlogController@cari')->name('blog.cari');
Route::resource('/category', CategoryController::class);

Route::group(['middleware' => 'auth'], function () {
    //Route::resource('/category', CategoryController::class);
    Route::resource('/tag', TagController::class);

    Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
    Route::resource('/post', PostController::class);
});
