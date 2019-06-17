<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__))
    . DIRECTORY_SEPARATOR
    . "src"
    . DIRECTORY_SEPARATOR
    . "strings"
    . DIRECTORY_SEPARATOR
    . "padRightWithSpace.php";

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