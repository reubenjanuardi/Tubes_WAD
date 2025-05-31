<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KeuanganApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/keuangan', [KeuanganApiController::class, 'index']);
Route::get('/keuangan/{id}', [KeuanganApiController::class, 'store']);
Route::get('/keuangan/{id}', [KeuanganApiController::class, 'show']);
Route::get('/keuangan/{id}', [KeuanganApiController::class, 'update']);
Route::get('/keuangan/{id}', [KeuanganApiController::class, 'destroy']);
