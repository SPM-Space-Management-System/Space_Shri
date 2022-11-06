<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MissonsController;


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


use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;


use App\Http\Controllers\ArticleHomeController;
use App\Http\Controllers\ArticleInsertController;
use App\Http\Controllers\ArticleListViewController;
use App\Http\Controllers\AddArticleExpensesController;
use App\Http\Controllers\ExpensesListViewController;
use App\Http\Controllers\ArticleReportController;
use App\Http\Controllers\ViewMoreArticleController;
use App\Http\Controllers\articlepdfController;
use App\Http\Controllers\ArtFunctionHomeController;

Route::get('', function () {
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








//Main-Home
// Route::get('/', [MainHomeController::class, "homeindex"])->name('home');

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









//Create_job
Route::get('/jobinsert', [InterfaceController::class, 'indexjobinsert'])->name('jobinsert');
//Save_job
Route::post('/savejob', [JobController::class, 'storejob'])->name('jobStore');
//RetView_Job
Route::get('/job',[InterfaceController::class,'indexjobsview'])->name('jobview');

//Job_deparment Home page
 Route::get('/jobhome',[InterfaceController::class,'homeview'])->name('home');

//dashbord manager
Route::get('/jobdashboard',[InterfaceController::class,'adminview'])->name('jobdashboard');
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

Route::get('/articlefunctionhome', [ArtFunctionHomeController::class, "articlefunction"])->name('articlefunctionhome');
