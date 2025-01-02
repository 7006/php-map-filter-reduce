<?php

namespace Telema\Uncle;

use Telema\Date;
use Telema\traits\CsvReader;

class Ex3
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/uncle/ex03.csv';

    protected static function provider()
    {
        return empty($_GET['provider']) ? null : $_GET['provider'];
    }

    protected static function date()
    {
        return empty($_GET['date']) ? null : $_GET['date'];
    }

    protected static function isMatches($item, $provider, $date)
    {
        if ($provider && $date) {
            return $item['provider'] === $provider
                && Date::isGte($item['updated_at'], $date);
        }
        if ($provider) {
            return $item['provider'] === $provider;
        }
        if ($date) {
            return Date::isGte($item['updated_at'], $date);
        }
        return false;
    }

    public function __invoke()
    {
        $provider = self::provider();
        $date = self::date();
        $result = [];

        $this->readCsv(self::FILE_PATH, function ($item) use ($provider, $date, &$result) {
            if (self::isMatches($item, $provider, $date)) {
                $result[] = $item;
            }
        });

        return $result;
    }
}
