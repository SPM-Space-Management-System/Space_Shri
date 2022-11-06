<?php

namespace App\Http\Controllers;

use domain\Facades\ProjectViewFacade;
use Illuminate\Http\Request;

class ProjectController extends ParentController
{
    public function projectview() {
        $response['posts'] = ProjectViewFacade::all();
        return view('pages.Project.project')->with($response);
    }
}
