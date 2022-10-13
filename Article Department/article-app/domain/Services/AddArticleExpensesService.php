<?php 

namespace domain\Services; 

use App\Models\Expenses;



class AddArticleExpensesService
{
    protected $exp;

    public function __construct() {
        $this->exp = new Expenses();
    }  

    public function store($data) {
        $this->exp->create($data);
    }
}