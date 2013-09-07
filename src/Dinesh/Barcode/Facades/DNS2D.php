<?php

namespace Dinesh\Barcode\Facades;

use Illuminate\Support\Facades\Facade;

class DNS2D extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'DNS2D';
    }

}