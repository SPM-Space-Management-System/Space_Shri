<?php

namespace App\Http\Controllers;
use domain\Facades\ArticleExpensesViewFacade;

use Illuminate\Http\Request;

class ExpensesListViewController extends Controller
{
    public function expensesview() {
        $response['exps'] =ArticleExpensesViewFacade::all();
        return view('pages.expenses.articleexpensesview')->with($response);
    } 

    public function delete($exp_id) {
        ArticleExpensesViewFacade::delete($exp_id);
        return response()->json(['status' => 'Article Expenses Details Deleted Successfully!']);
        //return redirect()->back()->with('message','Details Deleted Successfully!');
    }

    public function edit(Request $request) { 

        $response['exp'] = ArticleExpensesViewFacade::get($request['exp_id']);
        return view('pages.expenses.articleexpensesupdate')->with($response);

    } 

    public function update(Request $request, $exp_id) {
        
        ArticleExpensesViewFacade::update($request->all(), $exp_id);
        return redirect()->back()->with('message','Details Updated Successfully!');
    }
}
