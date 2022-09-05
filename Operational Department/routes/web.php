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
Route::get('/missionshomea',[PagesController::class,'indexmissionshome'])->name('mhome');

// Admin side..................................................................................................................................
//insert new post for admin
Route::get('/missionsinsert', [PagesController::class, 'indexmissionsinsert'])->name('minsert');
Route::post('/savemission', [MissonsController::class, 'storemissions'])->name('postStore');
//view more for admin
Route::get('/missionShow/{mission_id}', [MissonsController::class, 'showMissions_function'])->name('operationsShow');    
   


//User side...................................................................................................................................
//user read
Route::get('/missionhomeU',[PagesController::class,'indexmissionhomeuser'])->name('mhomeu');