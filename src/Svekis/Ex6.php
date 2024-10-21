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
    public static function solution(array $rectangles = ITEMS)
    {
        $infos = [];
        foreach ($rectangles as $rectangleArray) {
            // сделать статический метод Rectangle::info и перенести туда тело цикла
            $rectangleObject = Rectangle::createFromArray($rectangleArray);
            $info = [
                'area' => $rectangleObject->area(),
                'perimeter' => $rectangleObject->perimeter(),
                'long_or_short' => $rectangleObject->longOrShort(),
                'favorite' => $rectangleObject->favorite()
            ];
            $infos[] = $info;
        }

        return $infos;
    }

    public static function fpSolution(array $rectangles = ITEMS)
    {
        $fn = function ($rectangle) {
            $rectangleObject = Rectangle::createFromArray($rectangle);
            return [
                'area' => $rectangleObject->area(),
                'perimeter' => $rectangleObject->perimeter(),
                'long_or_short' => $rectangleObject->longOrShort(),
                'favorite' => $rectangleObject->favorite()
            ];
        };

        return array_map($fn, $rectangles); // использоват статический метод Rectangle::info с синтаксисом ...
    }
}
