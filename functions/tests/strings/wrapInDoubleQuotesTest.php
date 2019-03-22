<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__, 2)
    . DIRECTORY_SEPARATOR
    . "strings"
    . DIRECTORY_SEPARATOR
    . "wrapInDoubleQuotes.php";

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