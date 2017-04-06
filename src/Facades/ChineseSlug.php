<?php

namespace Jiemoon\ChineseSlug\Facades;

use Illuminate\Support\Facades\Facade;

class ChineseSlug extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'chineseslug';
    }
}
