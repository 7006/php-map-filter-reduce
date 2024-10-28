<?php

namespace Telema\Crocoder;

class Ex1
{
    public const ITEMS = [1, 2, 3, 4, 5];

    public function __invoke()
    {
        $result = [];
        foreach (self::ITEMS as $item) {
            $result[] = $item ** 2;
        }
        return $result;
    }
}
