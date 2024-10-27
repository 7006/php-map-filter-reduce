<?php

namespace Telema\Crocoder\Fp;

const ITEMS = [1, -4, 12, 0, -3, 29, -150];

class Ex2
{
    public static function solution(array $numbers = ITEMS)
    {
        return array_reduce($numbers, fn ($sum, $n) => $n > 0 ? $sum + $n : $sum, 0);
    }
}
