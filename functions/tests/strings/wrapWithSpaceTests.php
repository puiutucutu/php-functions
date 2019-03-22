<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__, 2)
    . DIRECTORY_SEPARATOR
    . "strings"
    . DIRECTORY_SEPARATOR
    . "wrapWithSpaces.php";

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