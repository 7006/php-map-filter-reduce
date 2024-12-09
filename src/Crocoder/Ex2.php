<?php

namespace Telema\Crocoder;

class Ex2
{   
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex02.csv';

    public function __invoke()
    {   
        $numbers = $this->readCsv(self::FILE_PATH, fn ($item) => $item['number']);

        $sum = 0;
        foreach ($numbers as $number) {
            if ($number > 0) {
                $sum += $number;
            }
        }
        return $sum;
    }
}
