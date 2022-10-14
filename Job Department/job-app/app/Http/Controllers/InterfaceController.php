<?php

namespace App\Http\Controllers;

use App\Models\applicants;
use App\Models\jobs;
use Carbon\Carbon;
use Illuminate\Http\Request;


class InterfaceController extends Controller
{
    public function indexjobinsert()
    {
        return view('Pages/Job-Department/admin/JobInsert');
    }



    public function indexjobsview()
    {

        $data = jobs::all();
        return view('Pages/Job-Department/home/JobViewUser', compact('data'));
    }

    public function applicantlist ()
    {

        $data = applicants::all();
        return view('Pages/Job-Department/admin/applicantslistview', compact('data'));
    }

    public function homeview(Request $request)
    {
        if($request->has('searchposta')){
            $searchposta = $request->get('searchposta');
            $data = jobs::where('jobtitle','like','%'.$searchposta.'%')->orderBy('id', 'DESC')->get();
        }else{
            $data = jobs::orderBy('id', 'DESC')->get();
        }
    return view('Pages/Job-Department/home/home',compact('data'));

    }
    public function applicantlistview()
    {

        $data = jobs::all();
        return view('Pages/Job-Department/admin/applicantslistview', compact('data'));
    }
    public function adminview()
    {


        return view('Pages/Job-Department/admin/manageJobs');
    }
    public function jobApplyindex()
    {
        return view('Pages/Job-Department/admin/jobApply');
    }

    // public function jobupdate()
    // {

    //     $data = jobs::all();
    //     return view('Pages/admin/JobUpdate', compact('data'));
    // }

    //admin edit missions
    public function indexjobedit($id){
        $job = jobs::findorFail($id);
        return view('Pages/Job-Department/admin/JobUpdate',compact('job'));
      }

    public function jobdetailsVeiw()
    {
        $date = Carbon::now();
       $currentMoth = $date->format('F');

        $data = jobs::all();
        return view('Pages/Job-Department/home/jobdetails', compact('data'));
    }

    public function indexjobreport()
    {


        $date = Carbon::now();
        $currentMoth = $date->format('F');

        $totaljobs = jobs::whereMonth('created_at', Carbon::now()->month)->count('jobtitle');
        $totalVacancies = jobs::whereMonth('created_at', Carbon::now()->month)->sum('NOV');

        // $label = ['Jan','feb','march','apr'];
        // $price = [23,50,45,12];

        $labels = jobs::whereMonth('created_at', Carbon::now()->month)->get('jobtitle');
            $label = array();
            foreach ($labels as $l) {
            array_push($label,$l->jobtitle);
            }

            $prices = jobs::whereMonth('created_at', Carbon::now()->month)->get('NOV');
                $price = array();
                foreach ($prices as $p) {
                array_push($price,$p->NOV);
            }
         $monthlyAllJobs = jobs::whereMonth('created_at', Carbon::now()->month)->get();
// dd($monthlyAllJobs);
            // $monthlyAllJobs = jobs::whereMonth('created_at', Carbon::now()->month)->count('jobtitle');

        return view('pages/Job-Department/admin/jobReport',['labels' => $label, 'prices' => $price])->with('currentMoth',$currentMoth)->with('totaljobs',$totaljobs)->with('totalVacancies',$totalVacancies)->with('monthlyAllJobs',$monthlyAllJobs);


    }
     public function pdfgenerate(){

        $date = Carbon::now();
        $currentMoth = $date->format('F');

        $totaljobs = jobs::whereMonth('created_at', Carbon::now()->month)->count('jobtitle');
        $totalVacancies = jobs::whereMonth('created_at', Carbon::now()->month)->sum('NOV');

        // $label = ['Jan','feb','march','apr'];
        // $price = [23,50,45,12];

        $labels = jobs::whereMonth('created_at', Carbon::now()->month)->get('jobtitle');
            $label = array();
            foreach ($labels as $l) {
            array_push($label,$l->jobtitle);
            }

            $prices = jobs::whereMonth('created_at', Carbon::now()->month)->get('NOV');
                $price = array();
                foreach ($prices as $p) {
                array_push($price,$p->NOV);
            }
         $monthlyAllJobs = jobs::whereMonth('created_at', Carbon::now()->month)->get();
// dd($monthlyAllJobs);
            // $monthlyAllJobs = jobs::whereMonth('created_at', Carbon::now()->month)->count('jobtitle');

        return view('pages/Job-Department/admin/pdfGenarate',['labels' => $label, 'prices' => $price])->with('currentMoth',$currentMoth)->with('totaljobs',$totaljobs)->with('totalVacancies',$totalVacancies)->with('monthlyAllJobs',$monthlyAllJobs);


        // return view('Pages/admin/pdfGenarate');

     }

    //     $date = Carbon::now();
    //     $currentMoth = $date->format('F');

    //     $monthlyAll = jobs::whereMonth('created_at', Carbon::now()->month)->orderBy('costOfMission', 'desc')->first();

    //     $totaljobs = jobs::whereMonth('created_at', Carbon::now()->month)->sum('');

    //     $labels = jobs::whereMonth('created_at', Carbon::now()->month)->get('id');
    //     $label = array();
    //     foreach ($labels as $l) {
    //     array_push($label,$l->id);
    //     }

    //     $prices = jobs::whereMonth('created_at', Carbon::now()->month)->get('costOfMission');
    //         $price = array();
    //         foreach ($prices as $p) {
    //         array_push($price,$p->costOfMission);
    //     }

    //     $monthlyTab = jobs::whereMonth('created_at', Carbon::now()->month)->get();
    //     return view('pages/admin/MissionReport',['labels' => $label, 'prices' => $price])->with('currentMoth',$currentMoth)->with('monthlyAll',$monthlyAll)->with('totalPrice',$totalPrice)->with('monthlyTab',$monthlyTab);
    // }

    // public function pdfgenerate(){
    //     $date = Carbon::now();
    //     $currentMoth = $date->format('F');

    //     $monthlyAll = jobs::whereMonth('created_at', Carbon::now()->month)->orderBy('costOfMission', 'desc')->first();

    //     $totaljobs= jobs::whereMonth('created_at', Carbon::now()->month)->sum('costOfMission');

    //     $labels = jobs::whereMonth('created_at', Carbon::now()->month)->get('mission_id');
    //     $label = array();
    //     foreach ($labels as $l) {
    //     array_push($label,$l->mission_id);
    //     }

    //     $prices = jobs::whereMonth('created_at', Carbon::now()->month)->get('costOfMission');
    //         $price = array();
    //         foreach ($prices as $p) {
    //         array_push($price,$p->costOfMission);
    //     }


    //     $monthlyTab = jobs::whereMonth('created_at', Carbon::now()->month)->get();

    //     if($monthlyAll->topic == null){
    //         return "<h1> The TOP MODEl DETAILS Not Exist. </h1>";
    //     }else{
    //     return view('pages/admin/PDF/jobReport',['labels' => $label, 'prices' => $price])->with('currentMoth',$currentMoth)->with('monthlyAll',$monthlyAll)->with('totalPrice',$totalPrice)->with('monthlyTab',$monthlyTab);
    //     }
    //   }


}
