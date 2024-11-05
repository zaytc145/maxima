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
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::middleware('auth:sanctum')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::apiResource('tasks', \App\Http\Controllers\TaskController::class);
        Route::get('avatars', [\App\Http\Controllers\AvatarController::class, 'show']);
        Route::post('avatars', [\App\Http\Controllers\AvatarController::class, 'update']);
        Route::delete('avatars', [\App\Http\Controllers\AvatarController::class, 'destroy']);
    });
});
