<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexmissionshome(){

        $missionsALL = missions::all();


        return view('operations/MissionsHome',compact('missionsALL'));
    }

    public function indexmissionsinsert(){
        return view('operations/MissionsInsert');
    }


}
