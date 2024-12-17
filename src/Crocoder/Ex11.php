<?php

namespace Telema\Crocoder;

use Telema\Math;
use Telema\traits\CsvReader;

class Ex11
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex11.csv';
    public const HIGH_SALARY = 65000;

    protected function averageSalary($department)
    {
        $sum = array_sum(array_column($department, 'salary'));
        $count = count($department);
        return Math::avg($sum, $count);
    }

    public function __invoke()
    {
        $departmens = [];
        $highSalaryDepartmens = [];

        $this->readCsv(self::FILE_PATH, function ($item) use (&$departmens) {
            $departmens[$item['department']][] = $item;
        });

        foreach ($departmens as $departmentName => $department) {
            $avgSalary = $this->averageSalary($department);

            if ($avgSalary > self::HIGH_SALARY) {
                $highSalaryDepartmens[] = [
                    'department' => $departmentName,
                    'average' => $this->averageSalary($department)
                ];
            }
        }

        return $highSalaryDepartmens;
    }
}
