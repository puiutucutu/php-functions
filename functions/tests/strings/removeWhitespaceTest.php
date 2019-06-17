<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__))
    . DIRECTORY_SEPARATOR
    . "strings"
    . DIRECTORY_SEPARATOR
    . "removeWhitespace.php";

final class removeWhitespaceTest extends TestCase
{
    public function testReturnsExpectedValueWhenSingleSpace() : void
    {
        $this->assertEquals(
            removeWhitespace("Hello world"),
            "Helloworld"
        );
    }

    public function testReturnsExpectedValueWhenDoubleSpace() : void
    {
        $this->assertEquals(
            removeWhitespace("Hello  world"),
            "Helloworld"
        );
    }
//
    public function testReturnsExpectedValueWhenTripleSpace() : void
    {
        $this->assertEquals(
            removeWhitespace("Hello   world"),
            "Helloworld"
        );
    }

    public function testReturnsExpectedValueWhenNewLineCharacter() : void
    {
        $input = <<<TEXT
hello
world
TEXT;
        $expected = <<<TEXT
helloworld
TEXT;

        $this->assertEquals(
            removeWhitespace($input),
            $expected
        );
    }

    public function testReturnsEmptyStringWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(removeWhitespace(""), "");
    }
}