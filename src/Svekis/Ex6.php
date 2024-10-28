<?php

namespace Telema\Svekis;

use Telema\Rectangle;

class Ex6
{
    public const ITEMS = [
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

    public static function solution()
    {
        $infos = [];
        foreach (self::ITEMS as $rectangleArray) {
            $infos[] = Rectangle::info($rectangleArray);
        }

        return $infos;
    }
}
