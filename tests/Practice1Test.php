<?php

namespace Frob\Mfr\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Frob\Mfr\Practice1;

class Practice1Test extends TestCase {
    #[Test]
    public function it_paint_fruit_yellow() {
        $bucket = ['apple', 'potato'];
        [[$apple, $appleColor], [$potato, $potatoColor]] = Practice1::solution($bucket);

        $this->assertEquals($appleColor, 'yellow');
        $this->assertNotEquals($potatoColor, 'yellow');
    }

    #[Test]
    public function it_paint_vegetable_green() {
        $bucket = ['apple', 'potato'];
        [[$apple, $appleColor], [$potato, $potatoColor]] = Practice1::solution($bucket);

        $this->assertNotEquals($appleColor, 'green');
        $this->assertEquals($potatoColor, 'green');
    }
}
