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
        usort($items, fn ($i1, $i2) => $i1['age'] <=> $i2['age']);

        // стоит добавить 2 переменние min max для простоти чтения
        return [
            $items[0]['age'],
            $items[count($items) - 1]['age'],
            $items[count($items) - 1]['age'] - $items[0]['age']
        ];
    }
}
