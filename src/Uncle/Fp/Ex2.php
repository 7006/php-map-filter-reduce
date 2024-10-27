<?php

namespace Telema\Uncle\Fp;

use Telema\Uncle\Ex2 as BaseEx2;

class Ex2 extends BaseEx2
{
    public static function solution(array $items = self::ITEMS)
    {
        $accumInit = ['success' => [], 'error' => []];

        $fn = function ($accum, $item) {
            if ($item['status'] === 'success') {
                $accum['success'][] = $item['id'];
            }
            if ($item['status'] === 'error') {
                $accum['error'][] = $item['id'];
            }
            return $accum;
        };

        return array_reduce($items, $fn, $accumInit);
    }
}
