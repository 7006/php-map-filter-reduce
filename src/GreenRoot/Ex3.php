<?php

namespace Telema\GreenRoot;

class Ex3 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	private static function isCustomerPurchasedBook($customer) {
		return in_array('Book', $customer['purchased']);
	}

	private static function isZero($count) {
		if ($count === 0) {
			echo 'Division by zero';
		}	
	}

	public static function solution() {
		$sum = 0;
		$count = 0;

		foreach (self::readCustomers() as $customer) {
			if (self::isCustomerPurchasedBook($customer)) {
				$sum += $customer['age'];
				$count +=1;
			}
		}
		self::isZero($count);
		return intdiv($sum, $count);
	}


	public static function fpSolution() {
		$customersWhoBoughtBook = array_filter(
			self::readCustomers(),
			fn ($customer) => in_array('Book', $customer['purchased'])
		);

		$count = array_reduce(
			$customersWhoBoughtBook,
			fn ($count, $customer) => $count + 1,
			0
		);

		$sum = array_reduce(
			$customersWhoBoughtBook,
			fn ($age, $customer) => $age + $customer['age'],
			0
		);

		self::isZero($count);
		return $sum / $count;
	}

	// еще один способ решения
	// array_reduce и составной аккумулятор
	// 
	// 1
	// аккумулятор будет не числом
	// а ассоц массивов с двумя ключами age и count
	// 
	// 2
	// начальное значение аккумулятора ['age' => 0, 'count' => 0]
	//
	// 3
	// функция-редуктор принимает 2 аргумента
	// 1й - аккумулятор - ассоц массив с ключами age и count
	// 2й - текущий покупатель
	//
	// 4
	// если покупатель купил книжку то увеличиваем значения по ключам age и count
	// и возвращаем новое значение аккумулятора из функции-редуктора
	// 
	// если покупатель не купил книжку то возвращаем аккумулятор как есть
	//
	// 5
	// пример
	// 
	// customer                 | купил Book ? | age | count | accum
	// ------------------------ | ------------ | ----| ----- | -----
	// {                             да           32     1      ['age' => 32, 'count' => 1]
	//    "id":"001",
	//    "f_name":"Abby",
	//    "l_name":"Thomas",
	//    "gender":"M",
	//    "married":true,
	//    "age":32,
	//    "expense":500,
	//    "purchased":[
	//       "Shampoo",
	//       "Toys",
	//       "Book"
	//    ]
	// }
	//
	//
	// {                            нет                          ['age' => 32, 'count' => 1] 
	//       "id":"002",
	//       "f_name":"Jerry",
	//       "l_name":"Tom",
	//       "gender":"M",
	//       "married":true,
	//       "age":64,
	//       "expense":100,
	//       "purchased":[
	//          "Stick",
	//          "Blade"
	//       ]
	//    }
	//
	//
	// {                             да          22        1     ['age' => 54, 'count' => 2] 
	//       "id":"003",
	//       "f_name":"Dianna",
	//       "l_name":"Cherry",
	//       "gender":"F",
	//       "married":true,
	//       "age":22,
	//       "expense":1500,
	//       "purchased":[
	//          "Lipstik",
	//          "Nail Polish",
	//          "Bag",
	//          "Book"
	//       ]
	//    }
}
