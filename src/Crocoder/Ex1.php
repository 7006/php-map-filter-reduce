<?php

namespace Telema\Crocoder;

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
        if (!empty($_GET['pow'])) {
            $pow = intval($_GET['pow']) > 0 ? intval($_GET['pow']) : 1;
        } else {
            $pow = 1;
        }

        return $pow;
    }
}
