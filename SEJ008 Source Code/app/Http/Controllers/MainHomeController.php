<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainHomeController extends ParentController
{
    public function homeindex() {
        return view('pages.home.home');
    }
}
