<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MissonsController;




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
//admin edit post
Route::get('/missionedit/{mission_id}', [PagesController::class, 'indexmissionsedit'])->name('missionedit');
//admin save-edit post
Route::post('/saveeditmission/{mission_id}', [MissonsController::class, 'storeeditmissions'])->name('editPostStore');
//admin delete missions
Route::post('/deletemission/{mission_id}', [MissonsController::class, 'deletemissions'])->name('deletePost');
//admin genarate report
Route::get('/missionreport', [PagesController::class, 'indexmissionreport'])->name('missionreport');
//admin view update/delete all(ALL)
Route::get('/admin/editallposts', [PagesController::class, 'indexeditall'])->name('editallposts');
//admin view update(ALL)
Route::get('/admin/update/{mission_id}', [PagesController::class, 'updatepost'])->name('updatePost');
//admin view delete(ALL)
Route::get('/admin/remove/{mission_id}', [PagesController::class, 'reomvepost'])->name('removePost');
//pdf generate
Route::get('admin/pdf/missionreport', [PagesController::class, 'pdfgenerate'])->name('missionpdf');






   


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
