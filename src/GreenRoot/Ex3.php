<?php

namespace Telema\GreenRoot;

class Ex3 {

	private static function readCustomers() {
		return json_decode(file_get_contents(__DIR__ . '/customers.json'), true);
	}

	public static function solution() {
		$sum = 0;
		$count = 0;

		foreach (self::readCustomers() as $customer) {
			// можно сделать вспомогательную функцию isCustomerPurchasedBook 
			// передавать $customer
			// возвращать bool
			// true -> когда купил книжку
			// false -> когда нет
			if (in_array('Book', $customer['purchased'])) {
				$sum += $customer['age'];
				++$count;
				// можно написать вот так для единоборазия
				// $sum += $customer['age']
				// $count += 1
			}
		}
		return $sum / $count; // если self::readCustomers() вернет пустой список [] то тут будет деление на ноль
	}

	public static function fpSolution() {
                $customersWhoBoughtBook = array_filter(
			self::readCustomers(),
			fn ($customer) => in_array('Book', $customer['purchased'])
		);
		//$count = count($customersWhoBoughtBook);
		$count = array_reduce(
			$customersWhoBoughtBook,
			fn ($count, $age) => ++$count, 0  // переменная $age на самом деле єто покупатель
		);

		// можно сразу идти array_reduce по списку покупателей  $customersWhoBoughtBoo
		// в функции-редукторе писать $age + $customer['age']
		$ages = array_map(
			fn ($customer) => $customer['age'],
			$customersWhoBoughtBook
		);
		//$sum = array_sum($ages);
		$sum = array_reduce(
			$ages,
			fn ($sum, $age) => $sum +=$age, 0
		);

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
