<?php

namespace domain\Facades;

use domain\Services\ArticleInsertService;
use Illuminate\Support\Facades\Facade;

class ArticleInsertFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    {
        return ArticleInsertService::class;
    }
}