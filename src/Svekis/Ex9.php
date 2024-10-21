<?php

namespace Telema\Svekis;

const ITEMS = ['Apple', 'Banana', 'Cherry', 'Ananas'];

class Ex9
{
    public static function solution(array $fruits = ITEMS)
    {
        $html = '<ul>' . "\n";
        foreach ($fruits as $fruit) {
            $html .= "\t" . '<li>' . $fruit . '</li>' . "\n";
        }
        $html .= '</ul>' . "\n";

        return $html;
    }

    public static function fpSolution2(array $fruits = ITEMS)
    {
        $lis = array_reduce($fruits, fn ($html, $f) => "$html<li>$f</li>", '');
        return "<ul>$lis</ul>";
    }
}
