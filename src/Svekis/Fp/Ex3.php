<?php

namespace Telema\Svekis\Fp;

const ITEMS = [
        [
            'name' => 'Alice',
            'age' => 25
        ],
        [
            'name' => 'Bob',
            'age' => 30
        ],
        [
            'name' => 'Charlie',
            'age' => 22
        ]
    ];

class Ex3
{
    public static function solution(array $students = ITEMS)
    {
        return array_map(fn ($st) => $st['name'], $students);
    }
}
