<?php

namespace Telema;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

// https://www.geeksforgeeks.org/phpunit-assertequals-function/
class Ex1Test extends TestCase {
    #[Test]
    public function it_colors_fruit_yellow() {
        // Given
        $foods = ['food' => 'apple'];

        // When
        [$apple] = Ex1::solution($foods);

        // Then
        $this->assertEquals('yellow', $apple['color']);
    }

    #[Test]
    public function it_colors_vegetable_green() {
        // Given
        $foods = ['food' => 'potato'];

        // When
        [$potato] = Ex1::solution($foods);

        // Then
        $this->assertEquals('green', $potato['color']);
    }
}
