<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\missions;
class PagesController extends Controller
{
    public function indexmissionshome(){

        $missionsALL = missions::orderBy('mission_id', 'DESC')->get();
        return view('operations/MissionsHome',compact('missionsALL'));
    }

    public function indexmissionsinsert(){
        return view('operations/MissionsInsert');
    }

    public function indexmissionhomeuser(Request $request){
        if($request->has('searchpostu')){
            $searchpostu = $request->get('searchpostu');
            $missionsALL = missions::where('topic','like','%'.$searchpostu.'%')->orderBy('mission_id', 'DESC')->get();

        }else{
            $missionsALL = missions::orderBy('mission_id', 'DESC')->get();
        }
       
        return view('pages/home/UserMissionHome',compact('missionsALL'));
    }
    // public function searchpostu(Request $request ){
    //     $searchpostu = $request->get('searchpostu');
    //     $searchPU = missions::where('topic',$searchpostu)->get();
  
    //   return redirect()->back()->with('searchPU',$searchPU);

}
