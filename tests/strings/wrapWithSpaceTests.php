<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class wrapWithSpaceTests extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $this->assertEquals(
            wrapWithSpace("Hello"),
            " Hello "
        );
    }

    public function testReturnsEmptyStringWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(
            wrapWithSpace(""),
            ""
        );
    }
}
