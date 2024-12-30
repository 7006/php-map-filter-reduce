<?php

namespace Telema\Svekis;

use Telema\Rectangle;
use Telema\traits\CsvReader;

class Ex6
{   
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/svekis/ex06.csv';

    public function __invoke()
    {
        $infos = [];
        $this->readCsv(self::FILE_PATH, function ($item) use (&$infos) {
            $infos[] = Rectangle::info($item);
        });

        return $infos;
    }
}
