<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

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
