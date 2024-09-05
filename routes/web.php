<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\LemburController;
Route::get('/', function () {
    return view('welcome');
});
 Route::get('pegawai',[PegawaiController::class,'index']);

 Route::get('golongan',[GolonganController::class,'index']);

 Route::get('gaji',[GajiController::class,'index']);

 Route::get('lembur',[LemburController::class,'index']);

 Route::get('/pegawai/tambah',[PegawaiController::class,'tambah']);
 Route::post ('/pegawai/storetambah',[PegawaiController::class,'store']);

 Route::get('/golongan/tambah',[GolonganController::class,'tambah']);
 Route::post('/golongan/storetambah',[GolonganController::class,'store']);

 Route::get('/gaji/tambah',[GajiController::class,'tambah']);
 Route::post('/gaji/storetambah',[GajiController::class,'store']);

 Route::get( '/lembur/tambah',[LemburController::class,'tambah']);
 Route::post('/lembur/storetambah',[LemburController::class,'store']);

 Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit']);
 Route::post('/pegawai/update',[PegawaiController::class,'storeupdate']);

 Route::get('/golongan/edit/{id}',[GolonganController::class,'edit']);
 Route::post('/golongan/update',[GolonganController::class,'storeupdate']);

 Route::get('/gaji/edit/{id}',[GajiController::class,'edit']);
 Route::post('/gaji/update',[GajiController::class,'storeupdate']);

 Route::get('/lembur/edit/{id}',[LemburController::class,'edit']);
 Route::post('/lembur/update',[LemburController::class,'storeupdate']);

 Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus']);
 Route::get('/golongan/hapus/{id}',[GolonganController::class,'hapus']);
 Route::get('/gaji/hapus/{id}',[GajiController::class,'hapus']);
 Route::get('/lembur/hapus/{id}',[LemburController::class,'hapus']);


 Route::get('home', function () {
    return view('home');
});