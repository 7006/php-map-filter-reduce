<?php

namespace Telema\Uncle\Fp;

use Telema\Uncle\Ex1 as BaseEx1;

class Ex1 extends BaseEx1
{
    public static function solution(array $fruits = self::ITEMS)
    {
        $fn = function ($fruit) {
            $fruit['color'] = self::color($fruit['food']);
            return $fruit;
        };
        return array_map($fn, $fruits);
    }
}
