<?php

namespace App\Http\Controllers;

use domain\Facades\RocketViewFacade;
use Illuminate\Http\Request;

class RocketController extends Controller
{
    public function rocketview() {
        $response['tasks'] = RocketViewFacade::allActive();
        return view('pages.rocket.rocket')->with($response);
    }
}
