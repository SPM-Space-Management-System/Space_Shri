<?php

namespace App\Http\Controllers;
use App\Models\job;

use Illuminate\Http\Request;

class JoblistviewController extends Controller
{
    function show(Request $request)
    {
       
        $data=job::all();;
        return view('joblistview',['jobs'=>$data ]);
    }
}
