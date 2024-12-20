<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;
use Telema\Math;
use Telema\Greenroot\Traits\Customers;

class Ex3
{
    use Customers;

    public function __invoke()
    {

        $fn = function ($accum, $c) {
            [$age, $count] = $accum;

            if ($c->isPurchased('Book')) {
                $age += $c->age();
                $count += 1;
            }

            return [$age, $count];
        };

        [$age, $count] = array_reduce($this->readCustomers(), $fn, [0, 0]);

        return Math::avg($age, $count);
    }
}
