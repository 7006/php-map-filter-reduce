<?php

namespace Telema\Crocoder;

use Telema\traits\CsvReader;

class Ex6
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex06.csv';

    protected function numeronym(string $word)
    {
        $l = strlen($word);

        return $l > 4
            ? $word[0] . ($l - 2) . $word[$l - 1]
            : $word;
    }

    public function __invoke()
    {
        $numeronyms = $this->readCsv(self::FILE_PATH, fn ($item) => $this->numeronym($item['word']));

        return implode(' ', $numeronyms);
    }
}
