<?php

namespace Telema\Svekis;

class Ex9
{
    public const ITEMS = ['Apple', 'Banana', 'Cherry', 'Ananas'];

    public function __invoke()
    {
        $html = '<ul>' . "\n";
        foreach (self::ITEMS as $fruit) {
            $html .= "\t" . '<li>' . $fruit . '</li>' . "\n";
        }
        $html .= '</ul>' . "\n";

        return $html;
    }
}
