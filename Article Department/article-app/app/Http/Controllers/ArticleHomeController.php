<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleHomeController extends Controller
{
    public function articleindex() {
        return view('pages.article.articlehome');
    }
}
