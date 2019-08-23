<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class padLeftWithSpaceTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $this->assertEquals(
            padLeftWithSpace("Hello"),
            " Hello"
        );
    }

    public function testReturnsPaddedStringWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(
            padLeftWithSpace(""),
            " "
        );
    }
}
