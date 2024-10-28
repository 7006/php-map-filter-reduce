<?php

namespace Telema\Svekis;

class Ex4
{
    public const ITEMS = [25, 30, 15, 20];

    protected static function celsiusToFahrenheit($temp)
    {
        return $temp * 9 / 5 + 32;
    }

    public static function solution()
    {
        $fahrenheits = [];
        foreach (self::ITEMS as $temp) {
            $fahrenheits[] = self::celsiusToFahrenheit($temp);
        }
        return $fahrenheits;
    }
}
