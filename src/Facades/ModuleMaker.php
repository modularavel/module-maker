<?php

namespace Modularavel\ModuleMaker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Modularavel\ModuleMaker\ModuleMaker
 */
class ModuleMaker extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Modularavel\ModuleMaker\ModuleMaker::class;
    }
}
