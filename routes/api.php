<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

    Route::get('/v1/user', [UserController::class, 'index']);
    Route::get('/v1/user/{id}', [UserController::class, 'show']);
    Route::post('/v1/user', [UserController::class, 'store']);
    Route::put('/v1/user/{id}', [UserController::class, 'update']);
    Route::delete('/v1/user/{id}', [UserController::class, 'destroy']);



