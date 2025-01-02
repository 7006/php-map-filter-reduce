<?php

namespace Telema\Uncle;

use Telema\traits\CsvReader;

class Ex1
{   
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/uncle/ex01.csv';

    protected static function color($food)
    {
        $color = match ($food) {
            'apple' => 'yellow',
            'carrot' => 'green',
            'beet' => 'green',
            'lemon' => 'yellow',
            'pear' => 'yellow',
            'potato' => 'green',
            default => 'unknown'
        };
        return $color;
    }

    public function __invoke()
    {   
        return $this->readCsv(self::FILE_PATH, function ($item) {
            $item['color'] = self::color($item['food']);
            return $item;
        });
    }
}
