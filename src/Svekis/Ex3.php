<?php

namespace Telema\Svekis;

class Ex3
{   
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

    public static function solution()
    {
        $names = [];
        foreach (self::ITEMS as $student) {
            $names[] = $student['name'];
        }
        return $names;
    }
}
