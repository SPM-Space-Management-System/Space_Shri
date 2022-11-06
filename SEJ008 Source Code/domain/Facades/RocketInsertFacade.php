<?php

namespace domain\Facades;

use domain\Services\RocketInsertService;
use Illuminate\Support\Facades\Facade;

class RocketInsertFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    {
        return RocketInsertService::class;
    }
}