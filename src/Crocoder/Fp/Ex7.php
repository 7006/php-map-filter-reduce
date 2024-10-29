<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex7 as BaseEx7;

class Ex7 extends BaseEx7
{
	public function __invoke() {
		return  array_reduce(range(1, self::NUMBER, 1), fn ($f, $n) => $f * $n, 1);
	}
}