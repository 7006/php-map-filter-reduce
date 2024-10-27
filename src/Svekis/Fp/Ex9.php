<?php

namespace Telema\Svekis\Fp;

use Telema\Svekis\Ex9 as BaseEx9;

class Ex9 extends BaseEx9
{
    public static function solution()
    {
        $lis = array_reduce(self::ITEMS, fn ($html, $f) => "$html<li>$f</li>", '');
        return "<ul>$lis</ul>";
    }
}
