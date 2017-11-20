<?php
namespace lxlkuc\LaravelRmb;

use Illuminate\Support\Facades\Facade;

class RmbFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rmb';
    }
}
