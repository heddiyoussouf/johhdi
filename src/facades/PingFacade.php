<?php

namespace Heddiyoussouf\Johhdi\facades;

use Illuminate\Support\Facades\Facade;

class PingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ping';
    }
}