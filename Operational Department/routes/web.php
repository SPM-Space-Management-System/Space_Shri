<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MissonsController;
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

Route::get('/', function () {
    return view('operations.welcome');
});
//
Route::get('/missionshome',[PagesController::class,'indexmissionshome'])->name('mhome');

Route::get('/missionsinsert', [PagesController::class, 'indexmissionsinsert'])->name('minsert');

//insert mission new post
Route::post('/savemission', [MissonsController::class, 'storemissions'])->name('postStore');
