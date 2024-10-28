<?php

namespace Telema\Uncle\Fp;

use Telema\Uncle\Ex4 as BaseEx4;

class Ex4 extends BaseEx4
{
    public function __invoke()
    {
        $providerRatings = array_filter(self::PROVIDER_RATINGS, fn ($pr) => $pr['rating'] >= self::rating());
        $providerNames = array_map(fn ($pr) => $pr['name'], $providerRatings);
        $providers = array_filter(self::PROVIDERS, fn ($p) => in_array($p['name'], $providerNames));

        return $providers;
    }
}
