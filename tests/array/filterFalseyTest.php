<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "src/array/filterFalsey.php";

final class filterFalseyValuesTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $values = [
            0,
            0.0,
            "0",
            "",
            null,
            false,
            "false",
            [],
        ];

        $expectedOutput = [
            6 => "false"
        ];

        $this->assertEquals($expectedOutput, filterFalsey($values));
    }
}