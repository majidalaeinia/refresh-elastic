<?php

namespace MajidAlaeinia\RefreshElastic\Facades;

use Illuminate\Support\Facades\Facade;

class RefreshElastic extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'refresh-elastic';
    }
}
