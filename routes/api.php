<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PostulerController;

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



Route::post('/login' , [AuthController::class , 'signin'])->name("login");
Route::post('/register' , [AuthController::class , 'register'])->name("register");

Route::middleware('auth:sanctum')->group(function(){
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::apiResource('offers', OfferController::class);

    Route::post('/postuler', [PostulerController::class, 'store']);
    
    Route::get('/postuler', [PostulerController::class, 'index']);
});