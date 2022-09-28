<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\missions;
use Illuminate\Support\Facades\Auth;
class PagesController extends ParentController
{
    //admin read and search
    public function indexmissionshome(Request $request){
        if($request->has('searchposta')){
            $searchposta = $request->get('searchposta');
            $missionsALL = missions::where('topic','like','%'.$searchposta.'%')->orderBy('mission_id', 'DESC')->get();
        }else{
            $missionsALL = missions::orderBy('mission_id', 'DESC')->get();
        }
    return view('pages/Admin/MissionsHome',compact('missionsALL'));
    }



    //admin insert a post
    public function indexmissionsinsert(){
        return view('pages/Admin/MissionsInsert');
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







    public function indexdashboard(){
        $role = Auth::user()->role;

        if($role == '1'){
            return view('pages/admin/AdminDashboard');
        }else{
            return view('pages/home/UserDashboard');
        }
    }




    //admin edit missions
    public function indexmissionsedit($mission_id){
        $post = missions::findorFail($mission_id);
        return view('pages/admin/MissionsEdit',compact('post'));
      }




      //admin genarate report
      public function indexmissionreport(){
        return view('pages/admin/MissionReport');
      }


      public function indexeditall(){
      $post = missions::all();
      return view ('pages/admin/RemoveAll', compact('post'));
  }
 
}
