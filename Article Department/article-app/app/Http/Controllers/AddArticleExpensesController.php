<?php

namespace App\Http\Controllers;

use App\Models\Article;
use domain\Facades\AddArticleExpensesFacade;
use Illuminate\Http\Request;
use App\Http\Requests\ExpensesFormRequest;

class AddArticleExpensesController extends Controller
{   

    public function articleexpensesview() {
        return view('pages.expenses.addexpenses');
    }

    public function store(ExpensesFormRequest $request) {

        try {
            $data = $request->validated();
            AddArticleExpensesFacade::store($request->all());
            return redirect()->back()->with('message','Details Added Successfully!');
        }
        
        catch (Exception $ex) {
            return redirect()->back()->with('message','Something went wrong'.$ex);
        }
        
    }
}