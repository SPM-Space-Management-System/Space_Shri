<?php

namespace domain\Facades;

use domain\Services\AddArticleExpensesService;
use Illuminate\Support\Facades\Facade;

class AddArticleExpensesFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    {
        return AddArticleExpensesService::class;
    }
}