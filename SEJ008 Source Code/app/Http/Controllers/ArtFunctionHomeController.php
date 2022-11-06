<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtFunctionHomeController extends ParentController
{
    public function articlefunction()
    {
        return view('pages.article.articlefunction');
    }
}
