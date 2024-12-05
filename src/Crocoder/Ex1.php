<?php

namespace Telema\Crocoder;

trait Reader
{
    public static function getItems()
    {
        return [1, 2, 3, 4, 5];
    }
}

class Ex1
{
    use Reader;

    public function __invoke()
    {
        $result = [];
        $items = self::getItems();
        foreach ($items as $item) {
            $result[] = $item ** 2;
        }
        return $result;
    }
}
