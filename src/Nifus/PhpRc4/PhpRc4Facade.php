<?php
namespace nifus\PhpRc4;

use Illuminate\Support\Facades\Facade;

class PhpRc4Facade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rc4';
    }
}
