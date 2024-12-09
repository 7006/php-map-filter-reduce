<?php

namespace Telema\Crocoder;

class Ex4
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex04.csv';

    public function __invoke()
    {
        $initials = $this->readCsv(self::FILE_PATH, fn ($item) => $item['name'][0]);

        return implode('', $initials);
    }
}
