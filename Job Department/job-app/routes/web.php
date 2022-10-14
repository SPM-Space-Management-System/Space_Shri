<?php
use App\Http\Controllers\PagesController;
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
Route::get('/jobinsert', [PagesController::class, 'indexjobinsert'])->name('jobinsert');
//Save_job
Route::post('/savejob', [JobController::class, 'storejob'])->name('jobStore');
//RetView_Job
Route::get('/job',[PagesController::class,'indexjobsview'])->name('jobview');

//Job_deparment Home page
Route::get('/',[PagesController::class,'homeview'])->name('home');

//dashbord manager
Route::get('/dashboard',[PagesController::class,'adminview'])->name('');
//Applicant List
Route::get('/applicant',[PagesController::class,'applicantlist'])->name('applicantlist');;
// Job apply
Route::get('/apply',[PagesController::class,'jobApplyindex'])->name('Applicantinsert');
Route::get('/jobreport', [PagesController::class, 'indexjobreport'])->name('jobreport');
Route::post('/saveApplicant', [ApplicantController::class, 'saveApplicant'])->name('saveApplicant');

Route::delete('/applicant/{id}',[ApplicantController::class,'destroy']);
Route::delete('/jobs/{id}',[JobController::class,'destroy']);
//Route::get('/JobUpdate',[PagesController::class,'jobupdate']);

Route::get('/view',[PagesController::class,'jobdetailsVeiw']);
Route::get('/pdf',[PagesController::class,'pdfgenerate'])->name('pdf');

//admin edit jobs
Route::get('/JobUpdate/{id}', [PagesController::class, 'indexjobedit']);
//admin save-edit jobs
Route::post('/JobUpdate/{id}', [JobController::class, 'storeedtjobs'])->name('storeedtjobs');


//user read
//Route::get('/jobhomeu',[PagesController::class,'indexjobhomeuser'])->name('jhomeu');

Route::get('/jobdetails/{id}', [JobController::class, 'jobdetails_function'])->name('jobdetails');

//admin genarate report
//Route::get('/jobreport', [PagesController::class, 'indexjobreport'])->name('jobreport');
//pdf generate
//Route::get('admin/pdf/jobreport', [PagesController::class, 'pdfgenerate'])->name('jobpdf');
