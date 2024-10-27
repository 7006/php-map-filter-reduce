<?php

namespace Telema\Crocoder\Fp;

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
        usort($items, fn ($i1, $i2) => $i1['age'] <=> $i2['age']);

        $min = $items[0]['age'];
        $max = $items[count($items) - 1]['age'];

        return [$min, $max, $max - $min];
    }
}
