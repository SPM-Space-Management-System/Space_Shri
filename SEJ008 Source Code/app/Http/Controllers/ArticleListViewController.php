<?php

namespace App\Http\Controllers;

use App\Models\Article;
use domain\Facades\ArticleViewFacade;
use Illuminate\Http\Request;

class ArticleListViewController extends ParentController
{   

    public function articleview() {
        $response['arts'] = ArticleViewFacade::all();
        return view('pages.article.articlelistview')->with($response);
    } 

    public function delete($art_id) {
        ArticleViewFacade::delete($art_id);
        return response()->json(['status' => 'Article Details Deleted Successfully!']);
        //return redirect()->back()->with('message','Details Deleted Successfully!');
    } 

    public function done($art_id) {
        ArticleViewFacade::done($art_id);
        return redirect()->back();
    } 

    public function edit(Request $request) { 

        $response['art'] = ArticleViewFacade::get($request['art_id']);
        return view('pages.article.articleupdate')->with($response);

    } 

    public function update(Request $request, $art_id) {
        
        ArticleViewFacade::update($request->all(), $art_id);
        return redirect()->back()->with('message','Details Updated Successfully!');
    }

}
