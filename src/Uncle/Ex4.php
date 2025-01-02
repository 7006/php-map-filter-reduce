<?php

namespace Telema\Uncle;
use Telema\traits\CsvReader;

class Ex4
{
    use CsvReader;

    public const FILE_PATH_PROVIDERS = __DIR__ . '/../../data/uncle/ex04.csv';
    public const FILE_PATH_PROVIDER_RATINGS = __DIR__ . '/../../data/uncle/ex041.csv'; 

    protected static function rating()
    {
        return empty($_GET['rating']) ? null : $_GET['rating'];
    }

    public function __invoke()
    {
        $result = [];

        $pp = $this->readCsv(self::FILE_PATH_PROVIDERS, fn ($item) => $item);
        $ppp = $this->readCsv(self::FILE_PATH_PROVIDER_RATINGS, fn ($item) => $item);
        
        foreach ($pp as $p) {
            foreach ($ppp as $pr) {
                if ($p['name'] === $pr['name'] && $pr['rating'] >= self::rating()) {
                    $result[] = $p;
                }
            }
        }
        
        return $result;
    }
}
