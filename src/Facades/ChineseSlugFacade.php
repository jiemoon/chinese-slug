<?php

namespace Jiemoon\ChineseSlug\Faceds;

use Illuminate\Support\Facades\Facade;

class ChineseSlug extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'chineseslug';
    }
}
