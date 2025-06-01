<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('auth');

    Route::resource('kegiatan', KegiatanController::class)->parameters(['kegiatan' => 'kegiatan']);
    Route::resource('peserta', PesertaController::class)->parameters(['peserta' => 'peserta']);
    Route::resource('inventaris', InventarisController::class)->parameters(['inventaris' => 'inventaris']);
    Route::resource('anggota', AnggotaController::class)->parameters(['anggota' => 'anggota']);
    Route::resource('keuangan', KeuanganController::class)->parameters(['keuangan' => 'keuangan']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
