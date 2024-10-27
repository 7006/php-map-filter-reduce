<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex4 as BaseEx4;

const ITEMS = [25, 30, 15, 20];

class Ex4 extends BaseEx4
{
    public static function solution(array $celsius = ITEMS)
    {
        return array_map(self::celsiusToFahrenheit(...), $celsius);
    }
}
