<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicantRequest;
use App\Models\applicants;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function saveApplicant(ApplicantRequest $request)
    {
        $appObj = new applicants();

        $cvName = time() . "." . $request->cvadd->getClientOriginalName();
        $request->cvadd->move(public_path('cv'), $cvName);




        $appObj->jobtitle = $request->jobtitle;
        $appObj->DOA = $request->DOA;
        $appObj->email = $request->email;
        $appObj->address = $request->address;
        $appObj->name = $request->name;
        $appObj->tp_no = $request->tp_no;
        $appObj->NIC = $request->NIC;
        //$appObj->cv_id = $request->cvadd;
        $appObj->cv_id = $cvName;

        //  $appObj->save();

        // dd($appObj);


         try {
            $data = $request->validated();
            $appObj->save();
            return redirect()->back()->with('message','job added Successfully');
          } catch (\Exception $ex) {
            return redirect()->back()->with('message','somthing went wrong'.$ex);
          }
    }public function destroy($id)
    {
        $appObj = applicants::find($id);
        $appObj->delete();
        return redirect('/applicant');
    }
}
