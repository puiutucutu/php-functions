<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

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
            [1, 2, 3]
        ];

        $expectedOutput = [
            6 => "false",
            8 => [1, 2, 3]
        ];

        $this->assertEquals($expectedOutput, filterFalsey($values));
    }
}
