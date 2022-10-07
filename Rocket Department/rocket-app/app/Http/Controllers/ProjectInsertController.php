<?php

namespace App\Http\Controllers;

use App\Models\Project;
use domain\Facades\ProjectInsertFacade;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectFormRequest;

class ProjectInsertController extends Controller
{
    public function projectinsertview() {
        return view('pages.Project.projectinsert');
    }

    public function store(ProjectFormRequest $request) {
        try {
            $data = $request->validated();
            ProjectInsertFacade::store($request->all());
            return redirect()->back()->with('message','Project Details Added Successfully!');
        }
        catch (Exception $e) {
            return redirect()->back()->with('message','Something went wrong'.$e);
        }
        
    }

}
