<?php

namespace domain\Facades;

use domain\Services\ArticleExpensesViewService;
use Illuminate\Support\Facades\Facade;

class ArticleExpensesViewFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    {
        return ArticleExpensesViewService::class;
    }
}