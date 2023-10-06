<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return 'welcome to Laravel';
});

// Root Folder
Route::get('/users', function () {
    // return view('welcome');
    return [
        "Fuad", "Muftie"
    ];
});

// Route Parameter
// Argument dari end-point-nya
Route::get('/users/{id}', function () {
    $id = request() -> route("id");
    return "Hello user id kamu adalah $id";
});

// Query Parameter
Route::get('/customers', function () {
    $search = request() -> query("search");
    return "Search: $search";
});

// Dengan Controller
Route::prefix('/api/products')->group(function(){
    Route::get('/',        [ProductController::class, 'index']);
    Route::post('/',       [ProductController::class, 'create']);
    Route::put('/{id}',    [ProductController::class, 'update']);
    Route::delete('/{id}', [ProductController::class, 'delete']);
});

Route::post('/api/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
});