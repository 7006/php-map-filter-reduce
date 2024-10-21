<?php

namespace Telema\Svekis;

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
        $names = [];
        foreach ($students as $student) {
            $names[] = $student['name'];
        }
        return $names;
    }

    public static function fpSolution(array $students = ITEMS)
    {
        return array_map(fn ($st) => $st['name'], $students);
    }
}
