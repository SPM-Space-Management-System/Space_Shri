<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobInsertController;
use App\Http\Controllers\JoblistviewController;
use App\Http\Controllers\JobDeleteController;

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
 Route::get('/', [JobInsertController::class, 'indexhome'])->name('home');


//insert job new post
Route::get('/addjob', [JobInsertController::class, 'indexjobupload'])->name('jobstore');

//show job list
Route::get('/joblist', [JoblistviewController::class, 'show']);

Route::get('/delete',[JobDeleteController::class,'destroy']);
