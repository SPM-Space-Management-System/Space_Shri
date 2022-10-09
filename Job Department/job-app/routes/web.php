<?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

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



Route::get('/jobinsert', [PagesController::class, 'indexjobinsert'])->name('jobinsert');

Route::post('/savejob', [JobController::class, 'storejob'])->name('jobStore');

Route::get('/',[PagesController::class,'indexjobsview'])->name('jobview');

Route::get('/home',[PagesController::class,'homeview'])->name('home');

Route::get('/applicant',[PagesController::class,'applicantlistview'])->name('Applicant_list');

Route::post('/apply',[PagesController::class,'jobApplyindex'])->name('ApplicantStore');

Route::delete('/jobs/{id}',[JobController::class,'destroy']);
//Route::get('/JobUpdate',[PagesController::class,'jobupdate']);

Route::get('/view',[PagesController::class,'jobdetailsVeiw']);


//admin edit jobs
Route::get('/JobUpdate/{id}', [PagesController::class, 'indexjobedit']);
//admin save-edit jobs
Route::post('/JobUpdate/{id}', [JobController::class, 'storeedtjobs'])->name('storeedtjobs');



Route::get('/jobdetails/{id}', [JobController::class, 'jobdetails_function'])->name('jobdetails');
