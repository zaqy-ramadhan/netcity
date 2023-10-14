<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ----------------------   USER  -----------------------------

//homepage sebagai guest
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/', [UserController::class, 'indexUser'])->name('user.home');
});

Route::middleware(['auth'])->group(function () {
    // ===================================
    // Routes User :
    // ===================================

    // Halaman Home User
    Route::get('/', [UserController::class, 'indexUser'])->name('user.home');
    //Halaman Modul User
    Route::get('/usermodul/{id}',[UserController::class,'modul'])->name('user.modul');
    //Halaman Kategori User
    Route::get('/userkategori/{id}',[UserController::class,'kategori'])->name('user.kategori');
    // Navbar Kategiri
    Route::get('/kategorinav',[UserController::class,'kategorinavbarindex'])->name('user.navbar');
    //Logout User
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //ticketing
    Route::get('/ticketing',[PembayaranController::class,'create'])->name('user.ticketing');
    Route::get('/ticketing/{pembayaran:id}',[PembayaranController::class,'show'])->name('user.pembayaran');

    Route::resource('pembayarans', PembayaranController::class)
        ->only(['store', 'index', 'update']);

    Route::get('/pembayaranadmin', [PembayaranController::class, 'indexadmin'])->name('pembayaran.indexadmin');
    Route::get('/pembayaranadmin/{pembayaran}', [PembayaranController::class, 'edit'])->name('pembayaran.editadmin');
    // Route::post('/pembayaranadmin', [PembayaranController::class, 'update'])->name('pembayarans.update');


    // ===================================
    // Routes Admin :
    // ===================================

    //Home Admin
    Route::get('/admin', [UserController::class, 'indexAdmin'])->name('admin.home');
    //kategori Admin
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

    //CREATE Admin
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/create', [KategoriController::class, 'store'])->name('kategori.store');

    //UPDATE Admin
    Route::get('/kategori/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');


    // MDOUL Admin
    Route::get('/modul', [ModulController::class, 'index'])->name('modul.index');
    Route::get('/modul/create', [ModulController::class, 'create'])->name('modul.create');
    Route::post('/modul/store', [ModulController::class, 'store'])->name('modul.store');
    Route::get('/modul/{id}',[ModulController::class,'edit'])->name('modul.edit');
    Route::put('/modul/{id}',[ModulController::class,'update'])->name('modul.update');
    Route::delete('/modul/{id}',[ModulController::class,'destroy'])->name('modul.destroy');
    //CREATE Admin
});
Route::get('/', [UserController::class, 'indexUser'])->name('user.home');

Route::get('/tes', function () {
    return view('layouts.appTest');
});


