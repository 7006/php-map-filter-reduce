<?php

namespace Telema\Svekis;

class Rectangle
{
    private $width;
    private $height;

    public static function createFromArray(array $rectangle)
    {
      	['width' => $width, 'height' => $height] = $rectangle;
        return new Rectangle($width, $height);
    }

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }

    public function perimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    public function longOrShort()
    {
        if ($this->width > 2 * $this->height) {
            return 'long';
        } else {
            return 'short';
        }
    }

    public function favorite()
    {
        return match (true) {
        	$this->width === 1 && $this->height === 1 => 'yes',
        	$this->width === 3 && $this->height === 3 => 'yes',
        	$this->width === 10 && $this->height === 2 => 'i dont know',
        	default => 'no'
        };
	}
}