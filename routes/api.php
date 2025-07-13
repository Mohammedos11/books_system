<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);


Route::prefix('users')->group(function () {
    Route::get('/', [UserApiController::class, 'index']);
    Route::post('/store_users', [UserApiController::class, 'store']);
    Route::get('/{id}', [UserApiController::class, 'show']);
    Route::delete('delete_user/{id}', [UserApiController::class, 'delete']);
});
