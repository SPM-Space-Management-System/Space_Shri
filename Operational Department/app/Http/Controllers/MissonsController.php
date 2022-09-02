<?php

namespace App\Http\Controllers;
use App\Models\missions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MissonsController extends Controller
{
    //Store new missions Details.....
    public function storemissions(Request $request){
        //dd($request->all());

        //Create new object from missions model
        $missionObj = new missions;

        // 'user_id'=> auth()->user()->id,
        $missionObj->topic = $request->topic;
        $missionObj->description = $request->description;
        $missionObj->pub_date = $request->dateofadd;
        $missionObj->mission_image = $request->imageadd;
        $missionObj->costOfMission = $request->missioncost;
        $missionObj->save();
        return redirect()->back();

    }

}
