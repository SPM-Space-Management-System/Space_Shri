<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleInsertController extends Controller
{
    public function articleindex(){
        return view('pages.article.articleInsert');
    }
}
