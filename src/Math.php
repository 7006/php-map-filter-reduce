<?php

namespace Telema;

class Math {

	public static function avg($x, $y)
    {
        try {
            return intdiv($x, $y);
        } catch (\DivisionByZeroError $e) {
            return 0;
        }
    }
}