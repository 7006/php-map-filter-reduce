<?php

namespace Telema\Crocoder\Fp;

use Telema\Crocoder\Ex8 as BaseEx8;

class Ex8 extends BaseEx8
{	
	public function __invoke() {
		return array_reduce(array_merge(...self::ITEMS), $this->frequency(...), []);
	}
}