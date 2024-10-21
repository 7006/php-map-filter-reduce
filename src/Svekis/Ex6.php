<?php

namespace Telema\Svekis;

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
    private static function info($rectangleArray)
    {
        $rectangleObject = Rectangle::createFromArray($rectangleArray);
        $info = [
            'area' => $rectangleObject->area(),
            'perimeter' => $rectangleObject->perimeter(),
            'long_or_short' => $rectangleObject->longOrShort(),
            'favorite' => $rectangleObject->favorite()
        ];
        return $info;
    }

    public static function solution(array $rectangles = ITEMS)
    {
        $infos = [];
        foreach ($rectangles as $rectangleArray) {
            $infos[] = self::info($rectangleArray);
        }

        return $infos;
    }

    public static function fpSolution(array $rectangles = ITEMS)
    {
        return array_map(self::info(...), $rectangles);
    }
}
