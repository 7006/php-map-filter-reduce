<?php

namespace Telema\Crocoder\Fp;

use Telema\Math;
use Telema\Crocoder\Ex11 as BaseEx11;

class Ex11 extends BaseEx11
{
	private function groupByCategory()
	{
		$fn = function ($departmens, $employee)
		{	
			$departmens[$employee['department']][] = $employee;
			return $departmens;
		};

		return array_reduce(self::EMPLOYEES, $fn, []);
	}

	private function filterHighSalaryDepartmens($departmens)
	{
		$fn = function ($accum, $department)
		{
			$avgSalary = $this->averageSalary($department);

			if ($avgSalary > self::HIGH_SALARY) {
				$accum[] = [
					'department' => $department[0]['department'],
					'average' => $this->averageSalary($department)
				];
			}
			return $accum;
		};

		return array_reduce($departmens, $fn, []);
	}

	public function __invoke()
	{	
		$departmens = $this->groupByCategory();
		return $this->filterHighSalaryDepartmens($departmens);
	}
}
