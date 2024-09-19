<?php

namespace Telema;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class Ex1Test extends TestCase {
    #[Test]
    public function it_paint_fruit_yellow() {
        $bucket = ['apple', 'potato'];
        [[, $appleColor], [, $potatoColor]] = Ex1::solution($bucket);

        $this->assertEquals($appleColor, 'yellow');
        $this->assertNotEquals($potatoColor, 'yellow');
    }

    #[Test]
    public function it_paint_vegetable_green() {
        $bucket = ['apple', 'potato'];
        [[, $appleColor], [, $potatoColor]] = Ex1::solution($bucket);

        $this->assertNotEquals($appleColor, 'green');
        $this->assertEquals($potatoColor, 'green');
    }
}
