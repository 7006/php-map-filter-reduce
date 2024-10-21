<?php

namespace Telema\Uncle;

use Telema\Date;

const ITEMS = [
    ['id' => 22, 'provider' => 'yolo', 'updated_at' => '2024-09-28'],
    ['id' => 10, 'provider' => 'frob', 'updated_at' => '2024-10-01'],
    ['id' => 34, 'provider' => 'yolo', 'updated_at' => '2024-09-28'],
    ['id' => 43, 'provider' => 'boom', 'updated_at' => '2024-09-03'],
    ['id' => 26, 'provider' => 'frob', 'updated_at' => '2024-09-02'],
    ['id' => 34, 'provider' => 'boom', 'updated_at' => '2024-09-20'],
    ['id' => 43, 'provider' => 'boom', 'updated_at' => '2024-09-03'],
    ['id' => 26, 'provider' => 'frob', 'updated_at' => '2024-09-04']
];

class Ex3
{
    private static function provider()
    {
        return empty($_GET['provider']) ? null : $_GET['provider'];
    }

    private static function date()
    {
        return empty($_GET['date']) ? null : $_GET['date'];
    }

    private static function isMatches($item, $provider, $date)
    {
        // будет ли работать если переписать на match(true)
        if ($provider && $date) {
            return $item['provider'] === $provider
                && Date::isGte($item['updated_at'], $date);
        }
        if ($provider) {
            return $item['provider'] === $provider;
        }
        if ($date) {
            return Date::isGte($item['updated_at'], $date);
        }
        return false;
    }

    public static function solution(array $items = ITEMS)
    {
        $provider = self::provider();
        $date = self::date();
        $result = [];

        foreach ($items as $item) {
            if (self::isMatches($item, $provider, $date)) {
                $result[] = $item;
            }
        }
        return $result;
    }

    public static function fpSolution(array $items = ITEMS)
    {
        $provider = self::provider();
        $date = self::date();

        return array_filter($items, fn ($item) => self::isMatches($item, $provider, $date));
    }
}