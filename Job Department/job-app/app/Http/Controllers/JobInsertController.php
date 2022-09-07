<?php

namespace App\Http\Controllers;
use App\Models\job;
use App\Http\Requests\JobRequest;
use Illuminate\Http\Request;


class JobInsertController extends Controller
{

 public function indexhome(Request $request)
{
    return view('home');
}

public function indexjobupload(JobRequest $request)
{

    $jobObj = new job;

    // $imageName = time() . "." . $request->imageadd->getClientOriginalExtension();
    // $request->imageadd->move(public_path('jobimage'), $imageName);

    // $imageName = rand() . "." . $request->imageadd->getClientOriginalExtension();
    // $request->imageadd->move(public_path('jobimage'));

    // 'job_id'=> auth()->user()->id,
    $jobObj->jobtitle = $request->jobtitle;
    $jobObj->P_date = $request->P_date;
    $jobObj->Summary = $request->Summary;
    $jobObj->Requirements = $request->Requirements;
    $jobObj->image_id = $request->imageadd;
    $jobObj->NOV = $request->NOV;
    $jobObj->C_date = $request->C_date;
    $jobObj->Duties = $request->Duties;
    $jobObj->Req_Doc = $request->Req_Doc;
    $jobObj->done = $request->done;
     $jobObj->save();
 //dd($jobObj);
try{
    $data=$request->validate();
    job::create($data);

    return view('home')->with('message','Student Added Successfully');
}
catch(\Exception $ex){

    return view('jobUpload')->with('message','Somthing went Wrong'.$ex);
}



}


}
