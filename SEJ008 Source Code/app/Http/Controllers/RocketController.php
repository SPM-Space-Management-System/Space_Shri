<?php

namespace App\Http\Controllers;

use App\Models\Rocket;
use domain\Facades\RocketViewFacade;
use Illuminate\Http\Request;

class RocketController extends ParentController
{   
    public function rocketview(Request $request) {
        $search = $request['search'] ?? "";
        if ($search!= "") {
            $response['tasks'] = Rocket::where('title', 'LIKE', "%$search%")->orWhere('country', 'LIKE', "%$search%")->get();
        } else {
            $response['tasks'] = RocketViewFacade::allActive();
        }
        return view('pages.rocket.rocket')->with($response);
    }
}
