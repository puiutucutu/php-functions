<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class collapseToSingleSpaceTest extends TestCase
{
    public function testReturnsExpectedValueWhenSingleSpace() : void
    {
        $this->assertEquals(
            collapseToSingleSpace("Hello world"),
            "Hello world"
        );
    }

    public function testReturnsExpectedValueWhenDoubleSpace() : void
    {
        $this->assertEquals(
            collapseToSingleSpace("Hello  world"),
            "Hello world"
        );
    }

    public function testReturnsExpectedValueWhenTripleSpace() : void
    {
        $this->assertEquals(
            collapseToSingleSpace("Hello   world"),
            "Hello world"
        );
    }

    public function testReturnsExpectedValueWhenNewLineCharacter() : void
    {
        $input = <<<TEXT
hello
world
TEXT;
        $expected = <<<TEXT
hello world
TEXT;

        $this->assertEquals(
            collapseToSingleSpace($input),
            $expected
        );
    }

    public function testReturnsEmptyStringWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(collapseToSingleSpace(""), "");
    }
}
