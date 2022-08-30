<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionHomeController extends Controller
{
    public function rocketfunction() {
        return view('pages.home.functionindex');
    }
}
