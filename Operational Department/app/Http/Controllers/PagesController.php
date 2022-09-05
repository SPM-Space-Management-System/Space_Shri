<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\missions;
class PagesController extends Controller
{
    //admin read and search
    public function indexmissionshome(Request $request){
        if($request->has('searchposta')){
            $searchposta = $request->get('searchposta');
            $missionsALL = missions::where('topic','like','%'.$searchposta.'%')->orderBy('mission_id', 'DESC')->get();
        }else{
            $missionsALL = missions::orderBy('mission_id', 'DESC')->get();
        }
        
        return view('operations/MissionsHome',compact('missionsALL'));
    }



    //admin insert a post
    public function indexmissionsinsert(){
        return view('operations/MissionsInsert');
    }




    //search and read for users
    public function indexmissionhomeuser(Request $request){
        if($request->has('searchpostu')){
            $searchpostu = $request->get('searchpostu');
            $missionsALL = missions::where('topic','like','%'.$searchpostu.'%')->orderBy('mission_id', 'DESC')->get();
        }else{
            $missionsALL = missions::orderBy('mission_id', 'DESC')->get();
        } 
        return view('pages/home/UserMissionHome',compact('missionsALL'));
    }
 
}
