<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class createBoundPlaceholdersTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $this->assertEquals(
            createBoundPlaceholders(["a","b","c"]),
            "(?),(?),(?)"
        );
    }
}
