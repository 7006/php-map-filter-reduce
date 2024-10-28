<?php

namespace Telema\Uncle;

class Ex1
{
    public const ITEMS = [
        ['food' => 'apple'],
        ['food' => 'carrot'],
        ['food' => 'beet'],
        ['food' => 'lemon'],
        ['food' => 'pear'],
        ['food' => 'potato'],
        ['food' => 'apple'],
        ['food' => 'lemon'],
        ['food' => 'nuts'],
    ];

    protected static function color($food)
    {
        $color = match ($food) {
            'apple' => 'yellow',
            'carrot' => 'green',
            'beet' => 'green',
            'lemon' => 'yellow',
            'pear' => 'yellow',
            'potato' => 'green',
            default => 'unknown'
        };
        return $color;
    }

    public static function solution(array $fruits = self::ITEMS)
    {
        $result = [];
        foreach ($fruits as $fruit) {
            $fruit['color'] = Ex1::color($fruit['food']);
            $result[] = $fruit;
        }
        return $result;
    }
}
