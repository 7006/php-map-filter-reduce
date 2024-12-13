<?php

namespace Telema\Crocoder;

use Telema\traits\CsvReader;

class Ex2
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex02.csv';

    public function __invoke()
    {
        $sum = 0;

        $this->readCsv(self::FILE_PATH, function ($item) use (&$sum) {
            if ($item['number'] > 0) {
                $sum += $item['number'];
            }
        });

        return $sum;
    }
}
