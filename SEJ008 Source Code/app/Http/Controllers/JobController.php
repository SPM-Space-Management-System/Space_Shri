<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobFormRequest;
use App\Models\jobs;
use App\Http\Requests\JobForUpdatemRequest;
use Illuminate\Http\Request;

class JobController extends ParentController
{
    public function storejob(JobFormRequest $request)
    {
        $jobObj = new jobs;

        $imageName = time() . "." . $request->imageadd->getClientOriginalName();
        $request->imageadd->move(public_path('thumbnails'), $imageName);

        $jobObj->jobtitle = $request->jobtitle;
        $jobObj->P_date = $request->P_date;
        $jobObj->Summary = $request->Summary;
        $jobObj->Requirements = $request->Requirements;
        $jobObj->image_id = $imageName;
        $jobObj->NOV = $request->NOV;
        $jobObj->C_date = $request->C_date;
        $jobObj->Duties = $request->Duties;
        $jobObj->Req_Doc = $request->Req_Doc;
        $jobObj->done = $request->done;
        //  $jobObj->save();

        //dd($jobObj);

        try {
            $data = $request->validated();
            $jobObj->save();
            return redirect()->back()->with('message', 'job added Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }
    }
    public function destroy($id)
    {
        $job = jobs::find($id);
        $job->delete();
        return redirect('/job');
    }

    public function edit(jobs $job)
    {
        return view('edit', compact('jobs'));
    }

    //  Edit Jobs Deails ...
    public function storeedtjobs(JobForUpdatemRequest $request, $id)
    {
        $jobObj  = jobs::find($id);

        if ($request->imageadd == true) {
            $imageName = time() . "." . $request->imageadd->getClientOriginalName();
            $request->imageadd->move(public_path('thumbnails'), $imageName);
            $jobObj->image_id  = $imageName;
        }


        $jobObj->jobtitle = $request->jobtitle;
        $jobObj->P_date = $request->P_date;
        $jobObj->Summary = $request->Summary;
        $jobObj->Requirements = $request->Requirements;
        $jobObj->image_id = $imageName;
        $jobObj->NOV = $request->NOV;
        $jobObj->C_date = $request->C_date;
        $jobObj->Duties = $request->Duties;
        $jobObj->Req_Doc = $request->Req_Doc;
        $jobObj->done = $request->done;
        try {
            $data = $request->validated();
            $jobObj->save();
            return redirect()->back()->with('message', 'Post Update Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }
    }





    public function jobdetails_function($id)
    {
        $post = jobs::findorFail($id);
        return view('Pages/Job-Department/home/jobdetails', compact('post'));
    }
}
