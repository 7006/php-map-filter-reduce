<?php

namespace Telema\Crocoder;

use Telema\Math;
use Telema\traits\CsvReader;

class Ex10
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/crocoder/ex10.csv';
    public const HIGH_PRICE = 50;

    protected function averagePrice($products)
    {
        $sum = array_sum(array_column($products, 'price'));
        $count = count($products);
        return Math::avg($sum, $count);
    }

    public function __invoke()
    {
        $categories = [];
        $highPricedCategories = [];

        $products = $this->readCsv(self::FILE_PATH, fn ($item) => $item);

        foreach ($products as $product) {
            $categories[$product['category']][] = $product;
        }

        foreach ($categories as $categoryName => $products) {
            $avgPrice = $this->averagePrice($products);

            if ($avgPrice > self::HIGH_PRICE) {
                $highPricedCategories[] = [
                    'category' => $categoryName,
                    'average' => $avgPrice
                ];
            }
        }
        return $highPricedCategories;
    }
}
