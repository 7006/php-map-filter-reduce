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
        switch($food) {
        
            case 'apple':
                $color = 'yellow';
                return $color;

            case 'carrot':
                $color = 'green';
                return $color;

            case 'beet':
                $color = 'green';
                return $color;

            case 'lemon':
                $color = 'yellow';
                return $color;

            case 'pear':
                $color = 'yellow';
                return $color;

            case 'potato':
                $color = 'green';
                return $color;

            default: 
                $color = 'blank';
                return $color;
        }   
    }

    public static function fp_solution(array $items = []) {

    }
}