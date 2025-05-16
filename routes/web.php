<?php

use App\Http\Controllers\Admin\AuthorsController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\offersController;
use App\Http\Controllers\Admin\TagsController;
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
    Route::get('/', [DashboardController::class, 'index']);

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user_index');
        Route::get('/create_user', [UserController::class, 'create'])->name('user_create');
        Route::post('/store_user', [UserController::class, 'store_user'])->name('user_store');
        Route::delete('/delete_user/{id}', [UserController::class, 'delete'])->name('user_delete');
        Route::get('/edit_user/{id}', [UserController::class, 'edit'])->name('user_edit');
        Route::put('/update_user/{id}', [UserController::class, 'update'])->name('user_update');
        Route::get('/show_user/{id}', [UserController::class, 'show'])->name('user_show');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoriesController::class, 'index'])->name('category_index');
        Route::get('/create_category', [CategoriesController::class, 'create'])->name('category_create');
        Route::post('/store_category', [CategoriesController::class, 'store_category'])->name('category_store');
        Route::delete('/delete_category/{id}', [CategoriesController::class, 'delete'])->name('category_delete');
        Route::get('/edit_category/{id}', [CategoriesController::class, 'edit'])->name('category_edit');
        Route::put('/update_category/{id}', [CategoriesController::class, 'update'])->name('category_update');
        Route::get('/show_category/{id}', [CategoriesController::class, 'show'])->name('category_show');
    });

    Route::prefix('tags')->group(function () {
        Route::get('/', [TagsController::class, 'index'])->name('tag_index');
        Route::get('/create_tag', [TagsController::class, 'create'])->name('tag_create');
        Route::post('/store_tag', [TagsController::class, 'store_tag'])->name('tag_store');
        Route::delete('/delete_tag/{id}', [TagsController::class, 'delete'])->name('tag_delete');
        Route::get('/edit_tag/{id}', [TagsController::class, 'edit'])->name('tag_edit');
        Route::put('/update_tag/{id}', [TagsController::class, 'update'])->name('tag_update');
        Route::get('/show_tag/{id}', [TagsController::class, 'show'])->name('tag_show');
    });

    Route::prefix('authors')->group(function () {
        Route::get('/', [AuthorsController::class, 'index'])->name('author_index');
        Route::get('/create_author', [AuthorsController::class, 'create'])->name('author_create');
        Route::post('/store_author', [AuthorsController::class, 'store_author'])->name('author_store');
        Route::delete('/delete_author/{id}', [AuthorsController::class, 'delete'])->name('author_delete');
        Route::get('/edit_author/{id}', [AuthorsController::class, 'edit'])->name('author_edit');
        Route::put('/update_author/{id}', [AuthorsController::class, 'update'])->name('author_update');
        Route::get('/show_author/{id}', [AuthorsController::class, 'show'])->name('author_show');
    });

    Route::prefix('books')->group(function () {
        Route::get('/', [BooksController::class, 'index'])->name('book_index');
        Route::get('/create_book', [BooksController::class, 'create'])->name('book_create');
        Route::post('/store_book', [BooksController::class, 'store_book'])->name('book_store');
        Route::delete('/delete_book/{id}', [BooksController::class, 'delete'])->name('book_delete');
        Route::get('/edit_book/{id}', [BooksController::class, 'edit'])->name('book_edit');
        Route::put('/update_book/{id}', [BooksController::class, 'update'])->name('book_update');
        Route::get('/show_book/{id}', [BooksController::class, 'show'])->name('book_show');
    });


    Route::prefix('offers')->group(function () {
        Route::get('/', [offersController::class, 'index'])->name('offer_index');
        Route::get('/create_offer', [offersController::class, 'create'])->name('offer_create');
        Route::post('/store_offer', [offersController::class, 'store_offer'])->name('offer_store');
        Route::delete('/delete_offer/{id}', [offersController::class, 'delete'])->name('offer_delete');
        Route::get('/edit_offer/{id}', [offersController::class, 'edit'])->name('offer_edit');
        Route::put('/update_offer/{id}', [offersController::class, 'update'])->name('offer_update');
        Route::get('/show_offer/{id}', [offersController::class, 'show'])->name('offer_show');
    });
});
