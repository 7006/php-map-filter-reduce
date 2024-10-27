<?php

namespace Telema\Svekis;

const ITEMS = [25, 30, 15, 20];

class Ex4
{
    protected static function celsiusToFahrenheit($temp)
    {
        return $temp * 9 / 5 + 32;
    }

    public static function solution(array $celsius = ITEMS)
    {
        $fahrenheits = [];
        foreach ($celsius as $temp) {
            $fahrenheits[] = self::celsiusToFahrenheit($temp);
        }
        return $fahrenheits;
    }
}
