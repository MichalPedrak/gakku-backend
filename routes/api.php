<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::middleware('auth:sanctum')->group(function (){
    Route::get('/user', [\App\Http\Controllers\AuthController::class, 'user']);
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::get('/cards', [\App\Http\Controllers\CardsController::class, 'index']);
    Route::post('/cards/store/', [\App\Http\Controllers\CardsController::class, 'store']);
    Route::patch('/cards/update/{id}', [\App\Http\Controllers\CardsController::class, 'update']);
    Route::delete('/cards/destroy/{id}', [\App\Http\Controllers\CardsController::class, 'destroy']);
});





Route::get('/users', [\App\Http\Controllers\AuthController::class, 'users']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

