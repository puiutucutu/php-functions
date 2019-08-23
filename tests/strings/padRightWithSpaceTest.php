<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class padRightWithSpaceTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $this->assertEquals(
            padRightWithSpace("Hello"),
            "Hello "
        );
    }

    public function testReturnsPaddedStringWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(
            padRightWithSpace(""),
            " "
        );
    }
}
