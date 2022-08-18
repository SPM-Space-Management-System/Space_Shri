<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectInsertController extends Controller
{
    public function projectinsertview() {
        return view('pages.Project.projectinsert');
    }
}
