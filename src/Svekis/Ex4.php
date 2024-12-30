<?php

namespace Telema\Svekis;

use Telema\traits\CsvReader;

class Ex4
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/svekis/ex04.csv';

    protected static function celsiusToFahrenheit($temp)
    {
        return $temp * 9 / 5 + 32;
    }

    public function __invoke()
    {
        $fahrenheits = [];  
        $this->readCsv(self::FILE_PATH, function ($item) use (&$fahrenheits) {
            $fahrenheitss[] = self::celsiusToFahrenheit($item['temp']);
        });

        return $fahrenheits;
    }
}
