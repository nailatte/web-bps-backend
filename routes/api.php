<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublikasiController;
use Illuminate\Support\Facades\DB;

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

Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['message' => 'Database connected ✅']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () { 
     
    Route::get('/user', function (Request $request){ 
        return $request->user(); 
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/publikasi', [PublikasiController::class, 'index']);

    Route::post('/publikasi', [PublikasiController::class, 'store']);

    Route::get('/publikasi/{id}', [PublikasiController::class, 'detail']);

    Route::put('/publikasi/{id}', [PublikasiController::class, 'edit']);

    Route::delete('/publikasi/{id}', [PublikasiController::class, 'hapus']);
}); 