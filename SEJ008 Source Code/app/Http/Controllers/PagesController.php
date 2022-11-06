<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\missions;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
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



      public function indexmissionreport(){
      
        $date = Carbon::now();
        $currentMoth = $date->format('F');

        $monthlyAll = missions::whereMonth('created_at', Carbon::now()->month)->orderBy('costOfMission', 'desc')->first();

        $totalusers = user::whereMonth('created_at', Carbon::now()->month)->count('id');

        $totalPrice = missions::whereMonth('created_at', Carbon::now()->month)->sum('costOfMission');
        
        $labels = missions::whereMonth('created_at', Carbon::now()->month)->get('mission_id');
        $label = array();
        foreach ($labels as $l) {
        array_push($label,$l->mission_id);
        }

        $prices = missions::whereMonth('created_at', Carbon::now()->month)->get('costOfMission');
            $price = array();
            foreach ($prices as $p) {
            array_push($price,$p->costOfMission);
        }

        $monthlyTab = missions::whereMonth('created_at', Carbon::now()->month)->get();
        
        return view('pages/admin/MissionReport',['labels' => $label, 'prices' => $price])->with('currentMoth',$currentMoth)->with('monthlyAll',$monthlyAll)->with('totalPrice',$totalPrice)->with('monthlyTab',$monthlyTab)->with('totalusers',$totalusers );
    }


      public function indexeditall(){
      $post = missions::all();
      return view ('pages/admin/RemoveAll', compact('post'));
  }

  
  public function reomvepost($mission_id){
    $missionObj  = missions::find($mission_id)->delete();
    // $missionsALL = missions::orderBy('mission_id', 'DESC')->get(); 
    return response()->json(['status'=>'Mission Details Deleted Successfully!']);
    // return redirect()->back();

 
  }


  public function pdfgenerate(){
    $date = Carbon::now();
    $currentMoth = $date->format('F');

    $monthlyAll = missions::whereMonth('created_at', Carbon::now()->month)->orderBy('costOfMission', 'desc')->first();

    $totalPrice = missions::whereMonth('created_at', Carbon::now()->month)->sum('costOfMission');

    $totalusers = user::whereMonth('created_at', Carbon::now()->month)->count('id');
 
    $labels = missions::whereMonth('created_at', Carbon::now()->month)->get('mission_id');
    $label = array();
    foreach ($labels as $l) {
    array_push($label,$l->mission_id);
    }

    $prices = missions::whereMonth('created_at', Carbon::now()->month)->get('costOfMission');
        $price = array();
        foreach ($prices as $p) {
        array_push($price,$p->costOfMission);
    }

 
    $monthlyTab = missions::whereMonth('created_at', Carbon::now()->month)->get();



    if($monthlyAll->topic == null){
        return "<h1> The TOP MODEl DETAILS Not Exist. </h1>";
    }else{
    return view('pages/admin/PDF/MissionReport',['labels' => $label, 'prices' => $price])->with('currentMoth',$currentMoth)->with('monthlyAll',$monthlyAll)->with('totalPrice',$totalPrice)->with('monthlyTab',$monthlyTab)->with('totalusers',$totalusers );
    }
  }
 
}
