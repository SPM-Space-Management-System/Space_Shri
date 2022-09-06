<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleHomeController;
use App\Http\Controllers\ArticleInsertController;
use App\Http\Controllers\ArticleUpdateController;
use App\Http\Controllers\ArticleListViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [ArticleHomeController::class, "articleindex"])->name('articlehome');

Route::prefix('/articleinsert')->group(function () {
    Route::get('/', [ArticleInsertController::class, "articleinsertview"])->name('articleinsert');
    Route::post('/store', [ArticleInsertController::class, "store"])->name('articleinsert.store');
});


