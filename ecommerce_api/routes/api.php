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

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout',  [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
});


Route::prefix('/customers')->middleware('auth:sanctum')->group(function(){
    Route::get('',        [CustomerApiController::class, 'index']);
    Route::post('',       [CustomerApiController::class, 'store']);
    Route::get('{id}',    [CustomerApiController::class, 'show']);
    Route::put('{id}',    [CustomerApiController::class, 'update']);
    Route::delete('{id}', [CustomerApiController::class, 'destroy']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
