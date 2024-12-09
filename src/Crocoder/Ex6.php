<?php

namespace Telema\Crocoder;

class Ex6
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex06.csv';

    protected static function numeronym(string $word)
    {
        $l = strlen($word);

        return $l > 4
            ? $word[0] . ($l - 2) . $word[$l - 1]
            : $word;
    }

    public function __invoke()
    {
        $numeronyms = [];
        $words = $this->readCsv(self::FILE_PATH, fn ($item) => $item['word']);

        foreach ($words as $word) {
            $numeronyms[] = self::numeronym($word);
        }

        return implode(' ', $numeronyms);
    }
}
