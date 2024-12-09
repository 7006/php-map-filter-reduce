<?php

namespace Telema\Crocoder;

class Ex4
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex04.csv';

    public function __invoke()
    {
        $names = $this->readCsv(self::FILE_PATH, fn ($item) => $item['name']);

        $initials = [];
        foreach ($names as $name) {
            $initial = $name[0];
            $initials[] = $initial;
        }

        return implode('', $initials);
    }
}
