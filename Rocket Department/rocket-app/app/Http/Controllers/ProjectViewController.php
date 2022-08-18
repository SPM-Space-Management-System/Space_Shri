<?php

namespace App\Http\Controllers;

use App\Models\Project;
use domain\Facades\ProjectViewFacade;
use Illuminate\Http\Request;

class ProjectViewController extends Controller
{   

    public function projectview() {
        $response['posts'] = ProjectViewFacade::all();
        return view('pages.Project.projectlistview')->with($response);
    } 

    public function delete($post_id) {
        ProjectViewFacade::delete($post_id);
        return redirect()->back();
    } 

    public function edit(Request $request) { 

        $response['post'] = ProjectViewFacade::get($request['post_id']);
        return view('pages.Project.projectdetailedit')->with($response);

    } 

    public function update(Request $request, $post_id) {
        
        ProjectViewFacade::update($request->all(), $post_id);
        return redirect()->back();
    }

}