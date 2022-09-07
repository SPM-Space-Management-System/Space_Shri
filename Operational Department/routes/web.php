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
    return view('pages/Home.welcome');
});
//
Route::get('/missionshomea',[PagesController::class,'indexmissionshome'])->name('mhome');

// Admin side..................................................................................................................................
//insert new post for admin
Route::get('/missionsinsert', [PagesController::class, 'indexmissionsinsert'])->name('minsert');
Route::post('/savemission', [MissonsController::class, 'storemissions'])->name('postStore');
//admin mission show more
Route::get('/missionShowa/{mission_id}', [MissonsController::class, 'adminshowMissions_function'])->name('adminoperationsShow');    
//admin dashboard
Route::get('/admindashboard', [PagesController::class, 'indexadmindashboard'])->name('admindashboard'); 
   


//User side...................................................................................................................................
//user read
Route::get('/missionshomeu',[PagesController::class,'indexmissionhomeuser'])->name('mhomeu');
//user dashboard
Route::get('/userdashboard', [PagesController::class, 'indexuserdashboard'])->name('userdashboard'); 
//user mission show more
Route::get('/missionShowu/{mission_id}', [MissonsController::class, 'usershowMissions_function'])->name('useroperationsShow'); 

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Auth::routes();
Route::get('/dashboard', [PagesController::class, 'indexdashboard'])->name('dashboard'); 
