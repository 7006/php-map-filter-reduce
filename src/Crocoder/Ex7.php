<?php

namespace Telema\Crocoder;

class Ex7
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex07.csv';

    public function __invoke()
    {
        $numbers = $this->readCsv(self::FILE_PATH, fn ($item) => $item['number']);

        $factorials = [];
        foreach ($numbers as $currentNumber) {
            $factorials[] = $this->factorial($currentNumber);
        }
        return $factorials;
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
