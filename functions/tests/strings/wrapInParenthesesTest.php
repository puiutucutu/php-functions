<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__, 2)
    . DIRECTORY_SEPARATOR
    . "strings"
    . DIRECTORY_SEPARATOR
    . "wrapInParentheses.php";

final class wrapInParenthesesTest extends TestCase
{
    public function testReturnsExpectedValueWhenSingleSpace() : void
    {
        $this->assertEquals(
            wrapInParentheses("Hello"),
            "(Hello)"
        );
    }

    public function testReturnsEmptyStringWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(
            wrapInParentheses(""),
            "()"
        );
    }
}