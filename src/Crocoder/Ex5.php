<?php

namespace Telema\Crocoder;

use Telema\traits\CsvReader;

class Ex5
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex05.csv';

    public function __invoke()
    {
        $items = $this->readCsv(self::FILE_PATH, fn ($item) => $item['age']);

        $min = min($items);
        $max = max($items);

        return [$min, $max, $max - $min];
    }
}
