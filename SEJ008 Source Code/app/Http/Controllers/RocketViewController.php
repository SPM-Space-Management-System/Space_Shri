<?php

namespace App\Http\Controllers;

use App\Models\Rocket;
use domain\Facades\RocketViewFacade;
use Illuminate\Http\Request;

class RocketViewController extends ParentController
{   

    public function rocketview() {
        $response['tasks'] = RocketViewFacade::all();
        return view('pages.rocket.rocketlistview')->with($response);
    } 

    public function delete($task_id) {
        RocketViewFacade::delete($task_id);
        return response()->json(['status'=>'Rocket Details Deleted Successfully!']);
        //return redirect()->back()->with('message','Details Deleted Successfully!');
    } 

    public function done($task_id) {
        RocketViewFacade::done($task_id);
        return redirect()->back();
    } 

    public function edit(Request $request) { 

        $response['task'] = RocketViewFacade::get($request['task_id']);
        return view('pages.rocket.rocketdetailedit')->with($response);

    } 

    public function update(Request $request, $task_id) {
        
        RocketViewFacade::update($request->all(), $task_id);
        return redirect()->back()->with('message','Details Updated Successfully!');
    }

}
