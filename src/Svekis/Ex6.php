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

class Rectangle
{
    private $width;
    private $height;

    public static function createFromArray(array $rectangle)
    {
        $width = $rectangle['width'];
        $height = $rectangle['height'];
        return new Rectangle($width, $height);
    }

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }

    public function perimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    public function longOrShort()
    {
        if ($this->width > 2 * $this->height) {
            return 'long';
        } else {
            return 'short';
        }
    }

    public function favorite()
    {
        if ($this->width === 1 && $this->height === 1) {
            return 'yes';
        }

        if ($this->width === 3 && $this->height === 3) {
            return 'yes';
        }

        if ($this->width === 10 && $this->height === 2) {
            return 'i dont know';
        }

        return 'no';
    }
}

class Ex6
{
    public static function solution(array $rectangles = ITEMS)
    {
        $infos = [];
        foreach ($rectangles as $rectangleArray) {
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

        return array_map($fn, $rectangles);
    }
}
