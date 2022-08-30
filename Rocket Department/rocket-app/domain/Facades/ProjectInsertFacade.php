<?php

namespace domain\Facades;

use domain\Services\ProjectInsertService;
use Illuminate\Support\Facades\Facade;

class ProjectInsertFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    {
        return ProjectInsertService::class;
    }
}