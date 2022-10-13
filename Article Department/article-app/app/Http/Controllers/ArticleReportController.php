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

   
}