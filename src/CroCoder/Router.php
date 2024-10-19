<?php

namespace Telema\CroCoder;

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
            'fp/1' => Ex1::fpSolution(),
            'fp/2' => Ex2::fpSolution(),
            'fp/3' => Ex3::fpSolution(),
            'fp/4' => Ex4::fpSolution(),
            'fp/5' => Ex4::fpSolution(),
        };
    }
}
