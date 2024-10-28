<?php

namespace Telema\Uncle;

class Ex4
{
    public const PROVIDERS = [
        ['id' => 22, 'name' => 'yolo'],
        ['id' => 10, 'name' => 'frob'],
        ['id' => 34, 'name' => 'yolo'],
        ['id' => 43, 'name' => 'boom'],
        ['id' => 26, 'name' => 'frob'],
        ['id' => 34, 'name' => 'boom'],
        ['id' => 43, 'name' => 'boom'],
        ['id' => 26, 'name' => 'frob']
    ];

    public const PROVIDER_RATINGS = [
        ['name' => 'yolo', 'rating' => 0.7],
        ['name' => 'frob', 'rating' => 0.2],
        ['name' => 'boom', 'rating' => 0.5]
    ];

    protected static function rating()
    {
        return empty($_GET['rating']) ? null : $_GET['rating'];
    }

    public static function solution()
    {
        $result = [];

        foreach (self::PROVIDERS as $p) {
            foreach (self::PROVIDER_RATINGS as $pr) {
                if ($p['name'] === $pr['name'] && $pr['rating'] >= self::rating()) {
                    $result[] = $p;
                }
            }
        }

        return $result;
    }
}
