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
                return 'yellow';

            case 'carrot':
                return 'green';
                
            case 'beet':
                return 'green';

            case 'lemon':
                return 'yellow';

            case 'pear':
                return 'yellow';

            case 'potato':
                return 'green';

            default: 
                return 'blank';
        }   
    }

    public static function fp_solution(array $items = []) {

    }
}