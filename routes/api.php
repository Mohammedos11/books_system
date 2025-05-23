<?php

use App\Http\Controllers\Api\UserApiController;
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


Route::prefix('users')->group(function () {
    Route::get('/', [UserApiController::class, 'index']);
    Route::post('/store_users', [UserApiController::class, 'store']);
    Route::get('/{id}', [UserApiController::class, 'show']);
    Route::delete('delete_user/{id}', [UserApiController::class, 'delete']);
});
