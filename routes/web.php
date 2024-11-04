<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Route untuk halaman awal (landing page)
Route::get('/', function () {
    return view('welcome');
});

// Resource routes untuk Buku
Route::prefix('buku')->group(function() {
    Route::get('/', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/tambah-buku', [BukuController::class, 'tambah'])->name('tambahbuku');
    Route::post('/store', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
    Route::post('/update/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::get('/hapus/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
});

// Resource routes untuk Golongan
Route::prefix('golongan')->group(function() {
    Route::get('/', [GolonganController::class, 'index'])->name('golongan.index');
    Route::get('/tambah', [GolonganController::class, 'create'])->name('golongan.create');
    Route::post('/store', [GolonganController::class, 'store'])->name('golongan.store');
    Route::get('/edit/{id}', [GolonganController::class, 'edit'])->name('golongan.edit');
    Route::post('/update/{id}', [GolonganController::class, 'update'])->name('golongan.update');
    Route::get('/hapus/{id}', [GolonganController::class, 'destroy'])->name('golongan.destroy');
});

// Resource routes untuk Gaji
Route::prefix('gaji')->group(function() {
    Route::get('/', [GajiController::class, 'index'])->name('gaji.index');
    Route::get('/tambah', [GajiController::class, 'create'])->name('gaji.create');
    Route::post('/store', [GajiController::class, 'store'])->name('gaji.store');
    Route::get('/edit/{id}', [GajiController::class, 'edit'])->name('gaji.edit');
    Route::post('/update/{id}', [GajiController::class, 'update'])->name('gaji.update');
    Route::get('/hapus/{id}', [GajiController::class, 'destroy'])->name('gaji.destroy');
});

// Resource routes untuk Lembur
Route::prefix('lembur')->group(function() {
    Route::get('/', [LemburController::class, 'index'])->name('lembur.index');
    Route::get('/tambah', [LemburController::class, 'create'])->name('lembur.create');
    Route::post('/store', [LemburController::class, 'store'])->name('lembur.store');
    Route::get('/edit/{id}', [LemburController::class, 'edit'])->name('lembur.edit');
    Route::post('/update/{id}', [LemburController::class, 'update'])->name('lembur.update');
    Route::get('/hapus/{id}', [LemburController::class, 'destroy'])->name('lembur.destroy');
});

// Route untuk login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk login admin


// Route untuk register
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
});


// Route untuk home
Route::get('home', function () {
    return view('home');
})->name('home');
