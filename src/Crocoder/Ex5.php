<?php

namespace Telema\Crocoder;

use Telema\traits\CsvReader;

class Ex5
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex05.csv';

    public function __invoke()
    {   
        $min = $max = 0;
        $i = true;

        $this->readCsv(self::FILE_PATH, function ($item) use (&$i, &$min, &$max) {
            if ($i) {
                $min = $max = $item['age'];
                $i = false;   
            }
            
            if ($item['age'] < $min) {
                $min = $item['age'];
            }
            
            if ($item['age'] > $max) {
                $max = $item['age'];
            }
        });

        return [$min, $max, $max - $min];
    }
}
