<?php

namespace Telema\Crocoder;

class Ex1
{
    use CsvReader;

    private const FILE_PATH = __DIR__ . '/../../data/crocoder/ex01.csv';

    public function __invoke()
    {
        $numbers = $this->readCsv(self::FILE_PATH, fn ($item) => $item['number']);

        $powNumbers = [];
        foreach ($numbers as $number) {
            $powNumbers[] = $number ** 2;
        }

        return $powNumbers;
    }
}
