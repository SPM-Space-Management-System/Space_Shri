<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexmissionshome(){
        return view('operations/MissionsHome');
    }

    public function indexmissionsinsert(){
        return view('operations/MissionsInsert');
    }


}
