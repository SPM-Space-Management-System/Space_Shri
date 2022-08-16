<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RocketHomeController extends Controller
{
    public function rocketindex() {
        return view('pages.home.rocketindex');
    }
}
