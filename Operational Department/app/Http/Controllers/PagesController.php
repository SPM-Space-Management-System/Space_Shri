<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\missions;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        //$post = missions::all();
    
    //     $label = ['Shirts', 'T-Shirt', 'Pants', 'Coat', 'Kurta', 'Pajama'];

    //    $price = ['10', '5', '100', '90', '50', '30'];

      
        $date = Carbon::now();
        $currentMoth = $date->format('F');

       
        $monthlyAll = missions::whereMonth('created_at', Carbon::now()->month)->whereMonth('created_at', Carbon::now()->month)->orderBy('costOfMission', 'desc')->first();
        // $user = DB::table('missions')->whereMonth('created_at', Carbon::now()->month)->orderBy('costOfMission', 'desc')->first();
        // $topic = missions::select('topic')->whereMonth('created_at', Carbon::now()->month)->max('costOfMission');
        // $maxPrice = missions::where('topic', $topic)->max('costOfMission');
        // $maxPrice = missions::where('topic')->max('costOfMission');
        
        $totalPrice = missions::whereMonth('created_at', Carbon::now()->month)->sum('costOfMission');

        // $label = missions::find('mission_id')whereMonth('created_at', Carbon::now()->month);
        // $price = missions::whereMonth('created_at', Carbon::now()->month)->('costOfMission');
      
       
        // $monthlyAll = missions::whereMonth('created_at', Carbon::now()->month);
        // $label =  $monthlyAll->('mission_id');
        
        $labels = missions::all('mission_id');
        // $labels = missionsall('mission_id');
        $label = array();
    foreach ($labels as $l) {
        array_push($label,$l->mission_id);
    }

    $prices = missions::all('costOfMission');
    // $prices = missions::all('costOfMission');
        $price = array();
    foreach ($prices as $p) {
        array_push($price,$p->costOfMission);
        // $price =   $monthlyAll->('costOfMission');
    }
        //   dd($totalPrice,  $currentMoth, $maxPrice,  $label, $price);
           return view('pages/admin/MissionReport',['labels' => $label, 'prices' => $price])->with('currentMoth',$currentMoth)->with('monthlyAll',$monthlyAll)->with('totalPrice',$totalPrice);
    }


      public function indexeditall(){
      $post = missions::all();
      return view ('pages/admin/RemoveAll', compact('post'));
  }

  
  public function reomvepost($mission_id){
    $missionObj  = missions::find($mission_id)->delete();
    // $missionsALL = missions::orderBy('mission_id', 'DESC')->get(); 
    return redirect()->back();
  }
 
}
