<?php

namespace App\Http\Controllers;

use domain\Facades\ArticleExpensesViewFacade;
use Illuminate\Http\Request;

class articlePdfController extends Controller
{
    public function articlepdfManage() {
        $response['exps'] = ArticleExpensesViewFacade::all();
        return view('pages.expenses.aarticlereportpdf')->with($response);
    }
}
