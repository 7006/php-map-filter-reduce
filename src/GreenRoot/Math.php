<?php

namespace Telema\GreenRoot;

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