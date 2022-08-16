<?php

namespace App\Http\Controllers;

use App\Models\Rocket;
use domain\Facades\RocketInsertFacade;
use Illuminate\Http\Request;
use App\Http\Requests\RocketFormRequest;

class RocketInsertController extends Controller
{   

    public function rocketinsertview() {
        return view('pages.rocket.rocketinsert');
    }

    public function store(RocketFormRequest $request) {
        RocketInsertFacade::store($request->all());
        return redirect()->back()->with('message','Details Added Successfully!');
    }
}
