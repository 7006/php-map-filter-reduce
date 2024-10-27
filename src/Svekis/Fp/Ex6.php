<?php

namespace Telema\Svekis\Fp;

use Telema\Rectangle;

const ITEMS = [
        [
            'width' => 15,
            'height' => 5
        ],
        [
            'width' => 4,
            'height' => 8
        ],
        [
            'width' => 10,
            'height' => 2
        ],
        [
            'width' => 2,
            'height' => 6
        ],
        [
            'width' => 1,
            'height' => 1
        ]
    ];

class Ex6
{
    public static function solution(array $rectangles = ITEMS)
    {
        return array_map(Rectangle::info(...), $rectangles);
    }
}
