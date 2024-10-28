<?php

namespace Telema\Crocoder;

class Ex3
{
    public const ITEMS = [12, 46, 32, 64];

    public function __invoke()
    {
        return [
            'mean' => self::mean(self::ITEMS),
            'median' => self::median(self::ITEMS)
        ];
    }

    private static function mean(array $numbers)
    {
        $count = count($numbers);

        if ($count === 0) {
            return 0;
        }

        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum / $count;
    }

    private static function median(array $numbers)
    {
        $count = count($numbers);

        if ($count === 0) {
            return 0;
        }

        if ($count % 2 === 0) {
            sort($numbers);
            return ($numbers[$count / 2 - 1] + $numbers[$count / 2]) / 2;
        }

        if ($count % 2 === 1) {
            sort($numbers);
            return $numbers[($count - 1) / 2];
        }
    }
}
