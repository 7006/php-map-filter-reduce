<?php

namespace Telema\Crocoder;

use Telema\traits\CsvReader;

class Ex7
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex07.csv';

    public function __invoke()
    {
        return $this->readCsv(self::FILE_PATH, fn ($item) => $this->factorial($item['x']));
    }

    public function factorial($currentNumber)
    {
        $factorial = 1;

        for ($i = 1; $i <= $currentNumber; $i++) {
            $factorial *= $i;
        }

        return $factorial;
    }
}
