<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class wrapInSingleQuotesTest extends TestCase
{
    public function testReturnsExpectedValueWhenSingleSpace() : void
    {
        $this->assertEquals(
            wrapInSingleQuotes("Hello"),
            "'Hello'"
        );
    }

    public function testReturnsEmptyStringWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(
            wrapInSingleQuotes(""),
            ""
        );
    }
}
