<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class collapseToColonDelimitedStringTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $this->assertEquals(
            collapseToColonDelimitedString(["one", "two", "three"]),
            "one;two;three"
        );
    }

    public function testReturnsEmptyWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(
            collapseToColonDelimitedString([]),
            ""
        );
    }
}
