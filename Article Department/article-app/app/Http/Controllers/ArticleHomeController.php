<?php

namespace App\Http\Controllers;
use App\Models\Article;
use domain\Facades\ArticleViewFacade;

use Illuminate\Http\Request;

class ArticleHomeController extends Controller
{
    public function articleindex(Request $request) {
        $search = $request['search'] ?? "";
        if ($search!= "") {
            $response['arts'] = Article::where('topic', 'LIKE', "%$search%")->get();
        } else {
            $response['arts'] = ArticleViewFacade::allActive();
        }
        return view('pages.article.articlehome')->with($response);
    }
}
