<?php

namespace App\Http\Controllers;
use App\Models\job;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JobDeleteController extends Controller
{

public function delete(Request $jobObj)
{
    $jobObj = new job;
// DB::table('jobs')->where('id',$jobObj)->delete();

return ;



}


}

