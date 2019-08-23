<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class wrapInDoubleQuotesTest extends TestCase
{
    public function testReturnsExpectedValueWhenSingleSpace() : void
    {
        $this->assertEquals(
            wrapInDoubleQuotes("Hello"),
            "\"Hello\""
        );
    }

    public function testReturnsEmptyStringWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(
            wrapInDoubleQuotes(""),
            ""
        );
    }
}
