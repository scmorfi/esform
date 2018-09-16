<?php

namespace Scform\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Scmorfi\Scform
 */
class Form extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor() { return 'form'; }

   

}
