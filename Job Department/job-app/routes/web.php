<?php
use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;
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


//Create_job
Route::get('/jobinsert', [InterfaceController::class, 'indexjobinsert'])->name('jobinsert');
//Save_job
Route::post('/savejob', [JobController::class, 'storejob'])->name('jobStore');
//RetView_Job
Route::get('/job',[InterfaceController::class,'indexjobsview'])->name('jobview');

//Job_deparment Home page
Route::get('/',[InterfaceController::class,'homeview'])->name('home');

//dashbord manager
Route::get('/dashboard',[InterfaceController::class,'adminview'])->name('');
//Applicant List
Route::get('/applicant',[InterfaceController::class,'applicantlist'])->name('applicantlist');;
// Job apply
Route::get('/apply',[InterfaceController::class,'jobApplyindex'])->name('Applicantinsert');
Route::get('/jobreport', [InterfaceController::class, 'indexjobreport'])->name('jobreport');
Route::post('/saveApplicant', [ApplicantController::class, 'saveApplicant'])->name('saveApplicant');

Route::delete('/applicant/{id}',[ApplicantController::class,'destroy']);
Route::delete('/jobs/{id}',[JobController::class,'destroy']);
//Route::get('/JobUpdate',[InterfaceController::class,'jobupdate']);

Route::get('/view',[InterfaceController::class,'jobdetailsVeiw']);
Route::get('/pdf',[InterfaceController::class,'pdfgenerate'])->name('pdf');

//admin edit jobs
Route::get('/JobUpdate/{id}', [InterfaceController::class, 'indexjobedit']);
//admin save-edit jobs
Route::post('/JobUpdate/{id}', [JobController::class, 'storeedtjobs'])->name('storeedtjobs');


//user read
//Route::get('/jobhomeu',[InterfaceController::class,'indexjobhomeuser'])->name('jhomeu');

Route::get('/jobdetails/{id}', [JobController::class, 'jobdetails_function'])->name('jobdetails');

//admin genarate report
//Route::get('/jobreport', [InterfaceController::class, 'indexjobreport'])->name('jobreport');
//pdf generate
//Route::get('admin/pdf/jobreport', [InterfaceController::class, 'pdfgenerate'])->name('jobpdf');
