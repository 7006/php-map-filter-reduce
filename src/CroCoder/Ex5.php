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
        $youngest = $items[0]['age'];
        $oldest = $items[0]['age'];

        foreach ($items as $item) {
            if ($item['age'] < $youngest) {
                $youngest = $item['age'];
            }

            if ($item['age'] > $oldest) {
                $oldest = $item['age'];
            }
        }
        return [$youngest, $oldest, $oldest - $youngest];
    }

    public static function fpSolution(array $items = ITEMS)
    {
    }
}
