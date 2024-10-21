<?php

namespace Telema\CroCoder;

const ITEMS = [
    [
        'name' => 'Vasiliy',
        'age' => 34
    ],
    [
        'name' => 'Jhon',
        'age' => 13
    ],
    [
        'name' => 'Mark',
        'age' => 56
    ],
    [
        'name' => 'Rachel',
        'age' => 45
    ],
    [
        'name' => 'Nate',
        'age' => 67
    ],
    [
        'name' => 'Jennifer',
        'age' => 65
    ]
];

class Ex5
{
    public static function solution(array $items = ITEMS)
    {
        $min = $items[0]['age'];
        $max = $items[0]['age'];

        foreach ($items as $item) {
            if ($item['age'] < $min) {
                $min = $item['age'];
            }

            if ($item['age'] > $max) {
                $max = $item['age'];
            }
        }
        return [$min, $max, $max - $min];
    }

    public static function fpSolution(array $items = ITEMS)
    {   
        $fn = function ($accum, $item) {
            [$min, $max] = $accum;
            $newMin = $item['age'] < $min['age'] ? $item : $min;
            $newMax = $item['age'] > $max['age'] ? $item : $max;
            return [$newMin, $newMax];
        };

        return array_reduce($items, $fn, [$items[0], $items[0]]);
    }

}