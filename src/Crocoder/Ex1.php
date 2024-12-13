<?php

namespace Telema\Crocoder;

use Telema\traits\CsvReader;

class Ex1
{
    use CsvReader;

    private const FILE_PATH = __DIR__ . '/../../data/crocoder/ex01.csv';

    public function __invoke()
    {
        $pow = $this->getPowParam();
        return $this->readCsv(self::FILE_PATH, fn ($item) => $item['number'] ** $pow);
    }

    public function getPowParam()
    {
        if (empty($_GET['pow'])) {
            return 1;
        }
        if (intval($_GET['pow']) === 0) {
            return 1;
        }

        return intval($_GET['pow']);
    }
}
