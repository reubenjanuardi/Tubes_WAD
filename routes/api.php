<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\KegiatanApiController;
use App\Http\Controllers\Api\PesertaApiController;
use App\Http\Controllers\Api\KeuanganApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/kegiatan', [KegiatanApiController::class, 'index']);
Route::post('/kegiatan', [KegiatanApiController::class, 'store']);
Route::get('/kegiatan/{id}', [KegiatanApiController::class, 'show']);
Route::put('/kegiatan/{id}', [KegiatanApiController::class, 'update']);
Route::delete('/kegiatan/{id}', [KegiatanApiController::class, 'destroy']);

Route::apiResource('peserta', PesertaApiController::class);
Route::apiResource('keuangan', KeuanganApiController::class);
