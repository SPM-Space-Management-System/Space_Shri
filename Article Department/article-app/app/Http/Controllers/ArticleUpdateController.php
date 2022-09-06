<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleUpdateController extends Controller
{
    public function articleindex(){
        return view('pages.article.articleupdate');
    }
}
