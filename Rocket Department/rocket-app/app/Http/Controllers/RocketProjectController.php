<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RocketProjectController extends Controller
{
    public function projectindex() {
        return view('pages.home.rocketproject');
    }
}
