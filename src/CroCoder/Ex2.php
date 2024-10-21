<?php

namespace Telema\CroCoder;

const ITEMS = [1, -4, 12, 0, -3, 29, -150];

class Ex2
{
    public static function solution(array $numbers = ITEMS)
    {
        $sum = 0;
        foreach ($numbers as $number) {
            if ($number > 0) {
                $sum += $number;
            }
        }
        return $sum;
    }

    public static function fpSolution(array $numbers = ITEMS)
    {
        return array_reduce($numbers, fn ($sum, $n) => $n > 0 ? $sum + $n : $sum, 0);
    }
}