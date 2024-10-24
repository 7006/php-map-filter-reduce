<?php

namespace Telema\Svekis;

class Router
{
    public static function go($url)
    {
        return match ($url) {
            '1' => Ex1::solution(),
            '2' => Ex2::solution(),
            '3' => Ex3::solution(),
            '4' => Ex4::solution(),
            '5' => Ex5::solution(),
            '6' => Ex6::solution(),
            '7' => Ex7::solution(),
            '8' => Ex8::solution(),
            '9' => Ex9::solution(),
            'fp/1' => Ex1::fpSolution(),
            'fp/2' => Ex2::fpSolution(),
            'fp/3' => Ex3::fpSolution(),
            'fp/4' => Ex4::fpSolution(),
            'fp/5' => Ex5::fpSolution(),
            'fp/6' => Ex6::fpSolution(),
            'fp/7' => Ex7::fpSolution(),
            'fp/8' => Ex8::fpSolution(),
            'fp/9' => Ex9::fpSolution2(),
        };
    }
}
