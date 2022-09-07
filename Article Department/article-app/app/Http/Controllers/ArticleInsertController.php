<?php

namespace App\Http\Controllers;

use App\Models\Article;
use domain\Facades\ArticleInsertFacade;
use Illuminate\Http\Request;

class ArticleInsertController extends Controller
{   

    public function articleinsertview() {
        return view('pages.article.articleInsert');
    }

    public function store(Request $request) {

        try {
            ArticleInsertFacade::store($request->all());
            return redirect()->back()->with('message','Details Added Successfully!');
        }
        catch (Exception $ex) {
            return redirect()->back()->with('message','Something went wrong'.$ex);
        }
        
    }
}