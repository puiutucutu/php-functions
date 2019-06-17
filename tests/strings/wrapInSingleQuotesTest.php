<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__))
    . DIRECTORY_SEPARATOR
    . "src"
    . DIRECTORY_SEPARATOR
    . "strings"
    . DIRECTORY_SEPARATOR
    . "wrapInSingleQuotes.php";

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