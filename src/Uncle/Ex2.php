<?php

namespace Telema\Uncle;

class Ex2
{
    public const ITEMS = [
        ['status' => 'success', 'id' => 99],
        ['status' => 'success', 'id' => 53],
        ['status' => 'error',   'id' => 17],
        ['status' => 'success', 'id' => 43],
        ['status' => 'error',   'id' => 47],
        ['status' => 'error',   'id' => 55],
        ['status' => 'error',   'id' => 98],
        ['status' => 'success', 'id' => 3]
    ];

    public static function solution(array $items = self::ITEMS)
    {
        $accum = ['success' => [], 'error' => []];

        foreach ($items as $item) {
            if ($item['status'] === 'success') {
                $accum['success'][] = $item['id'];
            }
            if ($item['status'] === 'error') {
                $accum['error'][] = $item['id'];
            }
        }
        return $accum;
    }
}
