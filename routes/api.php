<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\KegiatanApiController;
use App\Http\Controllers\Api\PesertaApiController;
use App\Http\Controllers\Api\KeuanganApiController;
use App\Http\Controllers\Api\AnggotaApiController;

// Route untuk user dengan Sanctum authentication
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route untuk Kegiatan
Route::get('/kegiatan', [KegiatanApiController::class, 'index']);
Route::post('/kegiatan', [KegiatanApiController::class, 'store']);
Route::get('/kegiatan/{id}', [KegiatanApiController::class, 'show']);
Route::put('/kegiatan/{id}', [KegiatanApiController::class, 'update']);
Route::delete('/kegiatan/{id}', [KegiatanApiController::class, 'destroy']);

// Route untuk Peserta
Route::apiResource('peserta', PesertaApiController::class);

// Route untuk Keuangan
Route::apiResource('keuangan', KeuanganApiController::class);

// Route untuk Anggota
Route::get('/anggota', [AnggotaApiController::class, 'index']); 
Route::get('/anggota/{id}', [AnggotaApiController::class, 'show']); 
Route::post('/anggota', [AnggotaApiController::class, 'store']); 
Route::put('/anggota/{id}', [AnggotaApiController::class, 'update']); 
Route::delete('/anggota/{id}', [AnggotaApiController::class, 'destroy']); 
