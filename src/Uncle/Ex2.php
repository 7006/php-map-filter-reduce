<?php

namespace Telema\Uncle;

const ITEMS = [
    ['status' => 'success', 'id' => 99],
    ['status' => 'success', 'id' => 53],
    ['status' => 'error',   'id' => 17],
    ['status' => 'success', 'id' => 43],
    ['status' => 'error',   'id' => 47],
    ['status' => 'error',   'id' => 55],
    ['status' => 'error',   'id' => 98],
    ['status' => 'success', 'id' => 3]
];

class Ex2 {

	public static function solution(array $items = ITEMS) {
		$success = [];
		$error = [];
		foreach ($items as $item) {
			if ($item['status'] === 'success') {
				$success[] = $item['id'];
			}
			if ($item['status'] === 'error') {
				$error[] = $item['id'];
			}
		}
		return ['success' => $success, 'error' => $error];
	}

	public static function fpSolution(array $items = ITEMS) {

	}
}