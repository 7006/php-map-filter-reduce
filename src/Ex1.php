<?php

namespace Telema;

class Ex1 {
    
    public static $ITEMS = [
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

    public static function solution(array $items = []) {
        $results = [];
        foreach ($items as $item) {
            $item['color'] = Ex1::foodColor($item['food']);
            $results[] = $item;
        }
        return $results;
    }

    private static function foodColor($food) {
        $foodToColor = [
           'apple' => 'yellow',
           'carrot' => 'green',
           'beet' => 'green',
           'lemon' => 'yellow',
           'pear' => 'yellow',
           'potato' => 'green',
        ];

        if (isset($foodToColor[$food])) {
            return $foodToColor[$food];
        } else {
            return 'blank';
        } 
    }

    public static function fp_solution(array $items = []) {

    }
}