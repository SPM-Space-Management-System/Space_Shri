<?php

namespace domain\Facades;

use domain\Services\RocketViewService;
use Illuminate\Support\Facades\Facade;

class RocketViewFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    {
        return RocketViewService::class;
    }
}