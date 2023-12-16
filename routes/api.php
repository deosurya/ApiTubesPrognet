<?php

use App\Http\Controllers\AgamaApiController;
use App\Http\Controllers\DetilkrsApiController;
use App\Http\Controllers\KrsApiController;
use App\Http\Controllers\MahasiswaApiController;
use App\Http\Controllers\MatakuliahApiController;
use App\Http\Controllers\AuthenthicationApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/agama', AgamaApiController::class)->middleware(['auth:sanctum']);
Route::apiResource('/mahasiswa', MahasiswaApiController::class)->middleware(['auth:sanctum']);
Route::apiResource('/krs', KrsApiController::class)->middleware(['auth:sanctum']);
Route::apiResource('/matakuliah', MatakuliahApiController::class)->middleware(['auth:sanctum']);
Route::apiResource('/detilkrs', DetilkrsApiController::class)->middleware(['auth:sanctum']);

Route::post('/login', [AuthenthicationApiController::class, 'login']);
Route::get('/logout', [AuthenthicationApiController::class, 'logout'])->middleware(['auth:sanctum']);
