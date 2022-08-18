<?php

namespace App\Http\Controllers;

use App\Models\Project;
use domain\Facades\ProjectInsertFacade;
use Illuminate\Http\Request;

class ProjectInsertController extends Controller
{
    public function projectinsertview() {
        return view('pages.Project.projectinsert');
    }

    public function store(Request $request) {
        ProjectInsertFacade::store($request->all());
        return redirect()->back();
    }

}
