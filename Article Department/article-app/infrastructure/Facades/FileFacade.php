<?php 

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;
use infrastructure\Facades\FileService;

class FileFacade extends Facade { 

    /**
     * Get the registered name of the component.
     * 
     * @return string
     */
    protected static function getFacadeAccessor() {
        return FileService::class;
     }
}