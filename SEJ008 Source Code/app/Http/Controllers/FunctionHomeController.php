<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionHomeController extends ParentController
{
    public function rocketfunction() {
        return view('pages.home.functionindex');
    }
}
