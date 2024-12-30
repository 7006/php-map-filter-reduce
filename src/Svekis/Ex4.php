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
        return $this->readCsv(self::FILE_PATH, fn ($item) => self::celsiusToFahrenheit($item['temp']));
    }
}
