<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleHomeController;
use App\Http\Controllers\ArticleInsertController;
use App\Http\Controllers\ArticleListViewController;
use App\Http\Controllers\AddArticleExpensesController;
use App\Http\Controllers\ExpensesListViewController;
use App\Http\Controllers\ArticleReportController;
use App\Http\Controllers\ViewMoreArticleController;
use App\Http\Controllers\articlepdfController;

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
Route::get('/articlehome', [ArticleHomeController::class, "articleindex"])->name('articlehome');

Route::prefix('/articleinsert')->group(function () {
    Route::get('/', [ArticleInsertController::class, "articleinsertview"])->name('articleinsert');
    Route::post('/store', [ArticleInsertController::class, "store"])->name('articleinsert.store');
});


Route::get('/articleviewmore', [ViewMoreArticleController::class, "ViewMoreArticle"])->name('ViewMoreArticle');


Route::prefix('/articleview')->group(function () {
    Route::get('/', [ArticleListViewController::class, "articleview"])->name('articleview');
    Route::get('/edit', [ArticleListViewController::class, "edit"])->name('articleview.edit');
    Route::post('/{art_id}/update', [ArticleListViewController::class, "update"])->name('articleview.update');
    Route::get('/{art_id}/delete', [ArticleListViewController::class, "delete"])->name('articleview.delete');
    Route::get('/{art_id}/done', [ArticleListViewController::class, "done"])->name('articleview.done');
});
Route::prefix('/addexpenses')->group(function () {
    Route::get('/', [AddArticleExpensesController::class, "addexpensesview"])->name('addexpenses');
    Route::post('/store', [AddArticleExpensesController::class, "store"])->name('addexpenses.store');
});
Route::prefix('/expensesview')->group(function () {
    Route::get('/', [ExpensesListViewController::class, "expensesview"])->name('expensesview');
    Route::get('/edit', [ExpensesListViewController::class, "edit"])->name('expensesview.edit');
    Route::post('/{exp_id}/update', [ExpensesListViewController::class, "update"])->name('expensesview.update');
    Route::get('/{exp_id}/delete', [ExpensesListViewController::class, "delete"])->name('expensesview.delete');
  
});
Route::get('/articlereport', [ArticleReportController::class, "reportview"])->name('articlereport');
Route::get('/article_report_pdf', [ArticleReportController::class, "article_report_pdf"])->name('article_report_pdf');
Route::get('/articlepdf', [articlepdfController::class, "articlepdfManage"]);


