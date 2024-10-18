<?php

class Ex6 {
	
	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	public static function solution() {
	}

	public static function fpSolution() {
		
	}
}