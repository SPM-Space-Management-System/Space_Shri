<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use domain\Facades\AddArticleExpensesFacade;
use Illuminate\Http\Request;
use App\Http\Requests\ExpenseFormRequest;

class AddArticleExpensesController extends Controller
{   

    public function addexpensesview() {
        return view('pages.expenses.addexpenses');
    }

    public function store(ExpenseFormRequest $request) {

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