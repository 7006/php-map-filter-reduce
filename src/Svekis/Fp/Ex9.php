<?php

namespace Telema\Svekis\Fp;

const ITEMS = ['Apple', 'Banana', 'Cherry', 'Ananas'];

class Ex9
{
    public static function solution(array $fruits = ITEMS)
    {
        $lis = array_reduce($fruits, fn ($html, $f) => "$html<li>$f</li>", '');
        return "<ul>$lis</ul>";
    }
}
