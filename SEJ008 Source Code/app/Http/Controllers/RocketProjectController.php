<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RocketProjectController extends ParentController
{
    public function projectindex() {
        return view('pages.home.rocketproject');
    }
}
