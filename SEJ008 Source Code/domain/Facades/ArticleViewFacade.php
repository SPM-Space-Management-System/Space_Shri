<?php

namespace domain\Facades;

use domain\Services\ArticleViewService;
use Illuminate\Support\Facades\Facade;

class ArticleViewFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    {
        return ArticleViewService::class;
    }
}