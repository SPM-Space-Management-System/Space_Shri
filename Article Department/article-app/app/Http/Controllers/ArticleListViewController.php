<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleListViewController extends Controller
{
    public function articleindex(){
        return view('pages.article.articlelistview');
    }
}
