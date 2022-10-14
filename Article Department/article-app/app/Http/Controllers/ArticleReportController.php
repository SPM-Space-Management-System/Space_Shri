<?php

namespace App\Http\Controllers;

use domain\Facades\ArticleExpensesViewFacade;
use Illuminate\Http\Request;
use PDF;

class ArticleReportController extends Controller
{
    public function reportview() {
        $response['exps'] = ArticleExpensesViewFacade::all();
        return view('pages.expenses.articlereport')->with($response);
    }

    public function article_report_pdf() {
        $exps = ArticleExpensesViewFacade::all();
        $pdf = PDF::loadView('pages.expenses.aarticlereportpdf', ['exps' => $exps]);

        return $pdf->download('aarticlereportpdf.pdf');

    }

   
}