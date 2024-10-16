<?php

namespace Telema\GreenRoot;

class Ex2 {
	
	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	private static function addFullName($title) {
		$customer['full_name'] = $title . $customer['f_name'] . $customer['l_name'];
	}

	public static function solution() {
		$customers = self::readCustomers();

		foreach ($customers as &$customer) {

			//match
			
			if($customer['gender'] === 'M') {
				$title = 'Mr.';
				$customer['title'] = $title;
				$customer['full_name'] = self::addFullName($title);
			}

			if ($customer['gender'] === 'F' && $customer['married'] == true) {
				$title = 'Mrs.';
				$customer['title'] = $title;
				$customer['full_name'] = self::addFullName($title);
			}	
			
			if ($customer['gender'] === 'F' && $customer['married'] == false) {
				$title = 'Miss.';
				$customer['title'] = $title;
				$customer['full_name'] = self::addFullName($title);
			}
		}
		
		return $customers;

		// echo '<pre>';
		// print_r($customers);
		// echo '</pre>';

	}

	public static function fpSolution() {
		
	}
}