<?php

namespace Telema\GreenRoot;

class Ex7 {
	
	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	public static function solution() {
		
	}

	public static function fpSolution() {
		
	}
}