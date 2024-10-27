<?php

namespace Telema\Svekis\Fp;

use Telema\Date;
use Telema\Svekis\Ex8 as BaseEx8;

class Ex8 extends BaseEx8
{
    public static function solution()
    {
        return array_map(Date::formatDate(...), self::ITEMS);
    }
}
