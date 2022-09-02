<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\missions;
class PagesController extends Controller
{
    public function indexmissionshome(){

       
        return view('operations/MissionsHome',compact('missionsALL'));
    }

    public function indexmissionsinsert(){
        return view('operations/MissionsInsert');
    }


}
