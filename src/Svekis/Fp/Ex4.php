<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex4 as BaseEx4;

class Ex4 extends BaseEx4
{
    public static function solution()
    {
        return array_map(self::celsiusToFahrenheit(...), self::ITEMS);
    }
}
