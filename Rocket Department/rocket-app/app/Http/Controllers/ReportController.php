<?php

namespace App\Http\Controllers;

use domain\Facades\ProjectViewFacade;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportview() {
        $response['posts'] = ProjectViewFacade::all();
        return view('pages.Report.report')->with($response);
    }
}
