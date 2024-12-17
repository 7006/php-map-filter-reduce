<?php

namespace Telema\Crocoder;

use Telema\traits\JsonReader;

class Ex12
{
    use JsonReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex12.json';

    public function __invoke()
    {
        $freq = [];
        $items = $this->readJson(self::FILE_PATH);

        $fn = function ($item, $index) use (& $freq) {
            if (isset($freq[$item])) {
                $freq[$item] += 1;
            } else {
                $freq[$item] = 1;
            }
        };

        array_walk_recursive($items, $fn);

        return $freq;
    }
}
