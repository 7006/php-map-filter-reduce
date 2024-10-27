<?php

namespace Telema\Svekis\Fp;

const ITEMS = [25, 30, 15, 20];

class Ex4
{
    private static function celsiusToFahrenheit($temp)
    {
        return $temp * 9 / 5 + 32;
    }

    public static function solution(array $celsius = ITEMS)
    {
        return array_map(self::celsiusToFahrenheit(...), $celsius);
    }
}
