<?php

namespace Telema\Svekis;

const ITEMS = [3, 56, 23, 4, 1, 67, 5];

class Ex1
{
    public static function solution(array $numbers = ITEMS)
    {
        $doubledNumbers = [];
        foreach ($numbers as $number) {
            $doubledNumbers[] = $number * 2;
        }
        return $doubledNumbers;
    }

    public static function fpSolution(array $numbers = ITEMS)
    {
        return array_map(fn ($n) => $n * 2, $numbers);
    }
}
