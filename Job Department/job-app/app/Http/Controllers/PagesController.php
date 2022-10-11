<?php

namespace App\Http\Controllers;

use App\Models\applicants;
use App\Models\jobs;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function indexjobinsert()
    {
        return view('Pages/admin/JobInsert');
    }



    public function indexjobsview()
    {

        $data = jobs::all();
        return view('Pages/home/JobViewUser', compact('data'));
    }

    public function applicantlist ()
    {

        $data = applicants::all();
        return view('Pages/admin/applicantslistview', compact('data'));
    }

    public function homeview(Request $request)
    {
        if($request->has('searchposta')){
            $searchposta = $request->get('searchposta');
            $data = jobs::where('jobtitle','like','%'.$searchposta.'%')->orderBy('id', 'DESC')->get();
        }else{
            $data = jobs::orderBy('id', 'DESC')->get();
        }
    return view('Pages/home/home',compact('data'));

    }
    public function applicantlistview()
    {

        $data = jobs::all();
        return view('Pages/admin/applicantslistview', compact('data'));
    }
    public function adminview()
    {


        return view('Pages/admin/manageJobs');
    }
    public function jobApplyindex()
    {
        return view('Pages/admin/jobApply');
    }

    // public function jobupdate()
    // {

    //     $data = jobs::all();
    //     return view('Pages/admin/JobUpdate', compact('data'));
    // }

    //admin edit missions
    public function indexjobedit($id){
        $job = jobs::findorFail($id);
        return view('Pages/admin/JobUpdate',compact('job'));
      }

    public function jobdetailsVeiw()
    {

        $data = jobs::all();
        return view('Pages/home/jobdetails', compact('data'));
    }
     //read and search
    //  public function indexjobhomeuser(Request $request){
    //     if($request->has('searchposta')){
    //         $searchposta = $request->get('searchposta');
    //         $jobALL = jobs::where('jobtitle','like','%'.$searchposta.'%')->orderBy('id', 'DESC')->get();
    //     }else{
    //         $jobALL = jobs::orderBy('id', 'DESC')->get();
    //     }
    // return view('pages/home/home',compact('jobALL'));
    // }
}
