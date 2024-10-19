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
        $positiveNumbers = array_filter($numbers, fn ($number) => $number > 0);

        return array_reduce($positiveNumbers, fn ($sum, $n) => $sum + $n, 0);
    }

    public static function fpSolution2(array $numbers = ITEMS)
    {
        $fn =  function ($oldSum, $number) {
            if ($number > 0) {
                $newSum = $oldSum + $number;
            } else {
                $newSum = $oldSum;
            }
            return $newSum;
        };

        $sum = array_reduce($numbers, $fn, 0);

        return $sum;
    }
}
