<?php

namespace Telema\Crocoder;

use Telema\traits\CsvReader;

class Ex8
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex08.csv';

    protected function frequency($result, $item)
    {
        if (!array_key_exists($item, $result)) {
            $result[$item] = 1;
        } else {
            $result[$item] += 1;
        }
        return $result;
    }

    public function __invoke()
    {
        $result = [];

        $items = $this->readCsv(self::FILE_PATH, function ($item) use (&$result) {
            $result = $this->frequency($result, $item['char']);
        });

        return $result;
    }
}
