<?php

namespace Telema\Crocoder;

class Ex2
{
    public const ITEMS = [1, -4, 12, 0, -3, 29, -150];

    public function __invoke()
    {
        $sum = 0;
        foreach (self::ITEMS as $number) {
            if ($number > 0) {
                $sum += $number;
            }
        }
        return $sum;
    }
}
