<?php

namespace App\Http\Controllers;

use domain\Facades\ProjectViewFacade;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function reportview() {
        $response['posts'] = ProjectViewFacade::all();
        return view('pages.Report.report')->with($response);
    }

    public function export_report_pdf() {
        $posts = ProjectViewFacade::all();
        $pdf = PDF::loadView('pages.Report.report_pdf', ['posts' => $posts]);

        return $pdf->download('report_pdf.pdf');

    }
}
