<?php

namespace Telema\Svekis;

use Telema\traits\CsvReader;

class Ex2
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/svekis/ex02.csv';

    public function __invoke()
    {
        return $this->readCsv(self::FILE_PATH, fn ($item) => strtoupper($item['city']));
    }
}
