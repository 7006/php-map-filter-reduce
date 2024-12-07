<?php

namespace Telema\Crocoder;

class Ex1
{
    use CsvReader;

    private const FILE_PATH = __DIR__ . '/../../data/crocoder/ex01.csv';

    public function __invoke()
    {
        $result = [];
        $items = $this->readCsv(self::FILE_PATH);

        foreach ($items as $item) {
            $result[] = $item['number'] ** 2;
        }

        return $result;
    }
}
