<?php

namespace App\Http\Controllers;
use App\Models\job;

use Illuminate\Http\Request;


class JobDeleteController extends Controller
{

    public function destroy(Request $id)
    {
        job::destroy($id);
        return view('joblistview')->with('flash_message', 'job deleted!');
    }

}

