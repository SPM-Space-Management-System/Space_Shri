<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\FunctionHomeController;
use App\Http\Controllers\RocketHomeController;
use App\Http\Controllers\RocketController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RocketInsertController;
use App\Http\Controllers\ProjectInsertController;
use App\Http\Controllers\RocketViewController;
use App\Http\Controllers\ProjectViewController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\RocketProjectController;
use App\Http\Controllers\pdfController;

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

//Main-Home
Route::get('/', [MainHomeController::class, "homeindex"])->name('home');

//Rocket-Function-Home
Route::get('/functionhome', [FunctionHomeController::class, "rocketfunction"])->name('functionhome');

//Rocekt-Home
Route::get('/rockethome', [RocketHomeController::class, "rocketindex"])->name('rockethome');

//Rocket-Cards
Route::get('/rocket', [RocketController::class, "rocketview"])->name('rocket');

//Rocket-Insert
Route::prefix('/rocketinsert')->group(function () {
    Route::get('/', [RocketInsertController::class, "rocketinsertview"])->name('rocketinsert');
    Route::post('/store', [RocketInsertController::class, "store"])->name('rocketinsert.store');
}); 

//Rocket-View
Route::prefix('/rocketview')->group(function () {
    Route::get('/', [RocketViewController::class, "rocketview"])->name('rocketview');
    Route::get('/edit', [RocketViewController::class, "edit"])->name('rocketview.edit');
    Route::post('/{task_id}/update', [RocketViewController::class, "update"])->name('rocketview.update');
    Route::get('/{task_id}/delete', [RocketViewController::class, "delete"])->name('rocketview.delete');
    Route::get('/{task_id}/done', [RocketViewController::class, "done"])->name('rocketview.done');
}); 

//Rocket_project-Home
Route::get('/projecthome', [RocketProjectController::class, "projectindex"])->name('projecthome');

//project-Home
Route::get('/project', [ProjectController::class, "projectview"])->name('project');

//Project-Insert
Route::prefix('/projectinsert')->group(function () {
    Route::get('/', [ProjectInsertController::class, "projectinsertview"])->name('projectinsert');
    Route::post('/store', [ProjectInsertController::class, "store"])->name('projectinsert.store');
});

//Project-View
Route::prefix('/projectview')->group(function () {
    Route::get('/', [ProjectViewController::class, "projectview"])->name('projectview');
    Route::get('/edit', [ProjectViewController::class, "edit"])->name('projectview.edit');
    Route::post('/{post_id}/update', [ProjectViewController::class, "update"])->name('projectview.update');
    Route::get('/{post_id}/delete', [ProjectViewController::class, "delete"])->name('projectview.delete');
}); 

//Report
Route::get('/report', [ReportController::class, "reportview"])->name('report');
Route::get('/export_report_pdf', [ReportController::class, "export_report_pdf"])->name('export_report_pdf');
Route::get('/pdf', [pdfController::class, "pdfManage"]);

//Contact Us
Route::get('/contact', [ContactUsController::class, "contactview"])->name('contact');
