<?php

namespace Telema\Uncle;

const ITEMS = [
    ['status' => 'success', 'id' => 99],
    ['status' => 'success', 'id' => 53],
    ['status' => 'error',   'id' => 17],
    ['status' => 'success', 'id' => 43],
    ['status' => 'error',   'id' => 47],
    ['status' => 'error',   'id' => 55],
    ['status' => 'error',   'id' => 98],
    ['status' => 'success', 'id' => 3]
];

class Ex2
{
    public static function solution(array $items = ITEMS)
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

    public static function fpSolution(array $items = ITEMS)
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

    public static function fpSolution2(array $items = ITEMS)
    {

        $success = array_values(array_filter($items, fn ($item) => $item['status'] === 'success'));
        $error = array_values(array_filter($items, fn ($item) => $item['status'] === 'error'));

        $successId = array_map(fn ($item) => $item['id'], $success);
        $errorId = array_map(fn ($item) => $item['id'], $error);

        return ['success' => $successId, 'error' => $errorId];
    }
}
