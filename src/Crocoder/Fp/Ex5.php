<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex5 as BaseEx5;

class Ex5 extends BaseEx5
{
    public static function solution()
    {   
        $items = self::ITEMS;
        
        usort($items, fn ($i1, $i2) => $i1['age'] <=> $i2['age']);

        $min = $items[0]['age'];
        $max = $items[count($items) - 1]['age'];

        return [$min, $max, $max - $min];
    }
}
