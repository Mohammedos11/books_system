<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user_index');
        Route::get('/create_user', [UserController::class, 'create'])->name('user_create');
        Route::post('/store_user', [UserController::class, 'store_user'])->name('user_store');
        Route::delete('/delete_user/{id}', [UserController::class, 'delete'])->name('user_delete');
        Route::get('/edit_user/{id}', [UserController::class, 'edit'])->name('user_edit');
        Route::put('/update_user/{id}', [UserController::class, 'update'])->name('user_update');
        Route::get('/show_user/{id}', [UserController::class, 'show'])->name('user_show');
    });

    Route::prefix('tags')->group(function () {});
});
