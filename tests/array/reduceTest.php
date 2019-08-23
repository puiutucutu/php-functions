<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class reduceTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $xs = [1, 2, 3, 4];
        $reducer = function ($sum, $toAdd) {
            return ($sum + 1) * $toAdd;
        };

        $this->assertEquals(
            reduce($reducer, 0, $xs),
            64
        );
    }
}
