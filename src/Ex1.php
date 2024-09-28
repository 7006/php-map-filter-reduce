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

        $color = 'blank';

        switch($food) {
            
            case 'apple':
                $color = 'yellow';
                break;

            case 'carrot':
                $color = 'green';
                break;

            case 'beet':
                $color = 'green';
                break;

            case 'lemon':
                $color = 'yellow';
                break;

            case 'pear':
                $color = 'yellow';
                break;

            case 'potato':
                $color = 'green';
                break;
        }
        return $color;
    }

    public static function fp_solution(array $items = []) {

    }
}