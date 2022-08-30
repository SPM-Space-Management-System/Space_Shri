<?php

namespace domain\Facades;

use domain\Services\ProjectViewService;
use Illuminate\Support\Facades\Facade;

class ProjectViewFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    {
        return ProjectViewService::class;
    }
}