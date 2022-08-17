<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexmissionshome(){
        return view('MissionsHome');
    }

    public function indexmissionsinsert(){
        return view('MissionsInsert');
    }


}
