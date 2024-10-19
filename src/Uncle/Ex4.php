<?php

namespace Telema\Uncle;

const PROVIDERS = [
    ['id' => 22, 'name' => 'yolo'],
    ['id' => 10, 'name' => 'frob'],
    ['id' => 34, 'name' => 'yolo'],
    ['id' => 43, 'name' => 'boom'],
    ['id' => 26, 'name' => 'frob'],
    ['id' => 34, 'name' => 'boom'],
    ['id' => 43, 'name' => 'boom'],
    ['id' => 26, 'name' => 'frob']
];

const PROVIDER_RATINGS = [
    ['name' => 'yolo', 'rating' => 0.7],
    ['name' => 'frob', 'rating' => 0.2],
    ['name' => 'boom', 'rating' => 0.5]
];

class Ex4
{
    private static function rating()
    {
        return empty($_GET['rating']) ? null : $_GET['rating'];
    }

    public static function solution()
    {
        $result = [];

        foreach (PROVIDERS as $p) {
            foreach (PROVIDER_RATINGS as $pr) {
                if ($p['name'] === $pr['name'] && $pr['rating'] >= self::rating()) {
                    $result[] = $p;
                }
            }
        }

        return $result;
    }

    public static function fpSolution()
    {
        $providerRatings = array_filter(PROVIDER_RATINGS, fn ($pr) => $pr['rating'] >= self::rating());
        $providerNames = array_map(fn ($pr) => $pr['name'], $providerRatings);
        $providers = array_filter(PROVIDERS, fn ($p) => in_array($p['name'], $providerNames));

        return $providers;
    }
}
