<?php

namespace Telema\GreenRoot;

class Ex2 {
	
	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}


	//$names[] = $student['name'];


	public static function solution() {
		$customers = self::readCustomers();

		foreach ($customers as &$customer) {
			
			if($customer['gender'] === 'M') {
				$customer['title'] = 'Mr.';
				$customer['full_name'] = $customers['title'] . $customer['f_name'] . $customer['l_name'];
			}

			if ($customer['gender'] === 'F' && $customer['married'] == true) {
				$customer['title'] = 'Mrs.';
				$customer['full_name'] = $customers['title'] . $customer['f_name'] . $customer['l_name'];
			}	
			
			if ($customer['gender'] === 'F' && $customer['married'] == false) {
				$customer['title'] = 'Miss.';
				$customer['full_name'] = $customers['title'] . $customer['f_name'] . $customer['l_name'];
			}
		}
		
		return $customers;

		// echo '<pre>';
		// print_r($customers);
		// echo '</pre>';

	}

	public static function fpSolution() {
		return array_filter(self::readCustomers(), fn ($customer) => $customer['age'] > 60);
	}
}