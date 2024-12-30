<?php

namespace Telema\Svekis;

use Telema\traits\CsvReader;

class Ex3
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/svekis/ex03.csv';

    public function __invoke()
    {   
        $names = [];
        $this->readCsv(self::FILE_PATH, function ($item) use (&$names) {
            $names[] = $item['name'];
        });

        return $names;
    }
}
