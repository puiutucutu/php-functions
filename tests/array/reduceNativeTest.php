<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class reduceNativeTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $reduceable = [1, 2, 3, 4];
        $reducer = function ($sum, $toAdd) {
            return ($sum + 1) * $toAdd;
        };

        $numsAddedByReducing = reduceNative($reduceable, $reducer, 0);

        $this->assertEquals(
            $numsAddedByReducing,
            64
        );
    }
}
