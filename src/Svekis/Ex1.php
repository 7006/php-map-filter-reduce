<?php

namespace Telema\Svekis;

use Telema\traits\CsvReader;

class Ex1
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/svekis/ex01.csv';

    public function __invoke()
    {
        return $this->readCsv(self::FILE_PATH, fn ($item) => $item['number'] * 2);
    }
}
