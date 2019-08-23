<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class isBetweenTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $this->assertEquals(
            isBetween(1, 3, 2),
            true
        );
    }
}
