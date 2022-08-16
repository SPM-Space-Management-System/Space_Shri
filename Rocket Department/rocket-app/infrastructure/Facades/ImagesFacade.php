<?php 

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;
use infrastructure\Facades\Images;

class ImagesFacade extends Facade { 

    /**
     * Get the registered name of the component.
     * 
     * @return string
     */
    protected static function getFacadeAccessor() {
        return Images::class;
     }
}