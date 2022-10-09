<?php

namespace App\Http\Controllers;

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

    public function homeview()
    {

        $data = jobs::all();
        return view('Pages/home/home', compact('data'));
    }
    public function applicantlistview()
    {

        $data = jobs::all();
        return view('Pages/admin/applicantslistview', compact('data'));
    }
    public function jobApplyindex()
    {

        $data = jobs::all();
        return view('Pages/admin/jobApply', compact('data'));
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
}
