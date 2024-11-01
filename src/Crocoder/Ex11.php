<?php

namespace Telema\Crocoder;

use Telema\Math;

class Ex11
{
    public const EMPLOYEES = [
        [
            'name' => 'Jhon',
            'salary' => 50000,
            'department' => 'IT'
        ],
        [
            'name' => 'Jane',
            'salary' => 60000,
            'department' => 'HR'
        ],
        [
            'name' => 'Bob',
            'salary' => 55000,
            'department' => 'IT'
        ],
        [
            'name' => 'Sophie',
            'salary' => 75000,
            'department' => 'HR'
        ],
        [
            'name' => 'Mike',
            'salary' => 65000,
            'department' => 'IT'
        ],
        [
            'name' => 'Emily',
            'salary' => 80000,
            'department' => 'HR'
        ],
        [
            'name' => 'David',
            'salary' => 70000,
            'department' => 'IT'
        ]
    ];

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

        foreach (self::EMPLOYEES as $employee) {
            $departmens[$employee['department']][] = $employee;
        }

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
