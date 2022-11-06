<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewMoreArticleController extends ParentController
{
    public function ViewMoreArticle() {
        // $response['exps'] =ArticleExpensesViewFacade::all();
        return view('pages.article.viewmorearticle');
    } 

}
