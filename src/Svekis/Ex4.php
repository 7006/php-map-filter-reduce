<?php

namespace Telema\Svekis;

const ITEMS = [25, 30, 15, 20];

class Ex4
{
    private static function celsiusToFahrenheit($temp)
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

    public static function fpSolution(array $celsius = ITEMS)
    {
        return array_map(self::celsiusToFahrenheit(...), $celsius);
    }
}
