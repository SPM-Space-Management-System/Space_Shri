<?php

namespace App\Http\Controllers;
use App\Http\Requests\MissionFormRequest;
use App\Models\missions;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MissonsController extends ParentController
{
    //Store new missions Details.....
    public function storemissions(MissionFormRequest $request){
        //dd($request->all());

        //Create new object from missions model
        $missionObj = new missions;

        $imageName = time() . "." . $request->imageadd->getClientOriginalName();
        $request->imageadd->move(public_path('thumbnails'), $imageName);
        
        $missionObj->user_id=auth()->user()->id;
        $missionObj->editor_name=auth()->user()->name;
        $missionObj->topic = $request->topic;
        $missionObj->description = $request->description;
        $missionObj->pub_date = $request->dateofadd;
        $missionObj->mission_image = $imageName;
        $missionObj->costOfMission = $request->missioncost;
        
    try {
        $data = $request->validated();
        $missionObj->save();
        return redirect()->back()->with('message','Post added Successfully');
      } catch (Exception $ex) {
        return redirect()->back()->with('message','somthing went wrong'.$ex);
      }
    }



    // 
    public function showMissions_function($mission_id){
        $post = missions::findorFail($mission_id);
        return view('operations/MissionShow', compact('post'));
    }



}
