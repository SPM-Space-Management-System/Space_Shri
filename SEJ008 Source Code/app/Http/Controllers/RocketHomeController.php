<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RocketHomeController extends ParentController
{
    public function rocketindex() {
        return view('pages.home.rocketindex');
    }
}
