<?php

namespace App\Http\Controllers;

use domain\Facades\ProjectViewFacade;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function pdfManage() {
        $response['posts'] = ProjectViewFacade::all();
        return view('pages.Report.report_pdf')->with($response);
    }
}
