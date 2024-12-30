<?php

namespace Telema\Svekis;
use Telema\traits\CsvReader;

class Ex7
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/svekis/ex07.csv';

    protected static function initials(string $name)
    {
        [$firstName, $lastName] = explode(' ', $name, 2);
        return $firstName[0] . $lastName[0];
    }

    public function __invoke()
    {
        $initials = [];
        $this->readCsv(self::FILE_PATH, function ($item) use (&$initials) {
            $initials[] = self::initials($item['name']);
        });

        return $initials;
    }
}
