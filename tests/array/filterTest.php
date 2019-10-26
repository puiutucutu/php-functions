<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class filterTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $xs = [1, 2, 3, 4, 5, 6];
        $predicate = function ($value, $key) {
            return $value & 1; // returns only odd values
        };

        $this->assertEquals(
            filter($predicate, $xs),
            ["0" => 1, "2" => 3, "4" => 5]
        );
    }
}
