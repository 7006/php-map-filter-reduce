<?php

namespace Telema\Crocoder;

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

        foreach (range(1, $currentNumber) as $number) {
            $factorial *= $number;
        }

        return $factorial;
    }
}
